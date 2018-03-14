<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="GemeenteAmsterdam\FixxxSchuldhulp\Repository\DossierRepository")
 * @ORM\Table
 * @UniqueEntity("regasNummer")
 * @UniqueEntity("allegroNummer")
 */
class Dossier
{
    const STATUS_MADI = 'madi';
    const STATUS_GKA = 'gka';
    const STATUS_GESLOTEN = 'gesloten';

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=false)
     */
    private $dossierTemplate;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=false)
     */
    private $status;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     * @Assert\Length(min=1, max=255)
     */
    private $clientNaam;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $partnerNaam;

    /**
     * @var Schuldhulpbureau
     * @ORM\ManyToOne(targetEntity="Schuldhulpbureau")
     * @ORM\JoinColumn(name="schuldhulpbureau_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank
     */
    private $schuldhulpbureau;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="medewerker_schuldhulpbureau_id", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank
     */
    private $medewerkerSchuldhulpbureau;

    /**
     * @var Team
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id", nullable=true)
     */
    private $teamGka;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $regasNummer;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $allegroNummer;

    /**
     * @var Gebruiker
     * @ORM\ManyToOne(targetEntity="Gebruiker")
     * @ORM\JoinColumn(name="aanmaker_id", referencedColumnName="id", nullable=false)
     */
    private $aanmaker;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $aanmaakDatumTijd;

    /**
     * @var Voorlegger
     * @ORM\OneToOne(targetEntity="Voorlegger", mappedBy="dossier", orphanRemoval=true, cascade={"persist"})
     * @ORM\JoinColumn(name="voorlegger_id", referencedColumnName="id", nullable=true)
     * @Assert\Valid
     */
    private $voorlegger;

    /**
     * @var DossierDocument[]|ArrayCollection
     * @ORM\OneToMany(targetEntity="DossierDocument", mappedBy="dossier", cascade={"persist"})
     */
    private $documenten;

    public function __construct()
    {
        $this->aanmaakDatumTijd = new \DateTime();
        $this->documenten = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDossierTemplate()
    {
        return $this->dossierTemplate;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getClientNaam()
    {
        return $this->clientNaam;
    }

    public function getPartnerNaam()
    {
        return $this->partnerNaam;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau
     */
    public function getSchuldhulpbureau()
    {
        return $this->schuldhulpbureau;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker
     */
    public function getMedewerkerSchuldhulpbureau()
    {
        return $this->medewerkerSchuldhulpbureau;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team
     */
    public function getTeamGka()
    {
        return $this->teamGka;
    }

    public function getRegasNummer()
    {
        return $this->regasNummer;
    }

    public function getAllegroNummer()
    {
        return $this->allegroNummer;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker
     */
    public function getAanmaker()
    {
        return $this->aanmaker;
    }

    /**
     * @return \DateTime
     */
    public function getAanmaakDatumTijd()
    {
        return $this->aanmaakDatumTijd;
    }

    public function setDossierTemplate($dossierTemplate)
    {
        $this->dossierTemplate = $dossierTemplate;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setClientNaam($clientNaam)
    {
        $this->clientNaam = $clientNaam;
    }

    public function setPartnerNaam($partnerNaam)
    {
        $this->partnerNaam = $partnerNaam;
    }

    /**
     * @param Schuldhulpbureau $schuldhulpbureau
     */
    public function setSchuldhulpbureau(Schuldhulpbureau $schuldhulpbureau)
    {
        $this->schuldhulpbureau = $schuldhulpbureau;
    }

    /**
     * @param Gebruiker $medewerkerSchuldhulpbureau
     */
    public function setMedewerkerSchuldhulpbureau(Gebruiker $medewerkerSchuldhulpbureau)
    {
        $this->medewerkerSchuldhulpbureau = $medewerkerSchuldhulpbureau;
    }

    /**
     * @param Team $teamGka
     */
    public function setTeamGka(Team $teamGka = null)
    {
        $this->teamGka = $teamGka;
    }

    public function setRegasNummer($regasNummer)
    {
        $this->regasNummer = $regasNummer;
    }

    public function setAllegroNummer($allegroNummer)
    {
        $this->allegroNummer = $allegroNummer;
    }

    public function setAanmaker($aanmaker)
    {
        $this->aanmaker = $aanmaker;
    }

    /**
     * @param \DateTime $aanmaakDatumTijd
     */
    public function setAanmaakDatumTijd(\DateTime $aanmaakDatumTijd)
    {
        $this->aanmaakDatumTijd = $aanmaakDatumTijd;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger
     */
    public function getVoorlegger()
    {
        return $this->voorlegger;
    }

    /**
     * @param Voorlegger $voorlegger
     */
    public function setVoorlegger(Voorlegger $voorlegger = null)
    {
        $oldVoorlegger = $this->voorlegger;
        $this->voorlegger = $voorlegger;
        if ($oldVoorlegger !== null) {
            $oldVoorlegger->setDossier(null);
        }
        if ($voorlegger !== null && $voorlegger->getDossier() !== $this) {
            $voorlegger->setDossier($this);
        }
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument[]|\Doctrine\Common\Collections\ArrayCollection
     */
    public function getDocumenten()
    {
        return $this->documenten;
    }

    /**
     * @param string $onderwerp
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierDocument[]|\Doctrine\Common\Collections\ArrayCollection
     */
    public function getDocumentenByOnderwerp($onderwerp)
    {
        return $this->documenten->filter(function (DossierDocument $dossierDocument) use ($onderwerp) {
            return $dossierDocument->getOnderwerp() === $onderwerp;
        });
    }

    public function hasDocument(DossierDocument $document)
    {
        return $this->documenten->contains($document);
    }

    public function addDocument(DossierDocument $document)
    {
        if ($this->hasDocument($document) === false) {
            $this->documenten->add($document);
        }
        if ($document->getDossier() !== $this) {
            $document->setDossier($this);
        }
    }

    public static function getStatussen()
    {
        return [
            self::STATUS_MADI => self::STATUS_MADI,
            self::STATUS_GKA => self::STATUS_GKA,
            self::STATUS_GESLOTEN => self::STATUS_GESLOTEN
        ];
    }
}