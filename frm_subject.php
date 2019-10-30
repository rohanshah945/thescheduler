<?php
include_once 'database.php';

function fetchsem()
{
$selectquery = mysql_query("SELECT semester_ID FROM semester");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $semester_ID;
echo "'> Semester ";
echo $semester_ID;
echo "</option>";
}
}

function fetchfaculty()
{
$selectquery = mysql_query("SELECT faculty_ID,facultyName FROM faculty");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $faculty_ID;
echo "'>";
echo $facultyName;
echo "</option>";
}
}


if (isset($_POST['submitbtn'])) {
$subject_ID = $_POST['subject_ID'];
$subjectName = $_POST['subjectName'];
$semester_ID = $_POST['semester_ID'];
$faculty_ID = $_POST['faculty_ID'];
$sessionPerWeek = $_POST['sessionPerWeek'];
    
$sqlinsert = "INSERT INTO subject(subject_ID,subjectName,semester_ID,faculty_ID,sessionPerWeek)
              values('$subject_ID','$subjectName','$semester_ID','$faculty_ID','$sessionPerWeek')";

		$statement = mysql_query($sqlinsert) or die(mysql_error());
		echo "Semester Added Successfully.";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Subject</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/checkbox.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	  <link rel="stylesheet" type="text/css" href="css/sidenav.css">
</head>
<body>

	
<!--div class="container-contact100">


	<div style="top: 0px; width: 100%; position: absolute fixed;">
	<span style="font-size:50px;color: white;cursor:pointer;float: right;" onclick="openNav()">&#9776;</span>
	<a href="" style="font-family: Edwardian Script ITC; font-size: 60px; color: whitesmoke	;"> The Scheduler</a>
	<div style="float:right; margin-right: 10px;">
	
 	</div>
	</div>

	<div class="wrap-contact100" style="width: 70%;"-->

	<form class="contact100-form validate-form" method="post" action="">
				<span class="contact100-form-title" style="text-align: right;">
					Add Subject
				</span>

			<div class="wrap-input100 validate-input" data-validate="Subject ID is required">
					<span class="label-input100">Subject ID</span>
					<input class="input100" type="text"  name="subject_ID" placeholder="Enter Subject ID">
					<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate="Subject Name is required">
					<span class="label-input100">Subject Name</span>
					<input class="input100" type="text"  name="subjectName" placeholder="Enter Subject Name">
					<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 input100-select">
			<span class="label-input100">Semester</span>
			<div>
				<select class="selection-2" name="semester_ID">
					<option value=" " selected disabled hidden>Select Semester</option>
					<?php echo fetchsem() ?>
				</select>
			</div>
			<span class="focus-input100"></span>
			</div> 

			<div class="wrap-input100 input100-select">
			<span class="label-input100">Faculty ID</span>
			<div>
				<select class="selection-2" name="faculty_ID">
					<option value=" " selected disabled hidden>Select Faculty</option>
					<?php echo fetchfaculty() ?>
				</select>
			</div>
			<span class="focus-input100"></span>
			</div> 

			<div class="wrap-input100">
					<span class="label-input100">Session Per Week</span>
					<input class="input100" type="text" name="sessionPerWeek" placeholder="Enter Session Per Week">
					<span class="focus-input100"></span>
			</div>


				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" value="Submit" name="submitbtn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>

				<div id="dropDownSelect1"></div>


	</form>

	  <!--div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="show_faculty.php">Faculty</a>
  <a href="show_subject.php">Subject</a>
  <a href="show_semester.php">Semester</a>
  <a href="show_class.php">Class</a>
  <a href="show_batch">Batch</a>
  <a href="show_report">Report</a>
  <a href="generate_timetable.php">Timetable</a>
  <a href="logout.php">Logout</a>
  </div>

	</div-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/jquery.validate.min.js"></script>
    <script src="vendor/animsition/js/jquery.validation.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	<script src="vendor/jquery/sidenav.js"></script>
<!--/div>
<div class="wrap-contact100" >Designed & Developed by HeRo.</div-->
</body>
</html>