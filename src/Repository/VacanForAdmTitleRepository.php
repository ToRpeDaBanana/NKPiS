<?php

namespace App\Repository;

use App\Entity\VacanForAdmTitle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VacanForAdmTitle>
 *
 * @method VacanForAdmTitle|null find($id, $lockMode = null, $lockVersion = null)
 * @method VacanForAdmTitle|null findOneBy(array $criteria, array $orderBy = null)
 * @method VacanForAdmTitle[]    findAll()
 * @method VacanForAdmTitle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VacanForAdmTitleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VacanForAdmTitle::class);
    }

    public function save(VacanForAdmTitle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(VacanForAdmTitle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return VacanForAdmTitle[] Returns an array of VacanForAdmTitle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VacanForAdmTitle
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
