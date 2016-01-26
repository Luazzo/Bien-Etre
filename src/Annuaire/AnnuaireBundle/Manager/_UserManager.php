<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserManager
 *
 * @author Irina
 */

//namespace Annuaire\AnnuaireBundle\Manager\UserManager;
namespace FOS\UserBundle\Model\UserManager;
//use FOS\UserBundle\Model\UserManager as BaseUserManager;


use Annuaire\AnnuaireBundle\Entity\Membre;
use Annuaire\AnnuaireBundle\Entity\Prestataire;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Util\CanonicalizerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class UserManager extends BaseUserManager
{
    protected $objectManager;
    protected $class;
    protected $repository;

    /**
     * Constructor.
     *
     * @param EncoderFactoryInterface $encoderFactory
     * @param CanonicalizerInterface  $usernameCanonicalizer
     * @param CanonicalizerInterface  $emailCanonicalizer
     * @param ObjectManager           $om
     * @param string                  $class
     */
    public function __construct(EncoderFactoryInterface $encoderFactory, CanonicalizerInterface $usernameCanonicalizer, CanonicalizerInterface $emailCanonicalizer, ObjectManager $om, $class)
    {
        parent::__construct($encoderFactory, $usernameCanonicalizer, $emailCanonicalizer);

        $this->objectManager = $om;
        $this->repository = $om->getRepository($class);

        $metadata = $om->getClassMetadata($class);
        $this->class = $metadata->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(Request $request)
    {
        $type = $this->$request->query->get("type");
        var_dump($type);
        
        if($type === "prestataire"){
            $class = "\Annuaire\AnnuaireBundle\Entity\Prestataire";
            var_dump("p");
        }else{
            $class = "\Annuaire\AnnuaireBundle\Entity\Membre";
           var_dump("m");
        }
        return $this->class;
    }

    /**
     * {@inheritDoc}
     */
    public function deleteUser(UserInterface $user)
    {
        $this->objectManager->remove($user);
        $this->objectManager->flush();
    }
}