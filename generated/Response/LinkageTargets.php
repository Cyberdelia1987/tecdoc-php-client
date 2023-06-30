<?php

namespace Myrzan\TecDocClient\Generated\Response;

use Myrzan\TecDocClient\Generated\Record\DescriptionFacet;
use Myrzan\TecDocClient\Generated\Record\HmdModelFacet;
use Myrzan\TecDocClient\Generated\Record\LinkageTarget;
use Myrzan\TecDocClient\Generated\Record\LinkageTargetTypeFacet;
use Myrzan\TecDocClient\Generated\Record\MfrFacet;
use Myrzan\TecDocClient\Generated\Record\VehicleModelSeriesFacet;
use Myrzan\TecDocClient\Generated\Record\YearFacet;

class LinkageTargets
{
    private int $total;

    /**
     * @var LinkageTarget[]
     */
    private array $linkageTargets;

    /**
     * @var MfrFacet[]
     */
    private array $mfrFacets;

    /**
     * @var VehicleModelSeriesFacet[]
     */
    private array $vehicleModelSeriesFacets;
    /**
     * @var HmdModelFacet[]
     */
    private array $hmdModelFacets;

    /**
     * @var YearFacet[]
     */
    private array $yearFacets;

    /**
     * @var DescriptionFacet[]
     */
    private array $descriptionFacets;

    /**
     * @var LinkageTargetTypeFacet[]
     */
    private array $linkageTargetTypeFacets;
    private int $status;
    private string $statusText;

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
    public function getLinkageTargets(): array
    {
        return $this->linkageTargets;
    }

    /**
     * @return array
     */
    public function getMfrFacets(): array
    {
        return $this->mfrFacets;
    }

    /**
     * @return array
     */
    public function getVehicleModelSeriesFacets(): array
    {
        return $this->vehicleModelSeriesFacets;
    }

    /**
     * @return array
     */
    public function getHmdModelFacets(): array
    {
        return $this->hmdModelFacets;
    }

    /**
     * @return array
     */
    public function getYearFacets(): array
    {
        return $this->yearFacets;
    }

    /**
     * @return array
     */
    public function getDescriptionFacets(): array
    {
        return $this->descriptionFacets;
    }

    /**
     * @return array
     */
    public function getLinkageTargetTypeFacets(): array
    {
        return $this->linkageTargetTypeFacets;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getStatusText(): string
    {
        return $this->statusText;
    }

}