<?php
  require "php/session.php";
 ?>

<!DOCTYPE html>
<html lang="sr">
  <head>
    <meta charset="UTF-8">
    <title> Tokyo revengers </title>
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div class="center">
      <?php

       ?>
      <h1> Ulogujte se </h1>
      <form action="includes/login.php" method="post">
        <div class="text_field">
          <input type="text" name="kIme" required>
          <span></span>
          <label>Korisničko ime </label>
        </div>
        <div class="text_field">
          <input type="password" name="pwd" required>
          <span></span>
          <label>Šifra </label>
        </div>
        <input type="submit" value="Uloguj se">
        <div class="singup_link">
          Nemate nalog? <a href="registracija.php">Registrujte se</a>

        </div>
      </form>
    </div>
  </body>
  </html>
