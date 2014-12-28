<?php
session_start();
if(isset($_SESSION['admin'])){
    echo "Session Exists<br/>";
    if($_SESSION['admin'] == "admin") {
        $_SESSION['admin'] == "loggedout";
        session_unset('admin');
        echo "Session Destroyed";
        session_unset();
        session_destroy();
        print_r($_SESSION);
    }
}

?>
<script>
window.location.href="index.php?loggedout=true";
</script>