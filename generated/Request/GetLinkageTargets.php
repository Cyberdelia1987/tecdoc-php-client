<?php

namespace Myrzan\TecDocClient\Generated\Request;

use Myrzan\TecDocClient\Generated\Record\LinkageTargetIds;
use Myrzan\TecDocClient\Generated\Record\Sort;

class GetLinkageTargets
{
    private int $provider;
    private string $linkageTargetCountry;
    private bool $linkageTargetCountryGroupFlag;
    private ?string $lang;
    private ?string $filterMode;
    private ?string $linkageTargetType;
    private ?LinkageTargetIds $linkageTargetIds;
    private ?string $query;
    private ?string $description;
    private ?int $rmiTypeIds;
    private ?int $mfrIds;
    private ?int $vehicleModelSeriesId;
    private ?string $vehicleModelSeriesName;
    private ?int $hmdMfrModelIds; // optional, unbounded; type int
    private ?int $years; // optional, unbounded; type int
    private ?int $engineIds; // optional, unbounded; type int
    private ?string $engineCode; // optional; type string
    private ?string $salesDescription; // optional; type string
    private ?int $axleStyleKeys; // optional, unbounded; type int
    private ?int $axleTypeKeys; // optional, unbounded; type int
    private ?int $axleBodyKeys; // optional, unbounded; type int
    private ?int $axleBrakeSizeKeys; // optional, unbounded; type int
    private ?string $axleDescription; // optional; type string
    private ?int $wheelMountingKeys; // optional, unbounded; type int
    private ?int $brakeTypeKeys; // optional, unbounded; type int
    private ?int $fuelTypeKeys; // optional, unbounded; type int
    private ?string $bodyTypeCode; // optional; type string
    private ?int $capacityCCFrom; // optional; type int
    private ?int $capacityCCTo; // optional; type int
    private ?int $horsePowerFrom; // optional; type int
    private ?int $horsePowerTo; // optional; type int
    private ?int $kiloWattsFrom; // optional; type int
    private ?int $kiloWattsTo; // optional; type int
    private ?int $cvBodyTypeIds; // optional, unbounded; type int
    private ?int $tonnageFrom; // optional; type int
    private ?int $tonnageTo; // optional; type int
    private ?int $axleConfigurationKeys; // optional, unbounded; type int
    private ?int $cvBodyStyleKeys; // optional, unbounded; type int
    private ?int $perPage; // optional; type int
    private ?int $page; // optional; type int
    /**
     * @var Sort[]
     */
    private array $sort; // optional, unbounded; type LinkageTargetSort
    private bool $includeAllFacets; // optional; type boolean
    private bool $includeMfrFacets; // optional; type boolean
    private bool $includeVehicleModelSeriesFacets; // optional; type boolean
    private bool $includeHMDModelFacets; // optional; type boolean
    private bool $includeYearFacets; // optional; type boolean
    private bool $includeDescriptionFacets; // optional; type boolean
    private bool $includeLinkageTargetTypeFacets; // optional; type boolean
    private ?string $nuts1; // optional; type string

    /**
     * @return int
     */
    public function getProvider(): int
    {
        return $this->provider;
    }

    /**
     * @param int $provider
     * @return GetLinkageTargets
     */
    public function setProvider(int $provider): GetLinkageTargets
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkageTargetCountry(): string
    {
        return $this->linkageTargetCountry;
    }

