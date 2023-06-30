<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetAxle
{
    //Axle Id
    private int $id;
    //Axle Description
    private int $description;
    //Manufacturer Id
    private int $mfrId;
    //Manufacturer Name
    private int $mfrName;
    //Manufacturer Short Name
    private int $mfrShortName;
    //Vehicle Model Series Id (if applicable)
    private ?int $vehicleModelSeriesId;
    //Vehicle Model Series Name (if applicable)
    private ?int $vehicleModelSeriesName;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getDescription(): int
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getMfrId(): int
    {
        return $this->mfrId;
    }

    /**
     * @return int
     */
    public function getMfrName(): int
    {
        return $this->mfrName;
    }

    /**
     * @return int
     */
    public function getMfrShortName(): int
    {
        return $this->mfrShortName;
    }

    /**
     * @return int|null
     */
    public function getVehicleModelSeriesId(): ?int
    {
        return $this->vehicleModelSeriesId;
    }

    /**
     * @return int|null
     */
    public function getVehicleModelSeriesName(): ?int
    {
        return $this->vehicleModelSeriesName;
    }
}