<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetCab
{
    //Cab Id
    private int $id;
    //Cab Description
    private string $description;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}