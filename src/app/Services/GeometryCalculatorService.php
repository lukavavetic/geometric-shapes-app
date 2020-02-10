<?php

namespace App\Services;

use App\Mappers\Request\GeometryCalculatorMapper;
use App\Mappers\Response\ShapeResponseMapperInterface;
use App\Support\ShapeServiceFactory;

class GeometryCalculatorService
{
    public function calculate(GeometryCalculatorMapper $geometryCalculatorMapper) : ShapeResponseMapperInterface
    {
        $shapeType = $geometryCalculatorMapper->getType();

        $geometryService = ShapeServiceFactory::make($shapeType);

        $shape = $geometryCalculatorMapper->getShape();

        $shapeResponseMapper = $geometryService->calculate($shape);

        return $shapeResponseMapper;
    }
}