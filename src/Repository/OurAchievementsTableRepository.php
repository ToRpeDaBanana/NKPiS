<?php

namespace App\Repository;

use App\Entity\OurAchievementsTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OurAchievementsTable>
 *
 * @method OurAchievementsTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method OurAchievementsTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method OurAchievementsTable[]    findAll()
 * @method OurAchievementsTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OurAchievementsTableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OurAchievementsTable::class);
    }

    public function save(OurAchievementsTable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OurAchievementsTable $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OurAchievementsTable[] Returns an array of OurAchievementsTable objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OurAchievementsTable
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
