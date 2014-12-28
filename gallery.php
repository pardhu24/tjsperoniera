<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
     	<meta content="width=device-width, initial-scale=1.0" name="viewport">
     	<meta name="description" content="Peroneira Architects & Interior Designers" >
      	<meta name="author" content="http://www.peroneira.com/">
      	<title>Peroneira</title>
      
        <!-- Bootstrap -->
    	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" type="text/css" media="screen" />
        <!-- Supersized -->
        <link rel="stylesheet" href="css/supersized/supersized.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/supersized/supersized.shutter.css" type="text/css" media="screen" />
        <!-- Animate -->
        <link rel="stylesheet" href="css/animate/animate.css" type="text/css" media="screen" />
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" type="text/css" media="screen" />
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owlcarousel/owl.carousel.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/owlcarousel/owl.theme.css" type="text/css" media="screen" />
        <!-- Font -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
        <!-- Theme CSS -->
    	<link href="css/style.css" rel="stylesheet" media="screen">
        <!-- Skin CSS - Create alternate theme color. Just remove the comment tag from the css below -->
    	<!-- <link href="css/skin/pink.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/skin/purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/skin/brown.css" rel="stylesheet" media="screen"> -->
        
        <!--[if IE 9]>
        <style>
			#footer_text{
				margin-bottom: -20px; /*for fixing ie bug */		
			}
        </style>    
		<![endif]-->
        	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/jquery.mosaicflow.js"></script>
<link rel="stylesheet" type="text/css" href="lightbox/css/lightbox.css" /> 
    	<style>
* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	}

body {
	font-family:"Helvetica Neue", Arial, sans-serif;
	}

.mosaicflow__column {
	float:left;
	}

.mosaicflow__item {
	position:relative;
	padding:1px;
	}
	.mosaicflow__item img {
		display:block;
		width:100%;
		max-width:500px;
		height:auto;
		
		}
	.mosaicflow__item p {
		position:absolute;
		bottom:0;
		left:0;
		width:100%;
		margin:0;
		padding:5px;
		background:hsla(0,0%,0%,.5);
		color:#fff;
		font-size:14px;
		text-shadow:1px 1px 1px hsla(0,0%,0%,.75);
		opacity:0;
		-webkit-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		   -moz-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		     -o-transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		        transition: all 0.4s cubic-bezier(0.23,1,0.32,1);
		}
	.mosaicflow__item:hover p {
		opacity:1;
		}
	</style>
	</head>
               	 <?php
				  include "header.php";

 ?>
     <script>
    $(document).ready(function(e) {
        $("#homeDisplay").hide();
		 $("#nav").show();
		
    });
    </script>
	<body>
    	<!-- PRELOADER -->
        <!-- To change the couple name, edit jquery.queryloader2.js line 943  -->
    	  	<!-- STYLE SWITCHER -->
        <!--<div id="style_switcher" >
            <a id="reset" href="#"><span class="color_pallete"></span></a>
            <a id="pink" href="#"><span class="color_pallete"></span></a>
            <a id="purple" href="#"><span class="color_pallete"></span></a>
            <a id="brown" href="#"><span class="color_pallete"></span></a>
            <a id="theme_options" href="#"> <span class="glyphicon glyphicon-cog"></span></a>
        </div>-->
        
    	<!--HOME SECTION START-->
        
		
        
        <!--END of HOME SECTION-->
        
        <!--COUPLE SECTION START-->
        <section>
        	<div class="container">
            	<!-- TITLE -->
            	<!-- END TITLE -->
                
                <div class="row">

	<p></p>

	<div class="mosaicflow" data-item-height-calculation="attribute" style="margin-right:2px;">
 <?php
					$projects = array();
					$proobj = new Select;
					$projects = $proobj->selectAll("projects");
					
					
					for($i = 0; $i<count($projects); $i++) {
				$ImageNames=split("@@@", $projects[$i]['images']);
						for($x=0;$x<count($ImageNames);$x++){
						?>
					
                                                    <div class="mosaicflow__item">
			
            <a class="example-image-link whoweare-2" href='admin/uploaded/gallery/<?php echo $ImageNames[$x] ?>' data-lightbox="example-set" data-title="Interior-Design"> <img width="300" height="200" src="admin/uploaded/gallery/<?php echo $ImageNames[$x] ?>"  alt="<?php echo $projects[$i]['title'] ?>"></a>
           <p><a href="projects.php?id=<?php echo $projects[$i]['tableId'] ?>"><?php echo $projects[$i]['title'] ?></a></p>
		</div><?php }}?>
		

	</div>
           
                </div>
            </div>            
        </section><!--END of COUPLE SECTION-->
        
        <!--PHOTO DIVIDER1 SECTION START-->
       <!--END of PHOTO DIVIDER1 SECTION-->
    
        
        <!--FOOTER SECTION START-->
        <section id="footer">
        	<div class="container-fluid">
        		<div class="row">
            		<div id="footer_text" class="col-md-12 text-center">
                    	2014 &copy; Peroneira&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WebSite By <a href="#" target="_blank" style="color:#999; text-decoration:underline">The Joint Services</a>
                    </div>
            	</div>
            </div>
        </section><!--END of FOOTER SECTION-->
        
        

		<!-- jQuery -->
    
        <!-- Device -->
        <script type="text/javascript" src="js/devicejs/device.min.js"></script>
        <!-- Preloader -->
        <script type="text/javascript" src="js/preloader/jquery.queryloader2.js"></script>
    	<!-- Bootstrap -->
    	<script src="js/bootstrap/bootstrap.js"></script>        
        <!-- Supersized -->
        <script type="text/javascript" src="js/supersized/jquery.easing.min.js"></script>
        <script type="text/javascript" src="js/supersized/supersized.3.2.7.min.js"></script>
        <script type="text/javascript" src="js/supersized/supersized.shutter.min.js"></script>
        <!-- Sticky -->
        <script type="text/javascript" src="js/sticky/jquery.sticky.js"></script>
        <!-- One Page Nav -->
        <script type="text/javascript" src="js/navjs/jquery.nav.js"></script>
        <!-- NiceScroll -->
        <script type="text/javascript" src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- Waypoint -->
        <script type="text/javascript" src="js/waypoint/waypoints.min.js"></script>
        <!-- Gmap -->
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="js/gmap/jquery.gmap.min.js"></script>
        <!-- Magnific Popup -->
        <script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry/masonry.pkgd.min.js"></script>
        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owlcarousel/owl.carousel.js"></script>
        <!-- RSVP -->
        <script type="text/javascript" src="js/rsvp.js"></script>
        <!-- Style Switcher -->
        <script type="text/javascript" src="js/style-swithcer/stylesheet-switcher.js"></script>
        <!-- Custom Script -->
        <script type="text/javascript" src="js/script.js"></script>
        	<script src="lightbox/js/lightbox.js"></script>
        <!-- <script>
                $(document).ready(function(e) {
					//alert("yes");
                    $("#nav_list_peroneira li a").click(function(e) {
						var lihref=$(this).attr('href');
						//$('li').removeClass('active');
						//alert('li a[href$="' + lihref + '"]');
						//if(find('li a[href$="#' + lihref + '"]')){
//						alert("true");
//						}
                     $( "li" ).find('li a[href$="#' + lihref + '"]').parent().add;
					//  alert($parent.attr('id'));
                    });
                });
                
                </script>-->
	</body>

<!-- Mirrored from demo.dethemes.com/luv/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Oct 2014 11:50:47 GMT -->
</html>