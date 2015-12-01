<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PrestataireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PrestataireRepository extends EntityRepository
{
    public function getDerniers($nmb){
        return $this->createQueryBuilder('p')
                    ->leftJoin('p.codepost_id', 'cp')->addSelect('cp')
                    ->leftJoin('p.localite_id', 'l')->addSelect('l')
                    ->leftJoin('p.commune_id', 'c')->addSelect('c')
                    ->orderBy('p.dateInscr', 'DESC')
                    ->setMaxResults($nmb)
                    ->getQuery()
                    ->getResult() ;
    }
    
    public function getPrestataireProfil($id)
    {
        return $this->createQueryBuilder('p')
                    ->where('p.id = :id')
                    ->leftJoin('p.promos', 'pr')->addSelect('pr')
                    ->leftJoin('p.stages', 'st')->addSelect('st')
                    ->leftJoin('p.categories', 'cat')->addSelect('cat')
                    ->leftJoin('p.images', 'i')->where("i.type = 'logo'")->andWhere("i.user = :id")->addSelect('i')
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getResult() ;
    }
}   
