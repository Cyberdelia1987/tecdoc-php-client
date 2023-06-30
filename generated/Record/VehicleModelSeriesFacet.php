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

    /**
     * @param int $total
     * @return VehicleModelSeriesFacet
     */
    public function setTotal(int $total): VehicleModelSeriesFacet
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @param LinkageTargetVehicleModelSeriesFacetCount[] $counts
     * @return VehicleModelSeriesFacet
     */
    public function setCounts(array $counts): VehicleModelSeriesFacet
    {
        $this->counts = $counts;
        return $this;
    }
}