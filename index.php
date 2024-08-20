


<?php

//var_dump("Nilesh");
//echo"<br>"

?>

<?php
// This is a single-line comment
//echo "Hello, World!";

/* 
 This is a multi-line comment
 that spans multiple lines
*/
//echo "Hello, again!";
?>


<?php
//$intArray = array(10,20,40);
//echo "First element : $intArray[0],<br>";
//echo "Second element : $intArray[1],<br>";
//echo "Third element : $intArray[2],<br>";

v//ar_dump($intArray);

?>




<?php
//$Fruits = ['apple', 'banana', 'Orange'];
//echo($Fruits[0]);

//$person = ['name '=> 'John','age' =>30, 'location ' => 'new york'];

////echo$person['name'];

?>

<?php
class Car {
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function m() {
        return "This car is of " . $this->color . " color.";
    }
}

// Example usage

$myCar = new Car("red");
echo $myCar->m(); // Output: This car is of red color.
?>
