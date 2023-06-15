<?php

namespace App\Repository;

use App\Entity\VideosDaysOpenDoors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VideosDaysOpenDoors>
 *
 * @method VideosDaysOpenDoors|null find($id, $lockMode = null, $lockVersion = null)
 * @method VideosDaysOpenDoors|null findOneBy(array $criteria, array $orderBy = null)
 * @method VideosDaysOpenDoors[]    findAll()
 * @method VideosDaysOpenDoors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideosDaysOpenDoorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VideosDaysOpenDoors::class);
    }

    public function save(VideosDaysOpenDoors $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(VideosDaysOpenDoors $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return VideosDaysOpenDoors[] Returns an array of VideosDaysOpenDoors objects
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

//    public function findOneBySomeField($value): ?VideosDaysOpenDoors
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
