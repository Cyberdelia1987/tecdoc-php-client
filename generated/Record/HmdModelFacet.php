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

    /**
     * @param int $total
     * @return HmdModelFacet
     */
    public function setTotal(int $total): HmdModelFacet
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @param array $counts
     * @return HmdModelFacet
     */
    public function setCounts(array $counts): HmdModelFacet
    {
        $this->counts = $counts;
        return $this;
    }
}