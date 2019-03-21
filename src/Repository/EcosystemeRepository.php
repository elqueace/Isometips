<?php

namespace App\Repository;

use App\Entity\Ecosysteme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ecosysteme|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ecosysteme|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ecosysteme[]    findAll()
 * @method Ecosysteme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EcosystemeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ecosysteme::class);
    }

    // /**
    //  * @return Ecosysteme[] Returns an array of Ecosysteme objects
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
    public function findOneBySomeField($value): ?Ecosysteme
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
