<?php


// $d = date("D");

// if($d == "tue"){
//     echo "it is tuesday";
// }


// $age = 18;

// if($age <= 18){
//     echo "you are eligibel to vote";
// }
// else{
//     echo "you are not eligible to vote";
// }

// $num = 13;

// if($num%2 ==0){
    
//     echo " it is  even number";
// }else{
//     echo " is is not even  number";
// }



//---------------------check the prime number  


function is_prime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Example usage
$number = 29;
if (is_prime($number)) {
    echo "$number is a prime number";
} else {
    echo "$number is not a prime number";
}










?>