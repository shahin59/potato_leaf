<?php
use LDAP\Result;

session_start();
include 'config.php';
// if (!isset($_SESSION['email'])) {
//     header('location:index.php');
// }


?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Potato Leaf Disease Prediction </title>


    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>

    <script src="js/jquery.js" type="text/javascript"></script>
    <!-- <script src="js/jquery.ui.core.js"></script>
    <script src="js/jquery.ui.widget.js"></script> -->
    <script src="js/jquery.validate.js" type="text/javascript"></script>

    <!-- <script src="js/jquery.ui.datepicker.js"></script> -->


    <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.8.13.custom.css" />
    <link rel="stylesheet" href="css/jquery.ui.all.css">




    <!-- Google Fonts -->
    <link href="/Content/client_side_assets/css/google_font.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <!-- Vendor CSS Files -->
    <link href="/Content/client_side_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- icofont  -->

    <link href="/Content/client_side_assets/vendor/icofont/icofont.min.css" rel="stylesheet">

    <!-- <link href="/Content/client_side_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <!-- <link href="/Content/client_side_assets/css/style.css" rel="stylesheet"> -->

    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- php css -->
    <!-- <link rel="stylesheet" href="login.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    </link> -->



    <!-- css file -->
    <link rel="stylesheet" href="main_style.css" />
    <link rel="stylesheet" href="login.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
    /*======================================
         login and footer internal css code start
        =======================================*/

    #signinForm label.error {
        margin-left: 10px;
        width: auto;
        display: inline;
        color: red;
        font-size: 12px;
        font-style: italic;
    }

    @media (max-width: 768px) {
        #signinForm label.error {
            font-size: 8px;
        }
    }


    .container {
        width: 500px;

    }

    #footer {

        left: 0;
        bottom: 0;
        width: 100%;
        background: rgb(218, 201, 201);
        padding: 15px 0 15px 0;
        color: #212529;
        font-size: 14px;
        background: #fef8f5;
    }

    .footer_item {
        display: flex;
        justify-content: center;
    }

    #footer .copyright {
        text-align: center;
        float: left;
    }


    .back-to-top {
        position: fixed;
        /* display: none; */
        width: 40px;
        height: 40px;
        border-radius: 3px;
        right: 15px;
        bottom: 5px;
        background: #708cab;
        color: #fff;
        transition: display 0.5s ease-in-out;
        z-index: 99999;
    }

    .back-to-top i {
        font-size: 24px;
        position: absolute;
        top: 8px;
        left: 8px;
    }

    .back-to-top:hover {
        color: #fff;
        background: rgb(133, 76, 76);
        transition: background 0.2s ease-in-out;
    }

    /*======================================
         login and footer internal css code end
        =======================================*/
    </style>

    <!-- ===========================================
         validate signup form on keyup and submit end
        ========================================= -->
    <script type="text/javascript">
    $().ready(function() {



        $("#signinForm").validate({
            rules: {


                pass: {
                    required: true,
                    minlength: 6
                },




                email: {
                    required: true,
                    email: true
                },




            },
            messages: {


                pass: {
                    required: "Please provide a password",
                    minlength: "Password must be 6 characters long"
                },



                email: {
                    required: 'This field is required',
                    email: "Please enter a valid email address"
                },





            }
        });
    });
    </script>

    <!-- ======================================
         validate signup form on keyup and submit end
        ======================================= -->




</head>

<body>

    <!--======================================================
         home index demo start  
=========================================================-->
    <div class="sidebar">
        <div class="logo-details">

            <iconify-icon icon="bx:leaf"></iconify-icon>
            <span class="logo_name">PLDP</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active default_bg">
                    <i class="bx bx-home"></i>
                    <span class="links_name">Home</span>
                </a>
            </li>

            <li>
                <a href="#" class="default_bg">
                    <i class="bx bx-user"></i>

                    <span class="links_name">My Profile</span>
                </a>
            </li>

            <li>
                <a href="#" class="default_bg">
                    <iconify-icon class="iconify_diagnose" icon="bx:folder-plus"></iconify-icon>
                    <span class="links_name">Diagnose</span>
                </a>
            </li>

            <li>
                <a href="#" class="default_bg">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">More</span>
                </a>
            </li>
            <li>
                <a href="#app" class="default_bg">
                    <i class="bx bx-camera"></i>
                    <span class="links_name">Capcha Image</span>
                </a>
            </li>

            <li>
                <a href="#" class="default_bg">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out" class="default_bg">
                <a href="logout.php">
                    <i class="bx bx-log-out"></i>
                    <span id="button-out" class="links_name">Log out</span>
                </a>
            </li>

            <script>
            document.getElementById("button-out").addEventListener("click", () => {
                alert('You are Successfully  Logged out');

                window.location.href = 'logout.php';


            })
            </script>
        </ul>
    </div>

    <section class="home-section">

        <section class="nav">

            <div class="healthy">
                <h1>Potato Leaf Disease Prediction</h1>
                <p>Health is Wealth</p>

            </div>

            <nav>

                <div class="sidebar-button">
                    <div id="box_menu">
                        <i class="bx bx-menu sidebarBtn"></i>
                        <span class="dashboard">PLDP</span>
                    </div>


                    <div class="search-box">
                        <input type="text" placeholder="Search..." />
                        <i class="bx bx-search"></i>
                    </div>
                </div>


            </nav>
        </section>


        <!--=======================================================
        change on button background color onClick and revert previously clicked button to default background   start javascript code =========================================================-->

        <script>
        var buttons = document.querySelectorAll('.default_bg');

        for (i in buttons) {
            buttons[i].onclick = function() {
                console.log('test')
                buttons.forEach(function(btn) {
                    btn.classList.remove('highlight');
                })
                this.classList.add('highlight');
            }
        }
        </script>
        <!--======================================================
         change on button background color onClick and revert previously clicked button to default background   end javascript code  
