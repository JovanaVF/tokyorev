<?php
    if (isset($_POST['login-submit'])) {
      $kIme = $_POST['kIme'];
      $pwd = $_POST['pwd'];

      require_once 'db.inc.php';
      require_once 'functions.inc.php';

      loginUser($conn,$kIme,$pwd);
    }
    else {
        header("location:../../index.php?error");
        exit();
    }
