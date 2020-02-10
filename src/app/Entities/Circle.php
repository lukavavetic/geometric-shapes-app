<?php

namespace App\Entities;

class Circle implements ShapeInterface
{
    /** @var float */
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }
}