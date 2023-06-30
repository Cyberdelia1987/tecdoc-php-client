<?php

namespace Myrzan\TecDocClient\Generated\Record;

class MfrFacet
{
    private int $total;
    /**
     * @var LinkageTargetMfrFacetCount[]
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
     * @param int $total
     * @return MfrFacet
     */
    public function setTotal(int $total): MfrFacet
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return array
     */
    public function getCounts(): array
    {
        return $this->counts;
    }

    /**
     * @param LinkageTargetMfrFacetCount[] $counts
     * @return MfrFacet
     */
    public function setCounts(array $counts): MfrFacet
    {
        $this->counts = $counts;
        return $this;
    }

}