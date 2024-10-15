<?php

$email = "example@example.com";

$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);

if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL) !== false) { 
    echo "<br>$sanitizedEmail is a valid email address.";
} else {
    echo "<br>$sanitizedEmail is not a valid email address.";
}

?>
