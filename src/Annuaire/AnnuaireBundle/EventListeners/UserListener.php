<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Annuaire\AnnuaireBundle\EventListeners;

use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\FOSUserEvents;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Description of UserListener
 *
 * @author gberger
 */
class UserListener implements EventSubscriberInterface{
    
   public static function getSubscribedEvents() {
        return array(
            FOSUserEvents::REGISTRATION_INITIALIZE => 'onUserRegistrationInitialize'
            
        );
    }
    
    public function onUserRegistrationInitialize(UserEvent $event){
        $user = $event->getUser();
        $type = $event->getRequest()->query->get('type', 'membre');
        
        // $user->setTypeuser($type);
        if($type){
            $user = new Prestataire();
            //$user->addRole('ROLE_HELLO');
        }
    }
}