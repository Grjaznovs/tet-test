<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

use App\Entity\TetTest;
use App\Repository\TetTestRepository;
use Doctrine\Persistence\ManagerRegistry;

//Api izsutišana
//https://docs.guzzlephp.org/en/stable/index.html
use GuzzleHttp\Client;
use Carbon\Carbon;

class TetController extends AbstractController {

    #[Route('/', name: 'tet')]
    public function index(ManagerRegistry $doctrine): Response {
        //$ip = $this->getIpAddress();
        //$ip = gethostbyname("www.google.com");
        //$ip = gethostbyname("www.javatpoint.com");
        $ip = '95.68.80.71';
        $userData = $doctrine->getRepository(TetTest::class)->findOneByIpField($ip);

        $cache = new FilesystemAdapter();
        $isIpstackCount = $cache->getItem('ipstac_count');
        $ipstackCount = !$isIpstackCount->isHit() ? 0 : $isIpstackCount->get();

        $startDayDate = Carbon::now('Europe/Riga')->startOfDay();
        $endDayDate = Carbon::now('Europe/Riga')->endOfDay();
        $nowDate = Carbon::now('Europe/Riga');
        $isErrorShow = false;
        if ($userData == null) {
            //limits: 1000 izsaukumi/dienā https://ipstack.com
            if ($nowDate >= $startDayDate && $nowDate <= $endDayDate && $ipstackCount <= 999) {
                if ($isIpstackCount->isHit()) {
                    $cache->deleteItem('ipstac_count');
                }
                $ipstackCount++;
                $secEndDay = $endDayDate->diffInMinutes($nowDate) * 60;
                $cache->save($isIpstackCount->set($ipstackCount, $secEndDay));

                $coordinates = $this->getСoordinates($ip);
                if ($coordinates == 'isNotFound') {
                    $this->addFlash('danger', 'Nav atrasta neviena atrašanās vieta ar šo IP adresi '.$ip);
                    $isErrorShow = true;
                } else if ($coordinates == 'isLimit') {
                    // no https://ipstack.com ir piejams tikai 100
                    $this->addFlash('danger', 'Ir sasniegts jūsu mēneša lietošanas limits. Lūdzu, jauniniet savu abonēšanas plānu.');
                    $isErrorShow = true;
                }

                //saglabam user dati IP...
                if (!$isErrorShow) {
                    $entityManager = $doctrine->getManager();
                    $userData = new TetTest();
                    $userData->setIp($coordinates->ip);
                    $userData->setCoutryCode($coordinates->country_code);
                    $userData->setCountryName($coordinates->country_name);
                    $userData->setRegionName($coordinates->region_name);
                    $userData->setZip($coordinates->zip);
                    $userData->setLatitude($coordinates->latitude);
                    $userData->setLongitude($coordinates->longitude);
                    $userData->setCreatedAt(Carbon::now('Europe/Riga'));
                    $entityManager->persist($userData);
                    $entityManager->flush();
                }
            } else {
                $this->addFlash('danger', 'Pieejamais limits 1000/dienā ir iztērēts');
                $isErrorShow = true;
            }
        }

        return $this->render('tet/index.html.twig', [
            'isErrorShow' => $isErrorShow,
            'userData' => $userData
        ]);
    }

    private function getIpAddress() {
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }

    public function getСoordinates($ip = null) {
        $baseUrl = 'http://api.ipstack.com/';
        $access_key = '9862ce61ac41a93601b363861615426b';
        $ipstack = new Client([
            'base_uri' => $baseUrl,
            //'proxy' => [
                //'https' => '' //proxy serveris
            //],
            'verify' => false, //lai netaisītu SSL pārbaudi
            'curl' => [
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
            ]
        ]);

        $response = $ipstack->get($ip.'/?access_key='.$access_key);
        $data = $response->getBody()->getContents();
        $data = json_decode($data);

        if (isset($data->success)) {
            $data = 'isLimit';
        } else if ($data->latitude == null) {
            $data = 'isNotFound';
        }

        return $data;
    }

