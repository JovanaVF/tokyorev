<?php
  function invalidUid($kIme){
      $result;
      if(!preg_match("/^[a-zA-Z0-9]*$/",$kIme)){
        $result = true;
      }
      else {
        $result = false;
      }
      return $result;

  }

  function invalidEmail($email){
      $result;
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
      }
      else {
        $result = false;
      }
      return $result;

  }

  function pwdMatch($pwd, $pwdPonovo){
      $result;
      if($pwd !== $pwdPonovo){
        $result = true;
      }
      else {
        $result = false;
      }
      return $result;

  }

  function UidExists($conn,$kIme, $email){
      $sql = "SELECT * FROM korisnici WHERE kIME = ? OR email = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../../registracija.php.php?error=stmtFailed");
        exit();
      }

      mysqli_stmt_bind_param($stmt,"ss", $kIme, $email );
      mysqli_stmt_execute($stmt);

      $resultData = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
      }
      else{
          $result = false;
          return $result;
      }

      mysqli_stmt_close($stmt);
  }

  function createUser($conn,$imeiPrezime,$email,$kIme,$pwd){
      $sql = "INSERT INTO korisnici (imeiPrezime, email, kIme, pwd) VALUES(?,?,?,?);";
      $stmt = mysqli_stmt_init($conn);



      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../../registracija.php?error=stmtFailed");
        exit();
      }

      $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

      mysqli_stmt_bind_param($stmt,"ssss", $imeiPrezime,$email,$kIme,$hashPwd);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
      header("location:../../registracija.php?error=none");
      exit();

  }

  function loginUser($conn,$kIme,$pwd) {
      $kImeExists = UidExists($conn,$kIme,$kIme);

      if ($kImeExists === false) {
          header("location:../../index.php?error=wornglogin");
          exit();
      }

      $pwdHash = $kImeExists["pwd"];
      $chechPwd = password_verify($pwd,$pwdHash);

      if ($chechPwd === false) {
        header("location:../../index.php?error=wornglogin");
        exit();
      }
      else if($chechPwd === true){
        session_start();
        $_SESSION["id"]=$kImeExists['id'];
        $_SESSION["kIme"]=$kImeExists['kIme'];
        header("location:../../index.php");
        exit();
      }
  }