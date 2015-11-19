<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Image;
use DateTime;

class Images extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
    
        $tab_images = array(
            //images de logo_services
            array(
                "path" => "http://www.publicard.ca/wp-content/uploads/2015/02/Fotolia_75366557_Subscription_Monthly_M.jpg",
                "type" => Image::TYPE_LOGOCATEG,
                "visible" => "1",
                "user" => $this->getReference('admin'),
                "position" => "1",
                "description" => "massage",
                "ref" => "massage",
            ),
            array(
                "path" => "http://www.be4web.be/media/uploads/categories/sante.jpg",
                "type" => Image::TYPE_LOGOCATEG,
                "visible" => "1",
                "user" => $this->getReference('admin'),
                "position" => "1",
                "description" => "fitnes",
                "ref" => "fitness",
            ),
            array(
                "path" => "http://winphys.fr/wp-content/uploads/2014/02/event_3-568x300.jpg",
                "type" => Image::TYPE_LOGOCATEG,
                "visible" => "1",
                "user" => $this->getReference('admin'),
                "position" => "1",
                "description" => "aromather",
                "ref" => "aromather",
            ),
            //images de services
            array(
                "path" => "http://www.hakunamata-sophro-relaxation.com/s/cc_images/cache_35829985.jpg",
                "type" => Image::TYPE_CATEGORIE,
                "visible" => "1",
                "user" => $this->getReference('prest-1'),
                "position" => "1",
                "description" => "slideshow 1",
                "ref" => "serv-1",
            ),
            array(
                "path" => "http://www.leschaletsdeflorence.fr/wp-content/uploads/2014/09/code10-102z.jpg",
                "type" => Image::TYPE_CATEGORIE,
                "visible" => "1",
                "user" => $this->getReference('prest-2'),
                "position" => "2",
                "description" => "slideshow 2",
                "ref" => "serv-2",
            ),
            array(
                "path" => "http://static.wixstatic.com/media/b82084_ab326e631ba04a3b86b49d8e6f75bb77.jpg",
                "type" => Image::TYPE_CATEGORIE,
                "visible" => "1",
                "user" => $this->getReference('prest-3'),
                "position" => "3",
                "description" => "slideshow 3",
                "ref" => "serv-3",
            ),
            array(
                "path" => "http://static.wixstatic.com/media/b82084_ab326e631ba04a3b86b49d8e6f75bb77.jpg",
                "type" => Image::TYPE_CATEGORIE,
                "visible" => "1",
                "user" => $this->getReference('prest-4'),
                "position" => "4",
                "description" => "slideshow 4",
                "ref" => "serv-4",
            ),
            array(
                "path" => "http://lamaisondubonheurdespieds.be/images/pedicure.jpg",
                "type" => Image::TYPE_CATEGORIE,
                "visible" => "1",
                "user" => $this->getReference('prest-5'),
                "position" => "5",
                "description" => "slideshow 5",
                "ref" => "serv-5",
            ),
            //images de prestataires
            array(
                "path" => "http://www.bienetre-et-vie.fr/wp-content/uploads/2014/06/cropped-logo.png",
                "type" => Image::TYPE_LOGO,
                "visible" => "1",
                "user" => $this->getReference('prest-1'),
                "position" => "1",
                "description" => "prestataire 1",
                "ref" => "logoprest-1",
            ),
            array(
                "path" => "http://koliweb.fr/images/massage_bien_etre.jpg",
                "type" => Image::TYPE_LOGO,
                "visible" => "1",
                "user" => $this->getReference('prest-2'),
                "position" => "1",
                "description" => "prestataire 2",
                "ref" => "logoprest-2",
            ),
            array(
                "path" => "http://www.objectif-zen.net/images/logoBanniere.jpg",
                "type" => Image::TYPE_LOGO,
                "visible" => "1",
                "user" => $this->getReference('prest-3'),
                "position" => "1",
                "description" => "prestataire 3",
                "ref" => "logoprest-3",
            ),
            array(
                "path" => "http://www.objectif-zen.net/images/logoBanniere.jpg",
                "type" => Image::TYPE_LOGO,
                "visible" => "1",
                "user" => $this->getReference('prest-4'),
                "position" => "1",
                "description" => "prestataire 4",
                "ref" => "logoprest-4",
            ),
            //images slider_prestataire
            array(
                "path" => "https://bienetreaunaturel44.files.wordpress.com/2013/07/cropped-bien-c3aatre.jpg",
                "type" => Image::TYPE_SLIDEPREST,
                "visible" => "1",
                "user" => $this->getReference('prest-1'),
                "position" => "1",
                "description" => "slider prestataire 10",
                "ref" => "slideprest-10",
            ),
            array(
                "path" => "http://www.sraap.org/wp-content/uploads/2014/05/cropped-banniere_nature.jpg",
                "type" => Image::TYPE_SLIDEPREST,
                "visible" => "1",
                "user" => $this->getReference('prest-1'),
                "position" => "2",
                "description" => "slider prestataire 11",
                "ref" => "slideprest-11",
            ),
            array(
                "path" => "http://www.salondelhumain.com/upload/images/entete/bambou3-1000X300.png",
                "type" => Image::TYPE_SLIDEPREST,
                "visible" => "1",
                "user" => $this->getReference('prest-2'),
                "position" => "1",
                "description" => "slider prestataire 20",
                "ref" => "slideprest-20",
            ),
            array(
                "path" => "http://www.frederic-m.co/resources/_wsb_725x228_Aloel+FM.jpg",
                "type" => Image::TYPE_SLIDEPREST,
                "visible" => "1",
                "user" => $this->getReference('prest-2'),
                "position" => "2",
                "description" => "slider prestataire 21",
                "ref" => "slideprest-21",
            ),
            array(
                "path" => "http://imarie.eu/wp-content/uploads/2013/11/LS-1-976x313.jpg",
                "type" => Image::TYPE_SLIDEPREST,
                "visible" => "1",
                "user" => $this->getReference('prest-3'),
                "position" => "1",
                "description" => "slider prestataire 30",
                "ref" => "slideprest-30",
            ),
            array(
                "path" => "http://img.over-blog-kiwi.com/980x285-ct/0/81/45/88/201310/ob_e71cb9_11985936-zen.jpg",
                "type" => Image::TYPE_SLIDEPREST,
                "visible" => "1",
                "user" => $this->getReference('prest-3'),
                "position" => "2",
                "description" => "slider prestataire 31",
                "ref" => "slideprest-31",
            ),
            array(
                "path" => "http://imarie.eu/wp-content/uploads/2013/11/LS-1-976x313.jpg",
                "type" => Image::TYPE_SLIDEPREST,
                "visible" => "1",
                "user" => $this->getReference('prest-4'),
                "position" => "1",
                "description" => "slider prestataire 40",
                "ref" => "slideprest-40",
            ),
            array(
                "path" => "http://img.over-blog-kiwi.com/980x285-ct/0/81/45/88/201310/ob_e71cb9_11985936-zen.jpg",
                "type" => Image::TYPE_SLIDEPREST,
                "visible" => "1",
                "user" => $this->getReference('prest-4'),
                "position" => "2",
                "description" => "slider prestataire 41",
                "ref" => "slideprest-41",
            ),
            //images de slider_home
            array(
                "path" => "http://2.bp.blogspot.com/-nM9oPORShr4/Uc1ATSeIpdI/AAAAAAAAFgs/DrLiQY1wXJk/s1600/vacances_on_the_greens_001.jpeg",
                "type" => Image::TYPE_SLIDEHOME,
                "visible" => "1",
                "user" => $this->getReference('admin'),
                "position" => "1",
                "description" => "slidehome 1",
                "ref" => "slidehome-1",
            ),
            array(
                "path" => "http://media.cdnws.com/_i/36775/533/56/33/bien-etre.jpeg",
                "type" => Image::TYPE_SLIDEHOME,
                "visible" => "1",
                "user" => $this->getReference('admin'),
                "position" => "2",
                "description" => "slidehome 2",
                "ref" => "slidehome-2",
            ),
            array(
                "path" => "http://www.espace-akwaba.com/wp-content/uploads/zippy_temp/11329753.jpg",
                "type" => Image::TYPE_SLIDEHOME,
                "visible" => "1",
                "user" => $this->getReference('admin'),
                "position" => "3",
                "description" => "slidehome 3",
                "ref" => "slidehome-3",
            ),
            //images avatars
            array(
                "path" => "http://icons.iconarchive.com/icons/hopstarter/superhero-avatar/256/Avengers-Black-Widow-icon.png",
                "type" => Image::TYPE_AVATAR,
                "visible" => "1",
                "user" => $this->getReference('membre-1'),
                "position" => "1",
                "description" => "avatar 1",
                "ref" => "usermembre-1",
            ),
            array(
                "path" => "http://fr.seaicons.com/wp-content/uploads/2015/07/TV-Smith-icon.png",
                "type" => Image::TYPE_AVATAR,
                "visible" => "1",
                "user" => $this->getReference('admin'),
                "position" => "1",
                "description" => "admin",
                "ref" => "useradmin",
            ),
        );
        
        for($i=0; $i< sizeof($tab_images); $i++ ){
            $image = new Image();
            $image->setDescription($tab_images[$i]['description']);
            $image->setPath($tab_images[$i]['path']);
            $image->setPosition($tab_images[$i]['position']);
            $image->setType($tab_images[$i]['type']);
            $image->setUser($tab_images[$i]['user']);
            $image->setVisible($tab_images[$i]['visible']);
            $manager->persist($image);
            $this->addReference($tab_images[$i]['ref'], $image);
        }
                
        $manager->flush();
    }
    
    public function getOrder() {
        return 10;
    }    
}


