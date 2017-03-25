<?php
session_start();
if(isset($_SESSION['accountno']))
{
$accno=$_SESSION['accountno'];
$oldpin=$_POST['oldpin'];
$newpin=$_POST['newpin'];
$renewpin=$_POST['renewpin'];
if($newpin==$renewpin)
{
include('config.php');
$query="SELECT * FROM `reg321@#%` WHERE AccountNo='$accno'";
$result=mysql_query($query)or die('Query "'.$query.'" failed.'.mysql_error());
$row = mysql_fetch_array($result);
if($oldpin==$row['PIN'])
{
$query1="update `reg321@#%` set PIN='$newpin' where AccountNo='$accno'";
$result1=mysql_query($query1)or die('Query "'.$query1.'" failed.'.mysql_error());
if($result1)
header('Location:changepin.php?id=Your PIN Changed Successfully');
}
else
header('Location:changepin.php?id=Please Enter Correct PIN');
}
else
header('Location:changepin.php?id=Please Enter Same PIN');
}
else
header('Location:atmbanking.php?id=Your session may be expired. You have to login first');
?>