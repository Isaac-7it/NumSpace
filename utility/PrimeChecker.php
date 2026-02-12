<?php
include_once '../utility/Factors.php';

class Prime {

    public function primeChecker($number) {
        $absoluteInputValue = $number <= 0 ? $number * -1 : $number;

        if($absoluteInputValue > 1) {
           $factors = (new Factors()) -> getFactors($absoluteInputValue);

            if(count($factors) === 4) {
                // $result = "The number ${inputValue} is prime";
                return true;
            } else {
                // $result = "The number ${inputValue} is <span class='text-red-500'>not</span> prime";
                return false;
            }
        } 
        else {
            // $result = "The number ${inputValue} is <span class='text-red-500'>not</span> prime";
            return false;
        }
    }
}

$isPrime = new Prime();