<?php

namespace App\Repository;

use App\Entity\InformRealizeDopEdu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InformRealizeDopEdu>
 *
 * @method InformRealizeDopEdu|null find($id, $lockMode = null, $lockVersion = null)
 * @method InformRealizeDopEdu|null findOneBy(array $criteria, array $orderBy = null)
 * @method InformRealizeDopEdu[]    findAll()
 * @method InformRealizeDopEdu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformRealizeDopEduRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InformRealizeDopEdu::class);
    }

    public function save(InformRealizeDopEdu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(InformRealizeDopEdu $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return InformRealizeDopEdu[] Returns an array of InformRealizeDopEdu objects
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

//    public function findOneBySomeField($value): ?InformRealizeDopEdu
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
