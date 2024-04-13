<?php

namespace App\Repository;

use App\Entity\Member;
use App\Entity\Placard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Placard>
 *
 * @method Placard|null find($id, $lockMode = null, $lockVersion = null)
 * @method Placard|null findOneBy(array $criteria, array $orderBy = null)
 * @method Placard[]    findAll()
 * @method Placard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlacardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Placard::class);
    }

//    /**
//     * @return Placard[] Returns an array of Placard objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Placard
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    
    /**
     * @return Placard[] Returns an array of placard objects for a member
     */
    /*
    public function findMemberPlacards(Member $member): array
    {
        return $this->createQueryBuilder('c')
        ->leftJoin('c.placard', 'p')
        ->andWhere('p.member = :member')
        ->setParameter('member', $member)
        ->getQuery()
        ->getResult()
        ;
    }*/
    
}
