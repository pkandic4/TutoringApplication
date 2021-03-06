<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CYRUS SIGN UP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Image.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">
    <link rel="stylesheet" type="text/css" href="Image.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css">
    <link rel="stylesheet" href="assets/css/Nav.css">
    <link rel="stylesheet" href="assets/css/Form.css"> 
    <link rel="stylesheet" href="assets/css/styles.css">
     <link rel="stylesheet" href="assets/css/ahover.css">
</head>

<body style=" overflow-x:hidden; background: #ffffff;font-size: 16px;height: 70px;text-shadow: 0px 0px 1px;letter-spacing: 2px;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: rgb(0,0,0);">
        <div class="container"><a class="navbar-brand" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200" href="#" style="letter-spacing: 7px;text-shadow: 0px 0px rgb(195,255,226);font-family: 'Roboto Mono', monospace;color: rgb(241,241,241);margin: -94px;margin-top: -94px;margin-left: 40px; margin-right: 0px;">CYRUS</a>
            <button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: rgba(137,205,234,0.85);color: rgb(161,173,184);border-radius: 2;border: 3px none rgb(133,197,255);border-top-style: none;border-right-style: none;border-right-color: rgb(234,235,237);"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon rubberBand animated" style="color: rgb(216,237,255);filter: contrast(200%);"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        
                        <li class="nav-item"><a class="nav-link align-content-center" data-aos="fade-down" data-aos-duration="800" data-aos-delay="500" href="#" style="letter-spacing: 2px;color: #c6c6c6;font-size: 17px;text-align: center;box-shadow: 0px 0px;filter: brightness(200%) contrast(200%);font-family: 'Roboto Mono', monospace;">Courses</a></li>
                        <li
                            class="nav-item"><a class="nav-link align-content-center" data-aos="fade-down" data-aos-duration="800" data-aos-delay="600" href="#" style="letter-spacing: 2px;color: #ffffff;font-size: 17px;text-align: center;box-shadow: 0px 0px;filter: brightness(200%) contrast(200%);font-family: 'Roboto Mono', monospace;">Ask Questions</a></li>
                            <li
                                class="nav-item"><a class="nav-link align-content-center" data-aos="fade-down" data-aos-duration="800" data-aos-delay="700" href="ContactUs.html" style="letter-spacing: 2px;color: #ffffff;font-size: 17px;text-align: center;box-shadow: 0px 0px;filter: brightness(200%) contrast(200%);font-family: 'Roboto Mono', monospace;">Contact Us<i  style="letter-spacing: 5px;padding: 0px;margin: 4px;"></i></a>
                            <li
                                 class="btn btn-primary d-inline-block" data-aos="fade-down" data-aos-duration="800" data-aos-delay="850" type="button" style="background: rgba(0,0,0,0);font-family: 'Roboto Mono', monospace;font-size: 17px;text-align: center;border-width: 0px;border-color: rgba(255,255,255,0);border-bottom-color: rgb(255,255,255);margin-right: 0px;margin-left: 0px;font-weight: bold;letter-spacing: 3px;font-family: 'Roboto Mono', monospace;filter: brightness(200%) contrast(200%);"><a href="Login.html"  style="text-decoration:none;">Log In</a></button>
                            </li>
                            <li
                                 class="btn btn-primary d-inline-block" data-aos="fade-down" data-aos-duration="800" data-aos-delay="850" type="button" style="background: rgba(0,0,0,0);font-family: 'Roboto Mono', monospace;font-size: 17px;text-align: center;border-width: 0px;border-color: rgba(255,255,255,0);border-bottom-color: rgb(255,255,255);margin-right: -8px;margin-left: -5px;font-weight: bold;letter-spacing: 3px;font-family: 'Roboto Mono', monospace;filter: brightness(200%) contrast(200%);"><a  href="SignUp.html" style="text-decoration:none;">Sign Up</a></button>
                            </li>

                    </div>
        </div>
    </nav>
	
	
	
	<?php
		$Message =" ";
		if(isset($_GET['error']))
		{
			$Message =  "!Please fill in the blanks";
			echo '<div class ="alert alert-warning">' .$Message. '</div>';
		}
		if(isset($_GET['done']))
		{
			$Message =  "Thank You for signing up";
			echo '<div class ="alert alert-success">' .$Message. '</div>';
		}
	?>

    <div class="shadow-lg register-photo" style="background: #ffffff;">
        <div class="form-container">
            <div>
       <style>         
.book {
  width: 85%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 1200px;
  transform-style: preserve-3d;
  position: relative;
  height: 310px;
  cursor: pointer;
  backface-visibility: visible;
  display: table;

}

.front, .back, .page1, .page2, .page3, .page4, .page5, .page6 {
  transform-style: preserve-3d;
  position: absolute;
  width: 300px;
  height: 128%;
  top:8%;right: -8%;

  transform-origin: left center;
  transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
}

.front, .back {
    background-image: url("https://thedo.osteopathic.org/wp-content/uploads/2020/08/online-learning.jpg");
    background-size: cover;
    background-position: 8px 8px ;
    

 
}

.front, .page1, .page3, .page5 {
  border-bottom-right-radius: .5em;
  border-top-right-radius: .5em;
}

.back, .page2, .page4, .page6 {
  border-bottom-right-radius: .5em;
  border-top-right-radius: .5em;
}

.page1 { 
  background: black;
}

.page2 {
  background: #efefef;

}

.page3 {
  background: #f5f5f5;
  
}

.page4 {
  background: #f5f5f5;
  
}

.page5 {
  background: #fafafa;
}

.page6 {
  background: #fdfdfd;
}

