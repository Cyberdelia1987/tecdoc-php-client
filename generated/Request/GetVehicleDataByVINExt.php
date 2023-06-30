<?php

namespace Myrzan\TecDocClient\Generated\Request;

class GetVehicleDataByVINExt
{
    private string $vin;
    private ?string $lang;
    private int $provider;

    /**
     * @param string $vin
     * @return GetVehicleDataByVINExt
     */
    public function setVin(string $vin): GetVehicleDataByVINExt
    {
        $this->vin = $vin;
        return $this;
    }

    /**
     * @param string|null $lang
     * @return GetVehicleDataByVINExt
     */
    public function setLang(?string $lang): GetVehicleDataByVINExt
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @param int $provider
     * @return GetVehicleDataByVINExt
     */
    public function setProvider(int $provider): GetVehicleDataByVINExt
    {
        $this->provider = $provider;
        return $this;
    }
}