<?php
include_once 'database.php';
include_once 'session.php';

$email = $_SESSION['email'];
$query = "SELECT * FROM faculty WHERE email='$email'";
$result = mysql_query($query);
$data = mysql_fetch_array($result);
extract($data);
$_SESSION['id']=$faculty_ID;

if(isset($_SESSION['id'])) {

function fetchsubject()
{
$selectquery = mysql_query("SELECT subjectName,subject_ID FROM subject WHERE faculty_ID ='".$_SESSION['id']."'");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $subject_ID;
echo "'>";
echo $subjectName;
echo "</option>";
}
}
    
function fetchsemester()
{
$selectquery = mysql_query("SELECT DISTINCT semester_ID FROM subject WHERE faculty_ID ='".$_SESSION['id']."'");
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

function fetchclass()
{
$selectquery = mysql_query("SELECT class_ID,classType FROM class where status = 'available'");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $class_ID;
if ($classType == "classroom") {
echo "'> Classroom ";  
} else {
echo "'> Lab ";  
}
echo $class_ID;
echo "</option>";
}
}       

}

if (isset($_POST['submitbtn'])) {
$faculty_ID = $_SESSION['id'];
$semester_ID = $_POST['semester_ID'];
$batchLetter = $_POST['batch_ID'];
$subject_ID = $_POST['subject_ID'];
$topic_ID = $_POST['topic_ID'];
$class_ID = $_POST['class_ID'];
    
$sqlinsert = "INSERT INTO log(faculty_ID,semester_ID,batchLetter,subject_ID,topic_ID,class_ID,dateAndTime)
              values('$faculty_ID','$semester_ID','$batchLetter','$subject_ID','$topic_ID','$class_ID',now())";

		$statement = mysql_query($sqlinsert) or die(mysql_error());
		echo "Report Submitted Successfully.";
    header("location: faculty_dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Submit Report</title>
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

     <script type="text/javascript">
          function get_batch(val)
          {
              $.ajax({
              type: "POST",
              url: "get_batch.php",
              data: 'semester_ID='+val,
              success: function(data){
                $("#batch-list").html(data);
              }
              });
          }


          function get_topic(val)
          {
              $.ajax({
              type: "POST",
              url: "get_topic.php",
              data: 'subject_ID='+val,
              success: function(data){
                $("#topic-list").html(data);
              }
              });
          }
        </script>

	
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
					Report Form
				</span>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Semester</span>
				<div>
					<select class="selection-2" name="semester_ID" id="semester-list" onchange="get_batch(this.value);">
						<option value=" " selected disabled hidden>Choose Semester</option>
						<?php echo fetchsemester(); ?>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div> 

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Batch</span>
				<div>
					<select class="selection-2"  name="batch_ID" id="batch-list">
						<option value=" " selected disabled hidden>Select Batch</option>
						<?php echo fetchsubject(); ?>					
					</select>
				</div>
				<span class="focus-input100"></span>
			</div> 

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Subject</span>
				<div>
					<select class="selection-2"  name="subject_ID" id="subject-list" onchange="get_topic(this.value);">
						<option value=" " selected disabled hidden>Select Subject</option>
						<?php echo fetchsubject(); ?>					
					</select>
				</div>
				<span class="focus-input100"></span>
			</div> 

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Topic</span>
				<div>
					<select class="selection-2" name="topic_ID" id="topic-list">
						<option value=" " selected disabled hidden>Select Topic</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">Classroom/Lab</span>
				<div>
					<select class="selection-2" name="class_ID" id="class-list">
						<option value=" " selected disabled hidden>Select Classroom/Lab</option>
						<?php echo fetchclass(); ?>
					</select>
				</div>
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
  <a href="frm_report.php">Submit Report</a>
  <a href="show_reportf.php">View Report</a>
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