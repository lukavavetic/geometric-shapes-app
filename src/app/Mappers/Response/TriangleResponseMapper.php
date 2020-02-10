<?php

namespace App\Mappers\Response;

class TriangleResponseMapper implements ShapeResponseMapperInterface
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

    public function __construct(string $type, float $a, float $b, float $c, float $surface, float $circumference)
    {
        $this->type = $type;
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->surface = $surface;
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