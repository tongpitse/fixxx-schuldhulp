<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TCasusPVAProduct implements RequestInterface
{

    /**
     * @var string
     */
    private $Naam;

    /**
     * @var int
     */
    private $IDAanvraag;

    /**
     * @var bool
     */
    private $Geactiveerd;

    /**
     * @var \DateTimeInterface
     */
    private $DatumActivering;

    /**
     * Constructor
     *
     * @var string $Naam
     * @var int $IDAanvraag
     * @var bool $Geactiveerd
     * @var \DateTimeInterface $DatumActivering
     */
    public function __construct($Naam, $IDAanvraag, $Geactiveerd, $DatumActivering)
    {
        $this->Naam = $Naam;
        $this->IDAanvraag = $IDAanvraag;
        $this->Geactiveerd = $Geactiveerd;
        $this->DatumActivering = $DatumActivering;
    }

    /**
     * @return string
     */
    public function getNaam()
    {
        return $this->Naam;
    }

    /**
     * @param string $Naam
     * @return TCasusPVAProduct
     */
    public function withNaam($Naam)
    {
        $new = clone $this;
        $new->Naam = $Naam;

        return $new;
    }

    /**
     * @return int
     */
    public function getIDAanvraag()
    {
        return $this->IDAanvraag;
    }

    /**
     * @param int $IDAanvraag
     * @return TCasusPVAProduct
     */
    public function withIDAanvraag($IDAanvraag)
    {
        $new = clone $this;
        $new->IDAanvraag = $IDAanvraag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGeactiveerd()
    {
        return $this->Geactiveerd;
    }

    /**
     * @param bool $Geactiveerd
     * @return TCasusPVAProduct
     */
    public function withGeactiveerd($Geactiveerd)
    {
        $new = clone $this;
        $new->Geactiveerd = $Geactiveerd;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumActivering()
    {
        return $this->DatumActivering;
    }

    /**
     * @param \DateTimeInterface $DatumActivering
     * @return TCasusPVAProduct
     */
    public function withDatumActivering($DatumActivering)
    {
        $new = clone $this;
        $new->DatumActivering = $DatumActivering;

        return $new;
    }


}

