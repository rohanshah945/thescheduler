<?php

/**
 * @author Kingster
 * @author SuyashBansal
 * @category SMS
 * @copyright 2015
 * @description Request this page with get or post params
 * @param uid = Way2SMS Username
 * @param pwd = Way2SMS Password
 * @param phone = Number to send to. Multiple Numbers separated by comma (,). 
 * @param msg = Your Message ( Upto 140 Chars)
 */

include_once 'database.php';

$email = $_REQUEST['email'];
$query = "SELECT * FROM faculty WHERE email = '$email' ";
$result = mysql_query($query);
$data = mysql_fetch_array($result);
extract($data);

$uid= "7874667734";
$pwd= "rslike";
$phone = $contactNumber;
$pswd = base64_decode($password);
$msg = "Dear, $facultyName.                                                       Your thescheduler Password is : $pswd";


include('way2sms-api.php');

if (isset($uid) && isset($pwd) && isset($phone) && isset($msg)) {
    $res = sendWay2SMS($uid, $pwd , $phone, $msg);
    if (is_array($res)) {
        echo $res[0]['result'] ? ' ' : ' ';
    	echo "<script> alert('Password is sent to your Mobile.'); window.location='login.php'; </script>";
    }
    else
        echo $res;
    exit;
}
