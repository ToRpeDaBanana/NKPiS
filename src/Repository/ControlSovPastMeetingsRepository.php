<?php

namespace App\Repository;

use App\Entity\ControlSovPastMeetings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControlSovPastMeetings>
 *
 * @method ControlSovPastMeetings|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControlSovPastMeetings|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControlSovPastMeetings[]    findAll()
 * @method ControlSovPastMeetings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControlSovPastMeetingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControlSovPastMeetings::class);
    }

    public function save(ControlSovPastMeetings $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ControlSovPastMeetings $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ControlSovPastMeetings[] Returns an array of ControlSovPastMeetings objects
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

//    public function findOneBySomeField($value): ?ControlSovPastMeetings
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
