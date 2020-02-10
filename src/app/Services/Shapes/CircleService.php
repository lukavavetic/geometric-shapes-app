<?php

namespace App\Services\Shapes;

use App\Entities\ShapeInterface;
use App\Mappers\Response\CircleResponseMapper;
use App\Mappers\Response\ShapeResponseMapperInterface;

class CircleService implements GeometryCalculatorInterface
{
    public function calculateSurface() : float
    {
        //
    }

    public function calculateCircumference() : float
    {
        //
    }

    public function calculate(ShapeInterface $shapeInterface): ShapeResponseMapperInterface
    {
        $surface = pow($shapeInterface->getRadius(), 2) * pi();

        $circumference = 2 * $shapeInterface->getRadius() * pi();

        return new CircleResponseMapper(
            "circle",
            $shapeInterface->getRadius(),
            $surface,
            $circumference
            );
    }
}