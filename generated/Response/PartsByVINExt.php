<?php

namespace Myrzan\TecDocClient\Generated\Response;

class PartsByVINExt
{
    private string $respose;

    /**
     * @return string
     */
    public function getRespose(): string
    {
        return $this->respose;
    }

    /**
     * @param string $respose
     * @return PartsByVINExt
     */
    public function setRespose(string $respose): PartsByVINExt
    {
        $this->respose = $respose;
        return $this;
    }
}