<?php

namespace Annuaire\AnnuaireBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Annuaire\AnnuaireBundle\Entity\User;
use Annuaire\AnnuaireBundle\Entity\Membre;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
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
