<?php

namespace App\Repository;

use App\Entity\TetTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TetTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method TetTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method TetTest[]    findAll()
 * @method TetTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TetTestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TetTest::class);
    }

    // /**
    //  * @return TetTest[] Returns an array of TetTest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */


    public function findOneByIpField($value): ?TetTest
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.ip = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}
