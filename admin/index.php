<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Admin Panel | The Joint Services</title>

<!-- Styles -->
<link rel="stylesheet" href="css/style.css" type="text/css" />

<!-- Font Awesome -->
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- Styles -->
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" /><!-- Bootstrap -->
<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" /><!-- Custom Scroll Bar -->
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" type="text/css" /><!-- Font Awesome -->
<link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->
<link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive Style -->

<!-- Script -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><!-- Jquery -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script><!-- Scroll Bar -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script><!-- Circle Chart -->
<script type="text/javascript"  src="js/bootstrap.js"></script><!-- Bootstrap -->
<script type="text/javascript"  src="js/script.js"></script><!-- Script -->
<script src="js/jquery.flot.min.js"></script><!-- Chart -->
<script src="js/side-navigation-tag.js"></script>
<script type="text/javascript" src="js/jquery.sparkline.min.js"></script> <!-- Sparkline -->
<script src="js/jquery-ui.custom.min.js"></script> <!-- Jquery UI Custom -->
<script src="js/jquery.easypiechart.min.js"></script> <!-- Easy Pie Chart -->
<script type="text/javascript" src="http://xoxco.com/projects/code/tagsinput/jquery.tagsinput.js"></script><!-- Sidebar Add Tag -->
</head>
<body class="log-in-bg">
<?php
session_start();
include "database/Database.php";
include "database/Select.php";

function checkLogin() {
    if(isset($_SESSION['admin'])){
        echo "Session Exists<br/>";
        if($_SESSION['admin'] == "admin") {
            echo "Already Loggedin, Redirecting to Dashboard...";
            ?>
        <script>window.location.href = "dashboard.php?login=admin";</script>
        <?php
        }
    }
}
       
       checkLogin();

if(isset($_POST['submit'])) {
    //echo $_POST['username']."<br/>".$_POST['password']."<br/>";
    $logincheck = array();
    $loginObj = new Select;
    $logincheck = $loginObj->selectWhere("login", "username", $_POST['username']);
    //print_r($logincheck);
    if($_POST['username'] == $logincheck[0]['username'] && $_POST['password'] == $logincheck[0]['password']) {
        //echo "Username & Password Matched <br/>";
        
        $_SESSION['admin'] = $logincheck[0]['username'];
        //echo "Session Started";
        //header('Loation: dashboard.php');
        ?>
        <script>window.location.href = "dashboard.php?login=admin";</script>
    <?php
    }
    else {
        echo "Error in Login Details";
    }
}
    
?>
<!-- Log in -->
<div class="log-in">
	<div class="top-sec-log">

		<span class="user-log-in">
			<img src="http://bpcl.newindia.co.in/Images/cd_login.png" alt="" />
		</span><!-- User Image -->

			<h1>Peroneira</h1>
	</div>
	
	<h3>log in to your account</h3>

	<div class="form">
    <form action="" method="post">
		<span><i class="icon-user"></i></span>
		<input type="text" name="username" placeholder="Username" required>
	</div><!-- Login User Name -->
	
	<div class="form">
		<span><i class="icon-key"></i></span>
        <input type="password" name="password" placeholder="Password" required>
	</div><!-- Login Password -->
	
	
	<button type="submit" name="submit" class="log-in-btn"><i class="icon-mail-forward"></i>log in</button>
    
    </form>

</div><!-- Log in Page -->


</body>
</html>