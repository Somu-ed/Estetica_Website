<?php
include("config/db_connect.php");
?>
<?php
session_start();

$email = $_POST['email'];
$pwd = $_POST['password'];

$query = "SELECT * FROM user WHERE email = '".$email."' and pwd = '".$pwd."'";
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

// $stmt = $con->prepare('SELECT * FROM user WHERE email = ? and pwd = ?');
// $stmt->bind_param('ss', $email, $pwd); // 's' specifies the variable type => 'string'

// $stmt->execute();

// $result = $stmt->get_result();

// if($row = $result->fetch_assoc()){
//     if($row > 0){
//         $_SESSION['id'] = $email; 
//         echo 1;
//     }
//     else{
//         echo 0;
//     }
// }


?>