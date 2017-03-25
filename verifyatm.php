<?php
session_start();
include("config.php");
$uname=mysql_real_escape_string($_POST['uname']);
$pin=mysql_real_escape_string($_POST['pin']);
$query="SELECT * FROM `reg321@#%` WHERE username='$uname' AND pin='$pin'";
$result1=mysql_query($query)or die('Query "'.$query.'" failed.'.mysql_error());
$row = mysql_fetch_array($result1);
if($row['Username'] && $uname==$row['Username'])
{
$_SESSION['accountno']=$row['AccountNo'];
header('Location:withdrawal.php');
}
else
{
mysql_close($con);
if($uname=='' && $pin=='')
header('Location:atmbanking.php?id=Please Enter Username and PIN');
else if($uname=='')
header('Location:atmbanking.php?id=Please Enter Username');
else if($pin=='')
header('Location:atmbanking.php?id=Please Enter PIN');
else
header('Location:atmbanking.php?id=Invalid Username or PIN');
}
?>