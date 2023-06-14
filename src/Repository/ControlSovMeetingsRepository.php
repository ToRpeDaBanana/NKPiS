<?php

namespace App\Repository;

use App\Entity\ControlSovMeetings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControlSovMeetings>
 *
 * @method ControlSovMeetings|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControlSovMeetings|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControlSovMeetings[]    findAll()
 * @method ControlSovMeetings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControlSovMeetingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControlSovMeetings::class);
    }

    public function save(ControlSovMeetings $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControlSovMeetings $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControlSovMeetings[] Returns an array of ControlSovMeetings objects
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

//    public function findOneBySomeField($value): ?ControlSovMeetings
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
