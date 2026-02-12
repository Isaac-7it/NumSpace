<?php

class Fibonacci {
    public $sequence;
    public $error;
    
    public function getFibonacciSequence(int $number) : string
    {
        $fibArr = [1, 1];
        if($number <= 0) {
            $this -> error = 'Error! We expect a natural number n such that n >= 3.';
        } elseif ($number === 1) {
            return $fibArr[0];
        } else {
            $iterationCount = $number - count($fibArr);
            for($i = 1; $i <= $iterationCount; $i++) {
                $nextTerm = $fibArr[$i] + $fibArr[$i - 1];
                $fibArr[] = $nextTerm;
            }

            $this -> sequence = implode(', ', $fibArr);
        }

        return $this -> sequence;
    }

    public function getFibonacciTerm($number) {
        $sequence = explode(', ', $this -> getFibonacciSequence($number));
        return $sequence[count($sequence) - 1];
    }
}