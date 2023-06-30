<?php

namespace Myrzan\TecDocClient\Generated\Record;

class VehicleModelSeriesFacet
{
    private int $total;
    /**
     * @var LinkageTargetVehicleModelSeriesFacetCount[]
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