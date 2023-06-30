<?php

namespace Myrzan\TecDocClient\Generated\Record;
class LinkageTargetTypeFacetCount
{
    private string $type;
    private int $count;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param string $type
     * @return LinkageTargetTypeFacetCount
     */
    public function setType(string $type): LinkageTargetTypeFacetCount
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param int $count
     * @return LinkageTargetTypeFacetCount
     */
    public function setCount(int $count): LinkageTargetTypeFacetCount
    {
        $this->count = $count;
        return $this;
    }
}