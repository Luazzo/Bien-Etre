<?php
/**
 * Created by PhpStorm.
 * User: gberger
 * Date: 19/01/16
 * Time: 10:42
 */

namespace Annuaire\AnnuaireBundle\Manager;

use FOS\UserBundle\Doctrine\UserManager as FOSUserManager;
use Annuaire\AnnuaireBundle\Entity\Membre;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use Annuaire\AnnuaireBundle\Entity\User;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class UserManager
 * @package Annuaire\AnnuaireBundle\Manager
 * La classe UserManager étend la classe UserManager de FOSUserBundle
 */
class UserManager extends FOSUserManager{

	/**
	 * @param string $type
	 *
	 * @return Membre|Prestataire
	 *
	 * renvoit la bonne classe utilisateur en fonction du type passé en paramètre
	 */
    public function createUser($type="") {
        if($type == User::Type_PRESTATAIRE){
            return new Prestataire();
        }else{
            return new Membre();
        }
    }

    /**
     * {@inheritDoc}
     
    public function deleteUser(UserInterface $user)
    {
        $this->objectManager->remove($user);
        $this->objectManager->flush();
    }*/
}