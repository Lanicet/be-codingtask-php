<?php

namespace App\Repository;

use App\Entity\Objekte;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Objekte>
 *
 * @method Objekte|null find($id, $lockMode = null, $lockVersion = null)
 * @method Objekte|null findOneBy(array $criteria, array $orderBy = null)
 * @method Objekte[]    findAll()
 * @method Objekte[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjekteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Objekte::class);
    }

    public function add(Objekte $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Objekte $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function query(){
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT o.id, o.type, 
            CASE WHEN o.promotionPrice>0 
            then o.promotionPrice else o.price END 
            price, o.promotionPrice 
            FROM App\Entity\Objekte o
            ORDER BY o.promotionPrice DESC, o.type ASC, o.price  ASC'
        );

        return $query->getResult();
    }
//    /**
//     * @return Objekte[] Returns an array of Objekte objects
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

//    public function findOneBySomeField($value): ?Objekte
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
