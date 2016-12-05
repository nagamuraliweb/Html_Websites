<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
<title>Get Signed Mehandi</title>
<link rel="shortcut icon" href="favicon.ico">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="main.css" type="text/css" />
<link rel="stylesheet" href="css/hover.css" type="text/css" />
</head>
<body>

<div class="inner-head" >
<div class="container">
<div class="row">
<div class="logo">
<a href="index.php"><img src="Images/inner-logo.png" alt="logo"/></a>
</div>
<div class="menu">
<a href="about.php" class="hvr-underline-from-left">ABOUT US</a>
<a href="services.php" class="hvr-underline-from-left">OUR SERVICES</a>
<a href="gallery.php" class="hvr-underline-from-left">GALLERY</a>
<a href="contact.php" class="hvr-underline-from-left">CONTACT US</a>
</div>
</div>
</div>
</div>                                           

<div id="contact-cont">
<div class="container">
<div class="row cnt-banner">

<div class="col-md-6 col-sm-6 cnt-left">
    <img src="Images/contact-banner.jpg" alt="Banner" class="img-responsive">
</div>

<div class="col-md-6 col-sm-6 cnt-right">
<h1>SEND US A MESSAGE</h1>

<form>
 
 <input type="text" placeholder="NAME" id="name" required>
 <input type="email" placeholder="E-MAIL" id="email" required>
 <input type="number" placeholder="PHONE" id="phone" required>
 <textarea placeholder="MESSAGE" id="msg" required></textarea>
 <input type="submit" class="sub" id="submit">

</form>

<div class="alert alert-success">
  <strong>Success!</strong> Your message has been sent.
</div>

<div class="alert alert-danger">
  <strong>Sorry!</strong> Your message could not be sent please try again.
</div>

</div>

</div>
</div>

</div>

<div class="instagram">
<h1>INSTAGRAM</h1>
<a href="https://www.instagram.com/getdsignedmehandi/" target="blank"><img src="Images/instragram-banner.jpg" alt="instagram"></a>
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

<script>
  $(document).ready(function(){
  		$('.alert').hide();

		$("#submit").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var msg = $("#msg").val();
		// Returns successful data submission message when the entered information is stored in database.
		var dataString = 'name='+ name + '&email='+ email + '&phone='+ phone + '&msg='+ msg;
			if(name==''||email==''||phone==''||msg=='')
			{
				alert("Please Fill All Fields");
			}
			else
			{
				// AJAX Code To Submit Form.
				$.ajax({
					type: "POST",
					url: "form.php",
					data: dataString,
					success: function(result){
						alert('success');
						if (result == "success"){
			                $('.alert-success').show();
			            }else{
			            	$('.alert-danger').show();
			            }
					}
				});
			}
		
		});
	});
</script>

</body>
</html>
