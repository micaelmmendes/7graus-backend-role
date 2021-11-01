<?php

namespace Micael\Helpers;

use Micael\Helpers\Contracts\IdGenerator;

class RandomStringIdGenerator implements IdGenerator {
    /**
     * Generates an ID.
     *
     * @return string
     */
    public function generate(): string {
        return bin2hex(openssl_random_pseudo_bytes(10));
    }
}
