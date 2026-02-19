<?php
include_once '../utility/header.php';
include_once '../utility/ResidueModulo.php';


if($_SERVER['REQUEST_METHOD'] === 'GET' && array_key_exists('number', $_GET)) {
    $inputValue = (int) htmlspecialchars(trim($_GET['number']));
    $error = '';

    $residue = new ResidueModulo();
    if(filter_var($inputValue, FILTER_VALIDATE_INT) !== false) {
        $inputValue = (int) filter_var($inputValue, FILTER_SANITIZE_NUMBER_INT);
        $residue = new ResidueModulo();

        $result = $residue -> getTotient($inputValue);
    } else {
        $error .= 'Invalid input!';
    }
}

?>

    <div class="custom-grid mb-4">
        <a href="./coprimeDetector.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Coprimes Detector</a>
        <a href="./absolute.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Absolute Value</a>
        <a href="./factorGenerator.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Factor Generator</a>
        <a href="./primeDetector.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Prime Detector</a>
        <a href="./primeGenerator.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Prime Generator</a>
        <a href="./euclidean.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Euclidean Algorithm</a>
        <a href="./gcd.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">GCD</a>
        <a href="./lcm.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">LCM</a>
        <a href="./commonDivisor.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Common Divisor</a>
        <a href="./totient.php" class="flex items-center justify-center rounded-[10px] active-bg active-text p-2">Totient</a>
        <a href="./fibonacciTerm.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Fibonacci Term Generator</a>
        <a href="./fibonacciSequence.php" class="flex items-center justify-center rounded-[10px] inactive-bg inactive-text p-2">Fibonacci Sequence Generator</a>
    </div>
    <span class="bg-[#F3F4F6] block h-0.5 mb-4">&nbsp;</span>
    <div class=" mb-4">
    <form class="" method="GET">
        <div class="mb-6">
            <h2 class="text-[24px] font-medium text-[#333333]">Totient</h2>
            <p class="text-[#a7a6a6]">Let a,b be in &Zopf;, then d is a common divisor of a and b if d|a and d|b</p>
        </div>

        <div class="">
            <div class="flex flex-wrap justify-between mb-4">
                <input type="hidden" name="tool" value="totient">
                <div class="flex items-baseline flex-1 mb-2">
                    <label for="" class="text-9xl text-[#333]">&Zopf;</label>
                    <label for="number" class="text-[16px] text-[#a7a6a6]">m: </label>
                    <input type="number" id="number" name="number" class="border-gray border-[1.6px] w-10 rounded-md p-1" value="<?= $inputValue ?>">
                </div>    
            </div>
            <button type="submit" class="bg-[#4F39F6] text-white w-full rounded-lg p-2">Obtain Totient</button>
        </div>
    </form>
    </div>
    <span class="bg-[#F3F4F6] block h-0.5 mb-4">&nbsp;</span>
    <h4 class="text-[24px]"> <span class="text-[#a7a6a6]">Result (φ(m)):</span></h4>
    <p> <?= $error ?? '', $result ?? '' ?> </p>
</main>