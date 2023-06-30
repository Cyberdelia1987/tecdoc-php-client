<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetYearFacetCounts
{
    private int $year;
    private int $count;

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $year
     * @return LinkageTargetYearFacetCounts
     */
    public function setYear(int $year): LinkageTargetYearFacetCounts
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @param int $count
     * @return LinkageTargetYearFacetCounts
     */
    public function setCount(int $count): LinkageTargetYearFacetCounts
    {
        $this->count = $count;
        return $this;
    }
}