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
}