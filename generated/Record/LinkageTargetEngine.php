<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetEngine
{
    /**
     * Engine Id (not available for HMD Vehicles)
     */
    private ?int $id;

    /**
     * Engine Code
     */
    private string $code;


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
}