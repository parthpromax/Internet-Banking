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
?>
    
</div> <!-- /title2 -->

    </div> <!-- /header -->

     <!-- Main menu (tabs) -->
     <div id="tabs" class="">

           <ul class="box">
                <li><a href="accountsummary.php">My Account<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="accountstmt.php">Account Statement<span class="tab-l"></span><span class="tab-r"></span></a></li> <!-- Active -->
                <li><a href="transfer.php">Transfer Money<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="onlinerech.php">Online recharge<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li id="active"><a href="account.php">Account Info<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="logout.php">Logout<span class="tab-l"></span><span class="tab-r"></span></a></li>
            </ul>
     </div> <!-- /tabs -->

    <!-- Page (2 columns) -->
    <div id="page" class="box">

        <!-- Content -->
    <div id="content">
<?php
echo "<br><h2><span>Account-Info of Account No : ".$accno."</span></h2>";
echo "<table border='1' style='border-collapse: collapse;border-color: silver;'>";
echo "<td> Salutation </td><td>".$row['Salutation']."</td></tr>";
echo "<tr><td> First Name </td><td>".$row['FirstName']."</td></tr>";
echo "<tr><td> Last Name </td><td>".$row['LastName']."</td></tr>";
echo "<tr><td> Date Of Birth </td><td>".$row['DateOfBirth']."</td></tr>";
echo "<tr><td> Email </td><td>".$row['Email']."</td></tr>";
echo "<tr><td> PAN No </td><td>".$row['PAN']."</td></tr>";
echo "<tr><td> Occupation </td><td>".$row['Occupation']."</td></tr>";
echo "<tr><td> Education </td><td>".$row['Education']."</td></tr>";
echo "<tr><td> Aadhar ID </td><td>".$row['AadharID']."</td></tr>";
echo "<tr><td> Gender </td><td>".$row['Gender']."</td></tr>";
echo "<tr><td> Marital Status </td><td>".$row['MaritalStatus']."</td></tr>";
echo "<tr><td> Mobile </td><td>".$row['Mobile']."</td></tr>";
echo "<tr><td> Your Username </td><td>".$row['Username']."</td></tr>";
echo "<tr><td> Your Password </td><td>".$row['Password']."</td></tr>";
echo "<tr><td> Your ATM PIN </td><td>".$row['PIN']."</td></tr>";
echo "<tr><td> Your Account No </td><td>".$row['AccountNo']."</td></tr>";
echo "<tr><td> Secret Question </td><td>".$row['Question']."</td></tr>";
echo "<tr><td> Answer </td><td>".$row['Answer']."</td></tr>";
echo "</table>";
mysql_close($con);
}
else
header('Location:internetbanking.php?id=Your session may be expired. You have to login first');
?>    </div>            
               
  
    </div> <!-- /page -->


    <!-- Footer -->
    <div id="footer">
      <p id="copyright">Copyright &copy; <?php echo date("Y") ?> JPMorgan Chase & Co | All Rights Reserved</p>
      </div> <!-- /footer -->

</div> <!-- /main -->
</body>
</html>
