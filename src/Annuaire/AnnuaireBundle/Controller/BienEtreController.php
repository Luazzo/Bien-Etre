<?php

namespace Annuaire\AnnuaireBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Annuaire\AnnuaireBundle\Entity\Categorie;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use Annuaire\AnnuaireBundle\Entity\PrestataireRepository;
use Annuaire\AnnuaireBundle\Entity\ImageRepository;

class BienEtreController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
            $orm = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findOneBy(array("id"=>33));

        $categories = $em->getRepository('AnnuaireAnnuaireBundle:Categorie')->findAllavecImg(8);
        $lastPrests = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->getDerniers(4);
        $listPrests = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findBy(array(), array('nom' => 'ASC'));
        $lastComments = $em->getRepository('AnnuaireAnnuaireBundle:Comment')->getDerniersComments(5);
        $slideImgs = $em->getRepository('AnnuaireAnnuaireBundle:Image')->getSliderImages();
        $localites = $em->getRepository('AnnuaireAnnuaireBundle:Localite')->getLocalites();
        $categs = $em->getRepository('AnnuaireAnnuaireBundle:Categorie')->getCategories();
        $stages = $em->getRepository('AnnuaireAnnuaireBundle:Stage')->getLastStages(4);
        
        return $this->render('AnnuaireAnnuaireBundle:BienEtre:index.html.twig', 
            array(
                'categories' => $categories,
                'lastPrests' => $lastPrests,
                'lastComments' => $lastComments,
                'slideImgs' => $slideImgs,
                'localites' => $localites,
                'categs' => $categs,
                'listPrests' => $listPrests,
                'stages' => $stages
                
            )
        );
    }
    
    public function rechercheAction(Request $request) {
        if ($request->isMethod('get')){
            // $_POST parameters   $request->request->get('name');
            
            // $_GET parameters
            $prest = $request->query->get(trim('prestataire',null));
            $loc = $request->query->get('localite',null);
            $cat = $request->query->get('categorie',null);

            $result = $this->get('bienetre.search_service')->findPrestataire($prest,$loc,$cat);
            
            
            $em = $this->getDoctrine()->getManager();
             //$result = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findAll();
            $slideImgs = $em->getRepository('AnnuaireAnnuaireBundle:Image')->getSliderImages();
            $localites = $em->getRepository('AnnuaireAnnuaireBundle:Localite')->getLocalites();
            $categs = $em->getRepository('AnnuaireAnnuaireBundle:Categorie')->getCategories();
            
            /*dump($result);
            exit;*/
            return $this->render('AnnuaireAnnuaireBundle:BienEtre:listRecherche.html.twig', 
                    array(
                        'slideImgs' => $slideImgs,
                        'result' => $result,
                        'localites' => $localites,
                        'categs' => $categs,
                    ));
        }
    }
    
    
    public function showCategAction($id)
    {
        return $this->render('AnnuaireAnnuaireBundle:BienEtre:index.html.twig');
    }
}
