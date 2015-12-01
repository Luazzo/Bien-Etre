<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

class PrestatairesCategories extends AbstractFixture implements OrderedFixtureInterface{
   
        public function load(ObjectManager $manager){
            
            for($i=1; $i<6; $i++){
                $prest = $this->getReference('prest-'.$i);
                $cat = $this->getReference('cat-'.\rand(1,5));
                $prest->addCategory($cat);
                $cat->addPrestataire($prest);
                $manager->persist($cat);
                $manager->persist($prest);
            }
            $manager->flush();
    } 
    
    public function getOrder() {
        return 17;
    }    
}