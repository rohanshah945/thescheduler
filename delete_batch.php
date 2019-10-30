<?php 
include_once 'database.php';
include_once 'session.php';

$batch_ID = $_REQUEST['id'];


if(isset($_REQUEST['id']))
{

$query= "delete FROM batch where batch_ID='$batch_ID'";
$result = mysql_query($query);

header('location:dashboard_admin.php?info=batch');
}


 ?>