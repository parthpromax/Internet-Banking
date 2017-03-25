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
	padding-left: 25px;
	padding-top: 10px;
	}
	#tabs{padding-top:6px;}
	#content
{
height: 315px;
padding-top: 10px;
padding-left: 25px;
}
a
	{
	text-decoration:none;
	color:rgba(360,0,0, 1);
	font-family: "georgia",serif;
    font-size: 16px;
	}
	#tabs ul li{padding-left: 34px;}
#bt{margin-left:307px;}
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

           <ul class="box">
            <li id="active"><a href="internetbanking.php">Internet Banking<span class="tab-l"></span><span class="tab-r"></span></a></li>
                <li><a href="atmbanking.php">ATM Banking<span class="tab-l"></span><span class="tab-r"></span></a></li>
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
echo "<br><strong>".$_GET['id']."</strong>";
?>
	<form action="givepassword.php" method="post">
<table>
<tr>
<td>
Enter Your Account No or Username : </td><td><input type="numeric" name="accno"></td></tr>
<tr>
		<td>Select Secret Question :</td>
		<td><select name="question">
		<option>What was your childhood nickname?</option> 
<option>In what city did you meet your spouse/significant other?</option> 
<option>
What is the name of your favourite childhood friend? 
</option> 
<option>What street did you live on in third grade?
</option> 
<option>What is the middle name of your oldest child?
</option> 
<option>What is your oldest sibling's middle name?
</option> 
<option>What school did you attend for sixth grade?
</option>  
<option>What is your oldest cousin's first and last name?
</option> 
<option>What was the name of your first stuffed animal?
</option> 
<option>In what city or town did your mother and father meet? 
</option> 
<option>What was the last name of your third grade teacher?
</option> 
<option>In what city does your nearest sibling live? 
</option> 
<option>What is your maternal grandmother's maiden name?
</option> 
<option>In what city or town was your first job?
</option> 
<option>What is the name of the place your wedding reception was held?
</option> 
<option>What is the name of a college you applied to but didn't attend?
</option> 
		</td>
	</tr>
	<tr>
	 <td>Answer :</td>
<td><input type="text" name="answer"></td>	 
	</tr><tr>
<td/><td><input type="submit" value="Submit"></td></tr>
</table>
</form>
<br><br><br><br><br>
<INPUT Type="button" id="bt" VALUE="Back" onClick="history.go(-1);"><br>

    </div>            
               
  
    </div> <!-- /page -->


    <!-- Footer -->
    <div id="footer">
 <p id="copyright">Copyright &copy; <?php echo date("Y") ?> JPMorgan Chase & Co | All Rights Reserved</p>
 </div> <!-- /footer -->

</div> <!-- /main -->
</body>
</html>
