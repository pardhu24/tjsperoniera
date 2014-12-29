<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

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
        	<script src="js/jquery-1.9.1.js"></script>
        <script>
      
			
			 
			
			
		function headerFunction(value){
			
		 if($(this).scrollTop()>=value ){
			
				 $("#nav").show();
			 }else{
				
			 $("#nav").hide();
			 }
		
		}
			
          

		
		$(document).ready(function(e) {
			 $("#nav").hide();
			  $("#nav_list li").hide();
            $("#show li").click(function(e) {
				$("#nav_list li").toggle(300);
            });
            
           /* $(".project_title").hide();
            $(".project_description").hide();*/
            
            
            $(".project_listing").each(function() {
                $(this).hover(function() {                    
                  // $(this).children().show();
                  $(this).children().fadeIn(800); 
                  $(this).find("img").css({"opacity" : "0.2"});
                }, function() {
                      $(".project_title, .project_description").hide(); 
                      $(this).find("img").css({"opacity" : "1"});
                });

               /* $(this).mouseout(function() {
                   $(this).children().hide();
                    //alert($(this).attr("id"));
                     $(".project_title", this).hide();
                    $(".project_description", this).hide();          
                });*/
            });
        });
        
        </script>
                	 <?php
include "admin/database/Insert.php";
include "admin/database/update.php";
 ?>
<section id="home">
			<div id="logo_wrapper" class="container">
				<div class="row">
					<div class="col-md-1">
                    	<!--<a id="logo_link" href="index.html">
                    		<span id="logo" class="animation">
                       		<img src="images/vsp-logo.png" width="100%">
                            </span>
                        </a>-->
                    </div>
				</div>
            </div>
            <div class="container" id="homeDisplay">
            	<div id="slide_content" class="row" align="center">
                <div id="slide_text" style="position:relative;top:0px;left:0px;z-index:2000;opacity:0.95;"><img src="images/index.png" width="100%"  >
               
              <div><ul class="peronera_menu" id="nav_list_peroneira" >
        					
                                <li class="aboutus"><a href="index.php#aboutvsp">About Us</a></li>	
                                <li class="projects"><a href="index.php#Projects">projects</a></li>
                                <!--<li class="quality"><a href="#quality">quality</a></li>-->
                                <li class="services"><a href="index.php#Services">services</a></li>
                                <li class="gallery"><a href="index.php#gallery">gallery</a></li>
                            <!--    <li class="clientele"><a href="#clientele">clientele</a></li>-->
                                <li class="contact"><a href="index.php#contact">contact</a></li>
     						</ul></div>  
                            
               
                </div>
                	<div class="col-md-4 pull-right text-right">
                    	
						
                       
                  </div>
                </div>
            </div>
            <header >
           
            	<nav id="nav" class="navbar navbar-default" role="navigation" per="menuPer">
  					<div class="container">
   			<div class="collapse navbar-collapse" id="nav_menu">
     		<ul id="nav_list" class="nav navbar-nav navbar-right">
        			<li style="font-size:35px;"><a href="https://plus.google.com/+Peroneira/posts" style="color:#777;padding:5px;"><i class="fa fa-google-plus-square"></i></a>
<a href="https://www.facebook.com/Peroneira" style="color:#777;padding:5px;"><i class="fa fa-facebook-square"></i></a></li>			
                  <li id="aboutus" style="background:url(images/menu%20tiles/about.png) no-repeat top left; background-size:contain;"><a style="display:block;height:85px;width:85px;" href="index.php#aboutvsp"></a></li>	
                
                                <li class="active" style="background:url(images/menu%20tiles/project_03.png) no-repeat top left; background-size:contain;"><a style="display:block;height:85px;width:85px;"  href="index.php#Projects"></a></li>
                              
                                <li style="background:url(images/menu%20tiles/services_11.png) no-repeat top left; background-size:contain;"><a style="display:block;height:85px;width:85px;" href="index.php#Services"></a></li>
                                <li style="background:url(images/menu%20tiles/gallery_06.png) no-repeat top left; background-size:contain;"><a style="display:block;height:85px;width:85px;" href="index.php#gallery"></a></li>
                              
                                <li  style="margin-left:1px; background:url(images/menu%20tiles/contact_03.png) no-repeat top left; background-size:contain;"><a style="display:block;height:85px;width:85px;" href="index.php#contact"></a></li>
     						</ul>
                            <ul id="show">
                            <li style="list-style:none;font-size:42px;cursor:pointer;"><i class="fa fa-bars"></i>
</li>
                            </ul>
   						</div><!-- /.navbar-collapse -->
  					</div><!-- /.container -->
				</nav>
                
            </header>
             
        </section>