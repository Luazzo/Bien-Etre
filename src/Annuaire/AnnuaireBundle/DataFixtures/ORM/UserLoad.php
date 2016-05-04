<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM;

use Annuaire\AnnuaireBundle\Entity\Membre;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use Annuaire\AnnuaireBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class Prestataires extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        
        $user1 = new Prestataire();
        $user1->setDateInscr(new \DateTime());
        $user1->setUsername("Luazzo");
        $user1->setNom("Tsi");
        $user1->setPrenom("Iri");
        $user1->setEmail("tsiri@gmail.com");
        $user1->setTel("0487/78.56.23");
        $user1->setRoles(array("ROLE_PRESTATAIRE"));
        $user1->setCodepostId($this->getReference('code-3'));
        $user1->setCommuneId($this->getReference('com-3'));
        $user1->setLocaliteId($this->getReference('loc-31'));
        $user1->setRue("rue Hubert Streel");
        $user1->setNumero("128");
        $user1->setNomprest("Institut de Beauté");
        $user1->setSite("http://google.com");
        $user1->setTva("456789123");
        $user1->setEnabled(true);
        $user1->setPassword(hash('sha512', "tratata"));
        $manager->persist($user1);
        $this->addReference('prest-1', $user1);
                
        $user2 = new Prestataire();
        $user2->setDateInscr(new \DateTime());
        $user2->setUsername("Ehs");
        $user2->setNom("Ehs");
        $user2->setPrenom("Kalan");
        $user2->setPassword(hash('sha512', 'lalala'));
        $user2->setRoles(array("ROLE_PRESTATAIRE"));
        $user2->setEmail("ehs@gmail.com");
        $user2->setTel("0487/78.26.23");
        $user2->setCodepostId($this->getReference('code-2'));
        $user2->setCommuneId($this->getReference('com-2'));
        $user2->setLocaliteId($this->getReference('loc-22'));
        $user2->setRue("rue General Leman");
        $user2->setNumero("18");
        $user2->setNomprest("Institut de Soin");
        $user2->setSite("http://google.com");
        $user2->setTva("456745123");     
        $user2->setEnabled(true);        
        $manager->persist($user2);
        $this->addReference('prest-2', $user2);
                
        $user3 = new Prestataire();
        $user3->setDateInscr(new \DateTime());
        $user3->setUsername("Grr");
        $user3->setNom("Berg");
        $user3->setPrenom("Greg");
        $user3->setPassword(hash('sha512', 'tututu'));
        $user3->setRoles(array("ROLE_PRESTATAIRE"));
        $user3->setEmail("greg@gmail.com");
        $user3->setTel("0484/28.24.27");
        $user3->setCodepostId($this->getReference('code-4'));
        $user3->setCommuneId($this->getReference('com-4'));
        $user3->setLocaliteId($this->getReference('loc-40'));
        $user3->setRue("rue de Pot d'Or");
        $user3->setNumero("18");
        $user3->setNomprest("Institut de Bien-Etre");
        $user3->setSite("http://google.com");
        $user3->setTva("49995123");         
        $user3->setEnabled(true);    
        $manager->persist($user3);
        $this->addReference('prest-3', $user3);
                
        $user4 = new Prestataire();
        $user4->setDateInscr(new \DateTime());
        $user4->setUsername("MyGod");
        $user4->setNom("God");
        $user4->setPrenom("Virg");
        $user4->setPassword(hash('sha512', 'tratatu'));
        $user4->setRoles(array("ROLE_PRESTATAIRE"));
        $user4->setEmail("vireeg@gmail.com");
        $user4->setTel("0484/28.24.27");
        $user4->setCodepostId($this->getReference('code-5'));
        $user4->setCommuneId($this->getReference('com-5'));
        $user4->setLocaliteId($this->getReference('loc-50'));
        $user4->setRue("rue de Pot d'Or");
        $user4->setNumero("15");
        $user4->setNomprest("Institut de Boté");
        $user4->setSite("http://google.com");
        $user4->setTva("49995123");            
        $user4->setEnabled(true); 
        $manager->persist($user4);
        $this->addReference('prest-4', $user4);
        
                
        $user5 = new Prestataire();
        $user5->setDateInscr(new \DateTime());
        $user5->setUsername("Bar");
        $user5->setNom("Bar");
        $user5->setPrenom("Tor");
        $user5->setPassword(hash('sha512', 'bartor'));
        $user5->setRoles(array("ROLE_PRESTATAIRE"));
        $user5->setEmail("bartor@gmail.com");
        $user5->setTel("0484/28.27.27");
        $user5->setCodepostId($this->getReference('code-3'));
        $user5->setCommuneId($this->getReference('com-3'));
        $user5->setLocaliteId($this->getReference('loc-31'));
        $user5->setRue("rue d'Or");
        $user5->setNumero("11");
        $user5->setNomprest("Bien-Etre");
        $user5->setSite("http://google.com");
        $user5->setTva("49994623");           
        $user5->setEnabled(true);  
        $manager->persist($user5);
        $this->addReference('prest-5', $user5);
         
        $user6 = new User();
        $user6->setDateInscr(new \DateTime());
        $user6->setUsername("TsI");
        $user6->setNom("Tsi");
        $user6->setPrenom("Iri");
        $user6->setPassword(hash('sha512', 'tsiiri'));
        $user6->setRoles(array("ROLE_ADMIN"));
        $user6->setEmail("tsiiri@gmail.com");
        $user6->setEnabled(true);
        $manager->persist($user6);
        $this->addReference('admin', $user6);
         
        $user7 = new Membre();
        $user7->setDateInscr(new \DateTime());
        $user7->setUsername("Man");
        $user7->setNom("Man");
        $user7->setPrenom("Fred");
        $user7->setPassword(hash('sha512', 'manfred'));
        $user7->setRoles(array("ROLE_MEMBRE"));
        $user7->setEmail("man@gmail.com");
        $user7->setEnabled(true);
        $manager->persist($user7);
        $this->addReference('membre-1', $user7);
        
        $manager->flush();
    }
    
    public function getOrder() {
        return 8;
    }    
}


