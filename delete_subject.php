<?php 
include_once 'database.php';
include_once 'session.php';

$subject_ID = $_REQUEST['id'];


if(isset($_REQUEST['id']))
{

$query= "delete FROM class where subject_ID='$subject_ID'";
$result = mysql_query($query);

header('location:dashboard_admin.php?info=subject');
}


 ?>