    /**
     * @param string $linkageTargetCountry
     * @return GetLinkageTargets
     */
    public function setLinkageTargetCountry(string $linkageTargetCountry): GetLinkageTargets
    {
        $this->linkageTargetCountry = $linkageTargetCountry;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLinkageTargetCountryGroupFlag(): bool
    {
        return $this->linkageTargetCountryGroupFlag;
    }

    /**
     * @param bool $linkageTargetCountryGroupFlag
     * @return GetLinkageTargets
     */
    public function setLinkageTargetCountryGroupFlag(bool $linkageTargetCountryGroupFlag): GetLinkageTargets
    {
        $this->linkageTargetCountryGroupFlag = $linkageTargetCountryGroupFlag;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLang(): ?string
    {
        return $this->lang;
    }

    /**
     * @param string|null $lang
     * @return GetLinkageTargets
     */
    public function setLang(?string $lang): GetLinkageTargets
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFilterMode(): ?string
    {
        return $this->filterMode;
    }

    /**
     * @param string|null $filterMode
     * @return GetLinkageTargets
     */
    public function setFilterMode(?string $filterMode): GetLinkageTargets
    {
        $this->filterMode = $filterMode;
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
     * @return GetLinkageTargets
     */
    public function setLinkageTargetType(?string $linkageTargetType): GetLinkageTargets
    {
        $this->linkageTargetType = $linkageTargetType;
        return $this;
    }

    /**
     * @return LinkageTargetIds
     */
    public function getLinkageTargetIds(): LinkageTargetIds
    {
        return $this->linkageTargetIds;
    }

    /**
     * @param LinkageTargetIds $linkageTargetIds
     * @return GetLinkageTargets
     */
    public function setLinkageTargetIds(LinkageTargetIds $linkageTargetIds): GetLinkageTargets
    {
        $this->linkageTargetIds = $linkageTargetIds;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getQuery(): ?string
    {
        return $this->query;
    }

    /**
     * @param string|null $query
     * @return GetLinkageTargets
     */
    public function setQuery(?string $query): GetLinkageTargets
    {
        $this->query = $query;
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
     * @return GetLinkageTargets
     */
    public function setDescription(?string $description): GetLinkageTargets
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRmiTypeIds(): ?int
    {
        return $this->rmiTypeIds;
    }

    /**
     * @param int|null $rmiTypeIds
     * @return GetLinkageTargets
     */
    public function setRmiTypeIds(?int $rmiTypeIds): GetLinkageTargets
    {
        $this->rmiTypeIds = $rmiTypeIds;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMfrIds(): ?int
    {
        return $this->mfrIds;
    }

    /**
     * @param int|null $mfrIds
     * @return GetLinkageTargets
     */
    public function setMfrIds(?int $mfrIds): GetLinkageTargets
    {
        $this->mfrIds = $mfrIds;
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
     * @return GetLinkageTargets
     */
    public function setVehicleModelSeriesId(?int $vehicleModelSeriesId): GetLinkageTargets
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
     * @return GetLinkageTargets
     */
    public function setVehicleModelSeriesName(?string $vehicleModelSeriesName): GetLinkageTargets
    {
        $this->vehicleModelSeriesName = $vehicleModelSeriesName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getHmdMfrModelIds(): ?int
    {
        return $this->hmdMfrModelIds;
    }

    /**
     * @param int|null $hmdMfrModelIds
     * @return GetLinkageTargets
     */
    public function setHmdMfrModelIds(?int $hmdMfrModelIds): GetLinkageTargets
    {
        $this->hmdMfrModelIds = $hmdMfrModelIds;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getYears(): ?int
    {
        return $this->years;
    }

    /**
     * @param int|null $years
     * @return GetLinkageTargets
     */
    public function setYears(?int $years): GetLinkageTargets
    {
        $this->years = $years;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEngineIds(): ?int
    {
        return $this->engineIds;
    }

    /**
     * @param int|null $engineIds
     * @return GetLinkageTargets
     */
    public function setEngineIds(?int $engineIds): GetLinkageTargets
    {
        $this->engineIds = $engineIds;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEngineCode(): ?string
    {
        return $this->engineCode;
    }

    /**
     * @param string|null $engineCode
     * @return GetLinkageTargets
     */
    public function setEngineCode(?string $engineCode): GetLinkageTargets
    {
        $this->engineCode = $engineCode;
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
     * @return GetLinkageTargets
     */
    public function setSalesDescription(?string $salesDescription): GetLinkageTargets
    {
        $this->salesDescription = $salesDescription;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleStyleKeys(): ?int
    {
        return $this->axleStyleKeys;
    }

    /**
     * @param int|null $axleStyleKeys
     * @return GetLinkageTargets
     */
    public function setAxleStyleKeys(?int $axleStyleKeys): GetLinkageTargets
    {
        $this->axleStyleKeys = $axleStyleKeys;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleTypeKeys(): ?int
    {
        return $this->axleTypeKeys;
    }

    /**
     * @param int|null $axleTypeKeys
     * @return GetLinkageTargets
     */
    public function setAxleTypeKeys(?int $axleTypeKeys): GetLinkageTargets
    {
        $this->axleTypeKeys = $axleTypeKeys;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleBodyKeys(): ?int
    {
        return $this->axleBodyKeys;
    }

    /**
     * @param int|null $axleBodyKeys
     * @return GetLinkageTargets
     */
    public function setAxleBodyKeys(?int $axleBodyKeys): GetLinkageTargets
    {
        $this->axleBodyKeys = $axleBodyKeys;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleBrakeSizeKeys(): ?int
    {
        return $this->axleBrakeSizeKeys;
    }

    /**
     * @param int|null $axleBrakeSizeKeys
     * @return GetLinkageTargets
     */
    public function setAxleBrakeSizeKeys(?int $axleBrakeSizeKeys): GetLinkageTargets
    {
        $this->axleBrakeSizeKeys = $axleBrakeSizeKeys;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAxleDescription(): ?string
    {
        return $this->axleDescription;
    }

    /**
     * @param string|null $axleDescription
     * @return GetLinkageTargets
     */
    public function setAxleDescription(?string $axleDescription): GetLinkageTargets
    {
        $this->axleDescription = $axleDescription;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getWheelMountingKeys(): ?int
    {
        return $this->wheelMountingKeys;
    }

    /**
     * @param int|null $wheelMountingKeys
     * @return GetLinkageTargets
     */
    public function setWheelMountingKeys(?int $wheelMountingKeys): GetLinkageTargets
    {
        $this->wheelMountingKeys = $wheelMountingKeys;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBrakeTypeKeys(): ?int
    {
        return $this->brakeTypeKeys;
    }

    /**
     * @param int|null $brakeTypeKeys
     * @return GetLinkageTargets
     */
    public function setBrakeTypeKeys(?int $brakeTypeKeys): GetLinkageTargets
    {
        $this->brakeTypeKeys = $brakeTypeKeys;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getFuelTypeKeys(): ?int
    {
        return $this->fuelTypeKeys;
    }

    /**
     * @param int|null $fuelTypeKeys
     * @return GetLinkageTargets
     */
    public function setFuelTypeKeys(?int $fuelTypeKeys): GetLinkageTargets
    {
        $this->fuelTypeKeys = $fuelTypeKeys;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBodyTypeCode(): ?string
    {
        return $this->bodyTypeCode;
    }

    /**
     * @param string|null $bodyTypeCode
     * @return GetLinkageTargets
     */
    public function setBodyTypeCode(?string $bodyTypeCode): GetLinkageTargets
    {
        $this->bodyTypeCode = $bodyTypeCode;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCapacityCCFrom(): ?int
    {
        return $this->capacityCCFrom;
    }

    /**
     * @param int|null $capacityCCFrom
     * @return GetLinkageTargets
     */
    public function setCapacityCCFrom(?int $capacityCCFrom): GetLinkageTargets
    {
        $this->capacityCCFrom = $capacityCCFrom;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCapacityCCTo(): ?int
    {
        return $this->capacityCCTo;
    }

    /**
     * @param int|null $capacityCCTo
     * @return GetLinkageTargets
     */
    public function setCapacityCCTo(?int $capacityCCTo): GetLinkageTargets
    {
        $this->capacityCCTo = $capacityCCTo;
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
     * @return GetLinkageTargets
     */
    public function setHorsePowerFrom(?int $horsePowerFrom): GetLinkageTargets
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
     * @return GetLinkageTargets
     */
    public function setHorsePowerTo(?int $horsePowerTo): GetLinkageTargets
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
     * @return GetLinkageTargets
     */
    public function setKiloWattsFrom(?int $kiloWattsFrom): GetLinkageTargets
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
     * @return GetLinkageTargets
     */
    public function setKiloWattsTo(?int $kiloWattsTo): GetLinkageTargets
    {
        $this->kiloWattsTo = $kiloWattsTo;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCvBodyTypeIds(): ?int
    {
        return $this->cvBodyTypeIds;
    }

    /**
     * @param int|null $cvBodyTypeIds
     * @return GetLinkageTargets
     */
    public function setCvBodyTypeIds(?int $cvBodyTypeIds): GetLinkageTargets
    {
        $this->cvBodyTypeIds = $cvBodyTypeIds;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTonnageFrom(): ?int
    {
        return $this->tonnageFrom;
    }

    /**
     * @param int|null $tonnageFrom
     * @return GetLinkageTargets
     */
    public function setTonnageFrom(?int $tonnageFrom): GetLinkageTargets
    {
        $this->tonnageFrom = $tonnageFrom;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTonnageTo(): ?int
    {
        return $this->tonnageTo;
    }

    /**
     * @param int|null $tonnageTo
     * @return GetLinkageTargets
     */
    public function setTonnageTo(?int $tonnageTo): GetLinkageTargets
    {
        $this->tonnageTo = $tonnageTo;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAxleConfigurationKeys(): ?int
    {
        return $this->axleConfigurationKeys;
    }

    /**
     * @param int|null $axleConfigurationKeys
     * @return GetLinkageTargets
     */
    public function setAxleConfigurationKeys(?int $axleConfigurationKeys): GetLinkageTargets
    {
        $this->axleConfigurationKeys = $axleConfigurationKeys;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCvBodyStyleKeys(): ?int
    {
        return $this->cvBodyStyleKeys;
    }

    /**
     * @param int|null $cvBodyStyleKeys
     * @return GetLinkageTargets
     */
    public function setCvBodyStyleKeys(?int $cvBodyStyleKeys): GetLinkageTargets
    {
        $this->cvBodyStyleKeys = $cvBodyStyleKeys;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPerPage(): ?int
    {
        return $this->perPage;
    }

    /**
     * @param int|null $perPage
     * @return GetLinkageTargets
     */
    public function setPerPage(?int $perPage): GetLinkageTargets
    {
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int|null $page
     * @return GetLinkageTargets
     */
    public function setPage(?int $page): GetLinkageTargets
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeAllFacets(): bool
    {
        return $this->includeAllFacets;
    }

    /**
     * @param bool $includeAllFacets
     * @return GetLinkageTargets
     */
    public function setIncludeAllFacets(bool $includeAllFacets): GetLinkageTargets
    {
        $this->includeAllFacets = $includeAllFacets;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeMfrFacets(): bool
    {
        return $this->includeMfrFacets;
    }

    /**
     * @param bool $includeMfrFacets
     * @return GetLinkageTargets
     */
    public function setIncludeMfrFacets(bool $includeMfrFacets): GetLinkageTargets
    {
        $this->includeMfrFacets = $includeMfrFacets;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeVehicleModelSeriesFacets(): bool
    {
        return $this->includeVehicleModelSeriesFacets;
    }

    /**
     * @param bool $includeVehicleModelSeriesFacets
     * @return GetLinkageTargets
     */
    public function setIncludeVehicleModelSeriesFacets(bool $includeVehicleModelSeriesFacets): GetLinkageTargets
    {
        $this->includeVehicleModelSeriesFacets = $includeVehicleModelSeriesFacets;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeHMDModelFacets(): bool
    {
        return $this->includeHMDModelFacets;
    }

    /**
     * @param bool $includeHMDModelFacets
     * @return GetLinkageTargets
     */
    public function setIncludeHMDModelFacets(bool $includeHMDModelFacets): GetLinkageTargets
    {
        $this->includeHMDModelFacets = $includeHMDModelFacets;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeYearFacets(): bool
    {
        return $this->includeYearFacets;
    }

    /**
     * @param bool $includeYearFacets
     * @return GetLinkageTargets
     */
    public function setIncludeYearFacets(bool $includeYearFacets): GetLinkageTargets
    {
        $this->includeYearFacets = $includeYearFacets;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeDescriptionFacets(): bool
    {
        return $this->includeDescriptionFacets;
    }

    /**
     * @param bool $includeDescriptionFacets
     * @return GetLinkageTargets
     */
    public function setIncludeDescriptionFacets(bool $includeDescriptionFacets): GetLinkageTargets
    {
        $this->includeDescriptionFacets = $includeDescriptionFacets;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIncludeLinkageTargetTypeFacets(): bool
    {
        return $this->includeLinkageTargetTypeFacets;
    }

    /**
     * @param bool $includeLinkageTargetTypeFacets
     * @return GetLinkageTargets
     */
    public function setIncludeLinkageTargetTypeFacets(bool $includeLinkageTargetTypeFacets): GetLinkageTargets
    {
        $this->includeLinkageTargetTypeFacets = $includeLinkageTargetTypeFacets;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNuts1(): ?string
    {
        return $this->nuts1;
    }

    /**
     * @param string|null $nuts1
     * @return GetLinkageTargets
     */
    public function setNuts1(?string $nuts1): GetLinkageTargets
    {
        $this->nuts1 = $nuts1;
        return $this;
    }

    /**
     * @return array
     */
    public function getSort(): array
    {
        return $this->sort;
    }

    /**
     * @param array $sort
     */
    public function setSort(array $sort): void
    {
        $this->sort = $sort;
    }
}