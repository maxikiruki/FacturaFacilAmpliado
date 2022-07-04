<?php

namespace App\Repository;

use App\Entity\ProductLine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ProductLine|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductLine|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductLine[]    findAll()
 * @method ProductLine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductLineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductLine::class);
    }

    // /**
    //  * @return ProductLine[] Returns an array of ProductLine objects
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
    public function findOneBySomeField($value): ?ProductLine
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findByInvoice($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.invoice = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByBudget($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.budget = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
}
