<?php

use PHPUnit\Framework\TestCase;
use Micael\Shapes\Shape;
use Micael\Shapes\Circle;
use Micael\Helpers\TimestampIdGenerator;

final class ShapesAreaTest extends TestCase
{
    public function testCanCalculateShapeArea(): void
    {
        $width = 5;
        $length = 1;
        $shape = new Shape(new TimestampIdGenerator, $width, $length);

        $this->assertEquals($width * $length, $shape->area());
    }

    public function testCanCalculateCircleArea(): void
    {
        $radius = 3;
        $circle = new Circle(new TimestampIdGenerator, $radius);

        $this->assertEquals(pi() * pow($radius, 2), $circle->area());
    }
}
