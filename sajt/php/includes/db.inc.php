<?php

  $servername = "localhost";
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "baza";

  $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if(!$conn){
    die("Konekcija sa bazom neuspesna:". mysqli_connect_error());
  }
