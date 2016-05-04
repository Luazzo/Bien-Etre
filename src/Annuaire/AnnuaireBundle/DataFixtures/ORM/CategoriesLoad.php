<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Categorie;

class Categories extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
                
        $tab_categs = array(
            array(
                "nom" => "Massage",
                "description" => "Le massage, ou la massothérapie, est l'application d'un ensemble de techniques manuelles qui visent le mieux-être des personnes grâce à l'exécution de mouvements des mains sur les différents tissus vivants.",
                "image" => $this->getReference('serv-1'),
                "valide" => "1",
                "enavant" => "1",
                "ref"=>"cat-1",
            ),
            array(
                "nom" => "Fitness",
                "description" => "Le fitness (anglicisme formé par abréviation de l'expression anglaise physical fitness, « forme physique »), la gymnastique de forme1 ou l'entraînement physique2 désigne un ensemble d'activités physiques visant à améliorer sa condition physique et son hygiène de vie, dans un souci de bien-être.",
                "image" => $this->getReference('serv-2'),
                "valide" => "1",
                "enavant" => "1",
                "ref"=>"cat-2",
            ),
            array(
                "nom" => "Sauna",
                "description" => "Le sauna (fr. bain finnois1) est une petite cabane de bois ou une pièce dans laquelle on prend un bain de chaleur sèche, pouvant varier de 70 °C à 100 °C, pour le bien-être. ",
                "image" => $this->getReference('serv-3'),
                "valide" => "1",
                "enavant" => "1",
                "ref"=>"cat-3",
            ),
            array(
                "nom" => "Yoga",
                "description" => "Le terme yoga est communément utilisé aujourd'hui pour désigner le hatha-yoga, même si cette discipline n'en est qu'une branche.",
                "image" => $this->getReference('serv-4'),
                "valide" => "1",
                "enavant" => "1",
                "ref"=>"cat-4",
            ),
            array(
                "nom" => "Pédicure",
                "description" => "Le bien-être ressenti après une pédicure médicale est incomparable. Ressentir ses pieds comme libérés, à nouveau légers est une sensation qui n'a pas de prix. ",
                "image" => $this->getReference('serv-5'),
                "valide" => "1",
                "enavant" => "1",
                "ref"=>"cat-5",
            ),
        );
        $j = 1;        
        for($i=0; $i<sizeof($tab_categs); $i++ ){
            $cat = new Categorie();
            $cat->setNom($tab_categs[$i]['nom']);
            $cat->setDescription($tab_categs[$i]['description']);
            $cat->setImage($tab_categs[$i]['image']);
            $cat->setValide($tab_categs[$i]['valide']);
            $cat->setEnavant($tab_categs[$i]['enavant']);    
            //$cat->addPrestataire($this->getReference('prest-'.$j));
            $manager->persist($cat);
            $this->addReference($tab_categs[$i]['ref'], $cat);
            $j++;
        }
        $manager->flush();
    }
    
    public function getOrder() {
        return 11;
    }    
}


