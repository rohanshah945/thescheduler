<?php
include_once 'database.php';

function fetch()
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

if (isset($_POST['submitbtn'])) {
$semester_ID = $_POST['semester_ID'];
$batchLetter = $_POST['batchLetter'];
$studentCapacity = $_POST['studentCapacity'];
    
$sqlinsert = "INSERT INTO batch(batchLetter,semester_ID,studentCapacity)
              values('$batchLetter','$semester_ID','$studentCapacity')";

		$statement = mysql_query($sqlinsert) or die(mysql_error());
		echo "Batch Added Successfully.";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Batch</title>
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
	<link rel="stylesheet" type="text/css" href="css/w3.css">
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
			Add Batch
		</span>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Semester</span>
				<div>
					<select class="selection-2" name="semester_ID">
						<option value=" " selected disabled hidden>Choose here</option>
						<?php echo fetch() ?>
					</select>
				</div>
				<span class="focus-input100"></span>
				</div> 

				<div class="wrap-input100 validate-input" data-validate="Batch Letter is required">
					<span class="label-input100">Batch Letter</span>
					<input class="input100" type="text" name="batchLetter" placeholder="Enter Batch Letter">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Capacity is required">
					<span class="label-input100">Capacity</span>
					<input class="input100" type="text" name="studentCapacity" placeholder="Enter Batch Capacity">
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
  <a href="#">Faculty</a>
  <a href="#">Subject</a>
  <a href="#">Semester</a>
  <a href="#">Class</a>
  <a href="#">Batch</a>
  <a href="#">Report</a>
  <a href="#">Timetable</a>
  <a href="#">Logout</a>
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