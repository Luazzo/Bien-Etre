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

        $categories = $em->getRepository('AnnuaireAnnuaireBundle:Categorie')->findAllavecImg(8);
        $lastPrests = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->getDerniers(4);
        $listPrests = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findBy(array(), array('nom' => 'ASC'));
        $lastComments = $em->getRepository('AnnuaireAnnuaireBundle:Comment')->getDerniersComments(5);
        $slideImgs = $em->getRepository('AnnuaireAnnuaireBundle:Image')->getSliderImages();
        $localites = $em->getRepository('AnnuaireAnnuaireBundle:Localite')->getLocalites();
        $categs = $em->getRepository('AnnuaireAnnuaireBundle:Categorie')->getCategories();
        
        return $this->render('AnnuaireAnnuaireBundle:BienEtre:index.html.twig', 
            array(
                'categories' => $categories,
                'lastPrests' => $lastPrests,
                'lastComments' => $lastComments,
                'slideImgs' => $slideImgs,
                'localites' => $localites,
                'categs' => $categs,
                'listPrests' => $listPrests,
                'localite' => "ok",
                'prestAbout' => ""
                
            )
        );
    }
    
    public function rechercheAction(Request $request) {
        if ($request->isMethod('get')){
            // $_POST parameters   $request->request->get('name');
            
            // $_GET parameters
            $prest = $request->query->get('prestataire',null);
            $loc = $request->query->get('localite');
            $cat = $request->query->get('categorie');
            $prix = $request->query->get('prix');

                           
            $result = $this->get('bienetre.search_service')->findPrestataire($prest,$loc,$cat);
            
            
            
            
            
            return $this->render('AnnuaireAnnuaireBundle:BienEtre:index.html.twig', array(
                
                ));
        }
    }
    
    
    public function showCategAction($id)
    {
        return $this->render('AnnuaireAnnuaireBundle:BienEtre:index.html.twig');
    }
}
