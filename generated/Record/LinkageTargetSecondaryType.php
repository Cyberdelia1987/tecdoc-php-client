<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetSecondaryType
{
    //Secondary Type Id
    private int $id;
    //Secondary Type Description
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