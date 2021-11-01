<?php

namespace Micael\Shapes;

use Micael\Shapes\Shape;

class ShapesCollection {
    /**
     * The saved shapes.
     *
     * @var Shape[]
     */
    private array $shapes = [];

    /**
     * Saves a shape.
     *
     * @param Shape $shape
     * @return boolean true if the shape was saved
     */
    public function save(Shape $shape): bool {
        if(!$this->exists($shape)) {
            $this->shapes[] = $shape;

            return true;
        }

        return false;
    }

    /**
     * Checks if a shape is already saved.
     *
     * @param Shape $shape
     * @return bool
     */
    public function exists(Shape $shape): bool {
        foreach($this->shapes as $savedShape) {
            if($shape->getId() === $savedShape->getId()) {
                return true;
            }
        }

        return false;
    }
}
