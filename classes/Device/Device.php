<?php

namespace Device;

use Interfaces\HasNameInterface;
use Interfaces\HasBrandInterface;

abstract class Device implements HasNameInterface, HasBrandInterface
{
    /**
    * @var string
    * */
    protected $name;

    /**
    * @var string
    * */
    protected $brand;


    public function getName(): ?string
    {
        return $this->name;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }


    public function setName(?string $name): HasNameInterface
    {
        $this->name = $name;

        return $this;
    }

    public function setBrand(?string $brand): HasBrandInterface
    {
        $this->brand = $brand;

        return $this;
    }
}