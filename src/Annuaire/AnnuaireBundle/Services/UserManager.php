<?php
namespace Annuaire\AnnuaireBundle\Services;

use Annuaire\AnnuaireBundle\Entity\Membre;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use FOS\UserBundle\Model\UserManager as BaseUserManager;
use FOS\UserBundle\Util\CanonicalizerInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

abstract class UserManager extends BaseUserManager {
   
    public function createUser($class='') {
       if($class == 'prestataire'/*prestataiere*/){
           return new Prestataire();
       }else if($class == 'internaut'){
           return new Membre();
       }else{
           $user = $this->getClass();
           return new $user;
       }
    }
}