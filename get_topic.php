<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<option value="">Select Topic</option>

<?php 
include_once 'database.php';
include_once 'session.php';


$selectquery = mysql_query("SELECT * FROM topic WHERE subject_ID='".$_POST["subject_ID"]."' AND topic_ID not in (SELECT topic_ID FROM log WHERE subject_ID='".$_POST["subject_ID"]."')");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $topic_ID;
echo "'>";
echo $topicName;
echo "</option>";
}
?>

</body>
</html>