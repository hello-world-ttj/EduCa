<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS Source Files-->
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css">
    <link rel="stylesheet" href="css\fixed.css">
    <link rel="stylesheet" href="css\index_style.css">
    <!--End CSS Source Files-->
    <link rel="shortcut icon" href="img/educa.png" type="image/x-icon" >
    <title>EduCa</title>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
<!--Start Home Section-->
    <div id="home">
        <!--Navigation-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a href="#" class="navbar-brand"><img src="img/educa.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="#course" class="nav-link">Courses</a>
                    </li>

                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>

                    <li class="nav-item">
			        	<a href="#contact" class="nav-link">Contact Us </a>
			        </li>

                    <li class="nav-item">
                        <button class="login_btn"><a href="reg_log.php" class="nav-link">Login</a></button>
                    </li>
                </ul>
            </div>
        </nav>
        <!--End Navigation-->

        <!--Start Landing page section-->
        <div class="landing">
            <div class="home-wrap">
                <div class="home-inner">
                </div>
            </div>
        </div>

        <div class="caption text-center">
            <h1>Welcome to EduCa</h1>
            
            <a href="reg_log.php" class="btn btn-outline-light btn-lg">Login Here!</a>
        </div>
        <!--End Landing page section-->

    </div>
<!--End Home Section-->

<!--Start About Section-->
<div id="about" class="offset">
    <div class="jumbotron">
    <h3 class="heading">About</h3>
    <div class="heading-underline"></div>
    <p class="aboutnote">
    “FRANCHISE MANAGEMENT SYSTEM” is a web application for the head office and the franchisees. 
    This is an application for the specified franchisees. Admin can register the franchise, 
    franchise can register student and staff. The web application will cover Enrolment, 
    Add course & subject, view franchise, student & staff.

    </p>
</div>
</div>
<!--End About Section-->

<!--Start Course Section-->
<div id="course" class="container">

    <div class="heading">
        <h1>Achieve your goals with EduCa!</h1>
        <p class="lead">Your Course to Success...World-class learning for anyone, anywhere.</p>
    </div>
        <div class="row">

            <div class="card">
                <div class="card-header">
                    <h1>HTML 5</h1>
                </div>
                <div class="card-body">
                    <i class="fas fa-suitcase"></i>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h1>CSS 3</h1>
                </div>
                <div class="card-body">
                    <i class="fas fa-suitcase"></i>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h1>PHP</h1>
                </div>
                <div class="card-body">
                    <i class="fas fa-suitcase"></i>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h1>MYSQL</h1>
                </div>
                <div class="card-body">
                    <i class="fas fa-suitcase"></i>
                </div>
            </div>

         </div>

</div>
<!--End Course Section-->

<!--Start Categories Section-->
<div id="categories" class="offset">
        <div class="narrow">

            <div class="col-12">
                <h3 class="heading">Categories</h3>
                <div class="heading-underline"></div>
            </div>

            <div class="row text-center">

                <div class="card" id="card">
                    <div class="inner">
                    <img src="img/coding0.jpg" class="card-img-top">
                    </div>
                    <div class="card-body-category">
                      <h5 class="card-title">Development</h5>
                    </div>
                  </div>

                  <div class="card" id="card">
                      <div class="inner">
                    <img src="img/design.jpg" class="card-img-top">
                      </div>
                    <div class="card-body-category">
                      <h5 class="card-title">Design</h5>
                    </div>
                  </div>

                  <div class="card" id="card">
                      <div class="inner">
                    <img src="img/music0.jpg" class="card-img-top">
                      </div>
                    <div class="card-body-category">
                      <h5 class="card-title">Music</h5>
                    </div>
                  </div>

                  <div class="card" id="card">
                      <div class="inner">
                    <img src="img/photography0.jpg" class="card-img-top">
                      </div>
                    <div class="card-body-category">
                      <h5 class="card-title">Photography</h5>
                    </div>
                  </div>

            </div><!--End Row-->

        </div><!--End Narrow-->
</div>
<!--End Categories Section-->

<!--Start Contact Section-->
<div id="contact" class="offset">
    <footer>
    <div class="fixed-background">
        <div class="dark">
        <h1>Contact us</h1>
        <div class="heading-underline"></div>
        <div class="msg" id="msg" align="center" style="color:red" >
              <small class="errormsg" id="errormsg" style="font-size:18px"></small>
        </div>  
        <form action="contact.php" class="contact-form" method="POST" onsubmit="return validate()">
            <input type="text" class="contact-form-text" placeholder="Your Name" name=yourname id="yourname">
            <input type="text" class="contact-form-text" placeholder="Email" name=email id="email">
            <input type="text" class="contact-form-text" placeholder="Phone" name=phone id="phone">
            <textarea class="contact-form-text" placeholder="Your Message" name=message id="message"></textarea>
            <input type="submit" class="contact-form-btn" value="Send">
        </form>
        <div class="icons">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
           <div class="footerimg"> <a href="#" ><img src="img/educa.png" alt=""></a>
            <hr class="socket">
            &copy; EduCa. 
        </div>

        <div class="fixed-wrap">
            <div class="fixed">
            </div>
        </div>
    </div>
    </div> <!-- End fixed-background -->
    </footer>
</div>
<!--End Contact Section-->

<!--Script Source Files-->
<script src="js/script.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
<script src="fontawesome-free-5.14.0-web/js/all.js"></script>
<!--End Script Source Files-->
</body>
</html>