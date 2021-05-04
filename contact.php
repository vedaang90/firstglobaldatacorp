<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "ved-win@protonmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">    
<title>First Global Data Corp | Contact</title>
    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,600;0,700;1,300;1,500&display=swap"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Zilla+Slab+Highlight:wght@700&display=swap" rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">

</head>

<body>
     <!--header-->
    <header id="site-header" class="fixed-top">
      <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1> <a class="navbar-brand" href="index.html">                   
                    </a></h1>  
               
    <a class="navbar-brand" href="#index.html">
        <img src="assets/logo.png" alt="FGDC" title="First Global Data Corp" style="height:70px;" />
    </a>
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                       
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Vision</a>
                        </li>
 <li class="nav-item active">
                            <a class="nav-link" href="team.html">Careers</a>
                        </li>
 <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>                        
<!--/search-right-->
                        
            </nav>
        </div>
    </header>
    <!--/header-->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- about page about section -->
    <!-- contact1 -->
    <section class="w3l-contact-1 py-5" id="contact">
        <div class="contacts-9 py-lg-5 py-md-4">
            <div class="container">
                <div class="d-grid contact-view mb-5 pb-lg-5">
                    <div class="cont-details">
                        <div class="contactct-fm-text text-left mb-md-5 mb-4">
                            <h4 class="sub-titlehny">Get in touch</h4>
                            <h3 class="hny-title mb-4">Find Us</h3>
                            <div class="separatorhny"></div>
                            <p class="mb-sm-5 mb-4">Start working with Us that can provide everything you need to
                                generate leads,
                                drive traffic,
                                connect. <br> We guarantee that you’ll be able to have any issue resolved within 24
                                hours.</p>

                        </div>
                        <div class="cont-top">
                            <div class="cont-left text-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Phone number</h6>
                                <p><a href="tel:+(21) 255 088 4943">+(21) 255 088 4943</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-envelope-o"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Send Email</h6>
                                <p><a href="mailto:info@firstglobaldatacorp.com" class="mail">info@firstglobaldatacorp.com</a></p>
                            </div>
                        </div>
                        <div class="cont-top margin-up">
                            <div class="cont-left text-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="cont-right">
                                <h6>Office Address</h6>
                                <p class="pr-lg-5"> First Global Data Corp,LLC ,1712 Pioneer Ave, Suite 872 , Cheyenne, Wyoming 82001, United States</p>
                            </div>
                        </div>
                    </div>
                    <div class="map-content-9">
                        <div class="contactct-fm map-content-9 pl-lg-4">
                            <div class="contactct-fm-text text-left">
                                <h4 class="sub-titlehny">Contact Us</h4>
                                <h3 class="hny-title mx-0 mb-4 text-left">Fill out the form.</h3>
                                <div class="separatorhny"></div>
                                <p class="mb-sm-5 mb-4">Our Helpful and Interactive Team will get back to you as soon as possible!</p>
                            </div>
                            <form action="" method="post">
                                <div class="twice-two">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Name" required="">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" required="">
                                </div>
                                
                                <textarea name="message" class="form-control" id="message" placeholder="Message"
                                    required=""></textarea>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary btn-style mt-4">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="map-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3005.0607979570345!2d-104.82095208427856!3d41.13319871967665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876f3ac107440001%3A0x6f90c2d9c91f96fe!2sFirst%20Global%20Data%20Corp!5e0!3m2!1sen!2sin!4v1620020298186!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>
    </section>
    <!-- /contact1 -->

    <!-- footer -->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
                        <div class="footer-logo mb-3">
                            <a class="navbar-brand" href="index.html">First Global Data Corp</a>
                        </div>
                        <p>FGDC as an organization has successfully garnered ample business for itself and clients alike through undertaking transparent tasks and consistent implementation of feedbacks. As an organization, we ensure that we build our craft as we journey towards success never forgetting our roots and values along the way.</p>
                        <div class="main-social-footer-29 mt-4">
                            <a href="https://www.facebook.com/pages/category/Media-News-Company/First-Global-Data-Corp-209592323177218/" class="facebook"><span class="fa fa-facebook"></span></a>
                            <a href="https://www.linkedin.com/company/first-global-data-corp/about/" class="linkedin"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">

                        <ul>
                            <h6 class="footer-title-29">Quick Links</h6>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.php"> Get a Quote</a></li>
                            <li><a href="team.html/#subscribe"> Careers</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">More Info</h6>
                        <ul>
                            <li><a href="https://www.linkedin.com/company/first-global-data-corp/about/">Linkedin Profile</a></li>
                            <li><a href="#about">About FGDC</a></li>
                            <li><a href="mailto:harshal.galani@firstglobaldatacorp.com">Get a customized Quote</a></li>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="contact.php"> Support</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">Contact FGDC </h6>
                        <p><strong>Address :</strong> First Global Data Corp,LLC ,1712 Pioneer Ave, Suite 872 , Cheyenne, Wyoming 82001, United States</p>
                        <p class="my-2"><strong>Phone :</strong> <a href="tel:+12 23456799">+12 23456799</a></p>
                        <p><strong>Email :</strong> <a href="mailto:info@firstglobaldatacorp.com">info@firstglobaldatacorp.com</a></p>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //footer -->

    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">© 2021 First Global Data Corp,LLC. All rights reserved. Website by <a
                        href="https://www.freelancer.com/u/developer504" target="_blank">
                        Vedaang Sharma</a></p>

                <div class="col-lg-4 footer-list-29">
                    <ul class="d-flex text-lg-right">
                        <li><a href="team.html">Careers</a></li>
                        <li class="mx-lg-5 mx-md-4 mx-3"><a href="privacy.html">Privacy Policy</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            &#10548;
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->
    <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
    <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->

</body>

</html>