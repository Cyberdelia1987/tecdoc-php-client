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

}