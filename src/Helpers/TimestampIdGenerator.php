<?php

namespace Micael\Helpers;

use Micael\Helpers\Contracts\IdGenerator;

class TimestampIdGenerator implements IdGenerator {
    /**
     * Generates an ID.
     *
     * @return string
     */
    public function generate(): string {
        return strval(time());
    }
}
