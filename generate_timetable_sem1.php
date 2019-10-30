<?php 
include_once 'database.php';

	
	function get_lec()
	{
	$query = "SELECT * from day WHERE day_ID  IN (SELECT DISTINCT day_ID FROM timetable WHERE semester_ID = 1)";
	$statement = mysql_query($query);
	echo "<table class='table table-striped' >";
	echo "<tr class='table-active'>";
	echo "<td>";
	echo "</td>";
	while($data = mysql_fetch_array($statement)) {
	extract($data);
    echo "<th>$day</th>";
	}
	echo "</tr>";

    $query_d = "SELECT * from lecture WHERE lecture_ID IN (SELECT DISTINCT lecture_ID FROM timetable WHERE semester_ID = 1)";
	$statement_d = mysql_query($query_d);
	while($data_d = mysql_fetch_array($statement_d))
    {
		extract($data_d);
		echo "<tr>";
		echo "<th>Lecture $lecture_ID ($startTime-$endTime)</th>";
		get_day($lecture_ID);
		echo "</tr>";
    }
    echo "</table>";
}

    function get_day($lecture_ID)
    {
    	$query_d = "SELECT DISTINCT day_ID from timetable WHERE lecture_ID = $lecture_ID AND semester_ID = 1";
		$statement_d = mysql_query($query_d);
		while($data_d = mysql_fetch_array($statement_d))
    	{
    		extract($data_d);
    		get_subject($day_ID,$lecture_ID);
    	}
	}

	function get_subject($day_ID,$lecture_ID)
	{
$query_d = "SELECT subjectName from subject WHERE subject_ID IN (SELECT subject_ID FROM timetable WHERE day_ID = $day_ID AND lecture_ID = $lecture_ID)";
		$statement_d = mysql_query($query_d);
		if ($data_d = mysql_fetch_array($statement_d)) {
			extract($data_d);	
			echo "<td>$subjectName</td>";
		}
		else
		{
			echo "<td></td>";
		}
		
		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Timetable Sem 1</title>
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

<span class="contact100-form-title" style="text-align: right;font-size: 29px;">
          Semester 1 
</span>
		
		<?php get_lec(); ?>
</body>
</html>