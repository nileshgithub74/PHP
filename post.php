<!DOCTYPE html>
<html>
<head>
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

<form action="posttest.php" method="POST">
  <label for="username">UserName:</label>
  <input type="text" name="username" id="username" required>
  
  <label for="bloodgroup">Blood Group:</label>
  <select name="bloodgroup" id="bloodgroup" required>
    <option value="">Select Blood Group</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
  </select>
  
  <input type="submit" value="Submit">
</form>

</body>
</html>
