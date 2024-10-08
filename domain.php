<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
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
    form {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 300px;
    }
    form input[type="text"],
    form select {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }
    form input[type="submit"]:hover {
      background-color: #45a049;
    }
    label {
      font-weight: bold;
    }
  </style>
</head>
<body>

<form action="domains.php" method="POST">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" required>
  
  <label for="regno">Registration Number:</label>
  <input type="text" name="regno" id="regno" required>
  
  <label for="domain">Domain:</label>
  <select name="domain" id="domain" required>
    <option value="">Select Domain</option>
    <option value="Computer Science">Computer Science</option>
    <option value="Information Technology">Information Technology</option>
    <option value="Electrical Engineering">Electrical Engineering</option>
    <option value="Mechanical Engineering">Mechanical Engineering</option>
    <option value="Civil Engineering">Civil Engineering</option>
    <option value="Biotechnology">Biotechnology</option>
  </select>
  
  <input type="submit" value="Submit">
</form>

</body>
</html>
