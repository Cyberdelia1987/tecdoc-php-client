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

    /**
     * @param int $total
     * @return DescriptionFacet
     */
    public function setTotal(int $total): DescriptionFacet
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @param LinkageTargetDescriptionFacetCounts[] $counts
     * @return DescriptionFacet
     */
    public function setCounts(array $counts): DescriptionFacet
    {
        $this->counts = $counts;
        return $this;
    }
}