<?php

namespace App\Support;

use App\Enums\ShapesEnum;
use App\Services\Shapes\CircleService;
use App\Services\Shapes\GeometryCalculatorInterface;
use App\Services\Shapes\TriangleService;

class ShapeServiceFactory
{
    public static function make(string $type) : GeometryCalculatorInterface
    {
        switch ($type) {
            case ShapesEnum::TRIANGLE:
               return resolve(TriangleService::class);
            break;
            case ShapesEnum::CIRCLE:
                return resolve(CircleService::class);
                break;
            default:
               //throw new ShapeTypeNotFound
        }
    }
}