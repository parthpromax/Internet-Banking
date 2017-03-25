<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>JPMorgan Chase & Co</title>
    <link rel="shortcut icon" href="images/icon.png" />
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
#tabs{padding-top:6px;}
	#tabs ul li{padding-left: 34px;}

	</style>
	</head>

<body id="www-url-cz">

<!-- Main -->
<div id="main" class="box">

    <!-- Header -->
    <div id="header">
                
        <!-- Logotyp -->
        <h1 id="logo">JPMorgan Chase ATM<span></span></h1>
		<a href="register.php" id="nu"><b>New User?</b></a>

    </div> <!-- /header -->

     <div id="tabs" class="">

           <ul class="box">
                <li><a href="internetbanking.php">Internet Banking<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li id="active"><a href="atmbanking.php">ATM Banking<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="aboutus.php">About Us<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="contactus.php">Contact Us<span class="tab-l"></span><span class="tab-r"></span></a></li>
           </ul>
     </div>

	 <!-- Page (2 columns) -->
    <div id="page" class="box">

        <!-- Content -->
    <div id="content">

<?php
if(isset($_GET['id']))
echo "<br><h4>".$_GET['id']."</h4>";
?>		

<form action="verifyatm.php" method="post">
<table>
	<tr>
		<td>Username :  </td>
		<td><input type="text" name="uname"/></td>
	</tr>
	<tr>
		<td>PIN  :  </td>
		<td><input type="password" name="pin"/></td>
	</tr>
	<tr/>
	<tr>
		<td/>
		<td><input type="submit" value="Login"/></td>
	</tr>
	<tr/>
	<tr/>
	<tr/>
	<tr>
		<td/>
		<td><a href="forgotpin.php">forgot PIN ?</a></td>
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
