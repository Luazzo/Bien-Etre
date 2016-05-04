<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Commune;

class Communes extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        $communes = array('Ans','Bastogne', 'Chaudfontaine', 'Dison', 'Esneux', 'Hélécine', 'Liège', 'Modave',  'Ouffet');
        
        $index = 0;
        foreach ($communes as $coms) {
            $c = new Commune();
            $c->setCommune($coms);
            
            $manager->persist($c);
            $this->addReference('com-'.$index, $c);
            $index++;
            
        }
        $manager->flush();
        
    }
    
    
    public function getOrder() {
        return 1;
    }    
}