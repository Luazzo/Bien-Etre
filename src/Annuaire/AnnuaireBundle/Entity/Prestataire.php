<?php

namespace Annuaire\AnnuaireBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Prestataire extends User
{
    public function __construct() {
        $this->typeuser = "prestataire";     
    }
    

    /**
     * @var string
     */
    private $nomprest;

    /**
     * @var string
     */
    private $site;

    /**
     * @var string
     */
    private $emailContact;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $tva;



    /**
     * Set nomprest
     *
     * @param string $nomprest
     *
     * @return Prestataire
     */
    public function setNomprest($nomprest)
    {
        $this->nomprest = $nomprest;

        return $this;
    }

    /**
     * Get nomprest
     *
     * @return string
     */
    public function getNomprest()
    {
        return $this->nomprest;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Prestataire
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set emailContact
     *
     * @param string $emailContact
     *
     * @return Prestataire
     */
    public function setEmailContact($emailContact)
    {
        $this->emailContact = $emailContact;

        return $this;
    }

    /**
     * Get emailContact
     *
     * @return string
     */
    public function getEmailContact()
    {
        return $this->emailContact;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Prestataire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set tva
     *
     * @param string $tva
     *
     * @return Prestataire
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return string
     */
    public function getTva()
    {
        return $this->tva;
    }
}
