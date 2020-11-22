<?php

namespace App\Repository;

use App\Entity\Pan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pan|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pan|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pan[]    findAll()
 * @method Pan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pan::class);
    }

    // /**
    //  * @return Pan[] Returns an array of Pan objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pan
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
