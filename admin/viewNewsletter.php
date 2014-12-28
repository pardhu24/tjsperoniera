<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Newsletter | The Joint Services</title>
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
});
</script>
</head>
<body>
<div class="wrapper">
	<header>
		<?php include "sidebar.php"; ?>
	</header><!-- Header End -->
	
<div id="container" class="ui-notify">
<div id="notifSubmit">
    <div class="ui-notify-message ui-notify-message-style green" style="">
        <a class="ui-notify-close ui-notify-cross">x</a>
        <h1>Newsletter Sent</h1>
        <p>Example of a "sticky" notification.  Click on the X above to close me.</p>
    </div>
</div>
</div>
<section class="main-section">
<div class="container">
	<div class="row">
		<div class="main-bg">
			<?php include "header.php" ?>
			
			<div class="breadcrumbs-notify">
				<a href="dashboard.php" title=""> Dashboard / </a> <a href="viewNewsletter.php" class="current-page" title=""> View Newsletter </a>
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
				<h1>Newsletters</h1>		
                <br/><br/><br/>
                    <div class="col-md-12">
                        <div class="widget-body">
                            <div class="widget-heading purple">
                                <i class="icon-table pull-left"></i><h3 class="pull-left">Newsletters</h3>
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
                                                  <th>#</th>
                                                  <th>Subject</th>
                                                  <th>Message</th>
                                                  <th>Signature</th>
                                                  <th>Timestamp</th>
                                                  <th>Status</th>
                                                </tr>
                                              </thead>
                                                <?php
                                                    $newsletter = array();
                                                    $newsobj = new Select;
                                                    $newsletter = $newsobj->selectAll("newsletter");
                                                    for($i = 0; $i<count($newsletter); $i++) {

                                                ?>
                                                
                                                
                                                  <tr>
                                                    <td><?php echo $i+1 ?></td>
                                                    <td><?php echo $newsletter[$i]['subject'] ?></td>
                                                    <td><?php echo $newsletter[$i]['message'] ?></td>
                                                    <td><?php echo $newsletter[$i]['signature'] ?></td>
                                                    <td><?php echo $newsletter[$i]['timestamp'] ?></td>
                                                    <td><?php echo $newsletter[$i]['status'] ?></td>
                                                  </tr>
                                                
                                                <?php } ?>
                                                
                                              <tbody>
                                              </tbody>
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
