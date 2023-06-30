<?php

namespace Myrzan\TecDocClient\Generated\Response;

class VehicleDataByVINExt
{
    private string $response;

    /**
     * @return string
     */
    public function getResponse(): string
    {
        return $this->response;
    }

    /**
     * @param string $response
     * @return VehicleDataByVINExt
     */
    public function setResponse(string $response): VehicleDataByVINExt
    {
        $this->response = $response;
        return $this;
    }
}