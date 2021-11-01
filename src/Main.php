<?php

namespace Micael;

require __DIR__ . '/../vendor/autoload.php';

use Micael\Helpers\TimestampIdGenerator;
use Micael\Helpers\RandomStringIdGenerator;
use Micael\Shapes\Circle;
use Micael\Shapes\Rectangle;
use Micael\Shapes\Shape;
use Micael\Shapes\ShapesCollection;

class Main {
    /**
     * Runs the application.
     *
     * @return void
     */
    public function run(): void {
        $shape = new Shape(new TimestampIdGenerator, 1, 5);
        $rectangle = new Rectangle(new TimestampIdGenerator, 1, 5);
        $circle = new Circle(new RandomStringIdGenerator, 5);
        $shapesCollection = new ShapesCollection;

        var_dump($shapesCollection->save($shape));
        var_dump($shapesCollection->save($rectangle));
        var_dump($shapesCollection->save($circle));
        var_dump($shapesCollection);
    }
}

(new Main)->run();
