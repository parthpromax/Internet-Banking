<?php
session_start();
include("config.php");
$accno=$_SESSION['accountno'];
date_default_timezone_set("Asia/Kolkata");
$timed=date("Y-m-d h:i:s");
$query="update `bal123@#%` set LastAccess='$timed' where AccountNo='$accno'";
$result=mysql_query($query)or die('Query "'.$query1.'" failed.'.mysql_error());
unset($_SESSION['accountno']);
header('Location:internetbanking.php?id=You are Successfully Logout');
?>