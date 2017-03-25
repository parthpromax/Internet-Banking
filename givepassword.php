<?php
$accno=$_POST['accno'];
$q=$_POST['question'];
$ans=$_POST['answer'];
include('config.php');
$query="SELECT * FROM `reg321@#%` WHERE (AccountNo='$accno' || Username='$accno') && Question='$q' && Answer='$ans'";
$result = mysql_query($query)or die('Query "'.$query.'" failed.'.mysql_error());
$row = mysql_fetch_array($result);
if($row['Password'])
{
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
<?php
//echo "<br><br>Your Password : ".$row['Password']."<br><br>";
header('Location:internetbanking.php?id=Your Password : '.$row['Password'].' <br>Now you can login');
?>
    </div>            
               
  
    </div> <!-- /page -->


    <!-- Footer -->
    <div id="footer">
   <p id="copyright">Copyright &copy; <?php echo date("Y") ?> JPMorgan Chase & Co | All Rights Reserved</p>
 </div> <!-- /footer --> </div> <!-- /footer -->

</div> <!-- /main -->
</body>
</html>
<?php
}
else
header('Location:forgotpassword.php?id=Please enter correct details');

?>







