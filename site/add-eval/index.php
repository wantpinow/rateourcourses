<!DOCTYPE html>
<html>
	<title>RoC - Add Evaluation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript" src="departments.json"></script>
	<script type="text/javascript" src="courses.json"></script>
	<script type="text/javascript" src="allFaculty.json"></script>
	<script type="text/javascript" src="getdata.js"></script>
	<script type="text/JavaScript" src="selector.js"></script>
	
	<script type="text/javascript">
		function CheckColorsSemester(val){
		var element=document.getElementById('Semesterr');
		if(val=='')
			element.style.display='block';
		else  
			element.style.display='none';
		}
		
		function CheckColorsProf(val){
		var element=document.getElementById('Professor_Namee');
		var element2=document.getElementById('Professor_Name');
		if(val=="other")
			element.style.display='block';
		else  
			element.style.display='none';
		console.log(element.value);
		console.log(element2.value);
		}
	</script>
	
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
	  <a href=""><i class="fa fa-paper-plane-o"></i> ADD EVALUATION</a>
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



<div class="w3-container w3-white w3-padding-64 bgimg-1 w3-grayscale-min" id="about" align="center" >
	<form action="addingeval2.php" method="post" style="width:50%" class="w3-white w3-border-gray w3-round-large">

	<h2>Add a New Evaluation</h2>


	<fieldset>
		<legend><b>Course Information</b></legend>
		<p><b class="w3-col s4">Department :</b>
		<select name="Department" onchange="courseChange(this); facultyChange(this)" style="width:60%">
		<option value="empty">Select a Department</option>
		<option value="AMST">American Studies</option>
		<option value="ANTH">Anthropology</option>
		<option value="ARAB">Arabic</option>
		<option value="ARCH">Architectural Studies</option>
		<option value="ARHA">Art/Art History</option>
		<option value="ASLC">Asian Languages and Civilizations</option>
		<option value="ASTR">Astronomy</option>
		<option value="BCBP">Biochemistry/Biophysics</option>
		<option value="BIOL">Biology</option>
		<option value="BLST">Black Studies</option>
		<option value="CHEM">Chemistry</option>
		<option value="CHIN">Chinese</option>
		<option value="CLAS">Classics</option>
		<option value="COSC">Computer Science</option>
		<option value="ECON">Economics</option>
		<option value="ENGL">English</option>
		<option value="ENST">Enviromental Studies</option>
		<option value="EUST">European Studies</option>
		<option value="FAMS">Film and Media Studies</option>
		<option value="FREN">French</option>
		<option value="GEOL">Geology</option>
		<option value="GERM">German</option>
		<option value="GREE">Greek</option>
		<option value="HIST">History</option>
		<option value="JAPA">Japanese</option>
		<option value="LATI">Latin</option>
		<option value="LJST">Law, Jurisprudence, and Social Thought</option>
		<option value="MATH">Mathematics</option>
		<option value="MUSI">Music</option>
		<option value="NEUR">Neuroscience</option>
		<option value="PHIL">Philosophy</option>
		<option value="PHYS">Physics</option>
		<option value="POSC">Political Science</option>
		<option value="PSYC">Psychology</option>
		<option value="RELI">Religion</option>
		<option value="RUSS">Russian</option>
		<option value="SWAG">Sexuality, Women's and Gender Studies</option>
		<option value="SOCI">Sociology</option>
		<option value="SPAN">Spanish</option>
		<option value="STAT">Statistics</option>
		<option value="THDA">Theater and Dance</option>
		</select>
		</p>


<p><b class="w3-col s4">Course Name :</b>
  <select name="Number" id="Number"  style="width:60%">
    <option value="0">Select a Course</option>
  </select>
  <input type="text" name="Numberr" id="Numberr" class="other" style='display:none;'/>
</p>

<p><b class="w3-col s4">Professor Name :</b>
	<select name="Professor_Name" id="Professor_Name"  style="width:60%" onchange="CheckColorsProf(this.value);">
		<option value="0">Select a Professor</option>
	</select>
	<input type="text" name="Professor_Namee" id="Professor_Namee" class="other" style='display:none;'/>
