<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<title>Get Signed Mehandi</title>
<link rel="shortcut icon" href="favicon.ico">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.bxslider.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="main.css" type="text/css" />
<link rel="stylesheet" href="css/hover.css" type="text/css" />  
<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />  
</head>
<body>

<header>
<div class="container">
<div class="row">
<div class="logo">
<a href="index.php"><img src="Images/Logo.png" alt="logo"/></a>
</div>
<div class="menu">
<a href="about.php" class="hvr-underline-from-left">ABOUT US</a>
<a href="services.php" class="hvr-underline-from-left">OUR SERVICES</a>
<a href="gallery.php" class="hvr-underline-from-left">GALLERY</a>
<a href="contact.php" class="hvr-underline-from-left">CONTACT US</a>
</div>
</div>
</div>
</header>                                           

<div class="home-banner">
	<a href="#productPage"><img src="Images/learnmore.png" alt="Banner" class="learnmore" id="learnmore1"/></a>

	<ul class="bxslider">
		<li><img src="Images/banner1.jpg" alt="Banner" class="img-responsive"/></li>
		<li><img src="Images/banner2.jpg" alt="Banner" class="img-responsive"/></li>
		<li><img src="Images/banner3.jpg" alt="Banner" class="img-responsive"/></li>
		<li><img src="Images/banner4.jpg" alt="Banner" class="img-responsive"/></li>
		<li><img src="Images/banner5.jpg" alt="Banner" class="img-responsive"/></li>
	</ul>

	<div id="banner-top">
		<img src="Images/banner-logo.png" alt="Banner" class="firstimg"/>
		<p>M: (91) 98405 38410  /  (91) 99402 18210</p>
		<p>E: getdsigned@yahoo.com</p>
	</div>

</div>

<div class="who-wrap" >
<div class="whoweare-left">
	<div class="aboutwho">
		<h1>WHO WE ARE</h1>
		<p>Mehandi  is one of the oldest cosmetic beautification rituals in the world, and is still enjoyed by millions of human beings, spanning nearly every continent. Intricate details are painstakingly applied by master artist Sneha Jain, and contain auspicious symbols for love,  prosperity, luck and fertility.  SNEHA will work with you to pinpoint your unique style, while making sure to incorporate your traditional or personal motifs.</p>
		<a href="about.php" class="hvr-shutter-out-horizontal">LEARN MORE</a>
	</div>
</div>
<div class="whoweare-right">
	<img src="Images/who-we-are-banner.jpg" alt="logo" class="img-responsive"/>
</div>
</div>

<!-- <div id="iframevideo">
<iframe width="100%" height="580" src="https://www.youtube.com/embed/najJMyBLVKE" frameborder="0" allowfullscreen></iframe>
</div> -->

<div class="container" id="productPage">
<div class="row">

<div class="col-md-4 col-sm-4 prd-links">
<a href="services.php"> 
<img src="Images/our-services.png" alt="mehendi" class="hvr-pop"/> 
<h1>OUR SERVICES</h1>
</a>
</div>

<div class="col-md-4 col-sm-4 prd-links">
<a href="gallery.php"> 
<img src="Images/our-products.png" alt="mehendi" class="hvr-pop"/> 
<h1>RECENT WORK</h1>
</a>
</div>

<div class="col-md-4 col-sm-4 prd-links">
<a href="gallery.php"> 
<img src="Images/gallery.png" alt="mehendi" class="hvr-pop"/> 
<h1>GALLERY</h1>
</a>
</div>

</div>
</div>

<div class="footer">

<div class="footer-details">
<a href="index.php"><img src="Images/inner-logo.png" alt="logo"/></a>
<p class="footinfo">M: (91) 98405 38410  /  (91) 99402 18210 E: getdsigned@yahoo.com</p>
<div class="solial-icons">  
<a href="https://www.facebook.com/GetDSigned/" target="blank"> <img src="Images/fb.png" alt="solial-icons"></a>
<a href="https://in.pinterest.com/getdsigned/" target="blank"> <img src="Images/pinterest.png" alt="solial-icons"></a>
<a href="https://www.instagram.com/getdsignedmehandi/" target="blank"> <img src="Images/instagram.png" alt="solial-icons"></a>
</div>
<p>© 2016 GET D'SIGNED MEHANDI. ALL RIGHTS RESERVED &nbsp;&nbsp;  | &nbsp;&nbsp;  PRIVACY POLICY</p>

</div>

</div>

<script type="text/javascript">
    $(document).ready(function() {
	    $('.bxslider').bxSlider({
	        auto: true,
	        autoControls: true,
	        speed: 2000,
	        mode: 'fade'
	    });
	
		$('#learnmore1').click(function() {
		    $('html, body').animate({
		    scrollTop: $("#productPage").offset().top-122
			}, 1000);
		});
	});
</script>

</body>
</html>
