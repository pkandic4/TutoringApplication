<!DOCTYPE html>
<html>
<!-- Import CSS and JS-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>STEM Courses</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">

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
</head>
<!-- Header for the site (Cyrus, login, etc)-->
<body style="background: #ffffff;font-size: 16px;height: 70px;text-shadow: 0px 0px 1px;letter-spacing: 2px;">
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
                    class="nav-item"><a class="nav-link align-content-center" data-aos="fade-down" data-aos-duration="800" data-aos-delay="700" href="#" style="letter-spacing: 2px;color: #ffffff;font-size: 17px;text-align: center;box-shadow: 0px 0px;filter: brightness(200%) contrast(200%);font-family: 'Roboto Mono', monospace;">Contact Us<i  style="letter-spacing: 5px;padding: 0px;margin: 4px;"></i></a>
                <li
                    class="btn btn-primary d-inline-block" data-aos="fade-down" data-aos-duration="800" data-aos-delay="850" type="button" style="background: rgba(0,0,0,0);font-family: 'Roboto Mono', monospace;font-size: 17px;text-align: center;border-width: 0px;border-color: rgba(255,255,255,0);border-bottom-color: rgb(255,255,255);margin-right: 0px;margin-left: 0px;font-weight: bold;letter-spacing: 3px;font-family: 'Roboto Mono', monospace;filter: brightness(200%) contrast(200%);"><a href="Login.html"  style="text-decoration:none;">Log In</a></button>
                </li>
                <li
                    class="btn btn-primary d-inline-block" data-aos="fade-down" data-aos-duration="800" data-aos-delay="850" type="button" style="background: rgba(0,0,0,0);font-family: 'Roboto Mono', monospace;font-size: 17px;text-align: center;border-width: 0px;border-color: rgba(255,255,255,0);border-bottom-color: rgb(255,255,255);margin-right: -8px;margin-left: -5px;font-weight: bold;letter-spacing: 3px;font-family: 'Roboto Mono', monospace;filter: brightness(200%) contrast(200%);"><a  href="SignUp.html" style="text-decoration:none;">Sign Up</a></button>
                </li>

        </div>
    </div>
</nav>
<!-- Scripts for header and footer; text "slides down", footer pops up after scrolling-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
<!-- Opens connection to local database, creates table and populates it with values-->
<?php
$server = "localhost";
$username = "pkandic";
$password = "Ipneidye";
$database = "pkandic";
$connection = mysqli_connect($server, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}

$sql = "CREATE TABLE languageCourses 
(
id INT AUTO_INCREMENT PRIMARY KEY,
subject VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL,
url VARCHAR(200) NOT NULL
)";

if (mysqli_query($connection, $sql)) {
    //echo "Table 'MyImages' created successfully.<br>";
} else {
    echo "Error: " . mysqli_error($connection) . ".<br>";
}

