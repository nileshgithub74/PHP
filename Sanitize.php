<?php

$input = "<p>Hello <b>World</b>!</p>";
$sanitized = strip_tags($input);
echo $sanitized; 

echo "I like Pizza";

print_r("Hello, this is Nilesh Kumar");

$int = 20;



if (filter_var($int, FILTER_VALIDATE_INT) !== false) { 
    echo "<br>$int is a valid integer.";
} else {
    echo "<br>$int is not a valid integer.";
}









$ip = "192.168.1.1";


if (filter_var($ip, FILTER_VALIDATE_IP) !== false) { 
    echo "<br>$ip is a valid IP address.";
} else {
    echo "<br>$ip is not a valid IP address.";
}

?>
