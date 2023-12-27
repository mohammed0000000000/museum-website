<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login page</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <form action="<?php include "php/loginmethods.php" ?>" method="POST" >
      <div class="one">
        <label for="username">Username</label>
      <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="one">
      <label for="Password">Password</label>
      <input type="password" name="password" placeholder="Password" required>
      </div>
      <?php 
      echo $loginmessage;
      ?>
      <button type="submit">login</button>

    </form>
  </div>
</body>
</html>