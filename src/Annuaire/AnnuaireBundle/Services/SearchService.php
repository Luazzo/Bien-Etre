<?php
namespace Annuaire\AnnuaireBundle\Services;
use Doctrine\ORM\EntityManager;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SearchService
 *
 * @author Irina
 */
class SearchService {
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $entityManager; 
    
    public function __construct(EntityManager $em){
        $this->entityManager = $em;
    }
    
    public function findPrestataire($prest,$loc, $cat){
       /*if($prest && $loc && $cat){
           // appelle fonction qui retrouve avec tous les paramètres
           $parCat = $this->entityManager->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findPrestLocCat($prest,$loc,$cat);
       }else if($prest && $loc){
           // pas de catégorie
           $parCat = $this->entityManager->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findPrestLoc($prest,$loc);
       }else if($loc && $cat){
           // pas de prestataire
           $parCat = $this->entityManager->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findLocCat($loc,$cat);
       }else if($prest && $cat){
           //^pas de localite
           $parCat = $this->entityManager->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findPrestCat($prest,$cat);
       }else if($prest){
           $parCat = $this->entityManager->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findPrest($prest);
       }else if($cat){
           $parCat = $this->entityManager->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findCat($cat);
       }else{
           $parCat = $this->entityManager->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findLoc($loc);
       }*/

        $parCat = $this->entityManager->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findPrestUni($prest,$loc, $cat);
        return $parCat;       
    }
    
    protected function findByAll($prest,$loc,$cat){
        $repo = $this->entityManager->getRepository("");
    }
    
   
}
