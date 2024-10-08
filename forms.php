<!DOCTYPE html>
<html>
<body>

<form action="welcome.php" method="GET">
  UserName: <input type="text" name="username" required><br><br>
  Blood Group: 
  <select name="bloodgroup" required>
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
  <br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
