<?php

namespace App\Repository;

use App\Entity\Kot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Kot|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kot|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kot[]    findAll()
 * @method Kot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Kot::class);
    }

    // /**
    //  * @return Kot[] Returns an array of Kot objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Kot
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
