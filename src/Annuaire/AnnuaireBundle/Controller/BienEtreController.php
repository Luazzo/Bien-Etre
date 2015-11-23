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

        $categories = $em->getRepository('AnnuaireAnnuaireBundle:Categorie')->findAll();
        $lastPrests = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->getDerniers(4);
        
        return $this->render('AnnuaireAnnuaireBundle:BienEtre:index.html.twig', array(
            'test'=>"teeest",
            'categories' => $categories,
            'lastPrests' => $lastPrests
        ));
    }
}
