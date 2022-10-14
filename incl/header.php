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

<!-- search-login-hearder -->
  <!-- <div class="wrap">
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logo_new.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
						<a href="#" title="View my shopping cart" rel="nofollow">
								<span class="cart_title">Cart</span>
								<span class="no_product">(empty)</span>
							</a>
						</div>
			      </div>
		   <div class="login"><a href="login.php">Login</a></div>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div> -->
<!-- 
Front-End Design
Ui Design
Website: www.cupcom.com.br
-->


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
    <label class="open-search" for="open-search">
      <i class="fas fa-search"></i>
      <input class="input-open-search" id="open-search" type="checkbox" name="menu" />
      <div class="search">
        <button class="button-search"><i class="fas fa-search"></i></button>
        <input type="text" placeholder="What are you looking for?" class="input-search" />
      </div>
    </label>
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
              <li class="login-list-item"><a href="login.php">logout</a></li>
			  
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