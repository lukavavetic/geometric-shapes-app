<?php

namespace App\Http\Controllers;

use App\Entities\Circle;
use App\Enums\ShapesEnum;
use App\Http\Requests\CircleRequest;
use App\Mappers\Request\GeometryCalculatorMapper;
use Symfony\Component\HttpFoundation\Response;
use App\Services\GeometryCalculatorService;
use Illuminate\Http\JsonResponse;

class CircleController extends Controller
{
    public function calculate(CircleRequest $circleRequest, GeometryCalculatorService $geometryCalculatorService) : JsonResponse
    {
        $data = $circleRequest->validationData();

        $circle = new Circle($data['radius']);

        $geometryCalculatorMapper = new GeometryCalculatorMapper(ShapesEnum::CIRCLE, $circle);

        $circleResponseMapper = $geometryCalculatorService->calculate($geometryCalculatorMapper);

        return new JsonResponse($circleResponseMapper, Response::HTTP_OK);
    }
}
