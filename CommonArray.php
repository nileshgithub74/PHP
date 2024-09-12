<?php



// $fruits = array("Apple", "Banana", "Cherry");
// echo count($fruits);


// $numbers = array(4, 6, 2, 22, 11);
// sort($numbers);
// print_r($numbers); 

// $fruits = array("Apple", "Banana");
// array_push($fruits, "Cherry", "Date");
// print_r($fruits); //output 5


// $search_array = array("first" => null, "second" => 4);
// var_dump(isset($search_array["first"]));
// var_dump(array_key_exists("first", $search_array)); // Outputs: bool(true)



$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));


?>