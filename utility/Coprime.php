<?php
include_once '../utility/CommonDivisors.php';

class Coprime {
    public function isCoprime($a, $b) {
        $gcd = (new CommonDivisors()) -> getGCD($a, $b);

        if($gcd === 1) {
            return true;
        } else {
            return false;
        }
    }
} 