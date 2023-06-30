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

    private MfrFacet $mfrFacets;
    private VehicleModelSeriesFacet $vehicleModelSeriesFacets;
    private HmdModelFacet $hmdModelFacets;
    private YearFacet $yearFacets;
    private DescriptionFacet $descriptionFacets;
    private LinkageTargetTypeFacet $linkageTargetTypeFacets;
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
     * @param \Myrzan\TecDocClient\Generated\Record\LinkageTarget[] $linkageTargets
     * @return LinkageTargets
     */
    public function setLinkageTargets(array $linkageTargets): LinkageTargets
    {
        $this->linkageTargets = $linkageTargets;
        return $this;
    }

    /**
     * @return MfrFacet
     */
    public function getMfrFacets(): MfrFacet
    {
        return $this->mfrFacets;
    }

    /**
     * @return VehicleModelSeriesFacet
     */
    public function getVehicleModelSeriesFacets(): VehicleModelSeriesFacet
    {
        return $this->vehicleModelSeriesFacets;
    }

    /**
     * @return HmdModelFacet
     */
    public function getHmdModelFacets(): HmdModelFacet
    {
        return $this->hmdModelFacets;
    }

    /**
     * @return array
     */
    public function getYearFacets(): YearFacet
    {
        return $this->yearFacets;
    }

    /**
     * @return array
     */
    public function getDescriptionFacets(): DescriptionFacet
    {
        return $this->descriptionFacets;
    }

    /**
     * @return array
     */
    public function getLinkageTargetTypeFacets(): LinkageTargetTypeFacet
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
     * @param \Myrzan\TecDocClient\Generated\Record\MfrFacet $mfrFacets
     * @return LinkageTargets
     */
    public function setMfrFacets(MfrFacet $mfrFacets): LinkageTargets
    {
        $this->mfrFacets = $mfrFacets;
        return $this;
    }

    /**
     * @param \Myrzan\TecDocClient\Generated\Record\VehicleModelSeriesFacet $vehicleModelSeriesFacets
     * @return LinkageTargets
     */
    public function setVehicleModelSeriesFacets(VehicleModelSeriesFacet $vehicleModelSeriesFacets): LinkageTargets
    {
        $this->vehicleModelSeriesFacets = $vehicleModelSeriesFacets;
        return $this;
    }

    /**
     * @param \Myrzan\TecDocClient\Generated\Record\HmdModelFacet $hmdModelFacets
     * @return LinkageTargets
     */
    public function setHmdModelFacets(HmdModelFacet $hmdModelFacets): LinkageTargets
    {
        $this->hmdModelFacets = $hmdModelFacets;
        return $this;
    }

    /**
     * @param \Myrzan\TecDocClient\Generated\Record\YearFacet $yearFacets
     * @return LinkageTargets
     */
    public function setYearFacets(YearFacet $yearFacets): LinkageTargets
    {
        $this->yearFacets = $yearFacets;
        return $this;
    }

    /**
     * @param \Myrzan\TecDocClient\Generated\Record\DescriptionFacet $descriptionFacets
     * @return LinkageTargets
     */
    public function setDescriptionFacets(DescriptionFacet $descriptionFacets): LinkageTargets
    {
        $this->descriptionFacets = $descriptionFacets;
        return $this;
    }

    /**
     * @param \Myrzan\TecDocClient\Generated\Record\LinkageTargetTypeFacet $linkageTargetTypeFacets
     * @return LinkageTargets
     */
    public function setLinkageTargetTypeFacets(LinkageTargetTypeFacet $linkageTargetTypeFacets): LinkageTargets
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