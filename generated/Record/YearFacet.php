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

    /**
     * @param int $total
     * @return YearFacet
     */
    public function setTotal(int $total): YearFacet
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @param LinkageTargetYearFacetCounts[] $counts
     * @return YearFacet
     */
    public function setCounts(array $counts): YearFacet
    {
        $this->counts = $counts;
        return $this;
    }
}