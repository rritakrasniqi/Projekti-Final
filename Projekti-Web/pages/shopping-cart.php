<?php
// Start the session
session_start();
echo $_SESSION['email'];
?>
<html lang="">

<head>
<title>Shopping Cart | Page | Flower Shop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/products.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@FlowerShop.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="contact.html">Contact</a></li>
		<li><a href="login.html">Login</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="products.html">Products</a></li>
		<li><i class="fa fa-shopping-cart"></i>shopping cart</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>

<?php
require_once('../database/mysqli_connect.php');
$query = "SELECT p.* FROM Cart c INNER JOIN Produktet p ON c.ID_produkti = p.ID_produkti AND c.ID_account =".$_SESSION['user_id'];
$response = @mysqli_query($dbc, $query);
if($response){ 
   echo "<div class='produktet'>";
    while($row = mysqli_fetch_array($response)){
        echo "<div class='produkti'>"; 
        echo "<div class='foto'>".'<img src="data:image/jpeg;base64,'.base64_encode($row['Foto']).'"/>'."</div>";
        echo "<div class='titulli'>".$row['Emri_produkti'] . "</div>" ;
        echo "<div class='cmimi'>".$row['Cmimi'] .  "</div>" ; 
        echo '<input type="hidden" name="product_id" value="'.$row['ID_produkti'].'">';
        echo "</div>";
      }echo "</div>";
}
?>
</body>
</html>
<script>
function addToCart(id) {
  console.log(id)
  var productForm = document.getElementById('form_' + id);
  productForm.submit()
}
</script>