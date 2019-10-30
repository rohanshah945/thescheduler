<?php
include_once 'database.php';

if (isset($_POST['submitbtn'])) {
$class_ID = $_POST['class_ID'];
$status = $_POST['status'];
$classType = $_POST['classType'];
$capacity = $_POST['capacity'];
    
$sqlinsert = "INSERT INTO class(class_ID,status,classType,capacity)
              values('$class_ID','$status','$classType','$capacity')";

		$statement = mysql_query($sqlinsert) or die(mysql_error());
		echo "Classroom Added Successfully.";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Classroom</title>
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


	<form class="contact100-form validate-form" method="post" id="formFaculty" action="">
				<span class="contact100-form-title" style="text-align: right;">
					Add Classroom
				</span>

			<div class="wrap-input100 validate-input" data-validate="Classroom No is required">
					<span class="label-input100">Classroom No</span>
					<input class="input100" type="text" name="class_ID" placeholder="Enter Classroom No">
					<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Status</span>
				<div>
					<select class="selection-2" name="status">
						<option value=" " selected disabled hidden>Choose here</option>
						<option value="available"> Available</option>
        				<option value="uavailable"> Unavailable</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div> 

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Type</span>
				<div>
					<select class="selection-2" name="classType">
						<option value=" " selected disabled hidden>Choose here</option>
						<option value="classroom"> Classroom </option>
        				<option value="lab"> Lab </option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div> 

			<div class="wrap-input100 validate-input" data-validate="Capacity is required">
					<span class="label-input100">Capacity</span>
					<input class="input100" type="text" name="capacity" placeholder="Enter Classroom Capacity">
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