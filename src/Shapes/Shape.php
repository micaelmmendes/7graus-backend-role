<?php

namespace Micael\Shapes;

use \InvalidArgumentException;
use Micael\Helpers\Contracts\IdGenerator;

class Shape {
    /**
     * The shape's ID.
     *
     * @var string
     */
    private string $id;

    /**
     * The shape's name.
     *
     * @var string
     */
    public string $name = '';

    /**
     * The shape's width.
     *
     * @var float
     */
    protected float $width;

    /**
     * The shape's length.
     *
     * @var float
     */
    protected float $length;

    /**
     * The shape's type.
     *
     * @var int
     */
    public const TYPE = 1;

    /**
     * Instantiates a new shape.
     *
     * @param IdGenerator $idGenerator
     * @param float $width
     * @param float $length
     */
    public function __construct(IdGenerator $idGenerator, float $width, float $length) {
        $this->setId($idGenerator);
        $this->setWidth($width);
        $this->setLength($length);
    }

    /**
     * Gets the ID.
     *
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * Sets the ID.
     *
     * @param IdGenerator $idGenerator
     * @return void
     */
    public function setId(IdGenerator $idGenerator): void {
        if($idGenerator === null) {
            throw new InvalidArgumentException('Unknown ID generator.');
        }

        $this->id = $idGenerator->generate();
    }

    /**
     * Sets the width.
     *
     * @param float $width
     * @return void
     * @throws InvalidArgumentException if the width is not a positive number
     */
    private function setWidth(float $width): void {
        if($width < 0) {
            throw new InvalidArgumentException('The width must be a positive number.');
        }

        $this->width = $width;
    }

    /**
     * Sets the length.
     *
     * @param float $length
     * @return void
     * @throws InvalidArgummentException if the length is not a positive number
     */
    private function setLength(float $length): void {
        if($length < 0) {
            throw new InvalidArgumentException('The length must be a positive number.');
        }

        $this->length = $length;
    }

    /**
     * Calculates the shape's area.
     *
     * @return float
     */
    public function area(): float {
        return $this->width * $this->length;
    }

    /**
     * Builds a copy of the object.
     *
     * @return static
     */
    public function copy(): static {
        return clone $this;
    }
}