.book:hover .front {
  transform: rotateY(-160deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page1 {
  transform: rotateY(-150deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page2 {
  transform: rotateY(-30deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page3 {
  transform: rotateY(-140deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
  
}

.book:hover .page4 {
  transform: rotateY(-40deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);

}

.book:hover .page5 {
  transform: rotateY(-130deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page6 {
  transform: rotateY(-50deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .back {
  transform: rotateY(-20deg) scale(1.1);
}
.book:hover .page3 .page4 .textimg span{
    position: absolute;
    z-index: 4;
    transform: rotate(-10deg);
    color: black;
    font-size: 15px;
}
@media (max-width:850px) {
  .book {
    display: none;
  }
  }
 

  </style>
                <div class="book" data-aos= "slide-down" data-aos-duration="1200">
                <div class="back"></div>
                <div class="page6"></div>
                <div class="page5"></div>
                <div class="page4">
                    
                </div>
                <div class="page3"> </div>
                <div class="page2"></div>
                <div class="page1"></div>
                <div class="front"></div>
                </div>
            </div>
          
            
            <form action="signupbackend.php" data-aos="slide-up" data-aos-duration="1200" method="POST" style="box-shadow: 0px 0px 0px rgb(40,75,111);text-shadow: 0px 0px 1px rgb(139,180,221);">
                <h2 class="text-center" style="color: #121e29;line-height: 27px;font-size: 27px;letter-spacing: 1px;font-weight: bold; ">Create an account</h2>
                <div class="form-group"><input class="form-control form-control-sm" type="email" data-bs-hover-animate="pulse" name="email" placeholder="Email" required style="background: rgb(230,240,255);border-radius: 35px;"></div>
                <div class="form-group"><input class="form-control form-control-sm" type="password" data-bs-hover-animate="pulse" name="password" placeholder="Password" required style="background: rgb(230,240,255);border-radius: 33px;text-shadow: 0px 0px;"></div>
                <div class="form-group"><input class="form-control form-control-sm" type="password" data-bs-hover-animate="pulse" name="password-repeat" id="myInput" placeholder="Retype Password" required style="background: rgb(230,240,255);border-radius: 34px; "></div>
                <div class="form-group">

                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" data-bs-hover-animate="rubberBand" required onclick="myFunction()">I agree to all terms and conditions</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block border rounded shadow" data-bs-hover-animate="pulse" type="submit" name="signup"style="background: rgb(0,0,0);text-shadow: 0px 0px rgb(255,255,255);">Sign Up</button></div><li data-bs-hover-animate="pulse" class="already"
                     style="font-size: 14px;line-height: 18px;font-style: normal;text-shadow: 0px 0px 30px;">You already have an account? <a href="Login.html" style="text-decoration: none; color: black;" ><strong >Login </strong></a></li></form>
        </div>
    </div>
  <div data-aos="zoom-out" data-aos-duration="400" data-aos-delay="100" class="footer-dark" style="background: linear-gradient(0deg, black, rgba(187,235,255,0) 0%, white), rgb(204,238,251);">
        <footer>
            <div class="container">
                <div class="row" style="color: rgb(1,6,10);font-size: 18px;">
                    <div class="col-sm-6 col-md-3 item" style="color: rgb(1,6,10);font-size: 18px;height: 132px;margin: 0px;">
                        <h3>LEARN</h3>
                        <ul>
                             <li style="font-size: 16px;"><a href="#" >New Courses</a></li>
                            <li style="font-size: 16px;"><a href="FAQ.html" >FAQ</a></li>
                            
                            <li style="font-size: 16px;"><a href="#" >Certified Programs</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item" style="color: rgb(1,6,10);font-size: 18px;">
                        <h3>CAREERS</h3>
                        <ul>
                            <li></li>
                            <li style="font-size: 16px;"><a href="#">Become a Tutor</a></li>
                            <li style="font-size: 16px;"><a href="#">Make Tutoring Videos</a></li>
                            
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>CYRUS</h3>
                        <p>We help students to learn and help them educate themselves. We provide free service , all you need to do is create a new account.</p>
                    </div>
                    <div class="col item social"><a data-aos="slide-up" data-aos-duration="1000" data-aos-delay="200" href="https://www.facebook.com/Cyrus-E-Tutoring-Website-106024881341499" style="background: #000000;"><i class="icon ion-social-facebook"style="color: rgb(0,84,255);"></i></a><a data-aos="slide-up" data-aos-duration="1000" data-aos-delay="300" href="#" style="background: #000000;"><i class="icon ion-social-twitter"style="color: rgb(29,161,242);"></i></a>
                        <a
                            data-aos="slide-up" data-aos-duration="1000" data-aos-delay="400" href="#" style="background: #000000;"><i class="fab fa-instagram"style="color: rgb(251,39,255);"></i></a><a data-aos="slide-up" data-aos-duration="1000" data-aos-delay="500" href="#" style="background: #000000;color: rgb(40,103,178);"><i class="icon ion-social-linkedin" ></i></a></div>
                </div>
                <p class="text-center d-flex justify-content-center align-items-center align-content-center mx-sm-auto mr-lg-auto justify-content-xl-center align-items-xl-start copyright" data-aos="fade" style="color: rgb(0,0,0);height: 69px;font-size: 17px;line-height: 50px;letter-spacing: 12px;font-family: 'Roboto Mono', monospace;width: 400px;font-weight: bold;opacity: 1;filter: brightness(92%);margin: -2px;text-align: center;border-width: 4px;">CYRUS ?? 2020</p>
            </div>
        </footer>
    </div>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script src="assets/js/function.js"></script>
</body>

</html>