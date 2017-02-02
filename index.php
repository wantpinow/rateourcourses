<!DOCTYPE html>
<html>
<title>RoC - Home</title>
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
    background-image: url("AC_J_CHAP_BLUR.jpg");
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
      <a href="#home" class="w3-wide">RateOurCourses.com</a>
    </li>
    <!-- Right-sided navbar links -->
    <li class="w3-right w3-hide-small">
	  <a href="add-eval"><i class="fa fa-paper-plane-o"></i> ADD EVALUATION</a>
	  <a href="show-evals"><i class="fa fa-th"></i> COURSE EVALUATIONS</a>
	  <a href="#about">ABOUT</a>
	  <a href="#team"><i class="fa fa-user"></i> TEAM</a>
      <a href="#contact"><i class="fa fa-envelope"></i> CONTACT</a>
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
  <a href="add-eval" onclick="w3_close()">ADD EVAL</a>
  <a href="show-evals" onclick="w3_close()">SHOW EVALS</a>
  <a href="#about" onclick="w3_close()">ABOUT</a>
  <a href="#team" onclick="w3_close()">TEAM</a>
  <a href="#contact" onclick="w3_close()">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-padding-xxlarge w3-text-white">
    <span class="w3-jumbo w3-hide-small w3-text-shadow">Welcome to RateOurCourses.com</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium"> </span><br>
	</br>
	</br>
    <span class="w3-large w3-text-shadow"><i>RateOurCourses.com is a new website set up by three Amherst students who are trying to improve the course selection process for students. Through fellow students' reviews that rate different characteristics of a class, you can be more informed as you make your registration decisions. Add to the database by putting your own reviews into our simple evaluation form. The more evaluations there are, the more useful the information will be.</i></span>
    <p><a href="add-eval" class="w3-btn w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off"><b>Submit a Course Evaluation</b></a></p>
  </div>
</header>

<!-- About Section -->
<div class="w3-container w3-white w3-padding-128 w3-center" id="about" align="center">
	<h3 class="w3-center">ABOUT US</h3>
	<p class="w3-center w3-large">RateOurCourses.com is a new website set up by three Amherst students who are trying to improve the course selection process for students. Through fellow students' reviews that rate different characteristics of a class, you can be more informed as you make your registration decisions. Add to the database by putting your own reviews into our simple evaluation form. The more evaluations there are, the more useful the information will be.</p>
</div>



<!-- Team Section -->
<div class="w3-container" id="team">
  <h3 class="w3-center">MEET THE TEAM</h3>
  <p class="w3-center w3-large">The ones that make things work</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
	<div class="w3-col s4 w3-margin-bottom">
      <div class="w3-card-2">
        <img src="AC_J_CHAP_BLUR.jpg" alt="Patrick" style="width:100%">
        <div class="w3-container">
          <h3>Patrick Frenett</h3>
          <p class="w3-opacity">Co-Founder & Technical Lead</p>
          <p>Patrick is a mathematics, statistics, and computer science student looking for a career in the technology industry. In his free time he enjoys playing rugby and guitar.</p>
          <p><button class="w3-btn-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
	<div class="w3-col s4 w3-margin-bottom">
      <div class="w3-card-2">
        <img src="AC_J_CHAP_BLUR.jpg" alt="Lucas" style="width:100%">
        <div class="w3-container">
          <h3>Lucas Sheiner</h3>
          <p class="w3-opacity">Co-Founder</p>
          <p>About Lucas Sheiner</p>
          <p><button class="w3-btn-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
	<div class="w3-col s4 w3-margin-bottom">
      <div class="w3-card-2">
        <img src="AC_J_CHAP_BLUR.jpg" alt="Seumas" style="width:100%">
        <div class="w3-container">
          <h3>Seumas Macneil</h3>
          <p class="w3-opacity">Co-Founder</p>
          <p>About Seumas Macneil</p>
          <p><button class="w3-btn-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</div>






































<!-- Contact Section -->
<div class="w3-container w3-white w3-padding-128" id="contact" align="center">
	<h3 class="w3-center">CONTACT US</h3>
	<p class="w3-center w3-large">For technical support, contact Patrick at pfrenett19@amherst.edu.</p>
	<p class="w3-center w3-large">For other business inquiries contact Seumas or Lucas at smacneil19@amherst.edu & lsheiner19@amherst.edu</p>
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-btn w3-padding w3-light-grey w3-hover-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>
 

</body>
</html>
