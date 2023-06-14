<?php

namespace App\Repository;

use App\Entity\ControlSovOther;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControlSovOther>
 *
 * @method ControlSovOther|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControlSovOther|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControlSovOther[]    findAll()
 * @method ControlSovOther[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControlSovOtherRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControlSovOther::class);
    }

    public function save(ControlSovOther $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControlSovOther $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControlSovOther[] Returns an array of ControlSovOther objects
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

//    public function findOneBySomeField($value): ?ControlSovOther
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
