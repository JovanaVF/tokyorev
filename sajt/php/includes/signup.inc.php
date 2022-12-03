<?php

if (isset($_POST['signup-submit'])) {
    $imeiPrezime = $_POST['imeiPrezime'];
    $email = $_POST['email'];
    $kIme = $_POST['kIme'];
    $pwd = $_POST['pwd'];
    $pwdPonovo = $_POST['pwdPonovo'];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    if (invalidUid($kIme)!==false) {
        header("location:../../registracija.php?error=invalidUid");
        exit();
    }
    if (invalidEmail($email)!==false) {
        header("location:../../registracija.php?error=invalidEmail");
        exit();
    }
    if (pwdMatch($pwd,$pwdPonovo)!==false) {
        header("location:../../registracija.php?error=passDontMatch");
        exit();
    }
    if (UidExists($conn,$kIme, $email)!==false) {
        header("location:../../registracija.php?error=kImeTaken");
        exit();
    }

    createUser($conn,$imeiPrezime,$email,$kIme,$pwd);
}
else {
    header("location:../../registracija.php");
    exit();
}
