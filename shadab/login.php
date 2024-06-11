<html>
	<head>
		<title>
		Online course portal
		</title>
		<!-- <link rel="stylesheet" href="css1.css"> -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet"> -->
	</head>

		<body background='44.jpg' topmargin=10 leftmargin=10 ><center>
         <img src=1.png weight=100 height=100>
		<font face='Bernard MT Condensed' size=7 color=Blue face='#8A2BE2'><b><i><u>Studying course</u></i></b></font><br><hr>


		<table width=90%>
		<tr bgcolor=pink><td><center><a href=index.php>HOME</a></center></td><td><center><a href=about.php>About Us</a></center></td><td><center><a href=login.php>Login</a></center></td><td><center><a href=sign.php>Sign Up</a></center></td></tr>
		<tr><td colspan=2 width=50%>
		<font size=5><br>
			Use this page to login to our online course system.
</td><td colspan=2 width=50%>
<center>
<table>
<form name=frm1 action=login1.php>
<?php
if(isset($_GET['y'])){
$a=$_GET['y'];
if($a==1)
{
	echo"<tr ><td colspan=2><center><font color=red>*Invalid Id/Password</font></center></td></tr>";
}}

?>
<tr><td colspan=2><center><font color=green>Login here</font></center></td></tr>
	<tr><td>Enter User Id</td><td><input type=text name=t1></td></tr>
	<tr><td>Enter Password</td><td><input type=text name=t2></td></tr><br><br>
	<tr><td><input type=reset></td><td><input type=submit ></td></tr>
</table>
</form>
</center>
</td></tr></table>
</font>
</pre>
<br><br><br><br><br><br><hr>
<center><a href="about.php">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href>Site map</a></center>



			</form>
			</body>
</html>
