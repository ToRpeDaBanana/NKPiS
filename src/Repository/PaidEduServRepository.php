<?php

namespace App\Repository;

use App\Entity\PaidEduServ;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PaidEduServ>
 *
 * @method PaidEduServ|null find($id, $lockMode = null, $lockVersion = null)
 * @method PaidEduServ|null findOneBy(array $criteria, array $orderBy = null)
 * @method PaidEduServ[]    findAll()
 * @method PaidEduServ[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaidEduServRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PaidEduServ::class);
    }

    public function save(PaidEduServ $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PaidEduServ $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PaidEduServ[] Returns an array of PaidEduServ objects
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

//    public function findOneBySomeField($value): ?PaidEduServ
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
