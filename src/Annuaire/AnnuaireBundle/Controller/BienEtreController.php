<?php

namespace Annuaire\AnnuaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BienEtreController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnnuaireAnnuaireBundle:BienEtre:index.html.twig');
    }
}
