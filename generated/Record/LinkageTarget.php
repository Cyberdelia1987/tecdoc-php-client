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
    //KBA Number of the vehicle (if available)
    private ?string $kbaNumbers;
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
}