<?php 

	header('Content-Type: application/json');

	$mysqli = new mysqli('localhost','root','','thescheduler');

	$query = sprintf("SELECT subject_ID,semester_ID FROM subject WHERE semester_ID='5'");

	$result = $mysqli->query($query);

	$data = array();
	foreach ($result as $row) {
		$data[] = $row;
	}

	$result->close();

	$mysqli->close();

	print json_encode($data);
?>