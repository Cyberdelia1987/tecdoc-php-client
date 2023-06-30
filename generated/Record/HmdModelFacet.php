<?php

namespace Myrzan\TecDocClient\Generated\Record;

class HmdModelFacet
{
    private int $total;
    /**
     * @var LinkageTargetHMDModelFacetCount[]
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