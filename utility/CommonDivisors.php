<?php
include_once '../utility/Factors.php';
include_once '../utility/Euclidean.php';

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
        $notFound = true;
        $euclidean = new Euclidean();
        while($notFound) {
            $remainder = $euclidean -> getRemainder($a, $b);
            $quotient = $euclidean -> getQuotient($a, $b);
            if($remainder === 0) {
                $notFound = false;
                return $b;
            } else {
                $a = $b;
                $b = $remainder;
            }
        }
    }
}
