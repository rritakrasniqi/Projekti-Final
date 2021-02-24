<?php
// Start the session
session_start();
?>

<html lang="">
<head>
<title>Flower Shop Prishtina</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/flexslider.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/style.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">  
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +37744123456
        <li><i class="fa fa-envelope-o"></i>Prishtina@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="index.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="pages/about.php">About</a></li>
        <li><a href="pages/contact.html">Contact</a></li>
        <li><a href="pages/login.php">Login</a></li>
        <li><a href="pages/register.html">Register</a></li>
        <li><a href="pages/products.php">Products</a></li>
        <li><a href="pages/cart.php"><i class="fa fa-shopping-cart"></i>shopping cart</a></li>
        <?php
          if ($_SESSION) {
            echo '<li><a href="pages/cart.php"><i class="fa fa-shopping-cart"></i>shopping cart</a></li>';
          }
        ?>
								
			
      </ul>
    </div>
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="index.html">Flower Shop </div>
  </header>
</div>

<div class="flexslider">
  <ul class="slides">
 
</div>

<!--
<div id="slider">
  <a href="#" class="control_next">></a>
  <a href="#" class="control_prev"><</a>
  <ul>
    <li class="one_quarter first"><img src="images/demo/22.png" alt=""></li>
    <li class="one_quarter first"><img src="images/demo/22.png" alt=""></li>
    <li class="one_quarter first"><img src="images/demo/22.png" alt=""></li>
    <li class="one_quarter first"><img src="images/demo/22.png" alt=""></li>
  </ul>  
</div> 
-->

 <div class="sectiontitle">
      <h3 class="heading">Fresh Smell</h3>
      <p>Make their day special with a gorgeous bouquet.</p>
    </div>
    
      <ul class=" product-slider" > <!--nospace group logos//-->
        <li class=" "><img src="images/demo/Tq.png" alt=""></li>
        <li class=" "><img src="images/demo/Tq.png" alt=""></li>
        <li class=" "><img src="images/demo/Tq.png" alt=""></li>
        <li class=" "><img src="images/demo/Tq.png" alt=""></li>
        <li class=""><img src="images/demo/flower12.png" alt=""></li>
        <li class=""><img src="images/demo/Log in.png" alt=""></li>
        <li class=""><img src="images/demo/flower9.png" alt=""></li>
      </ul>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="sectiontitle">
      <h3 class="heading">Serenata Flowers</h3>
      <p>Fresh Flowers From Prishtina</p>
    </div>
    <p class="btmspace-50 justified"> Get fresh and beautiful floral arrangements delivered right to your door when you shop with ProFlowers. Treat yourself to a stunning bouquet or send flowers to someone close to you. If you’re purchasing flowers for a particular event, we have you covered. Whether you’re ordering birthday flowers or sympathy flowers, we have a fresh bouquet that’s perfect for the occasion.   Shopping on a budget? Then you’re in the right place — we can deliver flower bouquets and other gifts at an affordable price. Just shop our discount flowers to check out some of the best deals we have to offer.</p>
    <ul class="nospace group center">
      <li class="one_quarter first">
        <img class="inspace-10 borderedbox" src="images/demo/bloom1.jpg" alt="">
        <p>Nairobi Flower</p>
		<p> 23.00€</p>
		 
      </li>
      <li class="one_quarter">
        <img class="inspace-10 borderedbox" src="images/demo/bloom2.jpg" alt="">
        <p>La Belle Rose</p>
		<p> 35.00€</p>
		
      </li>
      <li class="one_quarter">
        <img class="inspace-10 borderedbox" src="images/demo/bloom6.jpg" alt="">
       <p>Wild and Wonderful</p>
		<p> 45.00€</p>
		 
      </li>
      <li class="one_quarter">
        <img class="inspace-10 borderedbox" src="images/demo/bloom7.jpg" alt="">
         <p>Serenity and Bliss</p>
		<p> 66.00€</p>
		 
      </li>
	  
    </ul>
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/F.png');">
  <article class="hoc container clear"> 
    <div class="three_quarter first">
      <h6 class="nospace">Registe to become our client</h6>
      <p class="nospace">See our latest products</p>
    </div>
    <footer class="one_quarter"><a class="btn" href="pages/register.html">Register</a></footer>
  </article>
</div>

