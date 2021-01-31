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
    <link rel="stylesheet" href="css\form.css">
    <!--End CSS Source Files-->
    <link rel="shortcut icon" href="img/educa.png" type="image/x-icon" >
    <title>Admin</title>
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
			        	<a href="staffprofile.php" class="nav-link">View Staff in EduCa </a>
			        </li>
                    
                    <li class="nav-item">
			        	<a href="#contact" class="nav-link">Contact Us </a>
			        </li>

                    <li class="nav-item">
                        <button class="login_btn"><a href="logout.php" class="nav-link">Logout</a></button>
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
            <h2> Staff </h2>
        </div>
        <!--End Landing page section-->

    </div>
<!--End Home Section-->


       
   
 
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
        <form action="cont.php" class="contact-form" method="POST" onsubmit="return validate()">
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