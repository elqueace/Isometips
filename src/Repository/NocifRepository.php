<?php

namespace App\Repository;

use App\Entity\Nocif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Nocif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nocif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nocif[]    findAll()
 * @method Nocif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NocifRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Nocif::class);
    }

    // /**
    //  * @return Nocif[] Returns an array of Nocif objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nocif
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
