<?php

// $num1 = readline("Enter the first number: ");
// $num2 = readline("Enter the second number: ");



// $num1 = (int)$num1;
// $num2 = (int)$num2;


// $sum = $num1 + $num2;
// $difference = $num1 - $num2;
// $product = $num1 * $num2;
// $quotient = $num1 / $num2;




// echo "Sum: $sum\n";
// echo "Difference: $difference\n";
// echo "Product: $product\n";
// echo "Quotient: $quotient\n";












?>





<?php


$size = (int)readline("Enter the size of the array: ");
$myArray = [];
for($i = 0; $i < $size; $i++) {
    $myArray[$i] = (int)readline("Enter element " . ($i + 1) . ": ");
}

$sum = 0;
$even = 0;
for($i = 0; $i < $size; $i++) {
    $sum += $myArray[$i];
    if($myArray[$i] % 2 == 0) {
        $even++;
    }
}

$average = $sum / $size;
print_r("Average: " . $average . "\n");
print_r("Number of even elements: " . $even . "\n");


?>