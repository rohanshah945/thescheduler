<?php 
include_once 'database.php';
include_once 'session.php';

$email = $_SESSION['email'];


if(isset($_REQUEST['id']))
{
$query= "select * FROM faculty where email='$email'";
$result = mysql_query($query);
$data = mysql_fetch_array($result);
extract($data);
}

if (isset($_POST['submitbtn'])) {

	$oldpassword = $_POST['oldpassword'];
	$newpassword = $_POST['newpassword'];
	$hashed_newpassword = base64_encode($newpassword);
	$hashed_oldpassword = base64_encode($oldpassword);

	//echo $hashed_oldpassword;
	//echo "<p>$password</p>";
	
	if($hashed_oldpassword==$password){
    
		$sqlinsert = "UPDATE faculty
			  set password='$hashed_password'
			  WHERE email ='$email'";

		$statement = mysql_query($sqlinsert) or die(mysql_error());
		echo '<script>';
		echo 'alert(Password Updated Successfully.);';
		echo '<script>';
		header('location:dashboard_faculty.php?info=info');
	}
	else {
		echo '<script>';
		echo 'alert(Invalid Old Password.);';
		echo '<script>';
	}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Update Batch </title>
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
 

	<form class="contact100-form validate-form" method="post" action="" id="myForm">
		<span class="contact100-form-title" style="text-align: right;">
			Update Password
		</span>

			<div class="wrap-input100 validate-input" data-validate="Password is required">
					
					<span class="label-input100">Old Password</span>
					<input class="input100" type="password" name="oldpassword" id="password" placeholder="Enter Password" required>
					
					<span class="focus-input100"></span>
				</div>

			
			<div class="wrap-input100 validate-input" data-validate="Password is required">
			<label for="newpassword">
					<span class="label-input100">New Password</span></label>
					<input class="input100" type="password" name="newpassword" id="newpassword" placeholder="Enter Password" required>
					<span class="focus-input100"></span>
				</div>

				<script type="text/javascript">
				function pswdchk()
				{
					var pswd = $('#newpassword').val();
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
				<label for="confirmPassword">
					<span class="label-input100">Confirm Password</span></label>
					<input class="input100" type="password" name="confirmPassword" onkeyup='pswdchk();' id="confirmPassword" placeholder="Enter Password" required>
					<span class="focus-input100"></span>
					<p id="pswderr" style="color: red"></p>
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
 </body>
 </html>