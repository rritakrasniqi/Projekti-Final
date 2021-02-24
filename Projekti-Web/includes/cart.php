<?php
// Start the session
session_start();
?>

<html><body>
    <?php 

	// lidhja me databaze 
    require_once('../database/mysqli_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];

    echo '</br>';
    echo $product_id;
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO Cart (ID_produkti, ID_account) VALUES ($product_id,$user_id)";
  
  if ($dbc->query($sql) === TRUE) {
    header("Location: http://localhost:8080/Projekti-Web/pages/shopping-cart.php");
  } else {
    echo "Error: " . $sql . "<br>" . $dbc->error;
  }
}

?>

</body>
</html>