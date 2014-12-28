<?php session_start(); ?>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100,900,800,700,600,500,400,300,200' rel='stylesheet' type='text/css'><!-- Google Fonts -->

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

<?php

include "database/Insert.php";
include "database/update.php";

function checkAdminLogin() {
    if(isset($_SESSION['admin'])) {
        if($_SESSION['admin'] == "admin") {
            //echo "SESSION EXISTS.. Do Nothing";
        }
        else {
            echo "Please Login and Try Again";
            ?>
<script>
window.location.href = "index.php?login=invalid";
</script>
<?php
        }
    }
    else {
     ?>
<script>
window.location.href = "index.php?login=invalid";
</script>
<?php   
    }
}

checkAdminLogin(); 

?>