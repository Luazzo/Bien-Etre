<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Categorie;
use DateTime;

class Categories extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        
        $cat1 = new Categorie();
        $cat1->setNom("Categorie 1");
        $cat1->setDescription("Description de la categorie 1");
        $cat1->setImage($this->getReference('serv-1'));
        $cat1->setValide("1");
        $cat1->setEnavant("0");
        $cat1->addPrestataire($this->getReference('userprest-3'));       
        $manager->persist($cat1);
        
        $cat2 = new Categorie();
        $cat2->setNom("Categorie 2");
        $cat2->setDescription("Description de la categorie 2");
        $cat2->setImage($this->getReference('serv-2'));
        $cat2->setValide("1");
        $cat2->setEnavant("0");
        $cat2->addPrestataire($this->getReference('userprest-2'));       
        $manager->persist($cat2);
        
        $cat3 = new Categorie();
        $cat3->setNom("Categorie 3");
        $cat3->setDescription("Description de la categorie 3");
        $cat3->setImage($this->getReference('serv-3'));
        $cat3->setValide("1");
        $cat3->setEnavant("0");
        $cat3->addPrestataire($this->getReference('userprest-3'));       
        $manager->persist($cat3);
                
        
        $manager->flush();
    }
    
    public function getOrder() {
        return 15;
    }    
}


