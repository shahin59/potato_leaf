<?php
session_start();
include 'config.php';

?>

<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Potato Leaf Disease Prediction</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>

    <script src="js/jquery.js" type="text/javascript"></script>
    <!-- <script src="js/jquery.ui.core.js"></script>
    <script src="js/jquery.ui.widget.js"></script> -->
    <script src="js/jquery.validate.js" type="text/javascript"></script>

    <!-- <script src="js/jquery.ui.datepicker.js"></script> -->


    <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.8.13.custom.css" />
    <link rel="stylesheet" href="css/jquery.ui.all.css">

    <!-- Favicons -->
    <!-- <link href="/Content/logos/favicon.png" rel="icon">
    <link href="/Content/logos/favicon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="/Content/client_side_assets/css/google_font.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/Content/client_side_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- <link href="/Content/client_side_assets/vendor/icofont/icofont.min.css" rel="stylesheet"> -->
    <!-- <link href="/Content/client_side_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- Template Main CSS File -->
    <!-- <link href="/Content/client_side_assets/css/style.css" rel="stylesheet"> -->

    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- php css -->
    <link rel="stylesheet" href="main_style.css" />
    <link rel="stylesheet" href="login.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    </link> -->


    <style>
    /* #registered-body {
        background-color: #2D25A0;
    } */
    #signinForm label.error {
        margin-left: 10px;
        width: auto;
        display: inline;
        color: red;
        font-size: 10px;
        font-style: italic;
    }
    </style>


    <script type="text/javascript">
    //http://stackoverflow.com/questions/19840301/jquery-to-validate-phone-number
    jQuery.validator.addMethod("phoneBD", function(phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 &&
            phone_number.match(/^[\+][0-9]{13}$/);
    }, "Please specify a valid phone number");

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#commentForm").validate();

        // validate signup form on keyup and submit
        $("#signinForm").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },

                password: {
                    required: true,
                    minlength: 6
                },

                confirm_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#pass"
                },

                birth_date: {
                    required: true,
                    //minlength: 16
                },

                email: {
                    required: true,
                    email: true
                },

                cell_phone: {
                    required: true,
                    minlength: 13,
                    phoneBD: true
                },

                hobby: {
                    required: true,
                },

                home_address: {
                    required: true,
                    minlength: 10
                },
            },
            messages: {
                name: {
                    required: "This field is required",
                    minlength: "Your username must consist of at least 2 characters"
                },

                password: {
                    required: "Please provide a password",
                    minlength: "Password must be 6 characters long"
                },

                conpass: {
                    required: "Please provide a password",
                    minlength: "Password must be 6 characters long",
                    equalTo: "Please enter the same password as above"
                },

                email: {
                    required: 'This field is required',
                    email: "Please enter a valid email address"
                },

                cell_phone: {
                    required: "This field is required",
                    minlength: "Must consist of at least 13 characters e.g. +8801715000000",
                    phoneBD: "Please use this format +8801715000000"
                },

                hobby: {
                    required: "This field is required",
                },

                home_address: {
                    required: "Please enter an home address",
                    minlength: "Must be 10 characters long",
                },
            }
        });
    });
    </script>

    <!-- for datepicker -->
    <script type="text/javascript">
    $().ready(function() {
        $("#birth_date").datepicker({

            changeMonth: true,
            changeYear: true,

            yearRange: '1970:2014',
            dateFormat: 'yy-mm-dd'
        });
    });
    </script>

</head>


<body id="registered-body">


    <div>
        <center>
            <div id="d">
                <div class="container">
                    <div class="wrapper">
                        <div class="form_div">
                            <div class="title"><span>USER LOGIN</span></div>
                            <form action="login.php" method="post" id="signinForm">
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

                                <div class="main_row">
                                    <div class=" col-3" style="padding-left: 0px;">
                                        <p>Password:</p>
                                    </div>

                                    <div class="row col-9">

                                        <!-- <i class="fas fa-lock"></i> -->
                                        <input class="input_field" name="pass" type="password" placeholder="Password"
                                            required />

                                    </div>

                                </div>

                                <div class="row button">
                                    <input class="input_field" style="width: 100px;box-shadow: inset 3px 8px 7px 0px;"
                                        name="login" type="submit" value="LOGIN" />
                                </div>
                                <div class="signup-link">
                                    <a href="signup.php">Forgot password?</a><br>
                                    <a href="signup.php">Create New Account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <?php

                if (isset($_POST['login'])) {

                    $email = $_POST['email'];
                    $pass = $_POST['pass'];

                    $check = "select*from user where email='$email' AND pass ='$pass'";
                    $check_work = mysqli_query($con, $check);

                    if ($check_work) {
                        if (mysqli_num_rows($check_work) > 0) {
                            $_SESSION['email'] = $email;
                            echo "
<script>
alert('You are Successfully  Logged in');
window.location.href='index.php';
</script>
";

                        } else {

                            echo "
<script>
alert('Password or Email not Found ');
window.location.href('login.php');
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

                ?>




            </div>
        </center>
        <!-- ======= Footer ======= -->
        <footer id="footer">


            <div class="footer_item">
                <div class="copyright">
                    &copy; Copyright <strong><span>Chittagong University</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    </div>









    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <!-- <script>
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
    </script> -->


</body>

</html>