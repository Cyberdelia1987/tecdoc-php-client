<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetTypeFacet
{
    private int $total;
    /**
     * @var LinkageTargetTypeFacetCount[]
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