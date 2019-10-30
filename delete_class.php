<?php 
include_once 'database.php';
include_once 'session.php';

$class_ID = $_REQUEST['id'];


if(isset($_REQUEST['id']))
{
$query= "DELETE FROM class WHERE class_ID='$class_ID'";
$result = mysql_query($query);
header('location:dashboard_admin.php?info=class');
}


 ?>