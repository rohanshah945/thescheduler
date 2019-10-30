<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<option value="">Select Batch</option>

<?php 
include_once 'database.php';
include_once 'session.php';

$selectquery = mysql_query("SELECT * FROM batch WHERE semester_ID='".$_POST["semester_ID"]."'");
while( $row = mysql_fetch_array( $selectquery ) )
{
extract($row);
echo "<option";
echo " value='";
echo $batchLetter;
echo "'>";
echo $batchLetter;
echo "</option>";
}
?>

</body>
</html>