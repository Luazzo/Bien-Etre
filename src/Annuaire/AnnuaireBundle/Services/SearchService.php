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
       if($prest && $loc && $cat){
           // appelle fonction qui retrouve avec tous les paramètres
       }else if($prest && $loc){
           // pas de catégorie
       }else if($loc && $cat){
           // pas de prestataire
       }else if($prest && $cat){
           //^pas de localite
       }else if($prest){
           
       }else if($cat){
           
       }else{
           
       }
       
       if($prest != null){
                    $prest = trim($prest);
                    $prestAbout = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findPrest($prest,$loc,$cat);
                    dump($prestAbout);
                    exit;
            }else{
                if($loc != ""){
                    
                    $parLoc = $em->getRepository('AnnuaireAnnuaireBundle:Localite')->findParLoc($prest,$loc, $cat);
                    
                }else{
                    if($cat != ""){
                    
                        $parCat = $em->getRepository('AnnuaireAnnuaireBundle:Categorie')->findParCat($cat);
                        
                    }
                }
            }
    }
    
    protected function findByAll($prest,$loc,$cat){
        $repo = $this->entityManager->getRepository("");
        $repo = $this->entityMa
        
        
    }
    
   
}