</p>

<p><b class="w3-col s4">Semester :</b>
<select name="Semester" onchange="CheckColorsSemester(this.value);"  style="width:60%">
	<option value="S17">Spring 17</option>
	<option value="F16">Fall 16</option>
	<option value="S16">Spring 16</option>
	<option value="F15">Fall 15</option>
	<option value="S15">Spring 15</option>
	<option value="F14">Fall 14</option>
	<option value="S14">Spring 14</option>
	<option value="F13">Fall 13</option>
	<option value="S13">Spring 13</option>
	<option value="">Other</option>
</select>
<input type="text" name="Semesterr" id="Semesterr" class="other" style='display:none;'/>
</p>
</fieldset>



<fieldset class="Eval_Buttons">
    <legend><b>Enter Your Ratings</b></legend>
	<b class="w3-col s4">Interesting? : </b>
    <input type="radio" name="Interesting" id="Int1" value="1" /><label for="Int1">1</label>
    <input type="radio" name="Interesting" id="Int2" value="2" /><label for="Int2">2</label>
	<input type="radio" name="Interesting" id="Int3" value="3" /><label for="Int3">3</label>
	<input type="radio" name="Interesting" id="Int4" value="4" /><label for="Int4">4</label>
	<input type="radio" name="Interesting" id="Int5" value="5" /><label for="Int5">5</label></br>
	
	
	<b class="w3-col s4">Difficulty</b>
    <input type="radio" name="Difficulty" id="Dif1" value="1" /><label for="Dif1">1</label>
    <input type="radio" name="Difficulty" id="Dif2" value="2" /><label for="Dif2">2</label>
	<input type="radio" name="Difficulty" id="Dif3" value="3" /><label for="Dif3">3</label>
	<input type="radio" name="Difficulty" id="Dif4" value="4" /><label for="Dif4">4</label>
	<input type="radio" name="Difficulty" id="Dif5" value="5" /><label for="Dif5">5</label></br>
	
	
	<b class="w3-col s4">Workload : </b>
    <input type="radio" name="Workload" id="Wor1" value="1" /><label for="Wor1">1</label>
    <input type="radio" name="Workload" id="Wor2" value="2" /><label for="Wor2">2</label>
	<input type="radio" name="Workload" id="Wor3" value="3" /><label for="Wor3">3</label>
	<input type="radio" name="Workload" id="Wor4" value="4" /><label for="Wor4">4</label>
	<input type="radio" name="Workload" id="Wor5" value="5" /><label for="Wor5">5</label></br>
	
	
	<b class="w3-col s4">Professor Rating : </b>
    <input type="radio" name="Professor_Rating" id="Pro1" value="1" /><label for="Pro1">1</label>
    <input type="radio" name="Professor_Rating" id="Pro2" value="2" /><label for="Pro2">2</label>
	<input type="radio" name="Professor_Rating" id="Pro3" value="3" /><label for="Pro3">3</label>
	<input type="radio" name="Professor_Rating" id="Pro4" value="4" /><label for="Pro4">4</label>
	<input type="radio" name="Professor_Rating" id="Pro5" value="5" /><label for="Pro5">5</label></br>
	
	</br>1 = Least Interesting, Least Difficult, Least Work, Worst Professor</br>

</fieldset>
</br>
<p>Your Grade (Optional):
<select name="Grade">
	<option value="-">-</option>
	<option value="A+">A+</option>
	<option value="A">A</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
	<option value="B">B</option>
	<option value="B-">B-</option>
	<option value="C+">C+</option>
	<option value="C">C</option>
	<option value="C-">C-</option>
	<option value="D">D</option>
	<option value="F">F</option>
	<option value="Pass">Pass</option>
</select>
</p>

<p>
Comment (Optional):
</p>
<p>
<textarea name="Comment" size="30" value=" " rows="4" cols="60"> </textarea>
</p>

<p>
<input type="submit" name="submit" value="Send Evaluation" />
</p>

</br>

For any questions or technical inquiries, please contact pfrenett19@amherst.edu

</form>
</div>
</body>
</html>