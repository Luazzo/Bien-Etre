<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Entity\PromoRepository")
 */
class Promo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var Prestataire
     *
     * @ORM\ManyToOne(targetEntity="Prestataire", inversedBy="promos")
     * @ORM\JoinColumn(name="prestataire", referencedColumnName="id")
     */
    private $prestataire;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="pdf", type="string", length=255)
     */
    private $pdf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date")
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date")
     */
    private $datefin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateaffiche", type="date")
     */
    private $dateaffiche;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefinaffiche", type="date")
     */
    private $datefinaffiche;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Promo
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Promo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pdf
     *
     * @param string $pdf
     *
     * @return Promo
     */
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }

    /**
     * Get pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return Promo
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return Promo
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set dateaffiche
     *
     * @param \DateTime $dateaffiche
     *
     * @return Promo
     */
    public function setDateaffiche($dateaffiche)
    {
        $this->dateaffiche = $dateaffiche;

        return $this;
    }

    /**
     * Get dateaffiche
     *
     * @return \DateTime
     */
    public function getDateaffiche()
    {
        return $this->dateaffiche;
    }

    /**
     * Set datefinaffiche
     *
     * @param \DateTime $datefinaffiche
     *
     * @return Promo
     */
    public function setDatefinaffiche($datefinaffiche)
    {
        $this->datefinaffiche = $datefinaffiche;

        return $this;
    }

    /**
     * Get datefinaffiche
     *
     * @return \DateTime
     */
    public function getDatefinaffiche()
    {
        return $this->datefinaffiche;
    }

    /**
     * Set prestataire
     *
     * @param \Annuaire\AnnuaireBundle\Entity\Prestataire $prestataire
     *
     * @return Promo
     */
    public function setPrestataire(\Annuaire\AnnuaireBundle\Entity\Prestataire $prestataire = null)
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    /**
     * Get prestataire
     *
     * @return \Annuaire\AnnuaireBundle\Entity\Prestataire
     */
    public function getPrestataire()
    {
        return $this->prestataire;
    }
}
