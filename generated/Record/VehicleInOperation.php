<?php

namespace Myrzan\TecDocClient\Generated\Record;

class VehicleInOperation
{
    private int $count;
    private string $dataSource;
    private string $dateFrom;
    private string $dateTo;

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return string
     */
    public function getDataSource(): string
    {
        return $this->dataSource;
    }

    /**
     * @return string
     */
    public function getDateFrom(): string
    {
        return $this->dateFrom;
    }

    /**
     * @return string
     */
    public function getDateTo(): string
    {
        return $this->dateTo;
    }
}