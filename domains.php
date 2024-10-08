<!DOCTYPE html>
<html>
<head>
    <title>Submission Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            color: #333;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #4CAF50;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Submission Confirmation</h1>
    <p>Welcome, <?php echo htmlspecialchars($_POST['username']); ?>!</p>
    <p>Your Registration Number is: <?php echo htmlspecialchars($_POST['regno']); ?></p>
    <p>Your Selected Domain is: <?php echo htmlspecialchars($_POST['domain']); ?></p>
</div>

</body>
</html>
