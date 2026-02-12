<?php
include_once '../utility/PrimeChecker.php';

class PrimeGenerator {
    public function getPrimes($from, $to): array | string
    {
         if($from > $to) {
            return 'Starting number cannot be greater than or equal to ending number';
        } else {
            $allNumbers = [];
            for($i = $from; $i <= $to; $i++) {
                    $allNumbers[] = $i;
            }

            $primes = [];

            foreach($allNumbers as $allNumber) {
                $isPrime = (new Prime()) -> primeChecker($allNumber);
                if($isPrime) {
                    $primes[] = $allNumber;
                }
            }

            return $primes;
        }
    }
}