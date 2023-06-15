<?php

namespace App\Repository;

use App\Entity\VacannciesForAdmission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VacannciesForAdmission>
 *
 * @method VacannciesForAdmission|null find($id, $lockMode = null, $lockVersion = null)
 * @method VacannciesForAdmission|null findOneBy(array $criteria, array $orderBy = null)
 * @method VacannciesForAdmission[]    findAll()
 * @method VacannciesForAdmission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VacannciesForAdmissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VacannciesForAdmission::class);
    }

    public function save(VacannciesForAdmission $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(VacannciesForAdmission $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return VacannciesForAdmission[] Returns an array of VacannciesForAdmission objects
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

//    public function findOneBySomeField($value): ?VacannciesForAdmission
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
