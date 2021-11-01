<?php

namespace Micael\Shapes;

use \InvalidArgumentException;
use Micael\Helpers\Contracts\IdGenerator;

class Circle extends Shape {
    /**
     * The circle's radius.
     *
     * @var float
     */
    protected float $radius;

    /**
     * The circle's type.
     *
     * @var int
     */
    public const TYPE = 3;

    /**
     * Instantiates a new circle.
     *
     * @param IdGenerator $idGenerator
     * @param float $radius
     */
    public function __construct(IdGenerator $idGenerator, float $radius) {
        $this->setRadius($radius);

        parent::__construct($idGenerator, 0, 0);
    }

    /**
     * Sets the circle's radius
     *
     * @param float $radius
     * @return void
     * @throws InvalidArgumentException
     */
    private function setRadius(float $radius): void {
        if($radius <= 0) {
            throw new InvalidArgumentException('The radius must be a positive number.');
        }

        $this->radius = $radius;
    }

    /**
     * Calculates the circle's area.
     *
     * @return float
     */
    public function area(): float {
        return pi() * pow($this->radius, 2);
    }
}
