<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Codepost;

class Codepostes extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        //$communes = array('Ans','Bastogne', 'Chaudfontaine', 'Dison', 'Esneux', 'Hélécine', 'Liège', 'Modave',  'Ouffet');
        $codes = array(
                    array('4430'), //Ans,'4431', '4432'
                    array('6600'), //Bastogne
                    array('4050'), //Chaudfontaine,'4051','4052','4053'
                    array('4820'),//Dison,'4821'
                    array('4130'), //Esneux
                    array('1357'), //Hélécine
                    array('4000'), //Liège,'4020','4030','4031','4032'
                    array('4577'), //Modave
                    array('4590'), //Ouffet
                );
        
        $index = 0;
        foreach ($codes as $code) {
            
            foreach ($code as $c) {
                $cp = new Codepost();
                $cp->setCode($c);

                $manager->persist($cp);
                $this->addReference('code-'.$index, $cp);
            }
            
            $index++;
        }
        
        $manager->flush();
        
    }
    
    
    public function getOrder() {
        return 2;
    }    
}