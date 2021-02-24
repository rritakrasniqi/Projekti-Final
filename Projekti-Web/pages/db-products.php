<html>
<head>
<title>Flower Shop Prishtina</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/dashboard.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/products.css" rel="stylesheet" type="text/css" media="all">
</head> 
<body>
<?php
require_once('../database/mysqli_connect.php');
$query = "SELECT * FROM Produktet";
$response = @mysqli_query($dbc, $query);
if($response){ 
   echo "<div class='produktet'>";
    while($row = mysqli_fetch_array($response)){
        echo "<div class='produkti'>"; 
        echo "<div class='foto'>".'<img src="data:image/jpeg;base64,'.base64_encode($row['Foto']).'"/>'."</div>";
        echo "<div class='titulli'>".$row['Emri_produkti'] . "</div>" ;
        echo "<div class='cmimi'>".$row['Cmimi'] . "</div>" ; 
        echo "</div>";
      }echo "</div>";
}
?>
<div class="back-button">
    <a href="dashboard.php">Back to dashboard</a>
</div>
</body>
</html>