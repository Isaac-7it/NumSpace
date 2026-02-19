<?php

class Euclidean {
    public function getQuotient($a, $b) {
        $remainder = $this -> getRemainder($a, $b);

        if($b === 0) {
            return 'Undefined!';
        } else {
            $quotient = ($a - $remainder) / $b;
            return $quotient;
        }
    }

    public function getRemainder($a, $b) {
        if ($b === 0) {
            return $a;
        } elseif ($a === 0) {
            return $b;
        } elseif($a < 0 && $b > 0 && ($a % $b) !== 0) {
            return ($a % $b) + $b;
        } elseif($a > 0 && $b > 0) {
            return $a % $b;
        } elseif($a < 0 && $b > 0 && ($a % $b) == 0) {
            return $a % $b;
        } elseif ($a == 0 && $b !== 0) {
            return 0;
        }
    }
}

