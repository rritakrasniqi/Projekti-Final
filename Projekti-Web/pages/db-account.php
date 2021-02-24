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
$query = "SELECT * FROM Accounts";
$response = @mysqli_query($dbc, $query);
if($response){ 
   echo "<div class='users'>";
    while($row = mysqli_fetch_array($response)){
        if ( $row['Roli'] == 2){
            $roli = "customer";
        }
        else{
            $roli = "admin";
        }
        echo "<div class='user'>"; 
        echo "<div class='emri'>".$row['Emri'] ." ".$row['Mbiemri'] . "</div>" ;
        echo "<div class='email'>".$row['Email'] . "</div>" ;
        echo "<div class='password'>".$row['Password'] . "</div>" ;
        echo "<div class='roli'>".$roli.  "</div>" ; 
        echo "</div>";
      }echo "</div>";
}
?>
<div class="back-button">
    <a href="dashboard.php">Back to dashboard</a>
</div>
</body>
</html>