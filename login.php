<?php
session_start();

?>


<?php

include 'config.php';
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $email_search= "SELECT * FROM `register` WHERE `email`='$email'";
  $query = mysqli_query($conn,$email_search);

  $email_count =mysqli_num_rows($query);

  if($email_count){
    $email_pass = mysql_fetch_assoc($query);
    $db_pass = $email_pass['password'];
     

    $pass_decode =password_verify($password,$db_pass);

    if($pass_decode)
    {
      echo "login successfull";
      header("location:index.html");
    }
    else{
      echo "password incorrect";

    }
  }
    else{
      echo "Invalid Email";
    }

  

}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title> login system!</title>
    <style>

      body{
      background-color: black;
      }

    .section{
justify-content: center;
margin-top: 250px;
margin-bottom: 100px;
}

    </style>
  </head>

  <body>
    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./classes.html">Classes</a></li>
                <li><a href="./services.html">Services</a></li>
                <li><a href="./team.html">Our Team</a></li>
                <li><a href="#">Your Profile</a>
                    <ul class="dropdown">
                        <li><a href="./about-us.html">About us</a></li>
                        <li><a href="./class-timetable.html">Classes timetable</a></li>
                        <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                        <li><a href="./team.html">Our team</a></li>
                        <li><a href="./gallery.html">Gallery</a></li>
                        <li><a href="./blog.html">Our blog</a></li>
                        <li><a href="./404.html">404</a></li>
                    </ul>
                </li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="canvas-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Section End -->
  <!-- Header Section Begin -->
  <section>
  <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.html">
                            <img class="Bochard" src="img/logo/Bochard.png" alt="" >
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./about-us.html">About Us</a></li>
                            <li><a href="./class-details.html">Classes</a></li>
                            <li><a href="./services.html">Services</a></li>
                            <li><a href="./team.html">Our Team</a></li>
                            <li><a href="#">Your Profile</a>
                                <ul class="dropdown">
                                    <li><a href="./about-us.html">About us</a></li>
                                    <li><a href="./class-timetable.html">Classes timetable</a></li>
                                    <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                                    <li><a href="./team.html">Our team</a></li>
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="./blog.html">Our blog</a></li>
                                    <li><a href="./404.html">404</a></li>
                                </ul>
                            </li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="to-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
</section>
    <!-- Header End -->

       <!-- Login Section Begin -->
       <section class="section login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <main class=" login form-signin w-100 m-auto">

                    <form action="" method="POST">
                    <h1 class="card-title mt-3 text-center h3 mb-3 fw-normal login00"><a class="login00" href="register.php">Create Account</a></h1>
            </div>
            <div class="col-lg-12">
            <div class="form-floating">
            <label for="email" class="login00">Email address</label>
            <input name="email" id="floatingInput"  class="form-control" placeholder="name@example.com" type="email"> 
</div>
</div>
<div class="col-lg-12">
                  <div class="form-floating">
                            <label class="login00" for="password">Password</label>
                  <input type="password" class="form-control" id="floatingPassword" placeholder="password" name="password" value="">
                  </div></div>
                  </div>
                  <div class="checkbox mb-3">
                            <label class="login00">
                              <input type="checkbox" value="remember-me" > Remember me
                            </label>
                            <div class="forget"><a  href="">forget password</a></div>
                          </div>
                  
                  <div class="form-group">
                   <button class="btn-btn-primary-btn-block w-100 btn btn-lg btn-primary btn2" id="box3"><a class="login00" href="index.html">Login Now</a></button>

                  </div>
                  <p class="text-center">Not Have An Account? <a href="register.php">SignUp Here</a></p>
        </form>

                        <!-- <form class="signin" action="" method="POST">
                        <h1 class="card-title mt-3 text-center h3 mb-3 fw-normal login00"><a href="register.php">Create Account</a></h1>
                      
                      
                          <div class="form-floating">
                            <label for="floatingInput">Email address</label>
                            <input name="email" class="form-control" type="email" placeholder="name@example.com">
                          </div>
                          <div class="form-floating">
                            <label for="floatingPassword">Password</label>
                            <input type="password" class="form-control" placeholder="password" name="password" value="">
                          </div>
                      
                          <div class="checkbox mb-3">
                            <label>
                              <input type="checkbox" value="remember-me"> Remember me
                            </label>
                            <div class="forget"><a  href="">forget password</a></div>
                          </div>
                          <div id="connecthtml" class="form-group">
                          <button class="btn-btn-primary-btn-block" id="box3"><a href="index.html">Login Now</a></button>

                  </div>
                          <span class="or">OR</span>
                          <a class="dropdown-item login00" href="#">New around here? Sign up</a>
                          <div id="connecthtml"><button class="w-100 btn btn-lg btn-primary btn2" type="submit"><a class="connectAnchor color00  login00" href="register.php">Create Account</a></button></div>
                        </form> -->
                      </main>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

  <!-- <section>
    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width:400px;">
     
        <form action="" method="POST">
          <div class="form-group-input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa-fa-user"></i></span>
            </div>
            <input name="email" class="form-control" placeholder="Full name" type="email"> 
                  </div>
                  <div class="form-group-input-group">
                    <div class="input-group-prepend"></div>
             <span class="input-group-text"><i class="fa-fa-lock"></i></span>
                  
                  <input type="password" class="form-control" placeholder="password" name="password" value="">
                  </div>
                  <br>
                  <div class="form-group">
                   <button class="btn-btn-primary-btn-block" id="box3"><a href="index.html">Login Now</a></button>

                  </div>
                  <p class="text-center">Not Have An Account? <a href="register.php">SignUp Here</a></p>
        </form>
      </article>
    </div>
</section> -->

      <!-- Get In Touch Section Begin -->
      <div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Amoudha Road, Satna,<br/> MP-485001</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>9000087000</li>
                            <li>9000086000</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>Support.bochard@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <img class="Bochard" src="img/logo/Bochard.png" alt="" >
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa  fa-envelope-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Useful links</h4>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Classes</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Subscribe</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Tips & Guides</h4>
                        <div class="fw-recent">
                            <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-recent">
                            <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    
    </body>
</html>