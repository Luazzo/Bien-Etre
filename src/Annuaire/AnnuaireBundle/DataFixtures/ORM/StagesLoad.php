<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Stage;
use DateTime;

class Stages extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        
        $tab_stages = array(
            array(
                "dateaffiche" => new \DateTime(),
                "datedebut" => new \DateTime(),
                "datefin" => new \DateTime(),
                "datefinaffiche" =>new \DateTime(),
                "description" => "Stage 1 du prestataire 1",
                "info" => "info sur stage 1",
                "nom" => "Stage N1",
                "prest" => $this->getReference('prest-1'),
                "tarif" => "35",
                "ref" => "stage-1",
            ),
            array(
                "dateaffiche" => new \DateTime(),
                "datedebut" => new \DateTime(),
                "datefin" => new \DateTime(),
                "datefinaffiche" =>new \DateTime(),
                "description" => "Stage 2 du prestataire 2",
                "info" => "info sur stage 2",
                "nom" => "Stage N2",
                "prest" => $this->getReference('prest-2'),
                "tarif" => "35",
                "ref" => "stage-2",
            ),
            array(
                "dateaffiche" => new \DateTime(),
                "datedebut" => new \DateTime(),
                "datefin" => new \DateTime(),
                "datefinaffiche" =>new \DateTime(),
                "description" => "Stage 3 du prestataire 3",
                "info" => "info sur stage 3",
                "nom" => "Stage N3",
                "prest" => $this->getReference('prest-3'),
                "tarif" => "40",
                "ref" => "stage-3",
            ),
            array(
                "dateaffiche" => new \DateTime(),
                "datedebut" => new \DateTime(),
                "datefin" => new \DateTime(),
                "datefinaffiche" =>new \DateTime(),
                "description" => "Stage 4 du prestataire 4",
                "info" => "info sur stage 4",
                "nom" => "Stage N4",
                "prest" => $this->getReference('prest-4'),
                "tarif" => "55",
                "ref" => "stage-4",
            ),
        );
                
        for($i=0; $i< sizeof($tab_stages); $i++ ){
            $stage = new Stage();
            $stage->setDateaffiche($tab_stages[$i]['dateaffiche']);
            $stage->setDatedebut ($tab_stages[$i]['datedebut']);
            $stage->setDatefin ($tab_stages[$i]['datefin']);
            $stage->setDatefinaffiche ($tab_stages[$i]['datefinaffiche']);
            $stage->setDescription ($tab_stages[$i]['description']);
            $stage->setInfo ($tab_stages[$i]['info']);
            $stage->setNom  ($tab_stages[$i]['nom']);
            $stage->setPrestataire($tab_stages[$i]['prest']);
            $stage->setTarif ($tab_stages[$i]['tarif']);
            $manager->persist($stage);
            $this->addReference($tab_stages[$i]['ref'], $stage);
        }
        $manager->flush();
    }
    
    public function getOrder() {
        return 12;
    }    
}


