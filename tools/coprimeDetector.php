<?php
include_once '../utility/header.php';
include_once '../utility/Coprime.php';

if($_SERVER['REQUEST_METHOD'] === 'GET' && array_key_exists('number1', $_GET) && array_key_exists('number2', $_GET)) {
    $numberOne = (int) htmlspecialchars(trim($_GET['number1']));
    $numberTwo = (int) htmlspecialchars(trim($_GET['number2']));
    $error = '';


    if((filter_var($numberOne, FILTER_VALIDATE_INT) !== false) && (filter_var($numberTwo, FILTER_VALIDATE_INT) !== false)) {
        $numberOne = (int) filter_var($numberOne, FILTER_SANITIZE_NUMBER_INT);
        $numberTwo = (int) filter_var($numberTwo, FILTER_SANITIZE_NUMBER_INT);
        $coprime = new Coprime();
        if($coprime -> isCoprime($numberOne, $numberTwo)) {
            $result = "Yes! The number ${numberOne} and ${numberTwo} are Coprimes";
        } else {
            $result = "No! The number ${numberOne} and ${numberTwo} are <span class='text-red-500'>not</span> Coprimes";
        }
        
    } else {
        $error .= 'An error occured!!';
    }
}
?>
    <div class="custom-grid mb-4">
        <a href="./coprimeDetector.php" class="flex items-center justify-center rounded-[10px] active-bg active-text p-2">Coprimes Detector</a>
        <a href="./absolute.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Absolute Value</a>
        <a href="./factorGenerator.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Factor Generator</a>
        <a href="./primeDetector.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Prime Detector</a>
        <a href="./primeGenerator.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Prime Generator</a>
        <a href="./division.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Division Algorithm</a>
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
        <h2 class="text-[24px] font-medium text-[#333333]">Coprime Detector</h2>
        <p class="text-[#a7a6a6]">Two numbers a, b are said to be coprime if their GCD is 1. That is gcd(a, b) = 1</p>
    </div>

    <div class="">
        <div class="flex flex-col flex-wrap justify-between mb-4 sm:flex-row sm:flex-nowrap sm:gap-4">
            <div class="flex justify-between items-center flex-1 mb-2 sm:flex-col sm:items-start sm:mb-0">
                <label for="number1" class="text-[14px] text-[#a7a6a6]">First Number</label>
                <input type="text" id="number1" name="number1" class="border-gray border-[1.6px] basis-[65%] rounded-md p-1 w-full sm:basis-full " value="<?= $numberOne ?? '' ?>">
            </div>    
            <div class="flex justify-between items-center flex-1 sm:flex-col sm:items-start">
                <label for="number2" class="text-[14px] text-[#a7a6a6]">Second Number</label>
                <input type="text" id="number2" name="number2" class="border-gray border-[1.6px] basis-[65%] rounded-md p-1 w-full sm:basis-full" value="<?= $numberTwo ?? '' ?>">
            </div>
        </div>
        <p class="text-red-500"><?php // $error ?? '' ?></p>
        <button type="submit" class="bg-[#4F39F6] text-white w-full rounded-lg p-2">Check Coprime</button>
    </div>
    </form>
    </div>
    <span class="bg-[#F3F4F6] block h-0.5 mb-4">&nbsp;</span>
    <h4 class="text-[24px]"> <span class="text-[#a7a6a6]">Result:</span></h4>
    <p> <?= $error ?? '', $result ?? '' ?> </p>
</main>