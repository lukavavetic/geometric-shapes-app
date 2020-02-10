<?php

namespace App\Support;

use App\Services\Shapes\CircleService;
use App\Services\Shapes\GeometryCalculatorInterface;
use App\Services\Shapes\TriangleService;

class ShapeServiceFactory
{
    public static function make(string $type) : GeometryCalculatorInterface
    {
        switch ($type) {
            case "triangle":
               return resolve(TriangleService::class);
            break;
            case "circle":
                return resolve(CircleService::class);
                break;
            default:
               //throw new ShapeTypeNotFound
        }
    }
}