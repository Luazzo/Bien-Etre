<?php
namespace Annuaire\AnnuaireBundle\DataFixtures\ORM; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Annuaire\AnnuaireBundle\Entity\Image;
use DateTime;

class Images extends AbstractFixture implements OrderedFixtureInterface{
    
    public function load(ObjectManager $manager){
        //images de services
        $img1 = new Image();
        $img1->setFormat("jpg");
        $img1->setHeight("692");
        $img1->setNom("http://www.hakunamata-sophro-relaxation.com/s/cc_images/cache_35829985.jpg");
        $img1->setType("service");
        $img1->setVisible("1");
        $img1->setWeight("132");
        $img1->setWidth("1039");
        $manager->persist($img1);
        $this->addReference('serv-1', $img1);
        
        $img2 = new Image();
        $img2->setFormat("jpg");
        $img2->setHeight("768");
        $img2->setNom("http://www.leschaletsdeflorence.fr/wp-content/uploads/2014/09/code10-102z.jpg");
        $img2->setType("service");
        $img2->setVisible("1");
        $img2->setWeight("131");
        $img2->setWidth("1153");
        $manager->persist($img2);
        $this->addReference('serv-2', $img2);
        
        
        $img3 = new Image();
        $img3->setFormat("jpg");
        $img3->setHeight("555");
        $img3->setNom("http://static.wixstatic.com/media/b82084_ab326e631ba04a3b86b49d8e6f75bb77.jpg");
        $img3->setType("service");
        $img3->setVisible("1");
        $img3->setWeight("477");
        $img3->setWidth("865");
        $manager->persist($img3);
        $this->addReference('serv-3', $img3);
        
        //images de prestataires
        $img4 = new Image();
        $img4->setFormat("png");
        $img4->setHeight("164");
        $img4->setNom("http://www.bienetre-et-vie.fr/wp-content/uploads/2014/06/cropped-logo.png");
        $img4->setType("logo");
        $img4->setVisible("1");
        $img4->setWeight("5");
        $img4->setWidth("166");
        $manager->persist($img4);
        $this->addReference('prest-1', $img4);
        
        $img5 = new Image();
        $img5->setFormat("jpg");
        $img5->setHeight("200");
        $img5->setNom("http://koliweb.fr/images/massage_bien_etre.jpg");
        $img5->setType("logo");
        $img5->setVisible("1");
        $img5->setWeight("23");
        $img5->setWidth("188");
        $manager->persist($img5);
        $this->addReference('prest-2', $img5);
        
        $img6 = new Image();
        $img6->setFormat("jpg");
        $img6->setHeight("129");
        $img6->setNom("http://www.objectif-zen.net/images/logoBanniere.jpg");
        $img6->setType("logo");
        $img6->setVisible("1");
        $img6->setWeight("18");
        $img6->setWidth("210");
        $manager->persist($img6);
        $this->addReference('prest-3', $img6);
        
        //images de slider_prest
        $img7 = new Image();
        $img7->setFormat("jpg");
        $img7->setHeight("409");
        $img7->setNom("https://bienetreaunaturel44.files.wordpress.com/2013/07/cropped-bien-c3aatre.jpg");
        $img7->setType("slider_prest");
        $img7->setVisible("1");
        $img7->setWeight("89,9");
        $img7->setWidth("1015");
        $manager->persist($img7);
        $this->addReference('slideprest-10', $img7);
        
        $img8 = new Image();
        $img8->setFormat("jpg");
        $img8->setHeight("288");
        $img8->setNom("http://www.sraap.org/wp-content/uploads/2014/05/cropped-banniere_nature.jpg");
        $img8->setType("slider_prest");
        $img8->setVisible("1");
        $img8->setWeight("50,6");
        $img8->setWidth("1000");
        $manager->persist($img8);
        $this->addReference('slideprest-11', $img8);
        
        $img9 = new Image();
        $img9->setFormat("png");
        $img9->setHeight("300");
        $img9->setNom("http://www.salondelhumain.com/upload/images/entete/bambou3-1000X300.png");
        $img9->setType("slider_prest");
        $img9->setVisible("1");
        $img9->setWeight("237");
        $img9->setWidth("1000");
        $manager->persist($img9);
        $this->addReference('slideprest-20', $img9);
        
        $img10 = new Image();
        $img10->setFormat("jpg");
        $img10->setHeight("253");
        $img10->setNom("http://www.frederic-m.co/resources/_wsb_725x228_Aloel+FM.jpg");
        $img10->setType("slider_prest");
        $img10->setVisible("1");
        $img10->setWeight("78,5");
        $img10->setWidth("725");
        $manager->persist($img10);
        $this->addReference('slideprest-21', $img10);
        
        $img11 = new Image();
        $img11->setFormat("jpg");
        $img11->setHeight("313");
        $img11->setNom("http://imarie.eu/wp-content/uploads/2013/11/LS-1-976x313.jpg");
        $img11->setType("slider_prest");
        $img11->setVisible("1");
        $img11->setWeight("177");
        $img11->setWidth("976");
        $manager->persist($img11);
        $this->addReference('slideprest-30', $img11);
        
        $img12 = new Image();
        $img12->setFormat("jpg");
        $img12->setWeight("41,8");
        $img12->setNom("http://img.over-blog-kiwi.com/980x285-ct/0/81/45/88/201310/ob_e71cb9_11985936-zen.jpg");
        $img12->setType("slider_prest");
        $img12->setVisible("1");
        $img12->setWidth("980");
        $img12->setHeight("285");
        $manager->persist($img12);
        $this->addReference('slideprest-31', $img12);
        
        //images de slider_home
        $img13 = new Image();
        $img13->setFormat("jpeg");
        $img13->setWeight("138");
        $img13->setNom("http://2.bp.blogspot.com/-nM9oPORShr4/Uc1ATSeIpdI/AAAAAAAAFgs/DrLiQY1wXJk/s1600/vacances_on_the_greens_001.jpeg");
        $img13->setType("slider_home");
        $img13->setVisible("1");
        $img13->setWidth("1600");
        $img13->setHeight("501");
        $manager->persist($img13);
        $this->addReference('slidehome-1', $img13);
        
        $img14 = new Image();
        $img14->setFormat("jpeg");
        $img14->setWeight("31,1");
        $img14->setNom("http://media.cdnws.com/_i/36775/533/56/33/bien-etre.jpeg");
        $img14->setType("slider_home");
        $img14->setVisible("1");
        $img14->setWidth("690");
        $img14->setHeight("218");
        $manager->persist($img14);
        $this->addReference('slidehome-2', $img14);
        
        $img15 = new Image();
        $img15->setFormat("jpg");
        $img15->setWeight("28,8");
        $img15->setNom("http://www.espace-akwaba.com/wp-content/uploads/zippy_temp/11329753.jpg");
        $img15->setType("slider_home");
        $img15->setVisible("1");
        $img15->setWidth("580");
        $img15->setHeight("276");
        $manager->persist($img15);
        $this->addReference('slidehome-3', $img15);
                
        $manager->flush();
    }
    
    public function getOrder() {
        return 8;
    }    
}


