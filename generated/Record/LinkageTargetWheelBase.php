<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetWheelBase
{
    //Wheel Base
    private int $wheelBase;
    //Axle Position Key (Key Table 64)
    private int $axlePositionKey;
    //Axle Position Description (Key Table 64)
    private int $axlePosition;

    /**
     * @return int
     */
    public function getWheelBase(): int
    {
        return $this->wheelBase;
    }

    /**
     * @return int
     */
    public function getAxlePositionKey(): int
    {
        return $this->axlePositionKey;
    }

    /**
     * @return int
     */
    public function getAxlePosition(): int
    {
        return $this->axlePosition;
    }
}