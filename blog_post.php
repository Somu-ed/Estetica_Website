<?php
session_start();
include("config/dbconnect.php");
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
<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Blog Compose - estética Admin</title>
    
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
    <link rel="stylesheet" href="assets/css/summernote-bs4.min.css">
    <link rel="stylesheet" href="assets/css/summernote-bs4-overrides.css">

    <style>
        .copyright {
          display:block;
          margin-top: 100px;
          text-align: center;
          font-family: Helvetica, Arial, sans-serif;
          font-size: 12px;
          font-weight: bold;
          text-transform: uppercase;
        }
        .copyright a{
          text-decoration: none;
          color: #EE4E44;
        }


        /****** CODE ******/
        .file-upload{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
        .file-upload .file-select{display:block;border: 1px solid #dce4ec; border-radius: 5px;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
        .file-upload .file-select .file-select-button{background:#dce4ec;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
        .file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
        .file-upload .file-select:hover{border-color:#ff4040;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload .file-select:hover .file-select-button{background:#ff4040;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
        .file-upload .file-select.file-select-disabled{opacity:0.65;}
        .file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
        .file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
        .file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
    </style>

</head>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <!-- Navbar Header Start -->
            <div class="navbar--header">
                <!-- Logo Start -->
                <a href="index.php" class="logo">
                    <img style="display: block; margin-top: 8px; margin-left: auto; margin-right:auto; height:38px;" src="assets/img/navbar_white.png" alt="">
                </a>
                <!-- Logo End -->

                <!-- Sidebar Toggle Button Start -->
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Sidebar Toggle Button End -->
            </div>
            <!-- Navbar Header End -->

            <!-- Sidebar Toggle Button Start -->
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Sidebar Toggle Button End -->

            <div class="navbar--nav ml-auto">
                <ul class="nav">
                    <!-- Nav User Start -->
                    <li class="nav-item dropdown nav--user online">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                        <?php
                         if($img == ""){
                          echo"<img src='assets/img/avatars/default_profile.png' alt='$name[0]' class='rounded-circle'>";
                         }
                         else{
                          echo"<img src='assets/img/avatars/$img' alt='$name[0]' class='rounded-circle'>";
                         }
                        ?>
                            <span><?php echo"$name"; ?></span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="profile.html"><i class="far fa-user"></i>Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <!--<li><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock Screen</a></li>-->
                            <li><a href="logout.php"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>
                    <!-- Nav User End -->
                </ul>
            </div>
        </header>
        <!-- Navbar End -->

        <!-- Sidebar Start -->
        <aside class="sidebar" data-trigger="scrollbar">
            <!-- Sidebar Profile Start -->
            <div class="sidebar--profile">
                <div class="profile--img">
                    <a href="profile.html">
                        <?php
                        if($img == ""){
                        echo"<img src='assets/img/avatars/default_profile_white.png' alt='$name[0]' class='rounded-circle'>";
                        }
                        else{
                        echo"<img src='assets/img/avatars/$img' alt='$name[0]' class='rounded-circle'>";
                        }
                        ?>
                    </a>
                </div>

                <div class="profile--name">
                    <a href="profile.html" class="btn-link"><?php echo"$name"; ?></a>
                </div>

                <div class="profile--nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="profile.html" class="nav-link" title="User Profile">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link" title="Logout">
                                <i class="fa fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar Profile End -->

            <!-- Sidebar Navigation Start -->
            <div class="sidebar--nav">
                <ul>
                    <li>
                        <ul>
                            <li>
                                <a href="index.php">
                                    <i class="fa fa-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact.php">
                                    <i class="fa fa-phone"></i>
                                    <span>Contact us</span>
                                </a>
                            </li>
                            <li>
                                <a href="newsletter.php">
                                    <i class="fa fa-newspaper"></i>
                                    <span>Newsletter</span>
                                </a>
                            </li>
                            <li class="active open is-dropdown">
                                <a href="#">
                                    <i class="fab fa-blogger-b"></i>
                                    <span>Blog</span>
                                </a>

                                <ul>
                                    <li><a href="admin_blog.php">Posted Blogs</a></li>
                                    <li class="active"><a href="blog_post.php">Compose</a></li>
                                    <!--<li><a href="products-edit.html">Edit Products</a></li>
                                    <li><a href="orders.html">Orders</a></li>
                                    <li><a href="order-view.html">Order View</a></li>-->
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!--<li>
                        <a href="#">Layouts</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th"></i>
                                    <span>Page Layouts</span>
                                </a>

                                <ul>
                                    <li><a href="blank.html">Blank Page</a></li>
                                    <li><a href="page-light.html">Page Light</a></li>
                                    <li><a href="sidebar-light.html">Sidebar Light</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-th-list"></i>
                                    <span>Footers</span>
                                </a>

                                <ul>
                                    <li><a href="footer-light.html">Footer Light</a></li>
                                    <li><a href="footer-dark.html">Footer Dark</a></li>
                                    <li><a href="footer-transparent.html">Footer Transparent</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Components</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="far fa-newspaper"></i>
                                    <span>UI Elements</span>
                                </a>

                                <ul>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="pagination.html">Pagination</a></li>
                                    <li><a href="progress-bars.html">Progress Bars</a></li>
                                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="ui-slider.html">UI Slider</a></li>
                                    <li><a href="sweet-alerts.html">Sweet Alerts</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-wpforms"></i>
                                    <span>Form</span>
                                </a>

                                <ul>
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="dropzone.html">Dropzone</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Apps and Charts</a>

                        <ul>
                            <li class="active open">
                                <a href="#">
                                    <i class="far fa-envelope"></i>
                                    <span>Mailbox</span>
                                </a>

                                <ul>
                                    <li><a href="mailbox_inbox.html">Inbox</a></li>
                                    <li class="active"><a href="mailbox_compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <i class="far fa-comments"></i>
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="contacts.html">
                                    <i class="far fa-address-book"></i>
                                    <span>Contacts</span>
                                </a>
                            </li>
                            <li>
                                <a href="notes.html">
                                    <i class="far fa-sticky-note"></i>
                                    <span>Notes</span>
                                </a>
                            </li>
                            <li>
                                <a href="todo-list.html">
                                    <i class="fa fa-tasks"></i>
                                    <span>Todo List</span>
                                </a>
                            </li>
                            <li>
                                <a href="search-results.html">
                                    <i class="fa fa-search"></i>
                                    <span>Search Results</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Extra</a>

                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-file"></i>
                                    <span>Extra Pages</span>
                                </a>

                                <ul>
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="invoice.html">Invoice</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                    <li><a href="lock-screen.html">Lock Screen</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                    <li><a href="500.html">500 Error</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->
                </ul>
            </div>
            <!-- Sidebar Navigation End -->

            <!-- Sidebar Widgets Start -->
            <!--<div class="sidebar--widgets">
                <div class="widget">
                    <h3 class="h6 widget--title">Information Summary</h3>

                    
                    <div class="summary--widget">
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#2bb3c0">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Daily Traffic</p>
                            <p class="summary--stats">307.512</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                            <p class="summary--title">Average Usage</p>
                            <p class="summary--stats">2,371,527</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#cccccc">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Disk Usage</p>
                            <p class="summary--stats">37.5%</p>
                        </div>

                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,3,7,7,9,11,9,7,9,11,9,7,5,4,9,7,5,4</p>

                            <p class="summary--title">CPU Usage</p>
                            <p class="summary--stats">37.05-32</p>
                        </div>
                        
                        <div class="summary--item">
                            <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#ff4040">5,6,7,9,15,5,6,7,9,11,7,9,11,7,9,9,3,2</p>

                            <p class="summary--title">Memory Usage</p>
                            <p class="summary--stats">37.05%</p>
                        </div>
                    </div>
                    
                </div>
            </div>-->
            <!-- Sidebar Widgets End -->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">Compose</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active"><span>Compose</span></li>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <!-- Summary Widget Start -->
                            <div class="summary--widget">
                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>

                                    <p class="summary--title">This Month</p>
                                    <p class="summary--stats text-green">2,371,527</p>
                                </div>

                                <div class="summary--item">
                                    <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>

                                    <p class="summary--title">Last Month</p>
                                    <p class="summary--stats text-orange">2,527,371</p>
                                </div>
                            </div>
                            <!-- Summary Widget End -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            <section class="main--content">
                <div class="panel">
                    <!-- App Start -->
                    <div class="app_wrapper row">
                        <!-- App Sidebar Start -->
                        <div class="app_sidebar col-lg-3">
                            <!-- Toolbar Start -->
                            <div class="toolbar">
                                <a href="" class="btn btn-block btn-rounded btn-danger fw--600">Compose</a>
                            </div>
                            <!-- Toolbar End -->

                            <!-- Mailbox Navigation Start -->
                            <!--<ul class="navigation navigation-highlighted">
                                <li class="title">MAILBOX</li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-envelope"></i>
                                        <span>Inbox</span>
                                        <span class="badge text-white bg-blue">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-paper-plane"></i>
                                        <span>Sent</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="has-unread">
                                        <i class="far fa-edit"></i>
                                        <span>Draft</span>
                                        <span class="badge text-white bg-blue">1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-star"></i>
                                        <span>Important</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-tags"></i>
                                        <span>Tags</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-trash-alt"></i>
                                        <span>Trash</span>
                                    </a>
                                </li>

                                <li class="title">LABELS</li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-circle text-blue"></i>
                                        <span>Work</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-circle text-green"></i>
                                        <span>Family</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-circle text-orange"></i>
                                        <span>Friends</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="far fa-circle text-red"></i>
                                        <span>Others</span>
                                    </a>
                                </li>
                            </ul>-->
                            <!-- Mailbox Navigation End -->
                        </div>
                        <!-- App Sidebar End -->
                        
                        <!-- App Content Start -->
                        <div class="app_content col-lg-9">
                            <!-- Mail Compose Start -->
                            <div class="mail-compose">
                                <h3 class="mail-compose__title">Compose Blog</h3>

                                <form action="" method="post">

                                    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
                                    <div class="file-upload">
                                        <div class="file-select">
                                          <div class="file-select-button" id="fileName">Image</div>
                                          <div class="file-select-name" id="noFile">Choose a cover image...</div> 
                                          <input type="file" name="img" id="chooseFile" required>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <input type="date" name="date" placeholder="Date :" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="author" placeholder="Author :" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" name="heading" placeholder="Heading :" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <select name="cars" id="cars" aria-placeholder="Category" class="form-control">
                                            <option value="" disabled selected>Select Category</option>
                                            <option value="volvo">Furniture</option>
                                            <option value="saab">Curtains</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea name="mail_message" class="form-control" data-trigger="summernote"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="keywords" placeholder="Tags : (eg: furniture, curtains, carpets)" class="form-control" required>
                                    </div>

                                    <div class="btn-list pt-3">
                                        <button type="submit" class="btn btn-sm btn-rounded btn-success">Post &nbsp;<i class="far fa-paper-plane"></i></button>

                                        <button type="reset" class="btn btn-sm btn-rounded btn-default">Reset</button>

                                        <!--<button type="button" class="btn btn-sm btn-rounded btn-default">Draft</button>-->
                                    </div>

                                    
                                </form>
                            </div>
                            <!-- Mail Compose End -->
                        </div>
                        <!-- App Content End -->
                    </div>
                    <!-- App Sidebar End -->
                </div>
            </section>
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <footer class="main--footer main--footer-light">
                <p>Copyright &copy; <a href="#">estética</a>. All Rights Reserved.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
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

    <script>
        $('#chooseFile').bind('change', function () {
        var filename = $("#chooseFile").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile").text("No file chosen..."); 
        }
        else {
            $(".file-upload").addClass('active');
            $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
        }
    });
    </script>

    <!-- Page Level Scripts -->
    <script src="assets/js/summernote-bs4.min.js"></script>
    <script src="assets/js/summernote-bs4-init.js"></script>

</body>
</html>
