<?php

class Division {
    public function getQuotient($a, $b) {
        $remainder = $this -> getRemainder($a, $b);

        if($b === 0 || $remainder === 'Undefined!') {
            return 'Undefined!';
        } else {
            $quotient = ($a - $remainder) / $b;
            return $quotient;
        }
    }

    public function getRemainder($a, $b) {
        $b = abs($b);

        if($b === 0) {
            return 'Undefined!';
        } elseif ($a < 0 && ($a % $b) !== 0) {
            return ($a % $b) + $b;
        } else {
            return $a % $b;
        } 
    }
}