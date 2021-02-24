<html>
<head>
<title>Flower Shop Prishtina</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/dashboard.css" rel="stylesheet" type="text/css" media="all">
</head> 
<body>
<?php
require_once('../database/mysqli_connect.php');
$query = "SELECT * FROM Kontakti";
$response = @mysqli_query($dbc, $query);
if($response){ 
   echo "<div class='produktet'>";
   echo "<table border='1'>";
    
   echo "<tr><th>Emri</th><th>Mbiemri</th><th>Telefon</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
    while($row = mysqli_fetch_array($response)){
        // echo "<div class='produkti'>"; 
        echo "<tr><td>".$row['Emri_kontakti'] . "</td>" ;
        echo "<td>".$row['Mbiemri_kontakti'] . "</td>";
        echo "<td>".$row['Telefon_kontakti'] . "</td>";
        echo "<td>".$row['Email_kontakti'] . "</td>";
        echo "<td>".$row['Subject_kontakti'] . "</td>";
        echo "<td>".$row['Message_kontakti'] .  "</td></tr>";
        // echo "</div>";
      }
      echo "</table>";
      
      echo "</div>";

}
?>
<div class="back-button">
    <a href="dashboard.php">Back to dashboard</a>
</div>
</body>