<?php
include("db_connect.php");
?>
<?php
session_start();

$email = $_POST['email'];
$pwd = $_POST['password'];

$stmt = $con->prepare('SELECT * FROM user WHERE email = ? and pwd = ?');
$stmt->bind_param('ss', $email, $pwd); // 's' specifies the variable type => 'string'

$stmt->execute();

$result = $stmt->get_result();

if($row = $result->fetch_assoc()){
    if($row > 0){
        $_SESSION['id'] = $email; 
        echo 1;
    }
    else{
        echo 0;
    }
}


?>