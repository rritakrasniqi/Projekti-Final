<!DOCTYPE html>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Login | Page | Flower shop </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
		<li><i class="fa fa-shopping-cart"></i>shopping cart</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../index.html">Flower Shop</a></h1>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->

<div class="wrapper row3" style="background: url(../images/demo/g1.png);">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
        <div class="centered-form">
		
          <form id="login_user" name="login_user" method="POST" action="../includes/login.php" >
                <label class="label">Email:</label>
                <input id="email" name="email" class="input" type="text"/>

                <label class="label">Password:</label>
                <input id="password" name="password" class="input" type="password"/>

                <a class="btn submitbutton" type="submit" onclick="validate(0)">LOGIN</a>
            </form>
        </div>
		
    </div>
    </div>
    <!-- ################################################################################################ -->
	    <!-- / main body -->
    <div class="clear"></div>
	
	<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/F.png');">
  <article class="hoc container clear"> 
    <div class="three_quarter first">
      <h6 class="nospace">Registe to become our client</h6>
      <p class="nospace">See our latest products</p>
    </div>
    <footer class="one_quarter"><a class="btn" href="pages/register.html">Register</a></footer>
  </article>
</div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 All Rights Reserved </p>
    <p class="fl_right">Flower Shop Prishtina </p>
    <!-- ################################################################################################ -->
  </div>
</div>
<script>
  function validate(number){
  var inputList = document.getElementsByClassName('input');
           //console.log(inputList);
        if(number==0){
            //jemi tek login
            var emailValue = inputList[0].value;
            var passwordValue = inputList[1].value;

            console.log('Email eshte '+emailValue);
            console.log('Password eshte '+passwordValue);

            if(emailValue=="" || passwordValue==""){
                alert('Te dhenat nuk jane mbushur');
            }
            else{
              var loginForm = document.getElementById('login_user')
              loginForm.submit()
            }
            
                //dergo ne backend
        }
  }
</script>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
</html>