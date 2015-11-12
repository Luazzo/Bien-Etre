<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use DateTime;

class Prestataires extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        
        $user1 = new Prestataire();
        $user1->setDateInscr(new \DateTime());
        $user1->setNom("Tsi");
        $user1->setPrenom("Iri");
        $user1->setMotPass(md5('tratata'));
        $user1->setTypeuser('prestataire');
        $user1->setEmail("tsiri@gmail.com");
        $user1->setTel("0487/78.56.23");
        $user1->setCodepostId($this->getReference('code-3'));
        $user1->setCommuneId($this->getReference('com-3'));
        $user1->setLocaliteId($this->getReference('loc-31'));
        $user1->setRue("rue Hubert Streel");
        $user1->setNumero("128");
        $user1->setNomprest("Institut de Beauté");
        $user1->setAvatar($this->getReference('prest-1'));
        $user1->setSite("http://google.com");
        $user1->setEmailContact("idb@gmail.com");
        $user1->setTva("456789123");
        $manager->persist($user1);
        $this->addReference('userprest-1', $user1);
                
        $user2 = new Prestataire();
        $user2->setDateInscr(new \DateTime());
        $user2->setNom("Ehs");
        $user2->setPrenom("Kalan");
        $user2->setMotPass(md5('lalala'));
        $user2->setTypeuser('prestataire');
        $user2->setEmail("ehs@gmail.com");
        $user2->setTel("0487/78.26.23");
        $user2->setCodepostId($this->getReference('code-2'));
        $user2->setCommuneId($this->getReference('com-2'));
        $user2->setLocaliteId($this->getReference('loc-22'));
        $user2->setRue("rue General Leman");
        $user2->setNumero("18");
        $user2->setNomprest("Institut de Soin");
        $user2->setAvatar($this->getReference('prest-2'));
        $user2->setSite("http://google.com");
        $user2->setEmailContact("iehb@gmail.com");
        $user2->setTva("456745123");             
        $manager->persist($user2);
        $this->addReference('userprest-2', $user2);
                
        $user3 = new Prestataire();
        $user3->setDateInscr(new \DateTime());
        $user3->setNom("Berg");
        $user3->setPrenom("Greg");
        $user3->setMotPass(md5('tututu'));
        $user3->setTypeuser('prestataire');
        $user3->setEmail("greg@gmail.com");
        $user3->setTel("0484/28.24.27");
        $user3->setCodepostId($this->getReference('code-4'));
        $user3->setCommuneId($this->getReference('com-4'));
        $user3->setLocaliteId($this->getReference('loc-40'));
        $user3->setRue("rue de Pot d'Or");
        $user3->setNumero("18");
        $user3->setNomprest("Institut de Bien-Etre");
        $user3->setAvatar($this->getReference('prest-3'));
        $user3->setSite("http://google.com");
        $user3->setEmailContact("ihm@gmail.com");
        $user3->setTva("49995123");             
        $manager->persist($user3);
        $this->addReference('userprest-3', $user3);
        
        $manager->flush();
    }
    
    public function getOrder() {
        return 10;
    }    
}


