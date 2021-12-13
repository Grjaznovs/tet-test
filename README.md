 <h2>Instrukcija projekta palaišanai</h2>
Palaižam Windows Terminal un rakstam
<pre>wsl</pre>
Ejam uz sākotnejas mapes sākumu
<pre>cd ~</pre>
Tālāk tiek klonēts projekts no manas repozitorijas
<pre>git clone https://github.com/Grjaznovs/tet-test.git</pre>
Pēc kā pārbaudam direktoriju
<pre>dir</pre>
kā arī ejam uz blakus direktoriju
<pre>cd tet-test</pre>
Tad kompelejam DOCKER
<pre>docker-compose build</pre>
Celam augšā DOCKER
<pre>docker-compose up -d</pre>

Te es atvainojos (nejauši izdzesu mapi), līdz ar to Jums būs jāizveido mape :)
<pre>cd project/tet <br/>mkdir migrations <br/>cd ..<br/>cd .. </pre>
Attiecībā uz palaisto konteineri: jauna procesa palaišana palaisto procesu ietvaros konteinera iekšā
<pre>docker exec -it php8-sf6 bash<br/>cd tet<br/>symfony server:start -d</pre>

Gadījumā, ja nav iespējams saglabāt Jūsu izmaiņas (programmēšanas kodu), būs jāpievieno savs lietotājs
<pre>adduser userName<br/>chown userName:userName -R .</pre>

Nākamais solis - veidojam tabulas datubāzē, izmantojot kontroļu versijas sistēmas
<pre>php bin/console make:migration<br/>php bin/console doctrine:migrations:migrate<br/>exit</pre>

Tālāk pārbaudam kādas sistēmas ir palaistas
<pre>docker ps</pre>
kur mūs interesē "postgres:13-alpine" un tā CONTAINER ID palaistais konteineris, kuru arī ierakstam change_to_CONTAINER_ID vietā
<pre>docker exec -it change_to_CONTAINER_ID bash<br/>piemērām: docker exec -it 890b98fbefa1 bash</pre>

Tālāk ir jāieiet datubāzē
<pre>psql --host=database --username=symfony --dbname=app<br/>pass:ChangeMe</pre>

Datu bāzes izvāds, kur mūs interesē DB app
<pre>\l</pre>
Tabulu izvāds, kur mūs interesē "tet_test", "tet_test_id_seq"
<pre>\d</pre>

Ja minētās darbības bija veiksmīgas, tad palaižam 
<pre>http://localhost:9000/</pre>