=========================================================-->







        <!--======================================================
         login and footer code start 
=========================================================-->

        <div>

            <center>
                <div id="d">


                    <!-- =================== 
            container div start 
        ====================== -->
                    <div class="container">
                        <div class="wrapper">
                            <div class="form_div">
                                <div class="title"><span>USER LOGIN</span></div>
                                <form action="index.php" method="post" id="signinForm">
                                    <span id="check-username"></span>


                                    <div class="main_row">
                                        <div class=" col-3" style="padding-left: 0px;">
                                            <p>Email:</p>
                                        </div>
                                        <div class="row col-9">
                                            <!-- <i class="fa fa-envelope"></i> -->
                                            <input class="input_field" name="email" type="text" placeholder="Email"
                                                id="email" onInput="checkEmail()" required />
                                        </div>
                                    </div>

                                    <div style="margin-bottom: 0px;" class="main_row">
                                        <div class=" col-3" style="padding-left: 0px;">
                                            <p>Password:</p>
                                        </div>

                                        <div class="row col-9">

                                            <!-- <i class="fas fa-lock"></i> -->
                                            <input style="margin-bottom: 0px;" id="myInput" class="input_field"
                                                name="pass" type="password" placeholder="Password" required />

                                        </div>

                                    </div>

                                    <input type="checkbox" onclick="showPassFunction()"><span
                                        style="margin-left: 5px;">Show
                                        Password</span>


                                    <div class="row button">
                                        <input class="input_field"
                                            style="width: 100px;box-shadow: inset 3px 8px 7px 0px;" name="login"
                                            type="submit" value="LOGIN" />
                                    </div>
                                    <div class="signup-link">
                                        <a href="signup.php">Forgot password?</a><br>
                                        <a href="signup.php">Create New Account</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- =================== 
                       container div end 
                     ==================== -->

                    <!-- =================== 
                      log-in php code start
                     ====================== -->
                    <?php


                    if (isset($_POST['login'])) {

                        $email = $_POST['email'];
                        $pass = $_POST['pass'];

                        $check = "select*from user where email='$email'";
                        $check_work = mysqli_query($con, $check);
                        $result = mysqli_fetch_assoc($check_work);
                        $encpass = $result['pass'];


                        if ($check_work) {


                            if (mysqli_num_rows($check_work) > 0) {


                                if (md5($pass) == $encpass) {

                                    $_SESSION['email'] = $email;
                                    echo "
<script>
alert('You are Successfully  Logged in');
window.location.href='home.php';
</script>
";
                                } else {




                                    echo "
<script>
alert('Password or Email not Found ');
window.location.href('index.php');
</script>
";
                                }





                            } else {


                                echo "
    <script>
    alert('Database Error  ');
    window.location.href('signup.php');
    </script>
    ";
                            }

                        } else {


                            echo "
<script>
alert('Database Error  ');
window.location.href('signup.php');
</script>
";
                        }




                    } else {


                    }





                    $md = "shaim";

                    $a = md5($md);

                    $m = "shaim";
                    echo "<br>";
                    echo md5($m);
                    if (md5($m) == $a) {
                        echo "<br>";
                        echo "welcome";
                    }
                    $md = "shaim";

                    $a = md5($md);

                    $m = "shaim";
                    echo "<br>";
                    echo md5($m);
                    if (md5($m) == $a) {
                        echo "<br>";
                        echo "welcome";
                    }


                    ?>

                    <!-- =================== 
            log-in php code end
        ====================== -->


                </div>
            </center>
            <!-- ===============
                    Footer
             ==================== -->
            <footer id="footer">


                <div class="footer_item">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Chittagong University</span></strong>. All Rights Reserved
                    </div>
                </div>
            </footer>
            <!--==================
                   End Footer 
            ======================-->

            <!--==================
            back-to-top start 
            ======================-->
            <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
            <!--===================
                   back-to-top end
            ======================-->

        </div>

        <!--======================================================
         login and footer code end
=========================================================-->


    </section>


    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

    <!-- iconify-icon -->

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <!--======================================================
         sideber javascript code start 
=========================================================-->



    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");

    sidebarBtn
        .onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            } else

                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        }
    </script>

    <!--======================================================
         sideber javascript code end 
=========================================================-->

    <!--======================================================
         show password javascript code start 
=========================================================-->

    <script>
    function showPassFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <!--======================================================
         show password javascript code end 
=========================================================-->

</body>

</html>