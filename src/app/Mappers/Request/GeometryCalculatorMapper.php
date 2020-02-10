<?php

namespace App\Mappers\Request;

use App\Entities\ShapeInterface;

class GeometryCalculatorMapper
{
    /** @var string */
    private $type;

    /** @var ShapeInterface */
    private $shape;

    public function __construct(string $type, ShapeInterface $shape)
    {
        $this->type  = $type;
        $this->shape = $shape;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getShape(): ShapeInterface
    {
        return $this->shape;
    }
}
