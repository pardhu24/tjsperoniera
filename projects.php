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
        
            
 
    <div class="singleProject">
        <div class="row" >
            <div class="col-md-7">
                <h1><?php echo $project[0]['title']; ?></h1>
                
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
                          <img src="admin/uploaded/gallery/<?php echo $images[$i]; ?>">
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
                  <?php echo $project[0]['video']; ?>
                </div>
                <div id="showcaseSphere">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1419596969775!6m8!1m7!1su7miR6XcCcxUFE-ZA5eLPw!2m2!1d27.17498145397132!2d78.04144676113538!3f302.5664377181836!4f0!5f0.7820865974627469" width="100%" height="500" frameborder="0" style="border:0"></iframe>
                </div>
            </div>
            <div class="col-md-5" style="padding-top: 60px;">
                
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
                <h4><?php echo $project[0]['category']; ?></h4>
                <div class="btn-group" role="group" aria-label="...">
                  <button id="images" type="button" class="btn btn-primary">Images</button>
                  <button id="video" type="button" class="btn btn-primary">Video</button>
                  <button id="sphere" type="button" class="btn btn-primary">Sphere</button>
                </div>
                <p class="description">
                    <?php echo $project[0]['description']; ?>
                </p>
                
            </div>
        </div>
    </div>
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
        });
    </script>

    </body>
</html>