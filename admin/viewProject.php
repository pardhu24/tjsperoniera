<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Projects | The Joint Services</title>
<?php include "externallinks.php" ?>
<script type="text/javascript">
$(document).ready(function() {
	$("#notifSubmit").hide();
	$("#submitProject").click(function() {
		$("#notifSubmit").fadeIn(1000);
		setTimeout(function(){ 
			$('#notifSubmit').fadeOut(1000);
			},5000);
	});
    $(".deleteButton").click(function() {
        var id = $(this).attr("tjsdel");
        //alert("Click ok it will be deleted!");
        $.ajax({
            url: "deleteProject.php",
            type: "POST",
            data: 'id='+id,
            success: function(data) {
                alert(data);
                //$('#output').html(data);
                $("#"+id).hide();
            },  
        });
    });
    function deleteRow() {
        alert("some thing went wrong");
    }
});
</script>
</head>
<body>
<div class="wrapper">
	<header>
		<?php include "sidebar.php"; ?>
	</header><!-- Header End -->
	

<section class="main-section">
<div class="container">
	<div class="row">
		<div class="main-bg">
			<?php include "header.php" ?>
			
			<div class="breadcrumbs-notify">
				<a href="dashboard.php" title=""> Dashboard / </a> <a href="viewProject.php" class="current-page" title=""> View Projects </a>
				<div class="notification-auto">
					<div class="fade-notification">
					<h5><i class="icon-warning-sign"></i> Notification :</h5>
					</div>
					<div class="notification-slideshow">
						<?php include "notifications.php" ?>
					</div>
				</div>
			</div>
			
			
		<div class="body-sec no-padding">			
			<div class="company-details">
				<h1>Projects</h1>		
                <br/><br/><br/>
                    <div class="col-md-12">
                        <div class="widget-body">
                            <div class="widget-heading purple">
                                <i class="icon-table pull-left"></i><h3 class="pull-left">Added Projects</h3>
                                <ul>
                                <li class="dropdown panel-function">
                                    <a href="#" data-toggle="dropdown" role="button" id="drop3"> <b class="caret"></b></a>
                                    <ul aria-labelledby="drop3" role="menu" class="dropdown-menu" id="menu3">
                                    <li role="presentation"><a class="hide-btn" title="">-</a></li>
                                    <li role="presentation"><a class="close-sec" title="">x</a></li>
                                    </ul>
                                </li>
                                </ul>
                            </div>
                            <div class="widget-sec">
                                    <div class="streaming-table">
                                            <span id="found" class="label label-info"></span>
                                            <table id="stream_table" class='table table-striped table-bordered'>
                                              <thead>
                                                <tr>
                                                  <th>Title</th>
                                                  <th>Description</th>
                                                  <th>Image</th>
                                                  <th>Sphere</th>
                                                  <th>Video</th>
                                                  <th>Category</th>
                                                </tr>
                                              </thead>
							<?php
                                $projects = array();
                                $proobj = new Select;
                                $projects = $proobj->selectAll("projects");
                                for($i = 0; $i<count($projects); $i++) {

                            ?>
                             <tr id="<?php echo $projects[$i]['tableId'] ?>">
                                                    <td>
                                                        <a href="editProjects.php?id=<?php echo $projects[$i]['tableId'] ?>">
                                                            <?php echo $projects[$i]['title'] ?>
                                                        </a>
                                                        <br/><br/>
                                                        <a href="editProjects.php?id=<?php echo $projects[$i]['tableId'] ?>">
                                                            <button class="btn gray">Edit</button>
                                                        </a>&nbsp; &nbsp;
                                                        <button class="btn gray deleteButton" tjsdel="<?php echo $projects[$i]['tableId'] ?>">Delete</button>
                                                    </td>
                                                    <td><?php echo $projects[$i]['description'] ?></td>
                                                    <td>
            <?php
			$imageNames=split("@@@",$projects[$i]['images']);
			 for($x=0;$x<count($imageNames);$x++){?>
                                                    
                                                    <img src="uploaded/gallery/<?php echo $imageNames[$x] ?>" width="40" />
                            <?php }?>                        
                                                    
                                                    </td>
                                                    <td><?php echo $projects[$i]['sphere'] ?></td>
                                                    <td><?php echo $projects[$i]['video'] ?></td>
                                                    <td><?php echo $projects[$i]['category'] ?></td>
                                                  </tr>
                                                
                                                <?php } ?>
                                            </table>
                                            <div id="summary">
                                            <div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	

                
                
                
			</div>

			<div class="margin-extra"></div>
            
			<div class="footer">
				<p>Copyright 2014 - Peroneira by </p><a target="_blank" href="http://www.thejointservices.com/" title="" >The Joint Services</a>
			</div>
			
			
			
		</div><!-- Body Sec -->
		</div><!-- main-bg-->
	</div><!-- Row -->
</div><!-- Container -->
	
</section><!-- Main Section -->
	
</div><!-- Wrapper -->
</body><!-- Body -->
</html><!-- Html -->