<div class="wrapper bgded overlay light" style="background-image:url('images/demo/backgrounds/F.png');">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <h3 class="heading">Best Smelling Flowers</h3>
    </div>
    <ul class="nospace group center">
      <li class="one_quarter first">
        <img src="images/demo/bloom11.jpg" alt="">
        <p>Serenity and Bliss</p>
		<p> 47.00€</p>
		
      </li>
      <li class="one_quarter">
        <img src="images/demo/gif3.jpg" alt="">
         <p>Serenity and Bliss</p>
		<p> 59.99€</p>
		 
      </li>
      <li class="one_quarter">
        <img src="images/demo/bloom14.jpg" alt="">
         <p>Serenity and Bliss</p>
		<p> 54.99€</p>
		 
      </li>
      <li class="one_quarter">
        <img src="images/demo/bloom3.jpg" alt="">
         <p>Serenity and Bliss</p>
		<p> 39.99€</p>
		 
      </li>
	  
	  
	   <h3 class="heading">Gifts</h3>
    </div>
    <ul class="nospace group center">
      <li class="one_quarter first">
        <img src="images/demo/gif2.jpg" alt="">
        <p>Macaroons and Flowers</p>
		<p> 47.00€</p>
		
      </li>
      <li class="one_quarter">
        <img src="images/demo/r.jpg" alt="">
         <p>Colorful Tulips</p>
		<p> 59.99€</p>
		 
      </li>
      <li class="one_quarter">
        <img src="images/demo/gif.png" alt="">
         <p>Sweet Fairytail</p>
		<p> 54.99€</p>
		 
      </li>
      <li class="one_quarter">
        <img src="images/demo/gif1.jpg" alt="">
         <p>Renesance Rosese</p>
		<p> 39.99€</p>
		 
      </li>
	  
    </ul>
    <div class="clear"></div>
  </section>
</div>
<div class="wrapper row3">
  <article class="hoc container clear"> 
    <div class="sectiontitle">
      <h3 class="heading">Fresh Smell</h3>
      <p>Make their day special with a gorgeous bouquet.</p>
    </div>
    <figure>
      <ul class="nospace group logos">
        <li class="one_quarter first"><a href="#"><img src="images/demo/bloom7.jpg" alt="">
		 <p>Abundance of Winter Flowers</p>
		<p> 55.00€</p>
		
        <li class="one_quarter"><a href="#"><img  src="images/demo/p6.png" alt="">
		 <p>Abundance of Seasonal </p>
		<p> 52.00€</p>
		
        <li class="one_quarter"><a href="#"><img  src="images/demo/Flower8.png" alt="">
		 <p>Mixed Tall Stems for Vases</p>
		<p> 66.00€</p>
		
        <li class="one_quarter"><a href="#"><img  src="images/demo/y.jpg" alt="">
		 <p>Serenity and Bliss</p>
		<p> 41.00€</p>
		
		</ul>
    </figure>
			  <p class="btmspace-50 justified">  Flowers are the key to making a surprise gift burst with emotion. No matter if the sentiment is one of joy on a birthday, wedding or anniversary or for a sad occasion like a funeral or to express sorrow. Flowers have an almost magical ability to communicate all your feelings from a distance, without a single word being spoken. A bouquet can easily be chosen to fit the characteristics and style of whoever you want to impress and there’s a certain level of luxury implied when you deliver flowers to someone’s door. Let the colours and fresh scents send the perfect message to someone special from anywhere in the world.</p>
  </article>
</div>

 <figure>
      <ul class="nospace group logos">
        <li class="one_quarter first"><a href="#"><img src="images/demo/z.png" alt="">
		 <p>Sweet Suprise</p>
		<p> 23.99€</p>
		
        <li class="one_quarter"><a href="#"><img  src="images/demo/jo.png" alt="">
		 <p>Ice Cream </p>
		<p> 39.99€</p>
		
        <li class="one_quarter"><a href="#"><img  src="images/demo/bloom4.jpg" alt="">
		 <p>Bloom</p>
		<p> 62.70€</p>
		
        <li class="one_quarter"><a href="#"><img  src="images/demo/g.png" alt="">
		 <p>Innocent Love</p>
		<p> 22.90€</p>
		
      </ul>
    </figure>








<div class="wrapper row3">
  <!-- <section class="hoc container clear"> 
    <div class="sectiontitle">
      <h3 class="heading">Get a view</h3>
      <p>Prishtina with the best flower shop in town</p> 
    </div>
    <ul class="nospace group">
      <li class="one_third first">
        <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="images/demo/shop2.png" alt=""></a>
          <div class="excerpttxt">
           
            <h6 class="heading font-x1">New Location - Come and celebrate with us our grand opening...</h6>
            <p><a class="btn" href="#">Read More &raquo;</a></p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="images/demo/shop.png" alt=""></a>
          <div class="excerpttxt">
           
            <h6 class="heading font-x1">Find us at your nearest street, Come and smell the fresh flowers</h6>
            <p><a class="btn" href="#">Read More &raquo;</a></p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="images/demo/shop1.png" alt=""></a>
          <div class="excerpttxt">
         
            <h6 class="heading font-x1">" A person who loves flowers, loves LIFE"- one of my...</h6>
            <p><a class="btn" href="#">Read More &raquo;</a></p>
          </div>
        </article>
      </li>
    </ul>
  </section> -->
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Flower Shop</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/slider.js"></script>
</body>
</html>
