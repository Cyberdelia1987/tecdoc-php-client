<?php

namespace Myrzan\TecDocClient\Generated\Response;

use Myrzan\TecDocClient\Generated\Record\BrandContainer;

class BrandsResponse
{
    /**
     * @var BrandContainer $data
     */
    private BrandContainer $data;

    /**
     * @var int $status
     */
    private int $status;

    /**
     * @var string $statusText
     */
    private string $statusText;

    /**
     * @param BrandContainer $data
     * @return BrandsResponse
     */
    public function setData(BrandContainer $data): BrandsResponse
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param int $status
     * @return BrandsResponse
     */
    public function setStatus(int $status): BrandsResponse
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $statusText
     * @return BrandsResponse
     */
    public function setStatusText(string $statusText): BrandsResponse
    {
        $this->statusText = $statusText;
        return $this;
    }

    /**
     * @return BrandContainer
     */
    public function getData(): BrandContainer
    {
        return $this->data;
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