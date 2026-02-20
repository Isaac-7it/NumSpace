<?php
include_once '../utility/header.php';
include_once '../utility/CommonMultiple.php';

if($_SERVER['REQUEST_METHOD'] === 'GET' && array_key_exists('number1', $_GET) && array_key_exists('number2', $_GET)) {
    $numberOne = (int) htmlspecialchars(trim($_GET['number1']));
    $numberTwo = (int) htmlspecialchars(trim($_GET['number2']));
    $error = '';

    if((filter_var($numberOne, FILTER_VALIDATE_INT) !== false) && (filter_var($numberTwo, FILTER_VALIDATE_INT) !== false)) {
        $numberOne = (int) filter_var($numberOne, FILTER_SANITIZE_NUMBER_INT);
        $numberTwo = (int) filter_var($numberTwo, FILTER_SANITIZE_NUMBER_INT);
        
        $commonMultiple = new CommonMultiple();
        $lowestCommonMultiple = $commonMultiple -> getLowestCommonMultiple($numberOne, $numberTwo);

        $result = $lowestCommonMultiple;
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
        <a href="./primeGenerator.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Prime Generator</a>
        <a href="./division.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Division Algorithm</a>
        <a href="./gcd.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">GCD</a>
        <a href="./lcm.php" class="flex items-center justify-center rounded-[10px] active-bg active-text p-2">LCM</a>
        <a href="./commonDivisor.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Common Divisor</a>
        <a href="./totient.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Totient</a>
        <a href="./fibonacciTerm.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Fibonacci Term Generator</a>
        <a href="./fibonacciSequence.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Fibonacci Sequence Generator</a>
    </div>
    <span class="bg-[#F3F4F6] block h-0.5 mb-4">&nbsp;</span>
    <div class=" mb-4">
    <form class="" method="GET">
        <div class="mb-6">
            <h2 class="text-[24px] font-medium text-[#333333]">Lowest Common Multiple (LCM)</h2>
            <p class="text-[#a7a6a6]">Let <span>{a<sub>i</sub>}<span class=''><sup>n</sup><sub>i=1</sub></span></span> be a collection of integers. An integer c is called a common mulitple of <span>a<sup>'</sup><sub>i</sub>s</span> if each <span>a<sub>i</sub></span> divides c, that is <span><span>a<sub>i</sub></span>|c</span> for all i. If c divides all other common multiples of <span>a<sub>'</sub><sup>i</sup>s</span>, it is called the lowest common multiple of <span>a<sup>'</sup><sub>i</sub>s</span> and is denoted <br><span>[<span>a<sub>1</sub></span>, <span>a<sub>2</sub></span>, <span>a<sub>3</sub></span>, ... , <span>a<sub>4</sub></span>]</span></p>
        </div>

        <div class="">
            <div class="flex flex-wrap justify-between mb-4 md:gap-2.5">
                <div class="flex justify-between items-center flex-1 mb-2 gap-2.5 md:mb-0">
                    <label for="number1" class="text-[14px] text-[#a7a6a6]">a</label>
                    <input type="number" id="number1" name="number1" class="border-gray border-[1.6px] flex-1 rounded-md p-1" value="<?= $numberOne ?? '' ?>">
                </div>    
                <div class="flex justify-between items-center flex-1 gap-2.5">
                    <label for="number2" class="text-[14px] text-[#a7a6a6]">b</label>
                    <input type="number" id="number2" name="number2" class="border-gray border-[1.6px] flex-1 rounded-md p-1" value="<?= $numberTwo ?? '' ?>">
                </div>
            </div>
            <button type="submit" class="bg-[#4F39F6] text-white w-full rounded-lg p-2">Determine LCM</button>
        </div>
    </form>
    </div>
    <span class="bg-[#F3F4F6] block h-0.5 mb-4">&nbsp;</span>
    <h4 class="text-[24px]"> <span class="text-[#a7a6a6]">Result:</span></h4>
    <p> <?= $error ?? '', $result ?? '' ?> </p>
</main>