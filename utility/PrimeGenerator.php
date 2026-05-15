<?php
include_once __DIR__ . '/PrimeChecker.php';

class PrimeGenerator {
    public function getPrimes($a, $b): array | string
    {
         if($a > $b) {
            return 'Starting number cannot be greater than or equal to ending number';
        } else {
            $allNumbers = [];
            for($i = $a; $i <= $b; $i++) {
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