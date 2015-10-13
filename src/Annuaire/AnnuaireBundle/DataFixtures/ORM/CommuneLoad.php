<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Commune;

class Commune extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        
        $commune1 = new Commune();
        $commune1->setCommune("Liège");
        $manager->persist($commune1);
        
        $manager->flush();
    }
    
    public function getOrder() {
        return 1;
    }    
}


