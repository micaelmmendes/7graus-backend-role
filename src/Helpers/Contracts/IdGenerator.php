<?php

namespace Micael\Helpers\Contracts;

interface IdGenerator {
    /**
     * Generates a new ID.
     *
     * @return string
     */
    public function generate(): string;
}
