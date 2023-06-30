<?php

namespace Myrzan\TecDocClient\Generated\Record;

class Brand
{
    /**
     * @var int $dataSupplierId
     */
    private int $dataSupplierId;

    /**
     * @var int $mfrId
     */
    private int $mfrId;

    /**
     * @var string $mfrName
     */
    private string $mfrName;

    /**
     * @var AmBrandAddress $addressDetails
     */
    private AmBrandAddress $addressDetails;

    /**
     * @var SupplierStatus $dataSupplierStatus
     */
    private SupplierStatus $dataSupplierStatus;

    /**
     * @var SupplierLogo $dataSupplierLogo
     */
    private SupplierLogo $dataSupplierLogo;

    /**
     * @return int
     */
    public function getDataSupplierId(): int
    {
        return $this->dataSupplierId;
    }

    /**
     * @param int $dataSupplierId
     * @return Brand
     */
    public function setDataSupplierId(int $dataSupplierId): Brand
    {
        $this->dataSupplierId = $dataSupplierId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMfrId(): int
    {
        return $this->mfrId;
    }

    /**
     * @param int $mfrId
     * @return Brand
     */
    public function setMfrId(int $mfrId): Brand
    {
        $this->mfrId = $mfrId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMfrName(): string
    {
        return $this->mfrName;
    }

    /**
     * @param string $mfrName
     * @return Brand
     */
    public function setMfrName(string $mfrName): Brand
    {
        $this->mfrName = $mfrName;
        return $this;
    }

    /**
     * @return AmBrandAddress
     */
    public function getAddressDetails(): AmBrandAddress
    {
        return $this->addressDetails;
    }

    /**
     * @param AmBrandAddress $addressDetails
     * @return Brand
     */
    public function setAddressDetails(AmBrandAddress $addressDetails): Brand
    {
        $this->addressDetails = $addressDetails;
        return $this;
    }

    /**
     * @return SupplierStatus
     */
    public function getDataSupplierStatus(): SupplierStatus
    {
        return $this->dataSupplierStatus;
    }

    /**
     * @param SupplierStatus $dataSupplierStatus
     * @return Brand
     */
    public function setDataSupplierStatus(SupplierStatus $dataSupplierStatus): Brand
    {
        $this->dataSupplierStatus = $dataSupplierStatus;
        return $this;
    }

    /**
     * @return SupplierLogo
     */
    public function getDataSupplierLogo(): SupplierLogo
    {
        return $this->dataSupplierLogo;
    }

    /**
     * @param SupplierLogo $dataSupplierLogo
     * @return Brand
     */
    public function setDataSupplierLogo(SupplierLogo $dataSupplierLogo): Brand
    {
        $this->dataSupplierLogo = $dataSupplierLogo;
        return $this;
    }
}