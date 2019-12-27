<html>
<head><title>Feedback</title></head>
<style>

	header{	
	color:#3c4642; 
	background-color: #ff9999;
	width: 100%;
	height: 85px;
	text-align: center;
	}
	footer{background-color:#ff9999;position:absolute;left:0;bottom:0;height:25px;width:100%;}
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ff9999;
}

li {
    float: left;
}

li a {
    display: block;
    color: #232122;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #6666ff;
}


</style>
<body bgcolor=#ffcccc>
	<header>
		<h1>Online Feedback System</h1>
	</header>
		<ul>
		  <li><a href="fbf.html">Home |</a></li>
		  <li><a href="#">Give feedback |</a></li>
		  <li><a href="viewlogin.php">View feedback |</a></li>
		  <li><a href="#about">About</a></li>
		</ul>
		<form method="post" action="//localhost/php/term.php" > 
		<br><br>
		<?php echo "today's date is ".date('d-m-Y') ; ?>
		<hr>
		<br><br>
		<center>
		<table border=1 cellpadding="10">
		<tr>
			<td>Regno :</td>
			<td><input type="text" name="regno"  required></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="password" name="pass" required></td>
		</tr>
		
		</table>
		<br><br>
		<input type="submit" value="Login">       <br><br>        <input type="reset" value="clear"></center>
		
		

</form>
<?php
	

if(isset($_POST["regno"])&&isset($_POST["pass"]))
{
	$regno=$_POST["regno"];
	$pass=$_POST["pass"];
}
	?>
		<footer>
			<center><i>copyrights @ 2018.All rights reserved.</center>
		</footer>

	</body>
	</html>
