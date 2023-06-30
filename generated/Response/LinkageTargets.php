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

    /**
     * @param int $total
     * @return LinkageTargets
     */
    public function setTotal(int $total): LinkageTargets
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @param array $linkageTargets
     * @return LinkageTargets
     */
    public function setLinkageTargets(array $linkageTargets): LinkageTargets
    {
        $this->linkageTargets = $linkageTargets;
        return $this;
    }

    /**
     * @param array $mfrFacets
     * @return LinkageTargets
     */
    public function setMfrFacets(array $mfrFacets): LinkageTargets
    {
        $this->mfrFacets = $mfrFacets;
        return $this;
    }

    /**
     * @param array $vehicleModelSeriesFacets
     * @return LinkageTargets
     */
    public function setVehicleModelSeriesFacets(array $vehicleModelSeriesFacets): LinkageTargets
    {
        $this->vehicleModelSeriesFacets = $vehicleModelSeriesFacets;
        return $this;
    }

    /**
     * @param array $hmdModelFacets
     * @return LinkageTargets
     */
    public function setHmdModelFacets(array $hmdModelFacets): LinkageTargets
    {
        $this->hmdModelFacets = $hmdModelFacets;
        return $this;
    }

    /**
     * @param array $yearFacets
     * @return LinkageTargets
     */
    public function setYearFacets(array $yearFacets): LinkageTargets
    {
        $this->yearFacets = $yearFacets;
        return $this;
    }

    /**
     * @param array $descriptionFacets
     * @return LinkageTargets
     */
    public function setDescriptionFacets(array $descriptionFacets): LinkageTargets
    {
        $this->descriptionFacets = $descriptionFacets;
        return $this;
    }

    /**
     * @param array $linkageTargetTypeFacets
     * @return LinkageTargets
     */
    public function setLinkageTargetTypeFacets(array $linkageTargetTypeFacets): LinkageTargets
    {
        $this->linkageTargetTypeFacets = $linkageTargetTypeFacets;
        return $this;
    }

    /**
     * @param int $status
     * @return LinkageTargets
     */
    public function setStatus(int $status): LinkageTargets
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $statusText
     * @return LinkageTargets
     */
    public function setStatusText(string $statusText): LinkageTargets
    {
        $this->statusText = $statusText;
        return $this;
    }
}