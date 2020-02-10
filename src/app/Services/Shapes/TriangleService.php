<?php

namespace App\Services\Shapes;

use App\Entities\ShapeInterface;
use App\Mappers\Response\ShapeResponseMapperInterface;
use App\Mappers\Response\TriangleResponseMapper;

class TriangleService implements GeometryCalculatorInterface
{
    public function calculateSurface() : float
    {
        // TODO: Implement calculateSurface() method.
    }

    public function calculateCircumference() : float
    {
        // TODO: Implement calculateCircumference() method.
    }

    public function calculate(ShapeInterface $shapeInterface) : ShapeResponseMapperInterface
    {
        $surface = $shapeInterface->getA() + $shapeInterface->getB() + $shapeInterface->getC();

        $circumference = $shapeInterface->getA() * $shapeInterface->getB() / 2;

        return new TriangleResponseMapper(
            "triangle",
            $shapeInterface->getA(),
            $shapeInterface->getB(),
            $shapeInterface->getC(),
            $surface,
            $circumference
        );
    }
}