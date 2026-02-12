<?php
include_once '../utility/header.php';
?>
    <div class="custom-grid mb-4">
        <a href="./coprimeDetector.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Coprimes Detector</a>
        <a href="./absolute.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Absolute Value</a>
        <a href="./factorGenerator.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Factor Generator</a>
        <a href="./primeDetector.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Prime Detector</a>
        <a href="./primeGenerator.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Prime Generator</a>
        <a href="./euclidean.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Euclidean Algorithm</a>
        <a href="./gcd.php" class="flex items-center justify-center rounded-[10px] active-bg active-text p-2">GCD</a>
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
            <h2 class="text-[24px] font-medium text-[#333333]">Greatest Common Divisor (GCD)</h2>
            <p class="text-[#a7a6a6]">Let a,b be in Z, then d is a common divisor of a and b if d|a and d|b. If d also divides all other common divisors of a and b then d is said to be the greatest common divisor of a and b</p>
        </div>

        <div class="">
            <div class="flex flex-wrap justify-between mb-4">
                <input type="hidden" name="tool" value="gcd">
                <div class="flex justify-between items-center flex-1 mb-2 gap-2.5">
                    <label for="number1" class="text-[14px] text-[#a7a6a6]">a</label>
                    <input type="number1" id="number1" name="number1" class="border-gray border-[1.6px] flex-1 rounded-md p-1">
                </div>    
                <div class="flex justify-between items-center flex-1 gap-2.5">
                    <label for="number2" class="text-[14px] text-[#a7a6a6]">b</label>
                    <input type="number" id="number2" name="number2" class="border-gray border-[1.6px] flex-1 rounded-md p-1">
                </div>
            </div>
            <button type="submit" class="bg-[#4F39F6] text-white w-full rounded-lg p-2">Determine GCD</button>
        </div>
    </form>
    </div>
</main>