<?php

namespace App\Mappers\Response;

use JsonSerializable;

class CircleResponseMapper implements JsonSerializable
{
    /** @var string */
    private $type;

    /** @var float */
    private $radius;

    /** @var float */
    private $surface;

    /** @var float */
    private $circumference;

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function setSurface(float $surface): void
    {
        $this->surface = $surface;
    }

    public function setCircumference(float $circumference): void
    {
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