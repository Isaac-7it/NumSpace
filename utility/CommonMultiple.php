<?php
include_once '../utility/PrimeGenerator.php';

class CommonMultiple {
    public function getLowestCommonMultiple($a, $b) {
    if($a === 0 || $b === 0) {
        return $a * $b;
    }

    $notFound = true;
    $multiplier = 1;
    $multipleA = $a * $multiplier;
    $multipleB = $b * $multiplier;
    $maxNumber = max($multipleA, $multipleB);

    while($notFound) {
        $multipleA = $a * $multiplier;
        $multipleB = $b * $multiplier;
        $maxNumber = max($multipleA, $multipleB);
        if(($maxNumber % $a) === 0 && ($maxNumber % $b) === 0)  {
            $notFound = true;
            return $maxNumber;
        } else {
            $multiplier++;
        }
    }
    }
}
