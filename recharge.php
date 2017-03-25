<?php
session_start();
$accno=$_SESSION['accountno'];
$amount=$_POST['amount'];
include('config.php');
$query="SELECT * FROM `bal123@#%` WHERE AccountNo='$accno'";
$result = mysql_query($query)or die('Query "'.$query.'" failed.'.mysql_error());
$row = mysql_fetch_array($result);
if($row['Balance']>=$amount)
{
$newbal=$row['Balance']-$amount;
$query2="update `bal123@#%` set balance='$newbal' where AccountNo='$accno'";
$result2=mysql_query($query2)or die('Query "'.$query2.'" failed.'.mysql_error());
$srkey=$row['SecretKey'];

date_default_timezone_set("Asia/Kolkata");
$timed=date("Y-m-d h:i:s");
$query3="INSERT INTO `detail231@#%` VALUES('$accno','Debit','$amount','$newbal','$timed','$srkey')";
$result3=mysql_query($query3)or die('Query "'.$query3.'" failed.'.mysql_error());
if($result2)
header('Location:onlinerech.php?id=Your mobile is successfully recharged');
?>
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
?>







