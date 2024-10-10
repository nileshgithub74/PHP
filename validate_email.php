<?php
$email_error = $email_success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Validate email using PHP filter_var function
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_success = "Email is valid";
    } else {
        $email_error = "Invalid email address";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        input[type="email"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            text-align: center;
        }
        .success {
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Email Validation Form</h2>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="submit" value="Submit">
            <!-- Display error or success message -->
            <?php if (!empty($email_error)) { ?>
                <p class="error"><?php echo $email_error; ?></p>
            <?php } elseif (!empty($email_success)) { ?>
                <p class="success"><?php echo $email_success; ?></p>
            <?php } ?>
        </form>
    </div>
</body>
</html>
