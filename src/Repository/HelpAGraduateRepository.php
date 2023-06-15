<?php

namespace App\Repository;

use App\Entity\HelpAGraduate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HelpAGraduate>
 *
 * @method HelpAGraduate|null find($id, $lockMode = null, $lockVersion = null)
 * @method HelpAGraduate|null findOneBy(array $criteria, array $orderBy = null)
 * @method HelpAGraduate[]    findAll()
 * @method HelpAGraduate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HelpAGraduateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HelpAGraduate::class);
    }

    public function save(HelpAGraduate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(HelpAGraduate $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return HelpAGraduate[] Returns an array of HelpAGraduate objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HelpAGraduate
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
