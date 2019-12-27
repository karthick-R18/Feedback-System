<html>
<body>
<?php
if(isset($_POST["stregin"])&&isset($_POST["stname"])&&isset($_POST["stdept"])&&isset($_POST["stterm"])&&isset($_POST["stcode"])&&isset($_POST["styear"]))
{

$stregin=$_POST["stregin"];
$stname=$_POST["stname"];$stdept=$_POST["stdept"];
$stterm=$_POST["stterm"];
$stcode=$_POST["stcode"];
$styear=$_POST["styear"];
$sq1=$_POST["q1"];
$sq2=$_POST["q2"];$sq3=$_POST["q3"];$sq4=$_POST["q4"];$sq5=$_POST["q5"];$sq6=$_POST["q6"];
$scomment=$_POST["comment"];

	$dbname="feedback";
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password,$dbname);

	$q="insert into fb values('$stregin','$stname','$stdept','$stterm',$sq1,$sq2,$sq3,$sq4,$sq5,$sq6,'$scomment','$stcode','$styear')";
	$x=mysqli_query($con,$q);
	if($x>0)
	{
		echo "<center><h1>Thank you! Your feedback has been submitted successfully.</h1></center>";
	}
	else
	{
		echo "<center><h1>ERROR</h1><br>It seems like you already gave feedback to this subject. You cannot give your feedback more than one time for a subject.</center>";
	}

}
else
		{
			header("location:error.html");
		}

?>
<hr>
<br><br>
<center><a href="fbf.html">Go back to Home</a></center>
</body>
</html>