$sql = "INSERT INTO languageCourses (subject, description, url)
VALUES ('English Studies', 'rockets hahahah not for you',  'https://www.kindpng.com/picc/m/748-7488067_transparent-great-britain-flag-png-flag-of-australia.png'), 
('French Studies', 'row operations are fun', 'https://www.kindpng.com/picc/m/199-1992251_contribute-in-representing-the-french-culture-and-language.png'),
('World History', 'Integral to your success', 'https://img2.pngio.com/roman-helmet-png-history-book-clip-art-transparent-cartoon-cartoon-history-png-920_780.png'),
('Literature', 'whats cookin', 'https://images.vexels.com/media/users/3/144860/isolated/preview/5128b7ff4b40f49cd6c0ce8698b9a19a-boy-reading-books-illustration-by-vexels.png'),
('Geography', '(in)finite states', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/People-World-Map-Prismatic-2.png/640px-People-World-Map-Prismatic-2.png')";

if (mysqli_multi_query($connection, $sql)) {
    //echo "New records created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection) . "<br>";
}

$sql = "SELECT * FROM languageCourses";
$result = mysqli_query($connection, $sql);
$rows = mysqli_num_rows($result);

$sql = "SELECT * FROM languageCourses";
$result = mysqli_query($connection, $sql);
$rows = mysqli_num_rows($result);
?>
<!-- HTML is outside php tags; pages stored on the moons
 tend to not load if these are inside php tags -->
<br><h1 style="text-align:center">Liberal Art Courses</h1>
<div style="text-align:center">
    <!-- prints out data in tables, deletes table, closes connection -->
    <?php
    if ($rows > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $imgUrl = $row["url"];
            $subject = $row["subject"];
            $description = $row["description"];
            echo "<div class='image'>";
            echo "<img src='$imgUrl' height='300'>";
            echo "<div class='desc'><b> $subject</b></div>";
            echo "</div>";
        }
    }
    $sql = "DROP TABLE languageCourses";
    if (mysqli_query($connection, $sql)) {
        //echo "<br>Table 'MyImages' dropped successfully.<br>";
    } else {
        echo 'Error dropping database: ' . mysqli_error() . "<br>";
    }
    echo "<br>";
    mysqli_close($connection);
    ?>
    <!-- Website footer -->
</div>
<div data-aos="zoom-out" data-aos-duration="400" data-aos-delay="100" class="footer-dark" style="background: linear-gradient(-2deg, black, rgba(187,235,255,0) 0%, white), rgb(204,238,251);">
    <footer>
        <div class="container">
            <div class="row" style="color: rgb(1,6,10);font-size: 18px;">
                <div class="col-sm-6 col-md-3 item" style="color: rgb(1,6,10);font-size: 18px;height: 132px;margin: 0px;">
                    <h3>LEARN</h3>
                    <ul>
                        <li style="font-size: 16px;"><a href="#">New Courses</a></li>
                        <li style="font-size: 16px;"><a href="#">Q & A</a></li>
                        <li style="font-size: 16px;"><a href="#">Find a Private Tutor</a></li>
                        <li style="font-size: 16px;"><a href="#">Certified Programs</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item" style="color: rgb(1,6,10);font-size: 18px;">
                    <h3>OPPORTUNITIES</h3>
                    <ul>
                        <li></li>
                        <li style="font-size: 16px;"><a href="#">Become a Tutor</a></li>
                        <li style="font-size: 16px;"><a href="#">Tutoring Jobs</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>CYRUS</h3>
                    <p>We help students to learn and help them educate themselves. We provide free service , all you need to do is create a new account.</p>
                </div>
                <div class="col item social"><a data-aos="slide-up" data-aos-duration="1000" data-aos-delay="200" href="#" style="background: #000000;"><i class="icon ion-social-facebook"style="color: rgb(0,84,255);"></i></a><a data-aos="slide-up" data-aos-duration="1000" data-aos-delay="300" href="#" style="background: #000000;"><i class="icon ion-social-twitter"style="color: rgb(29,161,242);"></i></a>
                    <a
                        data-aos="slide-up" data-aos-duration="1000" data-aos-delay="400" href="#" style="background: #000000;"><i class="fab fa-instagram"style="color: rgb(251,39,255);"></i></a><a data-aos="slide-up" data-aos-duration="1000" data-aos-delay="500" href="#" style="background: #000000;color: rgb(40,103,178);"><i class="icon ion-social-linkedin" ></i></a></div>
            </div>
            <p class="text-center d-flex justify-content-center align-items-center align-content-center mx-sm-auto mr-lg-auto justify-content-xl-center align-items-xl-start copyright" data-aos="fade" style="color: rgb(0,0,0);height: 69px;font-size: 17px;line-height: 50px;letter-spacing: 12px;font-family: 'Roboto Mono', monospace;width: 400px;font-weight: bold;opacity: 1;filter: brightness(92%);margin: -2px;text-align: center;border-width: 4px;">CYRUS ?? 2020</p>
        </div>
    </footer>
</div>
</body>
</html>

