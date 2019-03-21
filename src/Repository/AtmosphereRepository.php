<?php

namespace App\Repository;

use App\Entity\Atmosphere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Atmosphere|null find($id, $lockMode = null, $lockVersion = null)
 * @method Atmosphere|null findOneBy(array $criteria, array $orderBy = null)
 * @method Atmosphere[]    findAll()
 * @method Atmosphere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AtmosphereRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Atmosphere::class);
    }

    // /**
    //  * @return Atmosphere[] Returns an array of Atmosphere objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Atmosphere
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
