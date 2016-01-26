<?php

namespace Annuaire\AnnuaireBundle\EventListeners;

use Annuaire\AnnuaireBundle\Entity\Membre;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserListener
 *
 * @author Irina
 */
class UserListener implements EventSubscriberInterface{
  
    
    public static function getSubscribedEvents() {
        return array(
            FOSUserEvents::REGISTRATION_INITIALIZE => 'onUserRegistrationInitialize'
            
        );
    }
    
    public function onUserRegistrationInitialize(UserEvent $event){
        $user = $event->getUser();
        
  
        //$type = $event->getRequest()->query->get('type');
        $type = $event->getRequest()->get("type", 'membre');
        if($type === 'prestataire'){
            $user = new Prestataire();
        }else{
            $user = new Membre();
        }
 
        dump($user);die;
    }

//put your code here
}
