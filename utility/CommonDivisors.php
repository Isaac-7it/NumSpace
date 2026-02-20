<?php
include_once '../utility/Factors.php';
include_once '../utility/Division.php';

class CommonDivisors {
    public $commonDivisors = [];

    public function getCommonDivisors(int $numberOne, int $numberTwo) : array 
    {
        $numberOneFactors = (new Factors()) -> getFactors($numberOne);
        $numberTwoFactors = (new Factors()) -> getFactors($numberTwo);
        $mixedFactors = array_merge($numberOneFactors, $numberTwoFactors);

        foreach($mixedFactors as $factor) {
            if((($numberOne % $factor) === 0) && (($numberTwo % $factor) === 0) && !in_array($factor, $this -> commonDivisors)) {
                $this -> commonDivisors[] = $factor;
            }
        }
       

        return $this -> commonDivisors;
    }

    public function getGCD($a, $b) {
        if($b === 0) {
            return $a;
        } else {
            $gcdNotFound = true;
            $division = new Division();
            while($gcdNotFound) {
                $remainder = $division -> getRemainder($a, $b);
                $quotient = $division -> getQuotient($a, $b);
                if($remainder === 0) {
                    $gcdNotFound = false;
                    return abs($b);
                } else {
                    $a = $b;
                    $b = $remainder;
                }
            }
        }
    }
}
