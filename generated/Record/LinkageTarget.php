<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTarget
{
    private ?int $linkageTargetId;
    private ?string $linkageTargetType;
    private ?string $subLinkageTargetType;
    private ?string $description;
    private ?int $mfrId;
    private ?string $mfrName;
    private ?string $mfrShortName;
    private ?int $vehicleModelSeriesId;
    private ?string $vehicleModelSeriesName;
    private ?int $hmdMfrModelId;
    private ?string $hmdMfrModelName;
    private ?string $beginYearMonth;
    private ?string $endYearMonth;
    private ?int $rmiTypeId;
    private ?int $axleStyleKey;
    private ?string $axleStyle;
    private ?int $axleTypeKey;
    private ?string $axleType;
    private ?int $axleBodyKey;
    private ?string $axleBody;
    private ?int $wheelMountingKey;
    private ?string $wheelMounting;
    private ?int $axleLoadFromKg;
    private ?int $axleLoadToKg;
    /**
     * @var AxleBodyType[]
     */
    private array $axleBodyTypes;
    private ?int $brakeTypeKey;
    private ?string $brakeType;
    /**
     * @var VehicleImage[]
     */
    private array $vehicleImages;
    /**
     * KBA Number of the vehicle (if available)
     * @var string[]|null $kbaNumbers
     */
    private ?array $kbaNumbers;
    //Drive Type Key (from Key Table 82)
    private ?int $driveTypeKey;
    //Drive Type Description (from Key Table 82)
    private ?string $driveType;
    //Body Style Key (Key Table 86 for PC and HMD, Key Table 67 for CV)
    private ?int $bodyStyleKey;
    //Body Style Description (Key Table 86 for PC and HMD, Key Table 67 for CV)
    private ?string $bodyStyle;
    //fuelMixtureFormationTypeKey - optional; type int //Fuel Mixture Formation Type Key (from Key Table 97)
    private ?int $valves;
    //Fuel Mixture Formation Type Description (from Key Table 97)
    private ?string $fuelMixtureFormationType;
    //Fuel Type Key (from Key Table 88)
    private ?int $fuelTypeKey;
    //Fuel Type Description (from Key Table 88)
    private ?string $fuelType;
    //Engine Type Key (from Key Table 80)
    private ?int $engineTypeKey;
    //Engine Type Description (from Key Table 80)
    private ?string $engineType;
    private ?int $horsePowerFrom;
    private ?int $horsePowerTo;
    private ?int $kiloWattsFrom;
    private ?int $kiloWattsTo;
    private ?int $cylinders;
    private ?int $capacityCC;
    private ?int $capacityLiters;
    //The Aspiration Key (from Key Table 99)
    private ?int $aspirationKey;
    //The Aspiration Description (from Key Table 99)
    private ?string $aspiration;
    //The Cylinder Design Key (from Key Table 79)
    private ?int $cylinderDesignKey;
    //The Cylinder Design Description (from Key Table 79)
    private ?string $cylinderDesign;
    //The Cooling Type Key (from Key Table 76)
    private ?int $coolingTypeKey;
    //The Cooling Type Description (from Key Table 76)
    private ?string $coolingType;
    //The Bore (From Table #155)
    private ?int $boreDiameter;
    //The Stroke (From Table #155)
    private ?int $stroke;
    //The Engine Design Key (from Key Table 96)
    private ?int $engineConstructionTypeKey;
    //The Engine Design (from Key Table 96)
    private ?string $engineConstructionType;
    //The Valve Control Key (from Key Table 78)
    private ?int $valveControlKey;
    //The Valve Control (from Key Table 78)
    private ?string $valveControl;
    //The Number of crankshaft bearings (From Table #155)
    private ?int $crankshaftBearings;
    //The RPM KW From (From Table #155)
    private ?int $rpmKwFrom;
    //The Sales Description (From Table #155)
    private ?string $salesDescription;
    //The compressionFrom (From Table #155)
    private ?int $compressionFrom;
    //The compressionTo (From Table #155)
    private ?int $compressionTo;
    //The engineManagement Key (from Key Table 77)
    private ?int $engineManagementKey;
    //The engineManagement (from Key Table 77)
    private ?string $engineManagement;
    private ?int $tonnage;
    //The Axle Configuration Key (from Key Table 65)
    private ?int $axleConfigurationKey;
    //The Axle Configuration Description (from Key Table 65)
    private ?string $axleConfiguration;
    /**
     * @var LinkageTargetEngine[]
     */
    private array $engines;
    /**
     * @var LinkageTargetAxle[]
     */
    private array $axles;
    /**
     * @var LinkageTargetCab[]
     */
    private array $cabs;
    /**
     * @var LinkageTargetSecondaryType[]
     */
    private array $secondaryTypes;
    /**
     * @var LinkageTargetWheelBase[]
     */
    private array $wheelBases;
    /**
     * @var VehicleInOperation[]
     */
    private array $vehiclesInOperation;

    /**
     * @return int|null
     */
    public function getLinkageTargetId(): ?int
    {
        return $this->linkageTargetId;
    }

    /**
     * @param int|null $linkageTargetId
     * @return LinkageTarget
     */
    public function setLinkageTargetId(?int $linkageTargetId): LinkageTarget
    {
        $this->linkageTargetId = $linkageTargetId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLinkageTargetType(): ?string
    {
        return $this->linkageTargetType;
    }

    /**
     * @param string|null $linkageTargetType
     * @return LinkageTarget
     */
    public function setLinkageTargetType(?string $linkageTargetType): LinkageTarget
    {
        $this->linkageTargetType = $linkageTargetType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubLinkageTargetType(): ?string
    {
        return $this->subLinkageTargetType;
    }

    /**
     * @param string|null $subLinkageTargetType
     * @return LinkageTarget
     */
    public function setSubLinkageTargetType(?string $subLinkageTargetType): LinkageTarget
    {
        $this->subLinkageTargetType = $subLinkageTargetType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return LinkageTarget
     */
    public function setDescription(?string $description): LinkageTarget
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMfrId(): ?int
    {
        return $this->mfrId;
    }

    /**
     * @param int|null $mfrId
     * @return LinkageTarget
     */
    public function setMfrId(?int $mfrId): LinkageTarget
    {
        $this->mfrId = $mfrId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMfrName(): ?string
    {
        return $this->mfrName;
    }

    /**
     * @param string|null $mfrName
     * @return LinkageTarget
     */
    public function setMfrName(?string $mfrName): LinkageTarget
    {
        $this->mfrName = $mfrName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMfrShortName(): ?string
    {
        return $this->mfrShortName;
    }

    /**
     * @param string|null $mfrShortName
     * @return LinkageTarget
     */
    public function setMfrShortName(?string $mfrShortName): LinkageTarget
    {
        $this->mfrShortName = $mfrShortName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getVehicleModelSeriesId(): ?int
    {
        return $this->vehicleModelSeriesId;
    }

    /**
     * @param int|null $vehicleModelSeriesId
     * @return LinkageTarget
     */
    public function setVehicleModelSeriesId(?int $vehicleModelSeriesId): LinkageTarget
    {
        $this->vehicleModelSeriesId = $vehicleModelSeriesId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVehicleModelSeriesName(): ?string
    {
        return $this->vehicleModelSeriesName;
    }

    /**
     * @param string|null $vehicleModelSeriesName
     * @return LinkageTarget
     */
    public function setVehicleModelSeriesName(?string $vehicleModelSeriesName): LinkageTarget
    {
        $this->vehicleModelSeriesName = $vehicleModelSeriesName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHmdMfrModelId(): ?int
    {
        return $this->hmdMfrModelId;
    }

    /**
     * @param int|null $hmdMfrModelId
     * @return LinkageTarget
     */
    public function setHmdMfrModelId(?int $hmdMfrModelId): LinkageTarget
    {
        $this->hmdMfrModelId = $hmdMfrModelId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHmdMfrModelName(): ?string
    {
        return $this->hmdMfrModelName;
    }

    /**
     * @param string|null $hmdMfrModelName
     * @return LinkageTarget
     */
    public function setHmdMfrModelName(?string $hmdMfrModelName): LinkageTarget
    {
        $this->hmdMfrModelName = $hmdMfrModelName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBeginYearMonth(): ?string
    {
        return $this->beginYearMonth;
    }

    /**
     * @param string|null $beginYearMonth
     * @return LinkageTarget
     */
    public function setBeginYearMonth(?string $beginYearMonth): LinkageTarget
    {
        $this->beginYearMonth = $beginYearMonth;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndYearMonth(): ?string
    {
        return $this->endYearMonth;
    }

    /**
     * @param string|null $endYearMonth
     * @return LinkageTarget
     */
    public function setEndYearMonth(?string $endYearMonth): LinkageTarget
    {
        $this->endYearMonth = $endYearMonth;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRmiTypeId(): ?int
    {
        return $this->rmiTypeId;
    }

    /**
     * @param int|null $rmiTypeId
     * @return LinkageTarget
     */
    public function setRmiTypeId(?int $rmiTypeId): LinkageTarget
    {
        $this->rmiTypeId = $rmiTypeId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleStyleKey(): ?int
    {
        return $this->axleStyleKey;
    }

    /**
     * @param int|null $axleStyleKey
     * @return LinkageTarget
     */
    public function setAxleStyleKey(?int $axleStyleKey): LinkageTarget
    {
        $this->axleStyleKey = $axleStyleKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAxleStyle(): ?string
    {
        return $this->axleStyle;
    }

    /**
     * @param string|null $axleStyle
     * @return LinkageTarget
     */
    public function setAxleStyle(?string $axleStyle): LinkageTarget
    {
        $this->axleStyle = $axleStyle;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleTypeKey(): ?int
    {
        return $this->axleTypeKey;
    }

    /**
     * @param int|null $axleTypeKey
     * @return LinkageTarget
     */
    public function setAxleTypeKey(?int $axleTypeKey): LinkageTarget
    {
        $this->axleTypeKey = $axleTypeKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAxleType(): ?string
    {
        return $this->axleType;
    }

    /**
     * @param string|null $axleType
     * @return LinkageTarget
     */
    public function setAxleType(?string $axleType): LinkageTarget
    {
        $this->axleType = $axleType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleBodyKey(): ?int
    {
        return $this->axleBodyKey;
    }

    /**
     * @param int|null $axleBodyKey
     * @return LinkageTarget
     */
    public function setAxleBodyKey(?int $axleBodyKey): LinkageTarget
    {
        $this->axleBodyKey = $axleBodyKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAxleBody(): ?string
    {
        return $this->axleBody;
    }

    /**
     * @param string|null $axleBody
     * @return LinkageTarget
     */
    public function setAxleBody(?string $axleBody): LinkageTarget
    {
        $this->axleBody = $axleBody;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWheelMountingKey(): ?int
    {
        return $this->wheelMountingKey;
    }

    /**
     * @param int|null $wheelMountingKey
     * @return LinkageTarget
     */
    public function setWheelMountingKey(?int $wheelMountingKey): LinkageTarget
    {
        $this->wheelMountingKey = $wheelMountingKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWheelMounting(): ?string
    {
        return $this->wheelMounting;
    }

    /**
     * @param string|null $wheelMounting
     * @return LinkageTarget
     */
    public function setWheelMounting(?string $wheelMounting): LinkageTarget
    {
        $this->wheelMounting = $wheelMounting;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleLoadFromKg(): ?int
    {
        return $this->axleLoadFromKg;
    }

    /**
     * @param int|null $axleLoadFromKg
     * @return LinkageTarget
     */
    public function setAxleLoadFromKg(?int $axleLoadFromKg): LinkageTarget
    {
        $this->axleLoadFromKg = $axleLoadFromKg;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleLoadToKg(): ?int
    {
        return $this->axleLoadToKg;
    }

    /**
     * @param int|null $axleLoadToKg
     * @return LinkageTarget
     */
    public function setAxleLoadToKg(?int $axleLoadToKg): LinkageTarget
    {
        $this->axleLoadToKg = $axleLoadToKg;
        return $this;
    }

    /**
     * @return array
     */
    public function getAxleBodyTypes(): array
    {
        return $this->axleBodyTypes;
    }

    /**
     * @param array $axleBodyTypes
     * @return LinkageTarget
     */
    public function setAxleBodyTypes(array $axleBodyTypes): LinkageTarget
    {
        $this->axleBodyTypes = $axleBodyTypes;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBrakeTypeKey(): ?int
    {
        return $this->brakeTypeKey;
    }

    /**
     * @param int|null $brakeTypeKey
     * @return LinkageTarget
     */
    public function setBrakeTypeKey(?int $brakeTypeKey): LinkageTarget
    {
        $this->brakeTypeKey = $brakeTypeKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBrakeType(): ?string
    {
        return $this->brakeType;
    }

    /**
     * @param string|null $brakeType
     * @return LinkageTarget
     */
    public function setBrakeType(?string $brakeType): LinkageTarget
    {
        $this->brakeType = $brakeType;
        return $this;
    }

    /**
     * @return array
     */
    public function getVehicleImages(): array
    {
        return $this->vehicleImages;
    }

    /**
     * @param array $vehicleImages
     * @return LinkageTarget
     */
    public function setVehicleImages(array $vehicleImages): LinkageTarget
    {
        $this->vehicleImages = $vehicleImages;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKbaNumbers(): ?string
    {
        return $this->kbaNumbers;
    }

    /**
     * @param string[]|null $kbaNumbers
     * @return LinkageTarget
     */
    public function setKbaNumbers(?array $kbaNumbers): LinkageTarget
    {
        $this->kbaNumbers = $kbaNumbers;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDriveTypeKey(): ?int
    {
        return $this->driveTypeKey;
    }

    /**
     * @param int|null $driveTypeKey
     * @return LinkageTarget
     */
    public function setDriveTypeKey(?int $driveTypeKey): LinkageTarget
    {
        $this->driveTypeKey = $driveTypeKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDriveType(): ?string
    {
        return $this->driveType;
    }

    /**
     * @param string|null $driveType
     * @return LinkageTarget
     */
    public function setDriveType(?string $driveType): LinkageTarget
    {
        $this->driveType = $driveType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBodyStyleKey(): ?int
    {
        return $this->bodyStyleKey;
    }

    /**
     * @param int|null $bodyStyleKey
     * @return LinkageTarget
     */
    public function setBodyStyleKey(?int $bodyStyleKey): LinkageTarget
    {
        $this->bodyStyleKey = $bodyStyleKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBodyStyle(): ?string
    {
        return $this->bodyStyle;
    }

    /**
     * @param string|null $bodyStyle
     * @return LinkageTarget
     */
    public function setBodyStyle(?string $bodyStyle): LinkageTarget
    {
        $this->bodyStyle = $bodyStyle;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getValves(): ?int
    {
        return $this->valves;
    }

    /**
     * @param int|null $valves
     * @return LinkageTarget
     */
    public function setValves(?int $valves): LinkageTarget
    {
        $this->valves = $valves;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFuelMixtureFormationType(): ?string
    {
        return $this->fuelMixtureFormationType;
    }

    /**
     * @param string|null $fuelMixtureFormationType
     * @return LinkageTarget
     */
    public function setFuelMixtureFormationType(?string $fuelMixtureFormationType): LinkageTarget
    {
        $this->fuelMixtureFormationType = $fuelMixtureFormationType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFuelTypeKey(): ?int
    {
        return $this->fuelTypeKey;
    }

    /**
     * @param int|null $fuelTypeKey
     * @return LinkageTarget
     */
    public function setFuelTypeKey(?int $fuelTypeKey): LinkageTarget
    {
        $this->fuelTypeKey = $fuelTypeKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFuelType(): ?string
    {
        return $this->fuelType;
    }

    /**
     * @param string|null $fuelType
     * @return LinkageTarget
     */
    public function setFuelType(?string $fuelType): LinkageTarget
    {
        $this->fuelType = $fuelType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEngineTypeKey(): ?int
    {
        return $this->engineTypeKey;
    }

    /**
     * @param int|null $engineTypeKey
     * @return LinkageTarget
     */
    public function setEngineTypeKey(?int $engineTypeKey): LinkageTarget
    {
        $this->engineTypeKey = $engineTypeKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEngineType(): ?string
    {
        return $this->engineType;
    }

    /**
     * @param string|null $engineType
     * @return LinkageTarget
     */
    public function setEngineType(?string $engineType): LinkageTarget
    {
        $this->engineType = $engineType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHorsePowerFrom(): ?int
    {
        return $this->horsePowerFrom;
    }

    /**
     * @param int|null $horsePowerFrom
     * @return LinkageTarget
     */
    public function setHorsePowerFrom(?int $horsePowerFrom): LinkageTarget
    {
        $this->horsePowerFrom = $horsePowerFrom;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHorsePowerTo(): ?int
    {
        return $this->horsePowerTo;
    }

    /**
     * @param int|null $horsePowerTo
     * @return LinkageTarget
     */
    public function setHorsePowerTo(?int $horsePowerTo): LinkageTarget
    {
        $this->horsePowerTo = $horsePowerTo;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getKiloWattsFrom(): ?int
    {
        return $this->kiloWattsFrom;
    }

    /**
     * @param int|null $kiloWattsFrom
     * @return LinkageTarget
     */
    public function setKiloWattsFrom(?int $kiloWattsFrom): LinkageTarget
    {
        $this->kiloWattsFrom = $kiloWattsFrom;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getKiloWattsTo(): ?int
    {
        return $this->kiloWattsTo;
    }

    /**
     * @param int|null $kiloWattsTo
     * @return LinkageTarget
     */
    public function setKiloWattsTo(?int $kiloWattsTo): LinkageTarget
    {
        $this->kiloWattsTo = $kiloWattsTo;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCylinders(): ?int
    {
        return $this->cylinders;
    }

    /**
     * @param int|null $cylinders
     * @return LinkageTarget
     */
    public function setCylinders(?int $cylinders): LinkageTarget
    {
        $this->cylinders = $cylinders;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCapacityCC(): ?int
    {
        return $this->capacityCC;
    }

    /**
     * @param int|null $capacityCC
     * @return LinkageTarget
     */
    public function setCapacityCC(?int $capacityCC): LinkageTarget
    {
        $this->capacityCC = $capacityCC;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCapacityLiters(): ?int
    {
        return $this->capacityLiters;
    }

    /**
     * @param int|null $capacityLiters
     * @return LinkageTarget
     */
    public function setCapacityLiters(?int $capacityLiters): LinkageTarget
    {
        $this->capacityLiters = $capacityLiters;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAspirationKey(): ?int
    {
        return $this->aspirationKey;
    }

    /**
     * @param int|null $aspirationKey
     * @return LinkageTarget
     */
    public function setAspirationKey(?int $aspirationKey): LinkageTarget
    {
        $this->aspirationKey = $aspirationKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAspiration(): ?string
    {
        return $this->aspiration;
    }

    /**
     * @param string|null $aspiration
     * @return LinkageTarget
     */
    public function setAspiration(?string $aspiration): LinkageTarget
    {
        $this->aspiration = $aspiration;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCylinderDesignKey(): ?int
    {
        return $this->cylinderDesignKey;
    }

    /**
     * @param int|null $cylinderDesignKey
     * @return LinkageTarget
     */
    public function setCylinderDesignKey(?int $cylinderDesignKey): LinkageTarget
    {
        $this->cylinderDesignKey = $cylinderDesignKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCylinderDesign(): ?string
    {
        return $this->cylinderDesign;
    }

    /**
     * @param string|null $cylinderDesign
     * @return LinkageTarget
     */
    public function setCylinderDesign(?string $cylinderDesign): LinkageTarget
    {
        $this->cylinderDesign = $cylinderDesign;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCoolingTypeKey(): ?int
    {
        return $this->coolingTypeKey;
    }

    /**
     * @param int|null $coolingTypeKey
     * @return LinkageTarget
     */
    public function setCoolingTypeKey(?int $coolingTypeKey): LinkageTarget
    {
        $this->coolingTypeKey = $coolingTypeKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCoolingType(): ?string
    {
        return $this->coolingType;
    }

    /**
     * @param string|null $coolingType
     * @return LinkageTarget
     */
    public function setCoolingType(?string $coolingType): LinkageTarget
    {
        $this->coolingType = $coolingType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBoreDiameter(): ?int
    {
        return $this->boreDiameter;
    }

    /**
     * @param int|null $boreDiameter
     * @return LinkageTarget
     */
    public function setBoreDiameter(?int $boreDiameter): LinkageTarget
    {
        $this->boreDiameter = $boreDiameter;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getStroke(): ?int
    {
        return $this->stroke;
    }

    /**
     * @param int|null $stroke
     * @return LinkageTarget
     */
    public function setStroke(?int $stroke): LinkageTarget
    {
        $this->stroke = $stroke;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEngineConstructionTypeKey(): ?int
    {
        return $this->engineConstructionTypeKey;
    }

    /**
     * @param int|null $engineConstructionTypeKey
     * @return LinkageTarget
     */
    public function setEngineConstructionTypeKey(?int $engineConstructionTypeKey): LinkageTarget
    {
        $this->engineConstructionTypeKey = $engineConstructionTypeKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEngineConstructionType(): ?string
    {
        return $this->engineConstructionType;
    }

    /**
     * @param string|null $engineConstructionType
     * @return LinkageTarget
     */
    public function setEngineConstructionType(?string $engineConstructionType): LinkageTarget
    {
        $this->engineConstructionType = $engineConstructionType;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getValveControlKey(): ?int
    {
        return $this->valveControlKey;
    }

    /**
     * @param int|null $valveControlKey
     * @return LinkageTarget
     */
    public function setValveControlKey(?int $valveControlKey): LinkageTarget
    {
        $this->valveControlKey = $valveControlKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getValveControl(): ?string
    {
        return $this->valveControl;
    }

    /**
     * @param string|null $valveControl
     * @return LinkageTarget
     */
    public function setValveControl(?string $valveControl): LinkageTarget
    {
        $this->valveControl = $valveControl;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCrankshaftBearings(): ?int
    {
        return $this->crankshaftBearings;
    }

    /**
     * @param int|null $crankshaftBearings
     * @return LinkageTarget
     */
    public function setCrankshaftBearings(?int $crankshaftBearings): LinkageTarget
    {
        $this->crankshaftBearings = $crankshaftBearings;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRpmKwFrom(): ?int
    {
        return $this->rpmKwFrom;
    }

    /**
     * @param int|null $rpmKwFrom
     * @return LinkageTarget
     */
    public function setRpmKwFrom(?int $rpmKwFrom): LinkageTarget
    {
        $this->rpmKwFrom = $rpmKwFrom;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSalesDescription(): ?string
    {
        return $this->salesDescription;
    }

    /**
     * @param string|null $salesDescription
     * @return LinkageTarget
     */
    public function setSalesDescription(?string $salesDescription): LinkageTarget
    {
        $this->salesDescription = $salesDescription;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCompressionFrom(): ?int
    {
        return $this->compressionFrom;
    }

    /**
     * @param int|null $compressionFrom
     * @return LinkageTarget
     */
    public function setCompressionFrom(?int $compressionFrom): LinkageTarget
    {
        $this->compressionFrom = $compressionFrom;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCompressionTo(): ?int
    {
        return $this->compressionTo;
    }

    /**
     * @param int|null $compressionTo
     * @return LinkageTarget
     */
    public function setCompressionTo(?int $compressionTo): LinkageTarget
    {
        $this->compressionTo = $compressionTo;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEngineManagementKey(): ?int
    {
        return $this->engineManagementKey;
    }

    /**
     * @param int|null $engineManagementKey
     * @return LinkageTarget
     */
    public function setEngineManagementKey(?int $engineManagementKey): LinkageTarget
    {
        $this->engineManagementKey = $engineManagementKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEngineManagement(): ?string
    {
        return $this->engineManagement;
    }

    /**
     * @param string|null $engineManagement
     * @return LinkageTarget
     */
    public function setEngineManagement(?string $engineManagement): LinkageTarget
    {
        $this->engineManagement = $engineManagement;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTonnage(): ?int
    {
        return $this->tonnage;
    }

    /**
     * @param int|null $tonnage
     * @return LinkageTarget
     */
    public function setTonnage(?int $tonnage): LinkageTarget
    {
        $this->tonnage = $tonnage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleConfigurationKey(): ?int
    {
        return $this->axleConfigurationKey;
    }

    /**
     * @param int|null $axleConfigurationKey
     * @return LinkageTarget
     */
    public function setAxleConfigurationKey(?int $axleConfigurationKey): LinkageTarget
    {
        $this->axleConfigurationKey = $axleConfigurationKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAxleConfiguration(): ?string
    {
        return $this->axleConfiguration;
    }

    /**
     * @param string|null $axleConfiguration
     * @return LinkageTarget
     */
    public function setAxleConfiguration(?string $axleConfiguration): LinkageTarget
    {
        $this->axleConfiguration = $axleConfiguration;
        return $this;
    }

    /**
     * @return array
     */
    public function getEngines(): array
    {
        return $this->engines;
    }

    /**
     * @param array $engines
     * @return LinkageTarget
     */
    public function setEngines(array $engines): LinkageTarget
    {
        $this->engines = $engines;
        return $this;
    }

    /**
     * @return array
     */
    public function getAxles(): array
    {
        return $this->axles;
    }

    /**
     * @param array $axles
     * @return LinkageTarget
     */
    public function setAxles(array $axles): LinkageTarget
    {
        $this->axles = $axles;
        return $this;
    }

    /**
     * @return array
     */
    public function getCabs(): array
    {
        return $this->cabs;
    }

    /**
     * @param array $cabs
     * @return LinkageTarget
     */
    public function setCabs(array $cabs): LinkageTarget
    {
        $this->cabs = $cabs;
        return $this;
    }

    /**
     * @return array
     */
    public function getSecondaryTypes(): array
    {
        return $this->secondaryTypes;
    }

    /**
     * @param array $secondaryTypes
     * @return LinkageTarget
     */
    public function setSecondaryTypes(array $secondaryTypes): LinkageTarget
    {
        $this->secondaryTypes = $secondaryTypes;
        return $this;
    }

    /**
     * @return array
     */
    public function getWheelBases(): array
    {
        return $this->wheelBases;
    }

    /**
     * @param array $wheelBases
     * @return LinkageTarget
     */
    public function setWheelBases(array $wheelBases): LinkageTarget
    {
        $this->wheelBases = $wheelBases;
        return $this;
    }

    /**
     * @return array
     */
    public function getVehiclesInOperation(): array
    {
        return $this->vehiclesInOperation;
    }

    /**
     * @param array $vehiclesInOperation
     * @return LinkageTarget
     */
    public function setVehiclesInOperation(array $vehiclesInOperation): LinkageTarget
    {
        $this->vehiclesInOperation = $vehiclesInOperation;
        return $this;
    }
}