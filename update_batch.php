<?php 
include_once 'database.php';
include_once 'session.php';

$batch_ID = $_REQUEST['id'];


if(isset($_REQUEST['id']))
{
$query= "select * FROM batch where batch_ID='$batch_ID'";
$result = mysql_query($query);
$data = mysql_fetch_array($result);
extract($data);
}

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
$batchLetter = $_POST['batchLetter'];
$studentCapacity = $_POST['studentCapacity'];
    
$sqlinsert = "UPDATE batch
			  set batchLetter='$batchLetter',
			   studentCapacity= '$studentCapacity'
			  WHERE batch_ID='$batch_ID'";

		$statement = mysql_query($sqlinsert) or die(mysql_error());
		echo "Batch Updated Successfully.";
		//header('location:dashboard_admin.php?info=batch');
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
 

	<form class="contact100-form validate-form" method="post" action="">
		<span class="contact100-form-title" style="text-align: right;">
			Update Batch
		</span>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Semester</span>
				<div>
					<select class="selection-2" name="semester_ID" disabled>
						<option value="<?php echo $semester_ID; ?>" selected disabled><?php echo $semester_ID; ?></option>
						<!--?php echo fetch() ?-->
					</select>
				</div>
				<span class="focus-input100"></span>
				</div> 

				<div class="wrap-input100 validate-input" data-validate="Batch Letter is required">
					<span class="label-input100">Batch Letter</span>
					<input class="input100" type="text" name="batchLetter" value="<?php echo $batchLetter; ?>" placeholder="Enter Batch Letter">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Capacity is required">
					<span class="label-input100">Capacity</span>
					<input class="input100" type="text" name="studentCapacity" value="<?php echo $studentCapacity; ?>" placeholder="Enter Batch Capacity">
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