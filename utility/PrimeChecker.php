<?php
include_once __DIR__ . '/Factors.php';

class Prime {

    public function primeChecker($number) {
        $absoluteInputValue = $number <= 0 ? $number * -1 : $number;

        if($absoluteInputValue > 1) {
           $factors = (new Factors()) -> getFactors($absoluteInputValue);

            if(count($factors) === 4) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

$isPrime = new Prime();