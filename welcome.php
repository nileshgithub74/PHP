<html>
  <head>
    <title>Welcome Page</title>
  </head>
  <body>
    
  
  Welcome, <?php echo htmlspecialchars($_GET['username']); ?>! <br>
  Your blood group is: <?php echo htmlspecialchars($_GET['bloodgroup']); ?>

  </body>
</html>
