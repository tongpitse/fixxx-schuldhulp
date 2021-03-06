<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LoginServiceNieuwContact implements RequestInterface
{

    /**
     * @var int
     */
    private $OrganisatieCode;

    /**
     * @var string
     */
    private $Achternaam;

    /**
     * @var string
     */
    private $Voorvoegsels;

    /**
     * @var string
     */
    private $Voornaam;

    /**
     * @var string
     */
    private $Voorletters;

    /**
     * @var string
     */
    private $Geslacht;

    /**
     * @var int
     */
    private $GeboorteDatum;

    /**
     * @var string
     */
    private $Telefoonnummer;

    /**
     * @var string
     */
    private $EmailAdres;

    /**
     * @var string
     */
    private $Wachtwoord;

    /**
     * Constructor
     *
     * @var int $OrganisatieCode
     * @var string $Achternaam
     * @var string $Voorvoegsels
     * @var string $Voornaam
     * @var string $Voorletters
     * @var string $Geslacht
     * @var int $GeboorteDatum
     * @var string $Telefoonnummer
     * @var string $EmailAdres
     * @var string $Wachtwoord
     */
    public function __construct($OrganisatieCode, $Achternaam, $Voorvoegsels, $Voornaam, $Voorletters, $Geslacht, $GeboorteDatum, $Telefoonnummer, $EmailAdres, $Wachtwoord)
    {
        $this->OrganisatieCode = $OrganisatieCode;
        $this->Achternaam = $Achternaam;
        $this->Voorvoegsels = $Voorvoegsels;
        $this->Voornaam = $Voornaam;
        $this->Voorletters = $Voorletters;
        $this->Geslacht = $Geslacht;
        $this->GeboorteDatum = $GeboorteDatum;
        $this->Telefoonnummer = $Telefoonnummer;
        $this->EmailAdres = $EmailAdres;
        $this->Wachtwoord = $Wachtwoord;
    }

    /**
     * @return int
     */
    public function getOrganisatieCode()
    {
        return $this->OrganisatieCode;
    }

    /**
     * @param int $OrganisatieCode
     * @return LoginServiceNieuwContact
     */
    public function withOrganisatieCode($OrganisatieCode)
    {
        $new = clone $this;
        $new->OrganisatieCode = $OrganisatieCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAchternaam()
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return LoginServiceNieuwContact
     */
    public function withAchternaam($Achternaam)
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels()
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return LoginServiceNieuwContact
     */
    public function withVoorvoegsels($Voorvoegsels)
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoornaam()
    {
        return $this->Voornaam;
    }

    /**
     * @param string $Voornaam
     * @return LoginServiceNieuwContact
     */
    public function withVoornaam($Voornaam)
    {
        $new = clone $this;
        $new->Voornaam = $Voornaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters()
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return LoginServiceNieuwContact
     */
    public function withVoorletters($Voorletters)
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return string
     */
    public function getGeslacht()
    {
        return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return LoginServiceNieuwContact
     */
    public function withGeslacht($Geslacht)
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
    }

    /**
     * @return int
     */
    public function getGeboorteDatum()
    {
        return $this->GeboorteDatum;
    }

    /**
     * @param int $GeboorteDatum
     * @return LoginServiceNieuwContact
     */
    public function withGeboorteDatum($GeboorteDatum)
    {
        $new = clone $this;
        $new->GeboorteDatum = $GeboorteDatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelefoonnummer()
    {
        return $this->Telefoonnummer;
    }

    /**
     * @param string $Telefoonnummer
     * @return LoginServiceNieuwContact
     */
    public function withTelefoonnummer($Telefoonnummer)
    {
        $new = clone $this;
        $new->Telefoonnummer = $Telefoonnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmailAdres()
    {
        return $this->EmailAdres;
    }

    /**
     * @param string $EmailAdres
     * @return LoginServiceNieuwContact
     */
    public function withEmailAdres($EmailAdres)
    {
        $new = clone $this;
        $new->EmailAdres = $EmailAdres;

        return $new;
    }

    /**
     * @return string
     */
    public function getWachtwoord()
    {
        return $this->Wachtwoord;
    }

    /**
     * @param string $Wachtwoord
     * @return LoginServiceNieuwContact
     */
    public function withWachtwoord($Wachtwoord)
    {
        $new = clone $this;
        $new->Wachtwoord = $Wachtwoord;

        return $new;
    }


}

