<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Localite;

class Localites extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        
        $communes = array(
                        array('Ans', 'Loncin', 'Alleur', 'Xhendremael'),//Ans
                        array('Bastogne', 'Longvilly', 'Noville', 'Villers-la-Bonne-Eau', 'Wardin'),//Bastogne
                        array('Chaudfontaine', 'Beaufays', 'Embourg', 'Vaux-sous-Chèvremont'),//Chaudfontaine
                        array('Dison','Andrimont'),//Dison
                        array('Esneux', 'Tilff'),//Esneux
                        array('Hélécine','Linsmeau', 'Neerheylissem', 'Opheylissem'),//Hélécine
                        array('Liège', 'Angleur', 'Bressoux', 'Chênée', 'Glain', 'Grivegnée', 'Jupille-sur-Meuse', 'Rocourt', 'Wandre'),//Liège
                        array('Modave', 'Outrelouxhe', 'Strée', 'Vierset-Barse'),//Modave
                        array('Ouffet', 'Ellemelle', 'Warzée')//Ouffet
                    );
        
        $index = 0;
        foreach ($communes as $locs) {
            $index1 = 0;
            foreach ($locs as $l) {
                $loc = new Localite();
                $loc->setLocalite($l);
                $loc->setCommune($this->getReference('com-'.$index));
                $loc->setCodepost($this->getReference('code-'.$index));

                $manager->persist($loc);       
                $this->addReference('loc-'.$index.$index1, $loc);
                
                $index1++;
            }
            
            $index++;
        }
        
        $manager->flush();
        
    }
    
    
    public function getOrder() {
        return 3;
    }    
}