    /**
     * @Route("/weather/forecast", name="weather_forecast")
     */
    public function getWeatherForecast($lat = null, $lon = null) {
        $nowDate = Carbon::now('Europe/Riga');
        $cache = new FilesystemAdapter();
        $isOpenweathermap_count = $cache->getItem('openweathermap_count');
        $isOpenweathermap_date = $cache->getItem('openweathermap_date');
        $openweathermap_count = !$isOpenweathermap_count->isHit() ? 0 : $isOpenweathermap_count->get();
        $openweathermap_date = !$isOpenweathermap_date->isHit() ? $nowDate : $isOpenweathermap_date->get();

        $rezult = new Response(json_encode(''));
        //ja cache laiks dzešanai nenostradas daram to manuali
        if ($nowDate->diffInHours($openweathermap_date) != 0 || $nowDate->diffInMinutes($openweathermap_date) != 0) {
            $cache->deleteItem('openweathermap_count');
            $cache->deleteItem('openweathermap_date');

            $openweathermap_count = 0;
            $openweathermap_date = $nowDate;
        }

        //Laika prognoze pieejamais limits 60/min ir iztērēts
        //status 1
        if ($openweathermap_count >= 60) {
            $rezult = new Response(json_encode(1));
        }

        //ja skaits ir mazak vai vienads 59, ienacam iekša
        if ($openweathermap_count <= 59) {
            $openweathermap_count++;
            if ($isOpenweathermap_count->isHit()) {
                $cache->deleteItem('openweathermap_count');
                $cache->deleteItem('openweathermap_date');
            }
            //uz cik sec saglabas cache
            $secEndCacheToWF = 60 - (int)$nowDate->format('s');
            $cache->save($isOpenweathermap_count->set($openweathermap_count, $secEndCacheToWF));
            $cache->save($isOpenweathermap_date->set($nowDate, $secEndCacheToWF));

            $baseUrl = 'https://api.openweathermap.org/data/2.5/';
            $access_key = '26e29aa16ee3a3a8af761f4dd0410824';
            $openweathermap = new Client([
                'base_uri' => $baseUrl,
                //'proxy' => [
                    //'https' => '' //proxy serveris
                //],
                'verify' => false, //lai netaisītu SSL pārbaudi
                'curl' => [
                    CURLOPT_SSL_VERIFYPEER => false,
                    CURLOPT_SSL_VERIFYHOST => false,
                ]
            ]);

            $response = $openweathermap->get('onecall?lat='.$lat.'&lon='.$lon.'&units=metric&lang=la&exclude=hourly,daily&appid='.$access_key);
            $data = $response->getBody()->getContents();
            $data = json_decode($data);
            $weatherForecast = [
                [
                    'title' => 'Temperatūra',
                    'data' => $data->current->temp.' °C'
                ],
                [
                    'title' => 'Apraksts',
                    'data' => $data->current->weather[0]->description
                ],
                [
                    'title' => 'Saullēkts',
                    'data' => Carbon::parse($data->current->sunrise)->format('d.m.Y H:i:s')
                ],
                [
                    'title' => 'Saulriets',
                    'data' => Carbon::parse($data->current->sunset)->format('d.m.Y H:i:s')
                ],
                [
                    'title' => 'Temperatūra. Tas izskaidro cilvēka laika apstākļu uztveri',
                    'data' => $data->current->feels_like.' °C'
                ],
                [
                    'title' => 'Atmosfēras spiediens jūras līmenī, hPa',
                    'data' => $data->current->pressure
                ],
                [
                    'title' => 'Vēja ātrums',
                    'data' => $data->current->wind_speed.' metre/sec'
                ]
            ];
    
            $rezult = new Response(json_encode($weatherForecast));
        }

        return $rezult;
    }
}