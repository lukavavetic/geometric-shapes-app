<?php

namespace App\Http\Controllers;

use App\Entities\Triangle;
use App\Enums\ShapesEnum;
use App\Http\Requests\TriangleRequest;
use App\Mappers\Request\GeometryCalculatorMapper;
use App\Services\GeometryCalculatorService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TriangleController extends Controller
{
    public function calculate(TriangleRequest $triangleRequest, GeometryCalculatorService $geometryCalculatorService) : JsonResponse
    {
        $data = $triangleRequest->validationData();

        $triangle = new Triangle($data['a'], $data['b'], $data['c']);

        $geometryCalculatorMapper = new GeometryCalculatorMapper(ShapesEnum::TRIANGLE, $triangle);

        $triangleResponseMapper = $geometryCalculatorService->calculate($geometryCalculatorMapper);

        return new JsonResponse($triangleResponseMapper, Response::HTTP_OK);
    }
}
