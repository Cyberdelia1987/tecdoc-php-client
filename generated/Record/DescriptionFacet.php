<?php

namespace Myrzan\TecDocClient\Generated\Record;

class DescriptionFacet
{
    private int $total;
    /**
     * @var LinkageTargetDescriptionFacetCounts[]
     */
    private array $counts;

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return array
     */
    public function getCounts(): array
    {
        return $this->counts;
    }
}