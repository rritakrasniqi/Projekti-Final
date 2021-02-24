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
   echo "<table border='1'>";
   echo "<tr><th>Emri</th><th>Mbiemri</th><th>Email</th><th>Roli</th></tr>";
    while($row = mysqli_fetch_array($response)){
        if ( $row['Roli'] == 2){
            $roli = "customer";
        }
        else{
            $roli = "admin";
        }
        echo "<tr><td>".$row['Emri']."</td>";
        echo "<td>".$row['Mbiemri'] ."</td>";
        echo "<td>".$row['Email'] ."</td>";
        echo "<td>".$roli ."</td></tr>";
      }
      echo "</table>";
      echo "</div>";
}
?>
<div class="back-button">
    <a href="dashboard.php">Back to dashboard</a>
</div>
</body>
</html>