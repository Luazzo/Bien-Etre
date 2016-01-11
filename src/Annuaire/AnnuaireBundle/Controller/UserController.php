<?php

namespace Annuaire\AnnuaireBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Annuaire\AnnuaireBundle\Entity\User;
use Annuaire\AnnuaireBundle\Entity\Membre;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function profilPrestAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        /*$categories = $em->getRepository('AnnuaireAnnuaireBundle:Categorie')->findAllavecImg(8);
        $listPrests = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->findBy(array(), array('nom' => 'ASC'));
        $lastComments = $em->getRepository('AnnuaireAnnuaireBundle:Comment')->getDerniersComments(5);
        $localites = $em->getRepository('AnnuaireAnnuaireBundle:Localite')->getLocalites();
        $categs = $em->getRepository('AnnuaireAnnuaireBundle:Categorie')->getCategories();*/
        $prest = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->getPrestataireProfil($id);
        $slideImgs = $em->getRepository('AnnuaireAnnuaireBundle:Image')->getPrestSliderImages($id);
        $galImgs = $em->getRepository('AnnuaireAnnuaireBundle:Image')->getPrestGalImages($id);
        $comments = $em->getRepository('AnnuaireAnnuaireBundle:Comment')->getPrestComments($id);
        
        return $this->render('AnnuaireAnnuaireBundle:BienEtre:profilePrest.html.twig', 
            array(
                'slideImgs' => $slideImgs,
                'prest' => $prest,
                'galPrest' => $galImgs,
                'prestComments' => $comments
                /*
                'categories' => $categories,
                'lastPrests' => $lastPrests,
                'lastComments' => $lastComments,
                'localites' => $localites,
                'categs' => $categs,
                'listPrests' => $listPrests,
                'localite' => "ok",
                'prestAbout' => ""
                */
            )
        );
    }
    
    public function inscriptionAction(Request $request)
    {
        $user = new Membre();        
        $form = $this->createForm(new \Annuaire\AnnuaireBundle\Form\MembreType(), $user);
        $form->handleRequest($request);
        
        if($form->isValid()){
          $em = $this->getDoctrine()->getManager();
          $em->persist($user);
          $em->flush();
          return $this->redirect(
                  $this->generateUrl('annuaire_annuaire_homepage')
                  );
        }
      
        return $this->render(
                'AnnuaireAnnuaireBundle:User:inscription.html.twig', 
                array('form'=>$form->createView())
            );
    }
    
    public function showProfilAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $prest = $em->getRepository('AnnuaireAnnuaireBundle:Prestataire')->getPrestataireProfil($id);
        
        return $this->render('AnnuaireAnnuaireBundle:User:profilPrest.html.twig', 
            array(
                'prest' => $prest
            )
        );
        
    }
    
}
