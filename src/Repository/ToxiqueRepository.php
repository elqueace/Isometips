<?php

namespace App\Repository;

use App\Entity\Toxique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Toxique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Toxique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Toxique[]    findAll()
 * @method Toxique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ToxiqueRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Toxique::class);
    }

    // /**
    //  * @return Toxique[] Returns an array of Toxique objects
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
    public function findOneBySomeField($value): ?Toxique
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
