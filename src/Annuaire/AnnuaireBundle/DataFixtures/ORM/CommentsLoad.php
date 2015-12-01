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
                "contenu" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis luctus ex, id aliquet justo. Pellentesque a felis sit amet mauris sodales tincidunt. Nullam facilisis sapien a neque tincidunt, nec pulvinar neque scelerisque. In feugiat euismod risus quis pharetra. Duis et justo a eros faucibus condimentum. ",
                "titre" => "PROMO - 1",
                "membre" => $this->getReference('membre-1'),
                "prestataire" => $this->getReference('prest-1'),
                "ref" => "comment-1",
            ),
            array(
                "date" => new \DateTime(),
                "contenu" => "Suspendisse quis purus condimentum, varius magna ac, bibendum odio. Donec in ultricies mi, nec pulvinar mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. ",
                "titre" => "PROMO - 2",
                "membre" => $this->getReference('membre-1'),
                "prestataire" => $this->getReference('prest-2'),
                "ref" => "comment-2",
            ),
            array(
                "date" => new \DateTime(),
                "contenu" => "Nullam et malesuada turpis, dapibus rutrum velit. Vivamus viverra velit porta odio mattis placerat. Sed imperdiet massa sed iaculis dapibus. Cras et est id massa semper varius eu a massa. Sed quis tristique ipsum. Praesent blandit laoreet sapien. In in est quis est eleifend volutpat vitae in neque. Vestibulum elit dolor, congue in tempus nec, imperdiet sed ligula.",
                "titre" => "PROMO - 3",
                "membre" => $this->getReference('membre-1'),
                "prestataire" => $this->getReference('prest-3'),
                "ref" => "comment-3",
            ),
            array(
                "date" => new \DateTime(),
                "contenu" => "Nunc malesuada nisl non metus placerat pellentesque. Vivamus et semper risus, in eleifend est. Fusce elementum finibus neque, non egestas felis gravida et. In eget fringilla lacus. Aliquam pharetra finibus sollicitudin. Suspendisse vulputate dui sapien, non ornare purus elementum a. ",
                "titre" => "PROMO - 4",
                "membre" => $this->getReference('membre-1'),
                "prestataire" => $this->getReference('prest-4'),
                "ref" => "comment-4",
            ),
            array(
                "date" => new \DateTime(),
                "contenu" => "Vivamus porta, justo sit amet hendrerit varius, neque turpis luctus est, non placerat velit lacus ut lorem. Sed tempor odio id mauris laoreet, sit amet viverra risus viverra. Integer faucibus imperdiet dui. Duis aliquet sagittis ex et porta. Duis ac est et eros dapibus dictum. In dui magna, faucibus ut ipsum in, iaculis consequat augue. Nunc at velit eu velit pulvinar aliquam eget eget sem.",
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


