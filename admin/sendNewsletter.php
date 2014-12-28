<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add New Project | The Joint Services</title>
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
        <h1>Sending Newsletter</h1>
        <p>We are sending newsletter which may take some time.  Click on the X above to close me.</p>
    </div>
</div>
</div>
<section class="main-section">
<div class="container">
	<div class="row">
		<div class="main-bg">
			<?php include "header.php" ?>
			
			<div class="breadcrumbs-notify">
				<a href="dashboard.php" title=""> Dashboard / </a> <a href="sendNewsletter.php" class="current-page" title=""> Send Newsletter </a>
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
				<h1>Send Newsletter</h1>
				<h2>Fill the form below. All fields are mandatory</h2>
                <div class="col-md-12">
                    <div class="inline-form">
                        <?php
                            if(isset($_POST['submit'])) {
                                //echo "Added New Row";
                                $valuearry = array("", "", $_POST['subject'], $_POST['message'], $_POST['signature'], "", "Active", "", "", "", "");
                                Insertrow("newsletter",$valuearry);
                                $subscription = array();
                                $subobj = new Select;
                                $subscription = $subobj->selectAll("subscription");
                                for($i = 0; $i < count($subscription); $i++) {
                                    $to = $subscription[$i]['email'];
                                    $subject = $_POST['subject'];
                                    $message = $_POST['message'];
                                    $message.= "<br/><br/>".$_POST['signature'];
                                    // Always set content-type when sending HTML email
                                    $headers = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                                    // More headers
                                    $headers .= 'From: <no-reply@thejointservices.com>' . "\r\n";
                                    //$headers .= 'Cc: myboss@example.com' . "\r\n";

                                    mail($to,$subject,$message,$headers);

                                    //echo $subject."<br/>";
                                    //echo $message."<br/>";

                                    if(@mail($to, $subject, $message, $headers))
                                    {
                                      echo "<font color='blue'><b>Mail Sent to ".$subscription[$i]['email']."</b></font><br/>";
                                    }else {
                                      echo "<font color='red'><b>Error in sending mail to ".$subscription[$i]['email']."</b></font><br/>";
                                    }


                                }
                            }
                        ?>
                    </div>
                </div>
                <form action="sendNewsletter.php" method="post">

                        <div class="col-md-12">
                            <div class="inline-form">
                                <label class="c-label">Subject</label><input name="subject" class="input-style" placeholder="Subject" type="text" required>
                            </div>
                        </div>
                        <!--<div class="col-md-12">
                            <div class="inline-form">
                                <label class="c-label">Images</label><input name="images"  class="input-style" id="images" type="file" required>
                            </div>
                        </div>-->
                        <div class="col-md-12">
                            <div class="inline-form">
                                <label class="c-label">Message</label>
                                <textarea rows="5" name="message" required></textarea>
                            </div>
                        </div>
                
                        <div class="col-md-12">
                            <div class="inline-form">
                                <label class="c-label">Signature</label>
                                <textarea rows="5" name="signature" required></textarea>
                            </div>
                        </div>
                                                
                        <div class="col-md-12">
                            <div class="inline-form">
                        		<button name="submit" type="submit" id="submitProject" class="btn blue pull-left">Send</button>																
                            </div>
                       </div>

                </form>
                
                
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
