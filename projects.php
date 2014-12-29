<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Peroneira Architects & Interior Designers" >
    <meta name="author" content="http://www.peroneira.com/">
    <title>Peroneira</title>
   
	</head>

	<body style="background: #fff !important;">
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
        <?php include "headerPro.php";
            $projectId = $_GET['id'];
            $project = array();
            $projObj = new Select;
            $project = $projObj->selectWhere("projects", "tableId", $projectId);
        ?>
        
            
 <div class="container">
    <div class="singleProject">
        
        <div class="row" >
            <div class="col-md-12">
                <h1><?php echo $project[0]['title']; ?></h1>
                <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="index.php#Projects">Projects</a></li>
                  <li class="active"><?php echo $project[0]['title']; ?></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div id="showcaseImages">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <!--<ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                      </ol>-->
                      <div class="carousel-inner" role="listbox">
                          <?php $images = explode("@@@", $project[0]['images']); 
                                //print_r($images);
                                //echo Count($images);
                                $active = array("active", " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ",  " ");
                                for($i=0;$i<Count($images);$i++) {
                          
						  if($i==0){
						  ?>
                          
                        <div class="item active">
                          <img class="projectImage" src="admin/uploaded/gallery/<?php echo $images[$i]; ?>">
                        </div>
                        <?php }else{?>
						<div class="item">
                          <img src="admin/uploaded/gallery/<?php echo $images[$i]; ?>">
                        </div>
						<?php  }} ?>
                      </div>
                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
                <div id="showcaseVideo">
                   <div class="embed-responsive embed-responsive-16by9">
                        <?php echo $project[0]['video']; ?>
                    </div>
                </div>
                <div id="showcaseSphere">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1419596969775!6m8!1m7!1su7miR6XcCcxUFE-ZA5eLPw!2m2!1d27.17498145397132!2d78.04144676113538!3f302.5664377181836!4f0!5f0.7820865974627469" width="100%" height="560" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
            <div class="col-md-5">
                
                <!--<div class="col-md-4">
                    <div id="images">
                        <button class="btn btn-lg btn-primary">Images</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="video">
                       <button class="btn btn-lg btn-primary"> Video</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="sphere">
                        <button class="btn btn-lg btn-primary">Sphere</button>
                    </div>
                </div>-->
                <div class="btn-group fadeIn" role="group" style="width: 100%;" aria-label="...">
                  <button data-toggle="tooltip" data-placement="left" title="Tooltip on left" id="images" type="button" class="btn btn-primary" style="width: 33.3%">Images</button>
                  <button id="video" type="button" class="btn btn-success" style="width: 33.3%">Video</button>
                  <button id="sphere" type="button" class="btn btn-danger" style="width: 33.3%">Sphere</button>
                </div>
                <h4><?php echo $project[0]['category']; ?></h4>
                <p class="description">
                    <?php echo $project[0]['description']; ?>
                </p>
                
            </div>
        </div>
    </div>
</div>
        
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
        
        
    <script type="text/javascript">
        $(document).ready(function() {
            $("#showcaseVideo").hide();
            $("#showcaseSphere").hide();
            $("#images").click(function(){
                $("#showcaseVideo").hide();
                $("#showcaseSphere").hide();
                $("#showcaseImages").fadeIn(1000);
            });
            $("#sphere").click(function(){
                $("#showcaseVideo").hide();
                $("#showcaseImages").hide();
                $("#showcaseSphere").fadeIn(1000);
            });
            $("#video").click(function(){
                $("#showcaseImages").hide();
                $("#showcaseSphere").hide();
                $("#showcaseVideo").fadeIn(100);
            });
            $("#showcaseVideo iframe, #showcaseSphere iframe, .projectImage").attr("width", "100%");
            $("#showcaseVideo iframe, #showcaseSphere iframe, .projectImage").attr("height", "460px");
            //alert($("#showcaseVideo iframe").attr("width"))
        });
    </script>
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

    </body>
</html>