<?php

namespace Myrzan\TecDocClient\Generated;

/**
 * Class representing GenericArticlesRequestType
 *
 * 
 * XSD Type: genericArticlesRequest
 */
class GenericArticlesRequestType extends GenericArticlesRequestSrcType
{

    /**
     * @var string $articleCountry
     */
    private $articleCountry = null;

    /**
     * @var string $lang
     */
    private $lang = null;

    /**
     * @var bool $linked
     */
    private $linked = null;

    /**
     * @var int $linkingTargetId
     */
    private $linkingTargetId = null;

    /**
     * @var string $linkingTargetType
     */
    private $linkingTargetType = null;

    /**
     * Your assigned TecDoc Provider Id
     *
     * @var int $provider
     */
    private $provider = null;

    /**
     * @var bool $searchTreeNodes
     */
    private $searchTreeNodes = null;

    /**
     * Gets as articleCountry
     *
     * @return string
     */
    public function getArticleCountry()
    {
        return $this->articleCountry;
    }

    /**
     * Sets a new articleCountry
     *
     * @param string $articleCountry
     * @return self
     */
    public function setArticleCountry($articleCountry)
    {
        $this->articleCountry = $articleCountry;
        return $this;
    }

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
     * Gets as linked
     *
     * @return bool
     */
    public function getLinked()
    {
        return $this->linked;
    }

    /**
     * Sets a new linked
     *
     * @param bool $linked
     * @return self
     */
    public function setLinked($linked)
    {
        $this->linked = $linked;
        return $this;
    }

    /**
     * Gets as linkingTargetId
     *
     * @return int
     */
    public function getLinkingTargetId()
    {
        return $this->linkingTargetId;
    }

    /**
     * Sets a new linkingTargetId
     *
     * @param int $linkingTargetId
     * @return self
     */
    public function setLinkingTargetId($linkingTargetId)
    {
        $this->linkingTargetId = $linkingTargetId;
        return $this;
    }

    /**
     * Gets as linkingTargetType
     *
     * @return string
     */
    public function getLinkingTargetType()
    {
        return $this->linkingTargetType;
    }

    /**
     * Sets a new linkingTargetType
     *
     * @param string $linkingTargetType
     * @return self
     */
    public function setLinkingTargetType($linkingTargetType)
    {
        $this->linkingTargetType = $linkingTargetType;
        return $this;
    }

    /**
     * Gets as provider
     *
     * Your assigned TecDoc Provider Id
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
     * Your assigned TecDoc Provider Id
     *
     * @param int $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as searchTreeNodes
     *
     * @return bool
     */
    public function getSearchTreeNodes()
    {
        return $this->searchTreeNodes;
    }

    /**
     * Sets a new searchTreeNodes
     *
     * @param bool $searchTreeNodes
     * @return self
     */
    public function setSearchTreeNodes($searchTreeNodes)
    {
        $this->searchTreeNodes = $searchTreeNodes;
        return $this;
    }


}

