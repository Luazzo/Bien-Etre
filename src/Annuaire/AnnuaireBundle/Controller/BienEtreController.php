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

class BienEtreController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AnnuaireAnnuaireBundle:Categorie')->findAllavecImg(8);
        $lastPrests = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->getDerniers(4);
        $lastComments = $em->getRepository('AnnuaireAnnuaireBundle:Comment')->getDerniersComments(5);
        
        return $this->render('AnnuaireAnnuaireBundle:BienEtre:index.html.twig', 
            array(
                'categories' => $categories,
                'lastPrests' => $lastPrests,
                'lastComments' => $lastComments
            )
        );
    }
    
    public function showCateg($id)
    {
       
        
        return $this->render('AnnuaireAnnuaireBundle:BienEtre:index.html.twig');
    }
}
