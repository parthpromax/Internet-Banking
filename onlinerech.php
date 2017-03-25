<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>Dashboard ::. JPMorgan Chase & Co</title>
  <link rel="shortcut icon" href="images/icon.png" />
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
	<style>
	table
	{
	border:none;
	}
	td
	{
	border:none;
	}
	#content
	{
	height: 325px;
	padding-top: 15px;
	}
	</style>
</head>

<body id="www-url-cz">

<!-- Main -->
<div id="main" class="box">

    <!-- Header -->
    <div id="header">

        <!-- Logotyp -->
        <h1 id="logo">JPMorgan Chase & Co<span></span></h1>
    <div id="title1"> <!-- /header -->

<?php
session_start();
if(isset($_SESSION['accountno']))
{
$accno=$_SESSION['accountno'];
include('config.php');
$query="SELECT * FROM `bal123@#%` WHERE AccountNo='$accno'";
$result = mysql_query($query)or die('Query "'.$query.'" failed.'.mysql_error());
$row = mysql_fetch_array($result);
echo "<br>Last access time : ".$row['LastAccess'];
$query="SELECT * FROM `reg321@#%` WHERE AccountNo='$accno'";
$result=mysql_query($query);
$row = mysql_fetch_array($result);
echo "</div><div id=\"title2\">";
echo "welcome , ".$row['Salutation'].". ".$row['FirstName']." ".$row['LastName'];
}
else
header('Location:internetbanking.php?id=Your session may be expired. You have to login first');
?>
    
</div> <!-- /title2 -->

	</div> <!-- /header -->

	<!-- Main menu (tabs) -->
     <div id="tabs" class="">

           <ul class="box">
                <li><a href="accountsummary.php">My Account<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="accountstmt.php">Account Statement<span class="tab-l"></span><span class="tab-r"></span></a></li> <!-- Active -->
                <li><a href="transfer.php">Transfer Money<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li id="active"><a href="onlinerech.php">Online recharge<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="account.php">Account Info<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="logout.php">Logout<span class="tab-l"></span><span class="tab-r"></span></a></li>
            </ul>
     </div> <!-- /tabs -->

    <!-- Page (2 columns) -->
    <div id="page" class="box">

        <!-- Content -->
    <div id="content">
<?php
if(isset($_GET['id']))
echo "<br><strong>".$_GET['id']."</strong>";
?>
<form action="recharge.php" method="post">
<table>
<tr>
<td>
Enter Prepaid Mobile Number : </td><td><input type="numeric" name="mobno"></td></tr><tr><td> 
Select Your Operator : </td><td>
<select>
<option>- Select -</option>
<option>Aircel</option>
<option>AirTel</option>
<option>BSNL</option>
<option>Idea</option>
<option>MTS</option>
<option>Reliance CDMA</option>
<option>Reliance GSM</option>
<option>Tata Docomo CDMA</option>
<option>Tata Docomo GSM</option>
<option>Uninor</option>
<option>Videocon</option>
<option>Virgin CDMA</option>
<option>Virgin GSM</option>
<option>Vodafone</option>
</select>
</td></tr><tr><td> 
Enter Recharge Amount : </td><td><input type="numeric" name="amount"></td></tr><tr><td>
Select Recharge type : </td><td><input type="radio" value="topup">Topup</td></tr><tr>
<td/><td><input type="radio" value="special">Special Recharge</td></tr><tr>
<td/><td><input type="submit" value="Proceed"></td></tr>
</table>
</form>
</div>            
    </div> <!-- /page -->


    <!-- Footer -->
    <div id="footer">
       <p id="copyright">Copyright &copy; <?php echo date("Y") ?> JPMorgan Chase & Co | All Rights Reserved</p>
     </div> <!-- /footer -->

</div> <!-- /main -->
</body>
</html>
