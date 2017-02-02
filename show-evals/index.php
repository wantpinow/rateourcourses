<!DOCTYPE html>
<html>
<title>RoC - Courses</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("../AC_J_CHAP_BLUR.jpg");
    min-height: 100%;
}

.divider-1 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("AC.jpg");
    min-height: 10%;
}

.w3-navbar li a {
    padding: 16px;
    float: left;
}
</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar w3-white w3-card-2" id="myNavbar">
    <li>
      <a href="../" class="w3-wide">RateOurCourses.com</a>
    </li>
    <!-- Right-sided navbar links -->
    <li class="w3-right w3-hide-small">
	  <a href="../add-eval"><i class="fa fa-paper-plane-o"></i> ADD EVALUATION</a>
	  <a href="../show-evals"><i class="fa fa-th"></i> COURSE EVALUATIONS</a>
	  <a href="../#about">ABOUT</a>
	  <a href="../#team"><i class="fa fa-user"></i> TEAM</a>
      <a href="../#contact"><i class="fa fa-envelope"></i> CONTACT</a>
    </li>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <li>
      <a href="javascript:void(0)" class="w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars w3-padding-right w3-padding-left"></i>
      </a>
    </li>
  </ul>
</div>
<!-- Sidenav on small screens when clicking the menu icon -->
<nav class="w3-sidenav w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-large w3-padding-16">Close ×</a>
  <a href="../add-eval" onclick="w3_close()">ADD EVAL</a>
  <a href="../show-evals" onclick="w3_close()">SHOW EVALS</a>
  <a href="../#about" onclick="w3_close()">ABOUT</a>
  <a href="../#team" onclick="w3_close()">TEAM</a>
  <a href="../#contact" onclick="w3_close()">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-padding-xxlarge w3-text-white w3-text-shadow">
    <span class="w3-jumbo w3-hide-small">COMING SPRING 2017</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium"> </span><br>
	<div class=" w3-col s5">
    <span class="w3-large"><i>Full reviews of hundreds of Amherst courses coming Spring 2017. In the meantime, why not add your own courses to help make RateOurCourses even better!</i></span>
	</br>
	</br>
    <p><a href="../add-eval" class="w3-btn w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Submit a Course Evaluation</a></p>
	</div>
  </div>
</header>










</body>
</html>
