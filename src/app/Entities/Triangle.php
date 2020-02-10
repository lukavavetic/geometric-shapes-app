<?php

namespace App\Entities;

class Triangle implements ShapeInterface
{
    /** @var float */
    private $a;

    /** @var float */
    private $b;

    /** @var float */
    private $c;

    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA(): float
    {
        return $this->a;
    }

    public function getB(): float
    {
        return $this->b;
    }

    public function getC(): float
    {
        return $this->c;
    }
}