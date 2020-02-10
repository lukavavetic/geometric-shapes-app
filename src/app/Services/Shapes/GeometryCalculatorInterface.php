<?php

namespace App\Services\Shapes;

use App\Mappers\Response\ShapeResponseMapperInterface;
use App\Entities\ShapeInterface;

interface GeometryCalculatorInterface
{
    public function calculateSurface() : float;

    public function calculateCircumference() : float;

    public function calculate(ShapeInterface $shapeInterface) : ShapeResponseMapperInterface;
}