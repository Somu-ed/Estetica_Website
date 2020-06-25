<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

//alert box
echo'<script type="text/javascript">alert("You have logged out of your account.")</script>';
 
// Redirect to login page
echo'<script type="text/javascript">window.location.href="login.php"</script>';
exit;
?>