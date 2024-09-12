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



// $input_array = array('a', 'b', 'c', 'd', 'e');
// print_r(array_chunk($input_array, 2));


// $input_array = array("A", "Cat", "Dog", "A", "Dog");
// $result = array_count_values($input_array);
// print_r($result);






// $array1 = array("a" => "green", "red", "blue", "red");
// $array2 = array("b" => "green", "yellow", "red");
// $result = array_diff($array1, $array2);
// print_r($result);



// $input = array("a" => "red", "b" => "green", "c" => "blue");
// $result = array_flip($input);
// print_r($result);


$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);





$input = array("a" => "Volvo", "b" => "BMW", "c" => "Toyota");
$result = array_reverse($input);
print_r($result);














?>