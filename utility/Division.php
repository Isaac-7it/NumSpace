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
        // if($a === 0 && $b !== 0) {
        //     return 0;

        // if ($b === 0) {
        //     return 'Undefined!';
        // } elseif($a === 0 && $b === 0) {
        //     return 'Undefined';
        // } elseif ($a === 0 && $b !== 0) {
        //     return 0;
        // } elseif ($a > 0 && $b < 0) {
        //     return $a % $b;
        // } elseif($a < 0 && $b > 0) {
        //     return ($a % $b) + $b;
        // } elseif ($a === $b) {
        //     return 0;
        // } elseif($a < $b) {
        //     return $a;
        // } elseif ($a > $b) {
        //     return $b;
        // }
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
/*
elseif($a < 0 && $b > 0 && ($a % $b) !== 0) {
            return ($a % $b) + $b;
        } elseif($a > 0 && $b > 0) {
            return $a % $b;
        } elseif($a < 0 && $b > 0 && ($a % $b) == 0) {
            return $a % $b;
        } elseif ($a == 0 && $b !== 0) {
            return 0;
        } */