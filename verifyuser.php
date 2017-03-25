<?php
session_start();
include('config.php');
$uname=mysql_real_escape_string($_POST['username']);
$upass=mysql_real_escape_string($_POST['password']);
$query="SELECT * FROM `reg321@#%` WHERE Username='$uname' AND Password='$upass'";
$result = mysql_query($query)or die('Query "'.$query.'" failed.'.mysql_error());
$row = mysql_fetch_array($result);
if($row['Username'])// && $row['Username']==$uname && $row['Password']==$upass)
{
$_SESSION['accountno']=$row['AccountNo'];
header('Location:accountsummary.php');
}
else
{
mysql_close($con);
if($uname=='' && $upass=='')
header('Location:internetbanking.php?id=Please Enter Username and Password');
else if($uname=='')
header('Location:internetbanking.php?id=Please Enter Username');
else if($upass=='')
header('Location:internetbanking.php?id=Please Enter Password');
else
header('Location:internetbanking.php?id=Invalid Username or Password');
}
?>