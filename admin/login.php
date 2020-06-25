<?php
include("config/dbconnect.php");
?>

<?php
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    
    $query = "SELECT * FROM user WHERE email = '".$email."' and pwd = '".$pwd."'";
    $fire = mysqli_query($con,$query);
    
    if($fire == true){
        $row = mysqli_fetch_array($fire);
        if($row > 0){
            $_SESSION['id'] = $email; 
            echo'<script type="text/javascript"> alert("You are logged in successfully !! ")</script>';
            echo'<script type="text/javascript">window.location.href="index.php"</script>';
        }
        else{
            echo'<script type="text/javascript">alert("Login unsuccessful : Wrong Credentials'.$row.'")</script>';
        }
    }
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Login - Estetica</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="assets/img/favicon.svg" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="assets/css/morris.min.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="assets/css/dropzone.min.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Page Level Stylesheets -->

</head>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Login Page Start -->
        <div class="m-account-w" data-bg-img="assets/img/cover.jpg">
            <div class="m-account">
                <div class="row no-gutters">
                    <div class="col-md-6">
                       
                    </div>

                    <div class="col-md-6">
                        <!-- Login Form Start -->
                        <div style="background-color: #66000000;" class="m-account--form-w">
                            <div class="m-account--form">
                                <!-- Logo Start -->
                                <div class="logo">
                                    <img style="height: 40px;" src="assets/img/navbar.png" alt="">
                                </div>
                                <!-- Logo End -->

                                <form action="login.php" method="post">
                                    <label style="color: #333333" class="m-account--title">Login to your account</label>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>

                                            <input style="background-color: #66000000; color: #333333;" type="text" name="email" placeholder="Email" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>

                                            <input style="background-color: #66000000; color: #333333;" type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="m-account--actions">
                                        <a href="#" class="btn-link">Forgot Password?</a>

                                        <button type="submit" name="submit" class="btn btn-rounded btn-danger">Login</button>
                                    </div>

                                    <div class="m-account--footer">
                                        <p>&copy; 2020 Estetica</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Page End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/jquery.sparkline.min.js"></script>
    <script src="assets/js/raphael.min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery-jvectormap.min.js"></script>
    <script src="assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="assets/js/horizontal-timeline.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.steps.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Page Level Scripts -->

</body>
</html>
