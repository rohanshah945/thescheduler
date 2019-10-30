<?php 
include_once 'database.php';
include_once 'session.php';

$faculty_ID = $_REQUEST['id'];


if(isset($_REQUEST['id']))
{

$query= "delete FROM class where faculty_ID='$faculty_ID'";
$result = mysql_query($query);

header('location:dashboard_admin.php?info=faculty');
}


 ?>