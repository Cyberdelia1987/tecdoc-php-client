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

    /**
     * @param int $total
     * @return LinkageTargetTypeFacet
     */
    public function setTotal(int $total): LinkageTargetTypeFacet
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @param LinkageTargetTypeFacetCount[] $counts
     * @return LinkageTargetTypeFacet
     */
    public function setCounts(array $counts): LinkageTargetTypeFacet
    {
        $this->counts = $counts;
        return $this;
    }
}