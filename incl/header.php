
    <?php
    $filepath = realpath(dirname(__FILE__));
 
    include_once ($filepath.'/../lib/database.php');
    include_once ($filepath.'/../helpers/format.php'); 
    include_once 'lib/session.php';
    Session::init();
    
   // lay ham tu dong khong can include
    spl_autoload_register(function($className){
      include_once  "classes/".$className.'.php' ;
    });
    $db = new Database();
      $fm = new Format();
    //  $ct = new cart();
    //  $us = new user();
      $cat = new category();
      $product = new product(); 
     // $tmp = new temp();
    ?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE HTML>
<head>
<title>Digital Camera</title>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Exo:700' rel='stylesheet' type='text/css'>
<link rel="preload" href="https://themes.googleusercontent.com/static/fonts/opensans/v8/k3k702ZOKiLJc3WVjuplzBsxEYwM7FgeyaSgU71cLG0.woff?1650525972" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="https://themes.googleusercontent.com/static/fonts/opensans/v8/MTP_ySUJH_bn48VBG8sNShsxEYwM7FgeyaSgU71cLG0.woff?1650525972" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="https://themes.googleusercontent.com/static/fonts/opensans/v8/uYKcPVoh6c5R0NpdEY5A-Q.woff?1650525972" as="font" type="font/woff" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
</head>
<body>


<header>
  <!-- contact content -->
  <!-- <div class="header-content-top">
    <div class="content">
      <span><i class="fas fa-phone-square-alt"></i> 0798003703</span>
      <span><i class="fas fa-envelope-square"></i>pbndigitalcamera@gmail.com</span>
    </div>
  </div> -->
  <!-- / contact content -->
  <div class="container">
    <!-- logo -->
    <strong class="logo"><a href="index.php"><img src="images/logo_new.png" alt="" /></a></strong>
	<!-- <div class="logo">
		<a href="index.php"><img src="images/logo_new.png" alt="" /></a>
	</div> -->
    <!-- open nav mobile -->

    <!--search -->
    <form class="form-inline" method="post" action="search.php">
     <label class="open-search" for="open-search">
      <i class="fas fa-search"></i>
      
      <div class="search">
        <button class="button-search"><i class="fas fa-search" type="submit" name="sbm"></i></button>
        <input type="search" placeholder="Bạn muốn tìm gì?" class="input-search" name ="keyword"/>
      </div>
    </label>
</form>
    <!-- // search -->
    <nav class="nav-content">
      <!-- nav -->
      <ul class="nav-content-list">
        <li class="nav-content-item account-login">
          <label class="open-menu-login-account" for="open-menu-login-account">

            <input class="input-menu" id="open-menu-login-account" type="checkbox" name="menu" />

            <i class="fas fa-user-circle"></i><span class="login-text">Hello, Sign in <strong>Create Account</strong></span> <span class="item-arrow"></span>

            <!-- submenu -->
            <ul class="login-list">
              <li class="login-list-item"><a href="login.php">My account</a></li>
              <li class="login-list-item"><a href="login.php">Create account</a></li>
              <li class="login-list-item"><a href="login.php">Logout</a></li>
			  
          </label>
      </ul>
      </li>
      <li class="nav-content-item"><a class="nav-content-link" href="https://www.cupcom.com.br/"><i class="fas fa-heart"></i></a></li>
      <li class="nav-content-item"><a class="nav-content-link" href="https://www.cupcom.com.br/"><i class="fas fa-shopping-cart"></i></a></li>
      <!-- call to action -->
      </ul>
    </nav>
  </div>



<div class="menu">
	<ul id="dc_mega-menu-orange" class="dc_mm-orange">
	  <li><a href="index.php">Home</a></li>
  	  <li><a href="products.php">Products</a> </li>
	  <li><a href="topbrands.php">Top Brands</a></li>
	  <li><a href="cart.php">Cart</a></li>
	  <li><a href="contact.php">Contact</a> </li>
	  	  <div class="clear"></div>
	</ul>
</div>