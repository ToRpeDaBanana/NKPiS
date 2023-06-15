<?php

namespace App\Repository;

use App\Entity\OraganizationMedicalLink;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OraganizationMedicalLink>
 *
 * @method OraganizationMedicalLink|null find($id, $lockMode = null, $lockVersion = null)
 * @method OraganizationMedicalLink|null findOneBy(array $criteria, array $orderBy = null)
 * @method OraganizationMedicalLink[]    findAll()
 * @method OraganizationMedicalLink[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OraganizationMedicalLinkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OraganizationMedicalLink::class);
    }

    public function save(OraganizationMedicalLink $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OraganizationMedicalLink $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OraganizationMedicalLink[] Returns an array of OraganizationMedicalLink objects
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

//    public function findOneBySomeField($value): ?OraganizationMedicalLink
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
