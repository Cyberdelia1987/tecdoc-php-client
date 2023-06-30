<?php

namespace Myrzan\TecDocClient\Generated\Request;

/**
 * Class representing Criteria2
 *
 * 
 * XSD Type: criteria2Request
 */
class Criteria2 
{

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var int $provider
     */
    private $provider = null;

    /**
     * Gets as lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Sets a new lang
     *
     * @param string $lang
     * @return self
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Gets as provider
     *
     * @return int
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * @param int $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }


}
