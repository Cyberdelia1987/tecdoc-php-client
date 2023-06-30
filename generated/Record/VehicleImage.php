<?php

namespace Myrzan\TecDocClient\Generated\Record;

class VehicleImage
{
    //Image URL for the 50x50 Version of the Image
    private string $imageURL50;
    //Image URL for the 100x100 Version of the Image
    private string $imageURL100;
    //Image URL for the 200x200 Version of the Image
    private string $imageURL200;
    //Image URL for the 400x400 Version of the Image
    private string $imageURL400;
    //Image URL for the 800x800 Version of the Image
    private string $imageURL800;

    /**
     * @return string
     */
    public function getImageURL50(): string
    {
        return $this->imageURL50;
    }

    /**
     * @return string
     */
    public function getImageURL100(): string
    {
        return $this->imageURL100;
    }

    /**
     * @return string
     */
    public function getImageURL200(): string
    {
        return $this->imageURL200;
    }

    /**
     * @return string
     */
    public function getImageURL400(): string
    {
        return $this->imageURL400;
    }

    /**
     * @return string
     */
    public function getImageURL800(): string
    {
        return $this->imageURL800;
    }
}