<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RelatiecodeBedrijfcodeArray implements RequestInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatiecodeBedrijfcode
     */
    private $TRelatiecodeBedrijfcode;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatiecodeBedrijfcode $TRelatiecodeBedrijfcode
     */
    public function __construct($TRelatiecodeBedrijfcode)
    {
        $this->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatiecodeBedrijfcode
     */
    public function getTRelatiecodeBedrijfcode()
    {
        return $this->TRelatiecodeBedrijfcode;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatiecodeBedrijfcode $TRelatiecodeBedrijfcode
     * @return RelatiecodeBedrijfcodeArray
     */
    public function withTRelatiecodeBedrijfcode($TRelatiecodeBedrijfcode)
    {
        $new = clone $this;
        $new->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;

        return $new;
    }


}

