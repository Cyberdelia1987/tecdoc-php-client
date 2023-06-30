<?php

namespace Myrzan\TecDocClient\Generated\Request;

class GetPartsByVINExt
{
    private string $vin;
    private ?string $lang;
    private int $provider;

    /**
     * @param string $vin
     * @return GetPartsByVINExt
     */
    public function setVin(string $vin): GetPartsByVINExt
    {
        $this->vin = $vin;
        return $this;
    }

    /**
     * @param string|null $lang
     * @return GetPartsByVINExt
     */
    public function setLang(?string $lang): GetPartsByVINExt
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @param int $provider
     * @return GetPartsByVINExt
     */
    public function setProvider(int $provider): GetPartsByVINExt
    {
        $this->provider = $provider;
        return $this;
    }
}