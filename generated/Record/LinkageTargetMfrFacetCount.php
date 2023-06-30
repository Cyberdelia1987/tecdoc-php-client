<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetMfrFacetCount
{
    private int $id;
    private string $name;
    private int $count;

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
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
}