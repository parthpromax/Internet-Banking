<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>JPMorgan Chase & Co</title>
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
	padding-left: 25px;
	padding-top: 10px;
	}
	a
	{
	text-decoration:none;
	color:rgba(360,0,0, 1);
	font-family: "georgia",serif;
    font-size: 16px;
	}
	#tabs{padding-top:6px;}
	#content
{
height: 315px;
padding-top: 10px;
padding-left: 25px;
}
#ab
	{
	text-decoration:none;
	color:#95D6DB;
	font-family: "georgia",serif;
    font-size: 17px;
	position: absolute;
top: 80px;
left: 625px;
margin: 0;
}
#ib
	{
	text-decoration:none;
	color:#95D6DB;
	font-family: "georgia",serif;
    font-size: 17px;
	position: absolute;
top: 80px;
left: 450px;
margin: 0;
}
#tabs ul li{padding-left: 34px;}
	</style>
	</head>

<body id="www-url-cz">

<!-- Main -->
<div id="main" class="box">

    <!-- Header -->
    <div id="header">
                
        <!-- Logotyp -->
        <h1 id="logo">JPMorgan Chase & Co<span></span></h1>
		<a href="register.php" id="nu"><b>New User?</b></a>

    </div> <!-- /header -->
     
		<div id="tabs" class="">
<center>
           <ul class="box">
                <li id="active"><a href="internetbanking.php">Internet Banking<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="atmbanking.php">ATM Banking<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="aboutus.php">About Us<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="contactus.php">Contact Us<span class="tab-l"></span><span class="tab-r"></span></a></li>
           </ul>
</center>     </div>
  
  <!-- Page (2 columns) -->
    <div id="page" class="box">

        <!-- Content -->
    <div id="content">
	<?php
if(isset($_GET['id']))
echo "<br><h4>".$_GET['id']."</h4>";
?>
<form action="verifyuser.php" method="post">

<table>
	
		<td>User ID  :  </td>
		<td><input type="text" name="username"/></td>
	</tr>
	<tr>
		<td>Password  :  </td>
		<td><input type="password" name="password"/></td>
	</tr>
	
	<tr>
		<td/>
		<td>
		<input type="submit" value="Login">
		<!--input type="submit" class="btnLogin" value="" name="btnlogin"/-->
		</td>
	</tr>
	<tr>
		<td/>
		<td><a href="forgotpassword.php">forgot password ?</a></td>
	</tr>
	
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
