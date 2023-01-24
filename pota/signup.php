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

    <!--===============================
      Latest compiled and minified CSS 
     =================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!--===============================
               google_font 
     =================================-->
    <link href="/Content/client_side_assets/css/google_font.css" rel="stylesheet">


    <!--===============================
         Ajax CDN Link 
     =================================-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> -->
    </link>
    <!--===============================
      Jquery validation link start
     =================================-->
    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.ui.core.js"></script>
    <script src="js/jquery.ui.widget.js"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/jquery.ui.datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.8.13.custom.css" />
    <link rel="stylesheet" href="css/jquery.ui.all.css">
    <!--===============================
      Jquery validation link end
     =================================-->


    <!-- Favicons -->
    <!-- <link href="/Content/logos/favicon.png" rel="icon">
    <link href="/Content/logos/favicon.png" rel="apple-touch-icon"> -->

    <!--===============================
                   iconify-icon 
     =================================-->

    <script type="text/javascript" src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>


    <!--===============================
                  Vendor CSS Files
     =================================-->
    <link href="/Content/client_side_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--===============================
       Vendor icofont CSS Files  
     =================================-->
    <link href="/Content/client_side_assets/vendor/icofont/icofont.min.css" rel="stylesheet">

    <!-- <link href="/Content/client_side_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->

    <!--===============================
    Animate On Scroll Library CSS Files  
     =================================-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--===============================
               main css file  
     =================================-->
    <link rel="stylesheet" href="main_style.css" />
    <link rel="stylesheet" href="style.css" />

    <!--===============================
        maxcdn.bootstrapcdn.com 
     =================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!--===============================
         Boxicons CDN Link 
     =================================-->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />



    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <style>
    /* ===============================
   signup form validation internal css start
     ================================= */

    #signupForm label.error {
        margin-left: 10px;
        width: auto;
        display: inline;
        color: red;
        font-size: 12px;
        font-style: italic;
    }

    @media (max-width: 768px) {
        #signupForm label.error {
            font-size: 8px;
        }
    }


    /* ====================================
   signup form validation internal css end
     ================================= */


    /*======================================
         signup and footer internal css code start
        =======================================*/

    /*======================================
         container responsive media css start
        =======================================*/
    @media (min-width: 510px) {
        .container {
            width: 450px !important;
        }
    }

    @media (min-width: 690px) {
        .container {
            width: 450px !important;
        }
    }

    @media (min-width: 870px) {
        .container {
            width: 631px !important;
        }
    }

    @media (min-width: 1007px) {
        .container {
            width: 738px !important;
        }
    }

    @media (min-width: 1025px) {
        .container {
            width: 900px !important;
        }
    }


    @media (min-width: 1200px) {
        .container {
            width: 960px !important;
        }
    }

    /*======================================
         container responsive media css end
        =======================================*/


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

    /*=========================================
         signup and footer internal css code end
        =======================================*/
    </style>



    <!--=================================================
         signup signup form validaton javascript code start
        ================================================ -->
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
        $("#signupForm").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2,

                },

                pass: {
                    required: true,
                    minlength: 6
                },

                cpass: {
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

                pass: {
                    required: "Please provide a password",
                    minlength: "Password must be 6 characters long"
                },

                cpass: {
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
                    minlength: "Must consist of at least 13 characters e.g. +880100000000",
                    phoneBD: "Please use this format +880100000000"
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

    <!--=================================================
         signup signup form validaton javascript code end
        ================================================ -->

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
         signup and footer code start 
=========================================================-->

        <div>
            <center>
                <div id="d">
                    <div class="container">
                        <div class="wrapper">
                            <div class="form_div">
                                <div class="title"><span>CREATE YOUR USER ACCOUNT</span></div>
                                <form action="signup.php" method="post" id="signupForm" encoding="multipart/form-data"
                                    enctype="multipart/form-data">
                                    <span id="check-username"></span>
                                    <div class="main_row">
                                        <div class=" col-3" style="padding-left: 0px;">
                                            <p>User Name:</p>
                                        </div>

                                        <div class="row col-9">

                                            <!-- <i class="fas fa-user"></i> -->
                                            <input name="name" type="text" class="input_field" placeholder="User Name"
                                                id="name" onInput="checkUsername()" required />

                                        </div>
                                    </div>




                                    <div style="margin-bottom: 0px;" class="main_row">
                                        <div class=" col-3" style="padding-left: 0px;">
                                            <p>Password:</p>
                                        </div>

                                        <div class="row col-9">

                                            <!-- <i class="fas fa-lock"></i> -->
                                            <input class="input_field" name="pass" id="pass" type="password"
                                                placeholder="Password" required />



                                        </div>

                                    </div>

                                    <input type="checkbox" onclick="showPassFunction()"><span
                                        style="margin-left: 5px;">Show
                                        Password</span>

                                    <div style="margin-top: 6px;" class="main_row">
                                        <div class=" col-3" style="padding-left: 0px;">
                                            <p>C-Password:</p>
                                        </div>
                                        <div class="row col-9">
                                            <!-- <i class="fas fa-lock"></i> -->
                                            <input id="myInputCpass" class="input_field" name="cpass" type="password"
                                                placeholder="Confirm Password" required />
                                        </div>
                                    </div>

                                    <input type="checkbox" onclick="showCpassFunction()"><span
                                        style="margin-left: 5px;">Show
                                        Password</span>


                                    <div style="margin-top: 6px;" class="main_row">
                                        <div class=" col-3" style="padding-left: 0px;">
                                            <p>Birth Date:</p>
                                        </div>
                                        <div class="row col-9">
                                            <!-- <i class="fas fa-lock"></i> -->
                                            <input type="text" name="birth_date" class="input_field" id="birth_date"
                                                value="" placeholder="Birth Date" />
                                        </div>
                                    </div>

                                    <span id="check-email"></span>

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
                                            <p>Phone Number:</p>
                                        </div>
                                        <div class="row col-9">
                                            <!-- <i class="fa fa-envelope"></i> -->
                                            <input type="text" class="input_field" name="cell_phone" id="cell_phone"
                                                value="<?= isset($data['cell_phone']) ? $data['cell_phone'] : ''; ?>"
                                                placeholder="Phone Number" />
                                        </div>
                                    </div>


                                    <div class="main_row">
                                        <div class=" col-3" style="padding-left: 0px;">
                                            <p>Gender:</p>
                                        </div>
                                        <div class=" col-9" style="
    display: flex;
    justify-content: flex-start;
    
    padding-left: 30px;">
                                            <input class=" input_field" type="radio" name="gender" id="gender" size="35"
                                                value="male" />&nbsp;
                                            Male &nbsp;
                                            <input class="input_field" type="radio" name="gender" id="gender" size="35"
                                                value="female" />&nbsp;
                                            Female
                                        </div>
                                    </div>

                                    <div class="main_row">
                                        <div class=" col-3" style="padding-left: 0px;">
                                            <p>Hobby :</p>
                                        </div>
                                        <div class="row col-9">
                                            <select name="hobby" class="hobby_select">
                                                <option>Selec From the List</option>
                                                <option value='Programming' <<? isset($data[?hobby?]) ?
                                                    ($data['hobby']=="Programming" ? "selected" : "" ) : "" ?>>
                                                    Programming</option>
                                                <option value='Travelling' <<? isset($data[?hobby?]) ?
                                                    ($data['hobby']=="Travelling" ? "selected" : "" ) : "" ?>>
                                                    Travelling</option>
                                                <option value='Reading Books' <?= isset($data['hobby']) ?
                                                        ($data['hobby']=="Reading Books" ? "selected" : "") : "" ?>>
                                                    Reading
                                                    Books</option>
                                                <option value='Swimming' <<? isset($data[?hobby?]) ?
                                                    ($data['hobby']=="Swimming" ? "selected" : "" ) : "" ?>>
                                                    Swimming</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="main_row">
                                        <div class=" col-3" style="padding-left: 0px;">
                                            <p>Address :</p>
                                        </div>
                                        <div class="row col-9">
                                            <textarea rows="4" cols="76" name="home_address"
                                                style="padding-left:5px; border: 2px solid rgb(181, 171, 171);margin-bottom:2px"
                                                id="home_address"><?= isset($data['home_address']) ? $data['home_address'] : ''; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="main_row">
                                        <div class=" col-3" style="padding-left: 0px;">
                                            <p>Image :</p>
                                        </div>
                                        <div class="row col-9">

                                            <input class="input_field" type="file" name='image'>
                                        </div>
                                    </div>

                                    <div class="row button">
                                        <input class="input_field"
                                            style="width: 100px;box-shadow: inset 3px 8px 7px 0px;" name="signup"
                                            type="submit" value="Sign-up" />
                                    </div>
                                    <div class="signup-link">
                                        Already Sign-In? <a href="index.php">login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!-- =================== 
        sign-up php code start
        ====================== -->


                    <?php


                    if (isset($_POST['signup'])) {

                        $name =$_POST['name'];
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        $cpass = $_POST['cpass'];
                        $birth_date = $_POST['birth_date'];
                        $cell_phone = $_POST['cell_phone'];
                        $gender = $_POST['gender'];
                        $hobby = $_POST['hobby'];
                        $home_address = $_POST['home_address'];
                        $user_id=$_POST['id'];

                        $image = $_FILES['image']['name'];
                        $imageFileExtention = pathinfo($image, PATHINFO_EXTENSION);
                        $newNameimageFile = '' . $name . '.' . $imageFileExtention;
                        $tmp_name = $_FILES['image']['tmp_name'];

                        


                        if ($pass == $cpass) {
                            $encpass = md5($pass);
                            $query = "select*from user where email='$email' AND user_name ='$name'";
                            $query_run = mysqli_query($con, $query);
                            if ($query_run) {

                                if (mysqli_num_rows($query_run) > 0) {

                                    echo "
		<script>
		alert('User ALready Registered ');
		window.location.href='index.php';
		</script>
		";


                                } else {

                                    move_uploaded_file($tmp_name, "uploads-profile_image/$newNameimageFile");

                                    $insertion = "insert into user values('','$name','$email','$encpass','$birth_date','$cell_phone','$gender','$hobby','$home_address','$newNameimageFile')";


                                    $insertion_run = mysqli_query($con, $insertion);

                                    if ($insertion_run) {

                                        echo "
		<script>
		alert('Registration Successful ');
		window.location.href='index.php';
		</script>
		";

                                    } else {

                                        echo "
		<script>
		alert('Registration Failed  ');
		window.location.href='signup.php';
		</script>
		";
                                    }


                                }



                            } else {
                                echo "
		<script>
		alert('Database Problem');
		window.location.href='signup.php';
		</script>
		";

                            }


                        } else {
                            echo "
		<script>
		alert('Password & Confirm Password not match');
		window.location.href='signup.php';
		</script>
		";
                        }


                    } else {


                    }



                    $md = "shamim";

                    $a = md5($md,true);
                    echo $a;
                    $m = "shamim";
                    echo "<br>";
                    echo md5($m,true);
                    if (md5($m,true) == $a) {
                        echo "<br>";
                        echo "welcome";
                    }
                    echo "<br>";
                    $ms = "shamim";

                    $ae = md5($ms,true);
                    echo $ae;
                    $mg = "shamim";
                    echo "<br>";
                    echo md5($mg,true);
                    if (md5($mg,true) == $ae) {
                        echo "<br>";
                        echo "welcome";
                    }
                    ?>

                    <!-- =================== 
                     sign-up php code end
                    ====================== -->

                </div>
            </center>
            <!-- ============
                  Footer
              ============== -->
            <footer id="footer">


                <div class="footer_item">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Chittagong University</span></strong>. All Rights Reserved
                    </div>
                </div>
            </footer>
            <!-- ============
                End Footer 
            ================-->
            <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


        </div>
        <!--======================================================
         signup and footer code end
=========================================================-->


    </section>


    <!--=========================================================
     CheckUser name and email check_availability jquery code start  
     =========================================================== -->

    <!-- 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <script>
    function checkUsername() {

        jQuery.ajax({
            url: "check_availability.php",
            data: 'name=' + $("#name").val(),
            type: "POST",
            success: function(data) {
                $("#check-username").html(data);
            },
            error: function() {}
        });
    }
    </script>

    <script>
    function checkEmail() {

        jQuery.ajax({
            url: "check_availability.php",
            data: 'email=' + $("#email").val(),
            type: "POST",
            success: function(data) {
                $("#check-email").html(data);
            },
            error: function() {}
        });
    }
    </script>



    <!-- =====================================================
     CheckUser name and email check_availability jquery code end
     ========================================================= -->


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
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else

                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
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
        var x = document.getElementById("pass");

        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>

    <script>
    function showCpassFunction() {

        var x = document.getElementById("myInputCpass");
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