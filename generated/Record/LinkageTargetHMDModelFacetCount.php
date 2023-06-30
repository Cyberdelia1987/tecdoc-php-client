<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetHMDModelFacetCount
{
    private int $mfrId;
    private int $hmdMfrModelId;
    private string $name;
    private int $count;

    /**
     * @return int
     */
    public function getMfrId(): int
    {
        return $this->mfrId;
    }

    /**
     * @return int
     */
    public function getHmdMfrModelId(): int
    {
        return $this->hmdMfrModelId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $mfrId
     * @return LinkageTargetHMDModelFacetCount
     */
    public function setMfrId(int $mfrId): LinkageTargetHMDModelFacetCount
    {
        $this->mfrId = $mfrId;
        return $this;
    }

    /**
     * @param int $hmdMfrModelId
     * @return LinkageTargetHMDModelFacetCount
     */
    public function setHmdMfrModelId(int $hmdMfrModelId): LinkageTargetHMDModelFacetCount
    {
        $this->hmdMfrModelId = $hmdMfrModelId;
        return $this;
    }

    /**
     * @param string $name
     * @return LinkageTargetHMDModelFacetCount
     */
    public function setName(string $name): LinkageTargetHMDModelFacetCount
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param int $count
     * @return LinkageTargetHMDModelFacetCount
     */
    public function setCount(int $count): LinkageTargetHMDModelFacetCount
    {
        $this->count = $count;
        return $this;
    }
}