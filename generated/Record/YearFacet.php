<?php

namespace Myrzan\TecDocClient\Generated\Record;

class YearFacet
{
    private int $total;
    /**
     * @var LinkageTargetYearFacetCounts[]
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