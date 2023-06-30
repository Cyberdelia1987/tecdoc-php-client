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

    /**
     * @param int $id
     * @return LinkageTargetMfrFacetCount
     */
    public function setId(int $id): LinkageTargetMfrFacetCount
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name
     * @return LinkageTargetMfrFacetCount
     */
    public function setName(string $name): LinkageTargetMfrFacetCount
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param int $count
     * @return LinkageTargetMfrFacetCount
     */
    public function setCount(int $count): LinkageTargetMfrFacetCount
    {
        $this->count = $count;
        return $this;
    }
}