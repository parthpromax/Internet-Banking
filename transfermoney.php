<?php
session_start();
$accno1=$_SESSION['accountno'];
$accno2=$_POST['accno'];
if($accno1==$accno2)
header('Location:transfer.php?id=Please enter other\'s account no');
$amount=$_POST['amount'];
include('config.php');
$query1="SELECT * FROM `bal123@#%` WHERE AccountNo='$accno1'";
$result1 = mysql_query($query1)or die('Query "'.$query1.'" failed.'.mysql_error());
$row1 = mysql_fetch_array($result1);
$query2="SELECT * FROM `bal123@#%` WHERE AccountNo='$accno2'";
$result2 = mysql_query($query2)or die('Query "'.$query2.'" failed.'.mysql_error());
$row2 = mysql_fetch_array($result2);
if($row2['Username'])
{
if($row1['Balance']>=$amount)
{
$newbal1=$row1['Balance']-$amount;
$newbal2=$row2['Balance']+$amount;
$query3="update `bal123@#%` set balance='$newbal1' where AccountNo='$accno1'";
$result3=mysql_query($query3)or die('Query "'.$query3.'" failed.'.mysql_error());
$srkey1=$row1['SecretKey'];

$query4="update `bal123@#%` set balance='$newbal2' where AccountNo='$accno2'";
$result4=mysql_query($query4)or die('Query "'.$query4.'" failed.'.mysql_error());
$srkey2=$row2['SecretKey'];

date_default_timezone_set("Asia/Kolkata");
$timed=date("Y-m-d h:i:s");
$query5="INSERT INTO `detail231@#%` VALUES('$accno1','Debit','$amount','$newbal1','$timed','$srkey1')";
$query6="INSERT INTO `detail231@#%` VALUES('$accno2','Credit','$amount','$newbal2','$timed','$srkey2')";
$result5=mysql_query($query5)or die('Query "'.$query5.'" failed.'.mysql_error());
$result6=mysql_query($query6)or die('Query "'.$query6.'" failed.'.mysql_error());
if($result3 && $result4)
header('Location:transfer.php?id=Successfully transfered');
?>
<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>JPMorgan Chase & Co</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
</head>

<body id="www-url-cz">

<!-- Main -->
<div id="main" class="box">

    <!-- Header -->
    <div id="header">

        <!-- Logotyp -->
        <h1 id="logo">JPMorgan Chase & Co<span></span></h1>

    </div> <!-- /header -->

     

    <!-- Page (2 columns) -->
    <div id="page" class="box">

        <!-- Content -->
    <div id="content">

    </div>            
               
  
    </div> <!-- /page -->


    <!-- Footer -->
    <div id="footer">
        <p id="copyright">&copy; 2007 <a href="mailto:my@mail.com">My Name</a></p>
    </div> <!-- /footer -->

</div> <!-- /main -->
</body>
</html>
<?php
}
else
header('Location:transfer.php?id=Unsufficient Balance');
}
else
header('Location:transfer.php?id=Invalid Account no');
?>







