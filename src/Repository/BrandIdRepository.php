<?php

namespace App\Repository;

use App\Entity\BrandId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BrandId|null find($id, $lockMode = null, $lockVersion = null)
 * @method BrandId|null findOneBy(array $criteria, array $orderBy = null)
 * @method BrandId[]    findAll()
 * @method BrandId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BrandIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BrandId::class);
    }

    // /**
    //  * @return BrandId[] Returns an array of BrandId objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BrandId
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
