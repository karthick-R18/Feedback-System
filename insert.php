<html>
<body>
	<h1>Insert records in student_master table</h1>
	<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		
		
		<table border="1" cellpadding="10">
			<tr>
		<td>Regno </td> <td><input type="text" name="regno"></td></tr>
		<tr><td>
		Name :</td><td> <input type="text" name="sname"></td></tr>
		<tr><td>Password </td><td> <input type="password" name="pass" placeholder="regno as password"></td></tr>
		<tr><td>
		Department</td><td> <select name="dept"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td></tr>
		<tr><td>Year </td> <td><input type="number" name="year"></td></tr>
		</table><br>
		<input type="submit" value="Save"><br><input type="reset" name="">
	</form>
		<?php
		if(isset($_POST["regno"])&&isset($_POST["sname"])&&isset($_POST["password"])&&isset($_POST["dept"])&&isset($_POST["year"]))
		{
			$regno=$_POST["regno"];$sname=$_POST["sname"];$dept=$_POST["dept"];$pass=$_POST["pass"];
			$year=$_POST["year"];

			echo "Testing";

		$dbname="feedback";
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password,$dbname);
	if($con==false)
	{
		echo "failed";
	}
	else{
		echo "Connected";
	}


	$q="insert into student_master values('$regno','$sname','$pass',$dept,$year)";
	$x=mysqli_query($con,$q);
	if($x>0)
	{
		echo "<br><br>Row inserted successfully";
	}
	else
	{
		echo "<br>Some error occured";
	}

}
else
{
	echo "Enter inputs";
}

		?>

	

</body>
</html>