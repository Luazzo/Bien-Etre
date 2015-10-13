<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\User;

class Users extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        
        $user1 = new User();
        $user1->setNom("Tsi");
        $user1->setPrenom("Iri");
        $user1->setEmail("tsiri@gmail.com");
        $user1->setTel("0487/78.56.23");
        $user1->setImg('http://iconbug.com/data/07/256/43e0d0ba02cfe58b9585b141974e1da7.png');
        $manager->persist($user1);
        
        $manager->flush();
    }
    
    public function getOrder() {
        return 10;
    }    
}


