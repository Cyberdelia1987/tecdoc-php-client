<?php

namespace Myrzan\TecDocClient\Generated\Record;

class AxleBodyType
{
    private string $bodyTypeCode;

    /**
     * @return string
     */
    public function getBodyTypeCode(): string
    {
        return $this->bodyTypeCode;
    }

    /**
     * @param string $bodyTypeCode
     * @return AxleBodyType
     */
    public function setBodyTypeCode(string $bodyTypeCode): AxleBodyType
    {
        $this->bodyTypeCode = $bodyTypeCode;
        return $this;
    }
}