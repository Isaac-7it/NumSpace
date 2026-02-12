<?php

class Factors {
    public function getFactors(int $number) : array | string
    {
        if($number == 0) {
            return '0 has infinitely many factors!';
        } else {
            $factors = [];
            $absoluteInputValue = $number <= 0 ? $number * -1 : $number;
    
            for($i = 1; $i <= $absoluteInputValue; $i++) {
                if((($number % $i) === 0) && !in_array($i, $factors)) {
                    $factors[] = $i;
                }
            }
    
            foreach($factors as $factor) {
                $factors[] = $factor * -1;
            }
    
            return $factors;
        }

    }
}