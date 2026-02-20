<?php

declare(strict_types = 1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class EuclideanTest extends TestCase {
    public function returnsActualRemainder() {
        $euclidean = new Euclidean();

        $euclidean -> getRemainder(2, -5);

        $this -> assertEquals($expected, $euclidean -> getRemainder(2, -5));
    }
}