<?php

namespace App\Repository;

use App\Entity\TestUpload;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TestUpload|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestUpload|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestUpload[]    findAll()
 * @method TestUpload[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestUploadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestUpload::class);
    }

    // /**
    //  * @return TestUpload[] Returns an array of TestUpload objects
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

    /*
    public function findOneBySomeField($value): ?TestUpload
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
