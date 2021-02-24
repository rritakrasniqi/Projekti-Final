<?php

// define variables and set to empty values
$nameErr = $emaiErrl = $surnErrame = $passErrword = "";
$name = $email = $surname = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $surname = $_POST["surname"];
  $phone = $_POST["phone"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  require_once('../database/mysqli_connect.php');
  if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
  }
  

  $sql = "INSERT INTO Kontakti (Emri_kontakti, Mbiemri_kontakti, Telefon_kontakti, Email_kontakti, Subject_kontakti, Message_kontakti)
  VALUES ('$name',  '$email',  '$surname',  '$phone',  '$subject',  '$message')";
  
  if ($dbc->query($sql) === TRUE) {
    header("Location: http://localhost:8080/Projekti-Web/index.html");
  } else {
    echo "Error: " . $sql . "<br>" . $dbc->error;
  }
}

?> 
