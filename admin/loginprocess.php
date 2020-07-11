<?php
include("db_connect.php");
?>
<?php
session_start();

$email = htmlspecialchars($_POST['email']);
$pwd = htmlspecialchars($_POST['password']);

$query = "SELECT * FROM user WHERE email = '$email' and pwd = '$pwd'";
$fire = mysqli_query($con,$query);

if($fire == true){
    $row = mysqli_fetch_array($fire);
    if($row > 0){
        $_SESSION['id'] = $email; 
        echo 1;

    }
    else{
        echo 0;
    }
}


?>