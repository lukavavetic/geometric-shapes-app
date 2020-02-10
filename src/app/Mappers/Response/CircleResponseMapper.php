<?php

namespace App\Mappers\Response;

class CircleResponseMapper implements ShapeResponseMapperInterface
{
    /** @var string */
    private $type;

    /** @var float */
    private $radius;

    /** @var float */
    private $surface;

    /** @var float */
    private $circumference;

    public function __construct(string $type, float $radius, float $surface, float $circumference)
    {
        $this->type = $type;
        $this->radius = $radius;
        $this->surface = $surface;
        $this->circumference = $circumference;
    }

    public function jsonSerialize()
    {
        return [
            'type'          => $this->type,
            'radius'        => $this->radius,
            'surface'       => $this->surface,
            'circumference' => $this->circumference,
        ];
    }
}