<?php
session_start();
include 'config.php';

if (!isset($_SESSION['email'])) {
    header('location:index.php');
}

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
    Animate On Scroll Library CSS Files  
     =================================-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--===============================
               google_font 
     =================================-->
    <link href="/Content/client_side_assets/css/google_font.css" rel="stylesheet">



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
               main css file  
     =================================-->
    <link rel="stylesheet" href="main_style.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="home.css" />


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
        /* position: fixed; */
        /* left: 0; */
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
                <a href="like/index1.php" class="default_bg">
                    <i class="bx bx-user"></i>

                    <span class="links_name">Post</span>
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
                            <div class="form_div" style="padding-left:70px; padding-right: 70px;">



                                <div class="item" data-aos="fade-up">welcome our home page</div>
                                <div class="item" data-aos="fade-down">welcome our home page</div>

                                <div class="item" data-aos="zoom-in">welcome our home page</div>
                                <div class="item" data-aos="zoom-out">welcome our home page</div>

                                <div class="item" data-aos="slide-up">welcome our home page</div>
                                <div class="item" data-aos="zoom-in">welcome our home page</div>
                                <div class="item" data-aos="zoom-in-up">welcome our home page</div>
                                <div class="item" data-aos="slide-left">welcome our home page</div>
                                <div class="item" data-aos="fade-down-right">welcome our home page</div>

                                <div class="item" data-aos="flip-right">welcome our home page</div>
                                <div class="item" data-aos="flip-left">welcome our home page</div>


                            </div>
                        </div>
                    </div>


                    <!-- =================== 
        sign-up php code start
        ====================== -->




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

    <!--===============================
    Animate On Scroll js start  
     =================================-->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 2000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
    </script>
    <!--===============================
    Animate On Scroll js  end
     =================================-->

</body>

</html>