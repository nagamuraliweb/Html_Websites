
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contact | Scarecrow Production</title>
        <meta name="viewport" content="width=device-width"/>
        <meta name="description" content="Scare Crow Production">
        <meta name="viewport" content="width=device-width">
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="css/style-about.css" rel="stylesheet" type="text/css" />
          <link href="css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="css/grid.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/meanmenu.css" media="all" />
        <script src="includes/niyatisg-modernizr.js"></script>
        <script type="text/javascript" src="includes/niyatisg-jquery.js" language="javascript"></script>
        <script type="text/javascript" src="includes/niyatisg-menu.js" language="javascript"></script>	
         <style>
       body{background-image:url('images/bg2.jpg');background-repeat:repeat-y;background-position:top center;background-color: #5d2067;}
        </style>
    </head>

    <body>
    <a href="#" class="scrollup" style="display: inline;">Scroll</a>
        <header>
            <div id="home-head">
                <div class="col span_1_of_3">
                <a href="index.php" class="lg"><img src="images/logo.png" alt="logo"></a>
                    <div class="pad-10">
                       91.98840.72469
                    </div>
                    <div class="pad-10">
                        info@scarecrowproduction.com
                    </div>
                    
                </div>
                <div class="col span_1_of_3">
                <!-- responsive menu -->
                    	<nav>
                         <ul style="display: none;">
                                     <li><a href="index.php">HOME</a></li>
                                    <li class="menuline"></li>
                                    <li><a href="services.php">SERVICES</a></li>
                                    <li class="menuline"></li>
                                    <li><a href="portfolio.php">PORTFOLIO</a></li>
                                    <li class="menuline"></li>
                                    <li><a href="about.php">ABOUT</a></li>
                                    <li class="menuline"></li>
                                    <li><a href="contact.php" class="menuon">CONTACT</a></li>
                                </ul>
					</nav>
           <!-- responsive menu ends-->         
                    <div class="desktop">
                        <div id="menu">
                            <div class="smoothmenu" id="smoothmenu1">
                                <ul>
                                     <li><a href="index.php">HOME</a></li>
                                    <li class="menuline"></li>
                                    <li><a href="services.php">SERVICES</a></li>
                                    <li class="menuline"></li>
                                   <li><a href="portfolio.php">PORTFOLIO</a></li>
                                    <li class="menuline"></li>
                                    <li><a href="about.php" >ABOUT</a></li>
                                    <li class="menuline"></li>
                                    <li><a href="contact.php" class="menuon">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            
            
        </header>
        
<section class="contact-page">
    <div class="row">
        <div class="twelve column">
            <div class="form-bg">
                <div class="row">
                    <h2>Welcome your queries and suggestions</h2>
                    <div class="four column">
                        <address>
                        <h3><img src="images/get.png" class="get"></h3>
                            <h3>Get in touch</h3>
                            <ul>
                                <li>64, Murugan complex</li>
                                <li>82 Brindavan Street</li>
                                <li>West Mambalam</li>
                                <li>Chennai-600 033</li>
                            </ul>
                            
                            <ul>
                            <li>E: Info@scarecrowproduction.com</li>
                            <li>T: 044 2473 0939</li>
                            <li>M: 98840 72469</li>
                            </ul>
                            <p><img src="images/skyp.png" class="skyp"> sasikumardevarajan</p>
                        </address>
                    </div>
                    <?php
					if(isset($_POST["submit"])){
							$to="sasikumar19@gmail.com";
							$name=$_POST['name'];
							$email=$_POST['email'];
							$phone=$_POST['phone'];
							$message=$_POST['message'];
							$mailinformation = '<html>
										<head>
										  <title>Contact Form E-mail</title>
										</head>
										<body>
										<table>
										<tr><td>Name</td><td>'.$name.'</td></tr>
										<tr><td>Email</td><td>'.$email.'</td></tr>
										<tr><td>Phone Number</td><td>'.$phone.'</td></tr>
										<tr><td>Message</td><td>'.$message.'</td></tr>
										</table>
										</body>
										</html>
										';
										
										$headers = 'From: '.$email . "\r\n" .
    						'Reply-To: sasikumar19@gmail.com' . "\r\n" .
    						'X-Mailer: PHP/' . phpversion();

							mail($to, "Contact Us", $mailinformation, $headers);
							echo "Thank you for Contact us";
					}
 					?>
                    <div class="eight column">
                        <form action="contact.php" method="post">
                            
                            <input type="text" name="name" placeholder="Name" class="text-box" required>
                            
                            <input name="email" type="email" placeholder="Email" class="text-box" required>
                            
                             <input name="phone" type="number" placeholder="Phone Number" class="text-box" required>

                            <textarea name="message" placeholder="Message" class="msg-box"></textarea>

                            <input id="submit" name="submit" type="submit" value="Submit" class="submit-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="twelve column">
            <div id="map1"></div>
        </div>
    </div>
</section>


<footer>
                     
                       
           
            <div id="footer">
            	<ul class="social">
                <li class="facebook">
                    <a href="#">
                        <span class="i-name">Facebook</span>
                    </a>
                </li>
                <li class="linkedin">
                	<a href="#">
                    	<span class="i-name">Linkedin</span>
                    </a>
                </li>
                <li class="active twitter">
                    <a href="#">
                        <span class="i-name">Twitter</span>
                    </a>
                </li>
                <li class="google">
                	<a href="#">
                		<span class="i-name">Google+</span>
                    </a>
                </li>
                <li class="angllist">
                	<a href="#">
                        <span class="i-name">Angellist</span>
            		</a>
                </li>
                <li class="pinterest">
                    <a href="#">
                    	<span class="i-name">Pinterest</span>
                    </a>
                </li>
                <li class="behance">
                	<a href="#">
                    	<span class="i-name">Behance</span>
                    </a>
                </li>
                <li class="flickr">
                	<a href="#">
                    	<span class="i-name">Flickr</span>
                    </a>
                </li>
                <li class="deviantart">
                    <a href="#">
                    	<span class="i-name">Deviantart</span>
                    </a>
                </li>
                <li class="skype">
                    <a href="#">
                        <span class="i-name">Skype</span>
                    </a>
                </li>
                </ul>
            </div>  
            <div id="footer-bot">
               <p>© 2013 Copyright by scarecrowproduction.  All Rights Reserved. Privacy Policy - Term</p>
            </div>
       </footer>

        <script type="text/javascript" src="includes/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" language="javascript" src="includes/jquery.carouFredSel-6.2.1-packed.js"></script>

        <!-- fire plugin onDocumentReady -->
        <script type="text/javascript" language="javascript">
            $(function() {


                //	Responsive layout, resizing the items
                $('#foo4').carouFredSel({
                    responsive: true,
                    width: '100%',
                    scroll: 3,
                    prev: '#prev5',
                    next: '#next5',
                    items: {
                        width: 400,
                        //	height: '30%',	//	optionally resize item-height
                        visible: {
                            min: 1,
                            max: 4
                        }
                    }
                });



            });
        </script>
        
			
        <script src="js/jquery.isotope.js"></script>
        <script type="text/javascript" language="javascript">


            $(function() {

                var $container = $('#container');

                $container.isotope({
                    itemSelector: '.element',
                    masonry: {
                        columnWidth: 120
                    }

                });


                var $optionSets = $('#options .option-set'),
                        $optionLinks = $optionSets.find('a');

                $optionLinks.click(function() {
                    var $this = $(this);
                    // don't proceed if already selected
                    if ($this.hasClass('selected')) {
                        return false;
                    }
                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.selected').removeClass('selected');
                    $this.addClass('selected');

                    // make option object dynamically, i.e. { filter: '.my-filter-class' }
                    var options = {},
                            key = $optionSet.attr('data-option-key'),
                            value = $this.attr('data-option-value');
                    // parse 'false' as false boolean
                    value = value === 'false' ? false : value;
                    options[ key ] = value;
                    if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                        // changes in layout modes need extra logic
                        changeLayoutMode($this, options)
                    } else {
                        // otherwise, apply new options
                        $container.isotope(options);
                    }

                    return false;
                });


            });
        </script>
		
  		
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="includes/jquery.gmap.min.js"></script>

		<script type="text/javascript">
            $(window).load(function(){
                                    $("#map1").gMap({ 
                                        markers: [{ 
                                            latitude: 13.042549, 
                                            longitude: 80.225194}],
                                            zoom: 16
                                        });								
                                });
                                
              
        </script>
        
                
        

        <script src="js/responsive-slider.js"></script>

              
        <script src="includes/jquery.meanmenu.js"></script> 
        
		<script>
        $(document).ready(function () {
            $('nav').meanmenu();
        });
        </script>
        <script type="text/javascript" language="javascript">
    $(document).ready(function(){ 
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        }); 
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
 
    });
</script>
    </body>


</html>    

