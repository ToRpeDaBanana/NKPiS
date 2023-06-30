<?php

namespace App\Repository;

use App\Entity\LaboratoriesAndWorkshops;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LaboratoriesAndWorkshops>
 *
 * @method LaboratoriesAndWorkshops|null find($id, $lockMode = null, $lockVersion = null)
 * @method LaboratoriesAndWorkshops|null findOneBy(array $criteria, array $orderBy = null)
 * @method LaboratoriesAndWorkshops[]    findAll()
 * @method LaboratoriesAndWorkshops[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LaboratoriesAndWorkshopsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LaboratoriesAndWorkshops::class);
    }

    public function save(LaboratoriesAndWorkshops $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(LaboratoriesAndWorkshops $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return LaboratoriesAndWorkshops[] Returns an array of LaboratoriesAndWorkshops objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LaboratoriesAndWorkshops
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
