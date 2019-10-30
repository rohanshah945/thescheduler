<?php
include_once 'database.php';

$theory = 0;
$practical = 0;
$query = "SELECT * FROM subject WHERE semester_ID = 1";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result))
{
	extract($row);
	if ($sessionPerWeek == 4) {
		$theory += $sessionPerWeek;	 
	}
	else {
		$practical += $sessionPerWeek;	 	
	}
	
}
echo "Thoery : $theory";
echo "<br>";
echo "Practicals : $practical";
echo "<br>";
 
$query_avail = "SELECT * FROM timetable WHERE semester_ID = 1";
$statement_avail = mysql_query($query_avail);
$available = mysql_num_rows($statement_avail);
echo $available;

//subject-1
$query = "SELECT * FROM subject WHERE semester_ID = 1";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result))
{
	extract($row);
	$i = 1;
	echo "<br>$subjectName";
	for ($i=1; $i <= $sessionPerWeek ; $i++) { 
	echo "<br>$i";
	$day = rand(1,6);
	$lec = rand(1,5);
	check_avil($day,$lec,$subject_ID);
	}
	echo "<br>";
}

function check_avil($day,$lec,$subject)
{
	$query_chk = "SELECT * FROM timetable WHERE day_ID = $day AND subject_ID = '$subject'";
	$statement_chk = mysql_query($query_chk);
	if ($available = mysql_num_rows($statement_chk) >= 1) {
		echo "Not Available";
		$day = rand(1,6);
		$lec = rand(1,6);
		return check_avil($day,$lec,$subject);
	}

	echo "   $day    $lec";
	$query_f = "SELECT * FROM timetable WHERE day_ID = $day AND lecture_ID = $lec AND semester_ID = 1";
	$statement_f = mysql_query($query_f);
	$result_f = mysql_fetch_array($statement_f);
	extract($result_f);
	if ($subject_ID == '' OR $subject_ID == NULL) {
		echo " Available";
		echo "$day_ID";
		echo "$lecture_ID";
		$set_query = "UPDATE timetable SET subject_ID = '$subject' WHERE day_ID = $day AND lecture_ID = $lec AND semester_ID = 1" ;
		$set_result = mysql_query($set_query);
		echo " Done";
	}
	else
	{
	echo "Not Available";
	$day = rand(1,6);
	$lec = rand(1,6);
	return check_avil($day,$lec,$subject);
	}

}


//rand(min,max);
?> 