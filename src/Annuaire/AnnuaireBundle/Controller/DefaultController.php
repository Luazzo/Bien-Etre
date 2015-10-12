<?php

namespace Annuaire\AnnuaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AnnuaireAnnuaireBundle:Default:index.html.twig', array('name' => $name));
    }
}
