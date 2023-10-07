
<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PLANO</title>        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="../Assets/Templates/Main/img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="../Assets/Templates/Main/lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="../Assets/Templates/Main/lib/animate/animate.min.css" rel="stylesheet">
        <link href="../Assets/Templates/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../Assets/Templates/Main/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="../Assets/Templates/Main/lib/slick/slick.css" rel="stylesheet">
        <link href="../Assets/Templates/Main/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../Assets/Templates/Main/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="Assets/Templates/Main/index.html">
                                    <h2 style="font-weight:900">PLANO</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>24 * 7</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>+919876543221</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>teamplano@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="../Assets/Templates/Main/#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                           <div class="navbar-nav mr-auto">
                                <a href="HomePage.php" class="nav-item nav-link active">Home</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile</a>
                                    <div class="dropdown-menu">
                                        <a href="Myprofile.php" class="dropdown-item">My Profile</a>
                                        <a href="Editprofile.php" class="dropdown-item">Edit Profile</a>
                                        <a href="Changepassword.php" class="dropdown-item">Change Password</a>
                                    </div>
                                </div>
                                <a href="Request.php" class="nav-item nav-link">Request</a>
                                <a href="MySite.php" class="nav-item nav-link">Site</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="../Logout.php">Sign Out</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div> 


            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../Assets/Templates/Main/img/carousel-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                        <p class="animated fadeInRight">Welcome</p>
                            <h1 class="animated fadeInLeft"><?php echo $_SESSION["uname"]; ?></h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                    <img src="../Assets/Templates/Main/img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                        <p class="animated fadeInRight">Welcome</p>
                            <h1 class="animated fadeInLeft"><?php echo $_SESSION["uname"]; ?></h1>
                        </div>
                    </div>

                    <div class="carousel-item">
                    <img src="../Assets/Templates/Main/img/carousel-2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                        <p class="animated fadeInRight">Welcome</p>
                            <h1 class="animated fadeInLeft"><?php echo $_SESSION["uname"]; ?></h1>
                        </div>
                    </div>
                </div>
                

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->

            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                               
                                <div class="feature-text">
                                    <h3>Expert Worker</h3>
                                    <p>We provide high expeienced workers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                
                                <div class="feature-text">
                                    <h3>Quality Work</h3>
                                    <p>Provide 100% resposibility , Fast Loading Time and High Performance · 
                                , Extremely Helpful Customer Support ,
                                         Quick Adaptation to Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                
                                <div class="feature-text">
                                    <h3>24/7 Support</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="../Assets/Templates/Main/img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Welcome to PLANO</p>
                                <h2>10 Years Experience</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    We have 10 years of experience in firm  and we have assisted 45 repeated clients in increasing their capital by an average of 15% every year. We trained them in providing the most helpful experience to our customers.  We aim to integrate our individualized approach to helping the clients”
                                <p>
                                
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Fact Start -->
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">109</h2>
                                        <p>Expert Workers</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">485</h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">890</h2>
                                        <p>Running Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Our Services</p>
                        <h2>We Provide Services</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="../Assets/Templates/Main/img/service-1.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>Building Construction</h3>
                                    <a class="btn" href="../Assets/Templates/Main/img/service-1.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="../Assets/Templates/Main/img/service-2.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>House Renovation</h3>
                                    <a class="btn" href="../Assets/Templates/Main/img/service-2.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="../Assets/Templates/Main/img/service-3.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>Architecture Design</h3>
                                    <a class="btn" href="../Assets/Templates/Main/img/service-3.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="../Assets/Templates/Main/img/service-4.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>Interior Design</h3>
                                    <a class="btn" href="../Assets/Templates/Main/img/service-4.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="../Assets/Templates/Main/img/service-5.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>Fixing & Support</h3>
                                    <a class="btn" href="../Assets/Templates/Main/img/service-5.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="../Assets/Templates/Main/img/service-6.jpg" alt="Image">
                                    
                                </div>
                                <div class="service-text">
                                    <h3>Painting</h3>
                                    <a class="btn" href="../Assets/Templates/Main/img/service-6.jpg" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->


           
            
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>        
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="Assets/Templates/Main/" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video End -->


            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Our Team</p>
                        <h2>Meet Our workers</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="../Assets/Templates/Main/img/team-1.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Adam Phillips</h2>
                                    <p>CEO & Founder</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href="Assets/Templates/Main/"><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href="Assets/Templates/Main/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href="Assets/Templates/Main/"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href="Assets/Templates/Main/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="../Assets/Templates/Main/img/team-2.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Dylan Adams</h2>
                                    <p>Civil Engineer</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href="Assets/Templates/Main/"><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href="Assets/Templates/Main/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href="Assets/Templates/Main/"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href="Assets/Templates/Main/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="../Assets/Templates/Main/img/team-3.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Jhon Doe</h2>
                                    <p>Interior Designer</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href="Assets/Templates/Main/"><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href="Assets/Templates/Main/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href="Assets/Templates/Main/"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href="Assets/Templates/Main/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="../Assets/Templates/Main/img/team-4.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Josh Dunn</h2>
                                    <p>Painter</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href="Assets/Templates/Main/"><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href="Assets/Templates/Main/"><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href="Assets/Templates/Main/"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href="Assets/Templates/Main/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->
            

         

            <!-- Testimonial Start -->
            <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                <div class="slider-nav"><img src="../Assets/Templates/Main/img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="../Assets/Templates/Main/img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="../Assets/Templates/Main/img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="../Assets/Templates/Main/img/testimonial-4.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="../Assets/Templates/Main/img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="../Assets/Templates/Main/img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="../Assets/Templates/Main/img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="../Assets/Templates/Main/img/testimonial-4.jpg" alt="Testimonial"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                <div class="slider-item">
                                    <h3>Customer</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


           
            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>121 street ,muvattupuzha</p>
                                <p><i class="fa fa-phone-alt"></i>+919876543221</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href="Assets/Templates/Main/"><i class="fab fa-twitter"></i></a>
                                    <a href="Assets/Templates/Main/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="Assets/Templates/Main/"><i class="fab fa-youtube"></i></a>
                                    <a href="Assets/Templates/Main/"><i class="fab fa-instagram"></i></a>
                                    <a href="Assets/Templates/Main/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="Assets/Templates/Main/">Building Construction</a>
                                <a href="Assets/Templates/Main/">House Renovation</a>
                                <a href="Assets/Templates/Main/">Architecture Design</a>
                                <a href="Assets/Templates/Main/">Interior Design</a>
                                <a href="Assets/Templates/Main/">Painting</a>
                                <a href="Assets/Templates/Main/">Piping work</a>
                                <a href="Assets/Templates/Main/">Electric work</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="Assets/Templates/Main/">About Us</a>
                                <a href="Assets/Templates/Main/">Contact Us</a>
                                <a href="Assets/Templates/Main/">Our Team</a>
                                <a href="Assets/Templates/Main/">Projects</a>
                                
                            </div>
                        </div>
                        <!--<div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Newsletter</h2>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu
                                </p>
                                <div class="form">
                                    <input class="form-control" placeholder="Email here">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="Assets/Templates/Main/">Terms of use</a>
                        <a href="Assets/Templates/Main/">Privacy policy</a>
                       
                        <a href="Assets/Templates/Main/">Help</a>
                        <a href="Assets/Templates/Main/">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="../Assets/Templates/Main/lib/easing/easing.min.js"></script>
        <script src="../Assets/Templates/Main/lib/wow/wow.min.js"></script>
        <script src="../Assets/Templates/Main/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../Assets/Templates/Main/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="../Assets/Templates/Main/lib/lightbox/js/lightbox.min.js"></script>
        <script src="../Assets/Templates/Main/lib/waypoints/waypoints.min.js"></script>
        <script src="../Assets/Templates/Main/lib/counterup/counterup.min.js"></script>
        <script src="../Assets/Templates/Main/lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="../Assets/Templates/Main/js/main.js"></script>
    </body>
</html>
