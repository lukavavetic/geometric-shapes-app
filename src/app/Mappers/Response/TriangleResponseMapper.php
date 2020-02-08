<?php

namespace App\Mappers\Response;

class TriangleResponseMapper
{
    /** @var string */
    private $type;

    /** @var float */
    private $a;

    /** @var float */
    private $b;

    /** @var float */
    private $c;

    /** @var float */
    private $surface;

    /** @var float */
    private $circumference;

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function setA(float $a): void
    {
        $this->a = $a;
    }

    public function setB(float $b): void
    {
        $this->b = $b;
    }

    public function setC(float $c): void
    {
        $this->c = $c;
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
            'a'             => $this->a,
            'b'             => $this->b,
            'c'             => $this->c,
            'surface'       => $this->surface,
            'circumference' => $this->circumference,
        ];
    }
}