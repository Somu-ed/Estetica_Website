<?php
session_start();
include("config/db_connect.php");
?>

<?php
if(isset($_SESSION['id'])){
    $id= $_SESSION['id'];
    $query = "SELECT * FROM user WHERE email = '$id'";
    $fire = mysqli_query($con, $query);
    $details = mysqli_fetch_array($fire);
    
    $name = $details['name'];
    $img = $details['img'];
}
else{
    echo'<script type="text/javascript">window.location.href="login.php"</script>';
}
?>