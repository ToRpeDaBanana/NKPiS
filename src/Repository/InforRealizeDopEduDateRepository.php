<?php

namespace App\Repository;

use App\Entity\InforRealizeDopEduDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InforRealizeDopEduDate>
 *
 * @method InforRealizeDopEduDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method InforRealizeDopEduDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method InforRealizeDopEduDate[]    findAll()
 * @method InforRealizeDopEduDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InforRealizeDopEduDateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InforRealizeDopEduDate::class);
    }

    public function save(InforRealizeDopEduDate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(InforRealizeDopEduDate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return InforRealizeDopEduDate[] Returns an array of InforRealizeDopEduDate objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InforRealizeDopEduDate
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
