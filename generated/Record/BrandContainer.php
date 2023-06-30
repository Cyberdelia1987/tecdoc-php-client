<?php

namespace Myrzan\TecDocClient\Generated\Record;

class BrandContainer
{
    /**
     * @var Brand[] $array
     */
    private array $array;

    /**
     * @return array
     */
    public function getArray(): array
    {
        return $this->array;
    }

    /**
     * @param array $array
     * @return BrandContainer
     */
    public function setArray(array $array): BrandContainer
    {
        $this->array = $array;
        return $this;
    }
}