<?php
session_start();
if(isset($_SESSION['accountno']))
{
$accno=$_SESSION['accountno'];
$amount=$_POST['amount'];
include('config.php');
$query="SELECT * FROM `bal123@#%` WHERE AccountNo='$accno'";
$result=mysql_query($query)or die('Query "'.$query.'" failed.'.mysql_error());
$row = mysql_fetch_array($result);
if($amount>$row['Balance'])
header('Location:withdrawal.php?id=Unsufficient Balance');
else
{
$newbal=$row['Balance']-$amount;
$query1="update `bal123@#%` set balance='$newbal' where AccountNo='$accno'";
$result1=mysql_query($query1)or die('Query "'.$query1.'" failed.'.mysql_error());
$srkey=$row['SecretKey'];
date_default_timezone_set("Asia/Kolkata");
$timed=date("Y-m-d h:i:s");
$query2="INSERT INTO `detail231@#%` VALUES('$accno','Debit','$amount','$newbal','$timed','$srkey')";
$result2=mysql_query($query2)or die('Query "'.$query2.'" failed.'.mysql_error());
if($result1)
header('Location:withdrawal.php?id=Successfully withdrawal. collect your Cash');
else
header('Location:withdrawal.php?id=Transaction Failed');
}
}
else
header('Location:atmbanking.php?id=Your session may be expired. You have to login first');
?>