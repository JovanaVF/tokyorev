<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="sr">
  <head>
    <meta charset="UTF-8">
    <title> Tokyo revengers </title>
    <link rel="stylesheet" href="css/style.css" />
  </head> 
  <body >

    <?php
      if(isset($_SESSION["id"])) {
        echo '

          <main >
          <div class="container">
          <a href="index1.php"> 
          <img src="img/tmg.jpeg" alt="" style="width:80%; href="index1.php >
          <div class="centered">
          <a class="main" > <h1> Welcome </h1> </div>
          </div>
          </a>
                    
          </div>
        </main>

        ';
      } else {
          echo '
          <div class="center">
            <h1> Ulogujte se </h1>
            <form action="php/includes/login.inc.php" method="post">
              <div class="text_field">
                <input type="text" name="kIme" required>
                <span></span>
                <label>Korisničko ime ili E-mail</label>
              </div>
              <div class="text_field">
                <input type="password" name="pwd" required>
                <span></span>
                <label>Šifra </label>
              </div>
              <input type="submit" name="login-submit" value="Uloguj se">
              <div class="singup_link">
                Nemate nalog? <a href="registracija.php">Registrujte se</a>

              </div>
              <div class="singup_link">';

              if (isset($_GET["error"])) {
                  if ($_GET["error"]=="wornglogin") {
                    echo "<h2>Podaci koji su uneti su netacni ili ne postoji korisnik! </h2>";
                  }
              }

            echo '
            </div>
            </form>
          ';
      }
    ?>
    <header></header>
    <main ></main>
    <footer >  </footer>

  </body>
  </html>
