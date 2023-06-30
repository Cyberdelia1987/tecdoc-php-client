<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetDescriptionFacetCounts
{
    private string $description;
    private int $count;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param string $description
     * @return LinkageTargetDescriptionFacetCounts
     */
    public function setDescription(string $description): LinkageTargetDescriptionFacetCounts
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param int $count
     * @return LinkageTargetDescriptionFacetCounts
     */
    public function setCount(int $count): LinkageTargetDescriptionFacetCounts
    {
        $this->count = $count;
        return $this;
    }
}