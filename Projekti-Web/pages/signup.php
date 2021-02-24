<?php

// define variables and set to empty values
$nameErr = $emaiErrl = $surnErrame = $passErrword = "";
$name = $email = $surname = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  echo $name;
  $email = $_POST["email"];
  echo $email;
  $surname = $_POST["surname"];
  echo $surname;
  $password = $_POST["password"];
  echo $password;
  require_once('../database/mysqli_connect.php');
  if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
  }
  
  $sql = "INSERT INTO Accounts (Emri, Mbiemri, Password, Email)
  VALUES ('$name', '$surname', '$password', '$email')";
  
  if ($dbc->query($sql) === TRUE) {
    header("Location: http://localhost:8080/Projekti-Web/pages/login.html");
  } else {
    echo "Error: " . $sql . "<br>" . $dbc->error;
  }
}

?> 
