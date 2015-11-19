<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Promo;
use DateTime;

class Promos extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        
        $tab_promos = array(
            array(
                "dateaffiche" => new \DateTime(),
                "datedebut" => new \DateTime(),
                "datefin" => new \DateTime(),
                "datefinaffiche" =>new \DateTime(),
                "description" => "Promo 1 du prestataire 1",
                "pdf" => "http://www.oracle.com/us/corporate/pricing/technology-price-list-070617.pdf",
                "categorie" => $this->getReference('cat-1'),
                "nom" => "Promo N1",
                "prest" => $this->getReference('prest-1'),
                "ref" => "promo-1",
            ),
            array(
                "dateaffiche" => new \DateTime(),
                "datedebut" => new \DateTime(),
                "datefin" => new \DateTime(),
                "datefinaffiche" =>new \DateTime(),
                "description" => "Promo 2 du prestataire 2",
                "pdf" => "http://www.oracle.com/us/corporate/pricing/technology-price-list-070617.pdf",
                "categorie" => $this->getReference('cat-2'),
                "nom" => "Promo N2",
                "prest" => $this->getReference('prest-2'),
                "ref" => "promo-2",
            ),
            array(
                "dateaffiche" => new \DateTime(),
                "datedebut" => new \DateTime(),
                "datefin" => new \DateTime(),
                "datefinaffiche" =>new \DateTime(),
                "description" => "Promo 3 du prestataire 3",
                "pdf" => "http://www.oracle.com/us/corporate/pricing/technology-price-list-070617.pdf",
                "categorie" => $this->getReference('cat-3'),
                "nom" => "Promo N3",
                "prest" => $this->getReference('prest-3'),
                "ref" => "promo-3",
            ),
            array(
                "dateaffiche" => new \DateTime(),
                "datedebut" => new \DateTime(),
                "datefin" => new \DateTime(),
                "datefinaffiche" =>new \DateTime(),
                "description" => "Promo 4 du prestataire 4",
                "pdf" => "http://www.oracle.com/us/corporate/pricing/technology-price-list-070617.pdf",
                "categorie" => $this->getReference('cat-4'),
                "nom" => "Promo N4",
                "prest" => $this->getReference('prest-4'),
                "ref" => "promo-4",
            ),
            array(
                "dateaffiche" => new \DateTime(),
                "datedebut" => new \DateTime(),
                "datefin" => new \DateTime(),
                "datefinaffiche" =>new \DateTime(),
                "description" => "Promo 5 du prestataire 5",
                "pdf" => "http://www.oracle.com/us/corporate/pricing/technology-price-list-070617.pdf",
                "categorie" => $this->getReference('cat-5'),
                "nom" => "Promo N5",
                "prest" => $this->getReference('prest-5'),
                "ref" => "promo-5",
            ),
        );
                
        for($i=0; $i< sizeof($tab_promos); $i++ ){
            $promo = new Promo();
            $promo->setDateaffiche($tab_promos[$i]['dateaffiche']);
            $promo->setDatedebut ($tab_promos[$i]['datedebut']);
            $promo->setDatefin ($tab_promos[$i]['datefin']);
            $promo->setDatefinaffiche ($tab_promos[$i]['datefinaffiche']);
            $promo->setPdf ($tab_promos[$i]['pdf']);
            $promo->setDescription ($tab_promos[$i]['description']);
            $promo->setNom  ($tab_promos[$i]['nom']);
            $promo->setPrestataire($tab_promos[$i]['prest']);
            $promo->setCategorie ($tab_promos[$i]['categorie']);
            $manager->persist($promo);
            $this->addReference($tab_promos[$i]['ref'], $promo);
        }
        $manager->flush();
    }
    
    public function getOrder() {
        return 12;
    }    
}


