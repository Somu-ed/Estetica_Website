<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

//alert box
echo'<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.2/dist/sweetalert2.all.min.js"></script>
<script>
    var doneTheStuff;
    $(document).ready(function(){
        if(!doneTheStuff){
            Swal.fire("Good job!", "You clicked the button!", "success");
            doneTheStuff = true;
        }
    });
</script>';
 
// Redirect to login page
echo'<script type="text/javascript">window.location.href="login.php"</script>';
exit;
?>