<?php

namespace Annuaire\AnnuaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\AnnuaireBundle\Entity\StageRepository")
 */
class Stage
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
     * @ORM\Column(name="tarif", type="string", length=255)
     */
    private $tarif;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text")
     */
    private $info;

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
     * @var string
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
     * @return Stage
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
     * @return Stage
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
     * Set tarif
     *
     * @param string $tarif
     *
     * @return Stage
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return string
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set info
     *
     * @param string $info
     *
     * @return Stage
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return Stage
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
     * @return Stage
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
     * @return Stage
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
     * @return Stage
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
}

