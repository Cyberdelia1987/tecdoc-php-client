<?php

namespace Myrzan\TecDocClient\Generated\Record;

class LinkageTargetIds
{
    private string $type;
    private int $id;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return LinkageTargetIds
     */
    public function setType(string $type): LinkageTargetIds
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return LinkageTargetIds
     */
    public function setId(int $id): LinkageTargetIds
    {
        $this->id = $id;
        return $this;
    }


}