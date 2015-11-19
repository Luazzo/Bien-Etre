<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Comment;
use DateTime;

class Comments extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        
        $tab_comments = array(
            array(
                "date" => new \DateTime(),
                "contenu" => "Comment 1 du prestataire 1",
                "titre" => "PROMO - 1",
                "membre" => $this->getReference('membre-1'),
                "prestataire" => $this->getReference('prest-1'),
                "ref" => "comment-1",
            ),
            array(
                "date" => new \DateTime(),
                "contenu" => "Comment 2 du prestataire 2",
                "titre" => "PROMO - 2",
                "membre" => $this->getReference('membre-1'),
                "prestataire" => $this->getReference('prest-2'),
                "ref" => "comment-2",
            ),
            array(
                "date" => new \DateTime(),
                "contenu" => "Comment 3 du prestataire 3",
                "titre" => "PROMO - 3",
                "membre" => $this->getReference('membre-1'),
                "prestataire" => $this->getReference('prest-3'),
                "ref" => "comment-3",
            ),
            array(
                "date" => new \DateTime(),
                "contenu" => "Comment 4 du prestataire 4",
                "titre" => "PROMO - 4",
                "membre" => $this->getReference('membre-1'),
                "prestataire" => $this->getReference('prest-4'),
                "ref" => "comment-4",
            ),
            array(
                "date" => new \DateTime(),
                "contenu" => "Comment 5 du prestataire 5",
                "titre" => "PROMO - 5",
                "membre" => $this->getReference('membre-1'),
                "prestataire" => $this->getReference('prest-5'),
                "ref" => "comment-5",
            ),
        );
                
        for($i=0; $i< sizeof($tab_comments); $i++ ){
            $comment = new Comment();
            $comment->setContenu($tab_comments[$i]['contenu']);
            $comment->setDate($tab_comments[$i]['date']);
            $comment->setMembre($tab_comments[$i]['membre']);
            $comment->setPrestataire($tab_comments[$i]['prestataire']);
            $comment->setTitre($tab_comments[$i]['titre']);
            $manager->persist($comment);
            $this->addReference($tab_comments[$i]['ref'], $comment);
        }
        $manager->flush();
    }
    
    public function getOrder() {
        return 9;
    }    
}


