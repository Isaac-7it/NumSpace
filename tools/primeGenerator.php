<?php
include_once '../utility/header.php';
include_once '../utility/PrimeGenerator.php';

if($_SERVER['REQUEST_METHOD'] === 'GET' && array_key_exists('from', $_GET) && array_key_exists('to', $_GET)) {
    $fromValue = (int) htmlspecialchars(trim($_GET['from']));
    $toValue = (int) htmlspecialchars(trim($_GET['to']));
    $error = '';

    if((filter_var($fromValue, FILTER_VALIDATE_INT) !== false) && (filter_var($toValue, FILTER_VALIDATE_INT) !== false)) {
        $fromValue = (int) filter_var($fromValue, FILTER_SANITIZE_NUMBER_INT);
        $toValue = (int) filter_var($toValue, FILTER_SANITIZE_NUMBER_INT);
        $primes = (new PrimeGenerator()) -> getPrimes($fromValue, $toValue);
        $result = is_array($primes) ? implode(', ', $primes) : $primes;
    } else {
        $error .= 'An error occured!!';
    }
}
?>
    <div class="custom-grid mb-4">
        <a href="./coprimeDetector.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Coprimes Detector</a>
        <a href="./absolute.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Absolute Value</a>
        <a href="./factorGenerator.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Factor Generator</a>
        <a href="./primeDetector.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Prime Detector</a>
        <a href="./primeGenerator.php" class="flex items-center justify-center rounded-[10px] active-bg active-text p-2">Prime Generator</a>
        <a href="./euclidean.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Euclidean Algorithm</a>
        <a href="./gcd.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">GCD</a>
        <a href="./lcm.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">LCM</a>
        <a href="./commonDivisor.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Common Divisor</a>
        <a href="./totient.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Totient</a>
        <a href="./fibonacciTerm.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Fibonacci Term Generator</a>
        <a href="./fibonacciSequence.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Fibonacci Sequence Generator</a>
    </div>
    <span class="bg-[#F3F4F6] block h-0.5 mb-4">&nbsp;</span>
    <div class=" mb-4">
    <form class="" method="GET">
        <div class="mb-6">
            <h2 class="text-[24px] font-medium text-[#333333]">Prime Generator</h2>
            <p class="text-[#a7a6a6]">A integer P such that |P| > 1 is said to be prime if its factors are +/- P and +-1</p>
        </div>

        <div class="">
            <div class="flex flex-wrap justify-between mb-4 gap-2 sm:flex-row sm:flex-nowrap sm:gap-4">
                <div class="flex flex-col justify-between items-start flex-1 sm:flex-col sm:items-start sm:mb-0">
                    <label for="number1" class="text-[14px] text-[#a7a6a6]">from</label>
                    <input type="text" id="number1" name="from" class="border-gray border-[1.6px] basis-1/2 rounded-md p-1 sm:basis-full w-full" value="<?= $fromValue ?? '' ?>"> 
                </div>    
                <div class="flex flex-col justify-between items-start flex-1">
                    <label for="number2" class="text-[14px] text-[#a7a6a6]">to</label>
                    <input type="text" id="number2" name="to" class="border-gray border-[1.6px] basis-1/2 rounded-md p-1 sm:basis-full w-full" value="<?= $toValue ?? '' ?>">
                </div>
            </div>
            <button type="submit" class="bg-[#4F39F6] text-white w-full rounded-lg p-2">Check Prime</button>
        </div>
       </form>
    </div>
    <span class="bg-[#F3F4F6] block h-0.5 mb-4">&nbsp;</span>
    <h4 class="text-[24px]"> <span class="text-[#a7a6a6]">Result:</span></h4>
    <p> <?= $error ?? '', $result ?? '' ?> </p>
</main>
    