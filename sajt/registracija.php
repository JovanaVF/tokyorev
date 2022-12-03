<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="sr">
  <head>
    <meta charset="UTF-8">
    <title>Tokyo revengers</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
  <?php
  if(!isset($_SESSION['id'])){
    echo '
    <header></header>
    <main>
    <div class="center">
      <h1> Registrujte se </h1>
      <form action="php/includes/signup.inc.php" method="post">
        <div class="text_field">
          <input type="text" name="imeiPrezime" required>
          <span></span>
          <label>Ime i prezime </label>
        </div>
        <div class="text_field">
          <input type="text" name="email" required>
          <span></span>
          <label>E-mail </label>
        </div>
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
        <div class="text_field">
          <input type="password" name="pwdPonovo" required>
          <span></span>
          <label>Ponovite šifru </label>
        </div>
        <input type="submit" name="signup-submit" value="Registruj se">
        <div class="singup_link">
          Imate nalog? <a href="index.php">Ulogujte se</a>
        </div>
        <div class="singup_link">';


        if (isset($_GET["error"])) {
            if ($_GET["error"]=="invalidUid") {
              echo "<h2>Prometine korisnicko ime! </h2>";
            }
            else if ($_GET["error"]=="invalidEmail") {
              echo "<h2>Promenite E-mail!</h2>";
            }
            else if ($_GET["error"]=="passDontMatch") {
              echo "<h2>Lozinke nisu iste!</h2>";
            }
            else if ($_GET["error"]=="stmtFailed") {
              echo "<h2>Nesto ne valja!</h2>";
            }
            else if ($_GET["error"]=="kImeTaken") {
              echo "<h2>Korisnik vec postoji!</h2>";
            }
            else if ($_GET["error"]=="none") {
              echo "<h2>Regostrovali ste se!</h2>";
            }
        }

  echo '
      </div>
      </form>
      </main>';
  }else {
    echo'
    <div class="center">
      <h1>Ulogovani ste!</h1>
      <div class="singup_link">
      <a href="index.php" >
        <input type="submit"  value="Pocetna strana" >
      </a>
      </div>
  </div>
    ';
  }
  ?>


  </body>
</html>
