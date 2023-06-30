<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetVehicleModelSeriesFacetCount
{
    private int $id;
    private string $name;
    private int $beginYearMonth;
    private int $endYearMonth;
    private int $count;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getBeginYearMonth(): int
    {
        return $this->beginYearMonth;
    }

    /**
     * @return int
     */
    public function getEndYearMonth(): int
    {
        return $this->endYearMonth;
    }
    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $id
     * @return LinkageTargetVehicleModelSeriesFacetCount
     */
    public function setId(int $id): LinkageTargetVehicleModelSeriesFacetCount
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name
     * @return LinkageTargetVehicleModelSeriesFacetCount
     */
    public function setName(string $name): LinkageTargetVehicleModelSeriesFacetCount
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param int $beginYearMonth
     * @return LinkageTargetVehicleModelSeriesFacetCount
     */
    public function setBeginYearMonth(int $beginYearMonth): LinkageTargetVehicleModelSeriesFacetCount
    {
        $this->beginYearMonth = $beginYearMonth;
        return $this;
    }

    /**
     * @param int $endYearMonth
     * @return LinkageTargetVehicleModelSeriesFacetCount
     */
    public function setEndYearMonth(int $endYearMonth): LinkageTargetVehicleModelSeriesFacetCount
    {
        $this->endYearMonth = $endYearMonth;
        return $this;
    }

    /**
     * @param int $count
     * @return LinkageTargetVehicleModelSeriesFacetCount
     */
    public function setCount(int $count): LinkageTargetVehicleModelSeriesFacetCount
    {
        $this->count = $count;
        return $this;
    }
}