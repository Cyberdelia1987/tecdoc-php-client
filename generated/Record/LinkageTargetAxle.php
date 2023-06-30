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

    /**
     * @param int $id
     * @return LinkageTargetAxle
     */
    public function setId(int $id): LinkageTargetAxle
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int $description
     * @return LinkageTargetAxle
     */
    public function setDescription(int $description): LinkageTargetAxle
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param int $mfrId
     * @return LinkageTargetAxle
     */
    public function setMfrId(int $mfrId): LinkageTargetAxle
    {
        $this->mfrId = $mfrId;
        return $this;
    }

    /**
     * @param int $mfrName
     * @return LinkageTargetAxle
     */
    public function setMfrName(int $mfrName): LinkageTargetAxle
    {
        $this->mfrName = $mfrName;
        return $this;
    }

    /**
     * @param int $mfrShortName
     * @return LinkageTargetAxle
     */
    public function setMfrShortName(int $mfrShortName): LinkageTargetAxle
    {
        $this->mfrShortName = $mfrShortName;
        return $this;
    }

    /**
     * @param int|null $vehicleModelSeriesId
     * @return LinkageTargetAxle
     */
    public function setVehicleModelSeriesId(?int $vehicleModelSeriesId): LinkageTargetAxle
    {
        $this->vehicleModelSeriesId = $vehicleModelSeriesId;
        return $this;
    }

    /**
     * @param int|null $vehicleModelSeriesName
     * @return LinkageTargetAxle
     */
    public function setVehicleModelSeriesName(?int $vehicleModelSeriesName): LinkageTargetAxle
    {
        $this->vehicleModelSeriesName = $vehicleModelSeriesName;
        return $this;
    }
}