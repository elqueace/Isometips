<?php

namespace App\Repository;

use App\Entity\Ecologie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ecologie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ecologie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ecologie[]    findAll()
 * @method Ecologie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EcologieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ecologie::class);
    }

    // /**
    //  * @return Ecologie[] Returns an array of Ecologie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ecologie
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
