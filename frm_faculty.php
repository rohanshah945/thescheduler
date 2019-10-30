<?php
include_once 'database.php';
include_once 'validation.php';

$form_errors = array();
$result = "";
if (isset($_POST['signupbtn'])) {
    //Fields that requires checking for minimum length
    $fields_to_check_length = array('facultyId' => 4, 'password' => 6);

    //call the function to check minimum required length and merge the return data into form_error array
    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));

    
	if(empty($form_errors)){
		$facultyId = $_POST['facultyId'];
		$facultyName = $_POST['facultyName'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$contactNumber = $_POST['contactNumber'];
		$address = $_POST['address'];
		$facultyType = $_POST['facultyType'];
		$inTime = $_POST['inTime'];
		$outTime = $_POST['outTime'];
		$dateOfJoin = $_POST['dateOfJoin'];
		//hashing the password
        $hashed_password = base64_encode($password);

		
		$sqlinsert = "INSERT INTO faculty(faculty_ID,facultyName,password,email,gender,contactNumber,address,facultyType,inTime,outTime,dateOfJoin,signupDT)
		 			  values('$facultyId','$facultyName','$hashed_password','$email','$gender','$contactNumber','$address','$facultyType','$inTime','$outTime','$dateOfJoin',now())";

		$statement = mysql_query($sqlinsert) or die(mysql_error());
		echo "<script>";
		echo "alert('Registration Successfully.')";
		echo "</script>";
		}
        else{
            $result = "<p style='colour:red;'> An Error Occurred:".mysql_error()." </p>";    
        }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
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
	  <!--bhAVIK-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <!--bhAVIK-->
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
					Add Faculty
				</span>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Faculty ID</span>
					<input class="input100" type="text" name="facultyId" size="5" maxlength="5" style="text-transform:uppercase" placeholder="Enter Faculty ID" data-validate="Faculty ID is required" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Faculty Name</span>
					<input class="input100" type="text" name="facultyName" placeholder="Enter Faculty Name" required>
					<span class="focus-input100"></span>
				</div>
           	
				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="password" id="password" placeholder="Enter Password" required>
					
					<span class="focus-input100"></span>
				</div>

				<script type="text/javascript">
				function pswdchk()
				{
					var pswd = $('#password').val();
					var cnpswd = $('#confirmPassword').val();
					if (pswd != cnpswd)
					{
						$('#pswderr').html("Password and Confirm Password doesn't Match");
						//alert("password doesnt match");	
					}
					else
					{
						$('#pswderr').html("");
						//alert("password doesnt match");	
					}
					
				}				
				</script>
				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">Confirm Password</span>
					<input class="input100" type="password" name="confirmPassword" onkeyup='pswdchk();' id="confirmPassword" placeholder="Enter Password" required>
					<span class="focus-input100"></span>
					<p id="pswderr" style="color: red"></p>
				</div>

				<div class="wrap-input100 input100-select">
				<span class="label-input100">Gender</span>
				<div>
					<select class="selection-2" name="gender" required>
						<option value=" " selected disabled hidden>Select Gender</option>
						<option value="male">Male</option>
  						<option value="female">Female</option>
					</select>
				</div>
				<span class="focus-input100"></span>
				</div> 

          
           		<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="email" name="email" placeholder="Enter your email addess" required>
					<span class="focus-input100"></span>
				</div>

           		<div class="wrap-input100 validate-input" data-validate="Contact Number is required">
					<span class="label-input100">Contact Number</span>
					<input class="input100" type="number" maxlength="10" minlength="10" name="contactNumber" placeholder="Enter Contact Number" required>
					<span class="focus-input100"></span>
				</div> 
           
           		<div class="wrap-input100">
					<span class="label-input100">Address</span>
					<textarea class="input100" name="address" placeholder="Enter Address"></textarea>
					<span class="focus-input100"></span>
				</div>
 
 				<!--div class="wrap-input100">
					<span class="label-input100">Avtar</span>
					<input  class="input100" type="file" name="avtar" id="avtar">
					<span class="focus-input100"></span>
				</div-->

				<div class="wrap-input100 input100-select">
				<span class="label-input100">Fculty Type</span>
				<div>
					<select class="selection-2" name="facultyType" required>
						<option value="" selected disabled hidden>Select Faculty Type</option>
						<option value="core">Core Faculty</option>
  						<option value="visiting">Visiting Faculty</option>
					</select>
				</div>

				
				<div class="wrap-input100">
					<span class="label-input100">In Time</span>
					<input class="input100" type="time" name="inTime" required>
					<span class="focus-input100"></span>
				</div>
            
            	<div class="wrap-input100">
					<span class="label-input100">Out Time</span>
					<input class="input100" type="time" name="outTime" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<span class="label-input100">Date of Join</span>
					<input class="input100" type="date" name="dateOfJoin" required>
					<span class="focus-input100"></span>
				</div>
            
           
            
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit" value="Signup" name="signupbtn" id="signupbtn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>

				<div id="dropDownSelect1"></div>
		</div>

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