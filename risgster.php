<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rigister page</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <form action="<?php include "php/registermethod.php" ?>" method="POST">
      <div class="one">
        <label for="username">Username</label>
      <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="one">
        <label for="email">E-mail</label>
      <input type="email" name="email" placeholder="E-mail" required>
      </div>
      <div class="one">
      <label for="Password">Password</label>
      <input type="password" name="password" placeholder="Password" required>
      </div>
      <?php 
      echo $rigimessage;
      ?>
      <button type="submit">sign up</button>

    </form>
  </div>
</body>
</html>