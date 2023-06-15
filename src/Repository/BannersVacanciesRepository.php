<?php

namespace App\Repository;

use App\Entity\BannersVacancies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BannersVacancies>
 *
 * @method BannersVacancies|null find($id, $lockMode = null, $lockVersion = null)
 * @method BannersVacancies|null findOneBy(array $criteria, array $orderBy = null)
 * @method BannersVacancies[]    findAll()
 * @method BannersVacancies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BannersVacanciesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BannersVacancies::class);
    }

    public function save(BannersVacancies $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BannersVacancies $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BannersVacancies[] Returns an array of BannersVacancies objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BannersVacancies
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
