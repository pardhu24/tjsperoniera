<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | The Joint Services</title>
<?php include "externallinks.php" ?>
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
				<a href="dashboard.php" title=""> Dashboard / </a> <a href="dashboard.php" class="current-page" title=""> Start Page </a>
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
				<h1>Make your Website Visible to the World</h1>
				<h2>Fast and flexible website creator is the easy way to build and manage a site for your business</h2>
				<div class="col-md-3">
					<div class="service-details">
						<h3><i class="icon-cog red"></i>Projects</h3>
						<p>Now its very easy to add new projects to your website. Even you can manage or edit previous projects and also you can remove the project from database. Please be carefull while you manage your data. It is live data which will be seen on Peroneira CMS Portal.</p><br/><br/>
                        <a href="addNewProject.php" class="btns  blue  lrg-btn ">+ Add</a>
                        <a href="viewProject.php" class="btns  orange  lrg-btn ">View</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service-details">
						<h3><i class="icon-shopping-cart red"></i>Subscriptions</h3>
						<p>Now its very easy to add new subscriptions to your website. Even you can manage or edit previous subscriptions and also you can remove the project from database. Please be carefull while you manage your data. It is live data which will be seen on Peroneira CMS Portal.</p><br/><br/>
                        
                        <a href="subscriptions.php" class="btns  orange  lrg-btn ">View</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service-details">
						<h3><i class="icon-camera-retro red"></i>Newsletters</h3>
						<p>Now its very easy to send new Newsletter to your website. Even you can manage or edit previous newsletters and also you can remove the project from database. Please be carefull while you manage your data. It is live data which will be seen on Peroneira CMS Portal.</p><br/><br/>
                        <a href="sendNewsletter.php" class="btns  blue  lrg-btn ">+ Send</a>
                        <a href="viewNewsletter.php" class="btns  orange  lrg-btn ">View</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="service-details">
						<h3><i class="icon-pushpin red"></i>Contacts</h3>
						<p>Now its very easy to manage contact form details which is sent from contact page in your website. Even you can manage all contact form details and also you can remove the project from database. It is live data which will be seen on Peroneira CMS Portal.</p><br/><br/>
                        
                        <a href="contacts.php" class="btns  orange  lrg-btn ">View</a>
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
