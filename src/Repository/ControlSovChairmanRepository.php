<?php

namespace App\Repository;

use App\Entity\ControlSovChairman;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControlSovChairman>
 *
 * @method ControlSovChairman|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControlSovChairman|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControlSovChairman[]    findAll()
 * @method ControlSovChairman[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControlSovChairmanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControlSovChairman::class);
    }

    public function save(ControlSovChairman $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControlSovChairman $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControlSovChairman[] Returns an array of ControlSovChairman objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ControlSovChairman
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
