<?php
include_once '../utility/PrimeChecker.php';
include_once '../utility/Coprime.php';

class ResidueModulo {
    public function getTotient($m) {
        $isPrime = (new Prime()) -> primeChecker($m);
        $allCoprimes = [];
        if ($m < 0) {
            return "m must be greater than 0";
        } elseif ($m === 0) {
            return "Undefined";
        } elseif($isPrime) {
            return $m - 1;
        } else {
            $i = 0;

            while($i <= ($m - 1)) {
                if((new Coprime()) -> isCoprime($i, $m)) {
                    $allCoprimes[] = $i;
                }

                $i++;
            }

            return count($allCoprimes);
        }
    }
}