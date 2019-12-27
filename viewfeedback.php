<html>
<body bgcolor=#ccffcc>
	<h1>Your feedback that you gave to every subjects so far has been listed below</h1>	

	<?php
	if(isset($_POST["reg"]))
	{
	$regno=$_POST["reg"];
	

	$dbname="feedback";
	$host="localhost";
	$user="root";
	$password="";
	$con=mysqli_connect($host,$user,$password,$dbname);

	$q="select regno,name,term,sub_code,q1,q2,q3,q4,q5,q6,comment from fb where regno='$regno'";


	$x=mysqli_query($con,$q);
	$row=mysqli_fetch_assoc($x)
	?>
	<center>
	<table border="1" cellpadding="10">
		<tr>
			<th>Regno</th><th>Name</th><th>Term</th>
		</tr>
		<tr>
			<td><?php echo $row["regno"];?></td><td><?php echo $row["name"];?></td><td><?php echo $row["term"];?></td>			
		</tr>
	</table>
	</center><br><br>
	<center>
		<table border=1 cellpadding="10">
				<tr>
					<th>subcode</th><th>question1</th><th>question2</th><th>question3</th><th>question4</th><th>question5</th><th>question6</th><th>comment</th>
				</tr>
	<?php
	$q2="select regno,name,term,sub_code,q1,q2,q3,q4,q5,q6,comment from fb where regno='$regno'";
	$x2=mysqli_query($con,$q2);
	
	if(mysqli_num_rows($x2)>0)
	{

		while($row2=mysqli_fetch_assoc($x2))
		{
			?>
			<tr>
				<td><?php echo $row2["sub_code"];?></td><td><?php echo $row2["q1"];?></td>
				<td><?php echo $row2["q2"];?></td><td><?php echo $row2["q3"];?></td><td><?php echo $row2["q4"];?></td><td><?php echo $row2["q5"];?></td><td><?php echo $row2["q6"];?></td><td><?php echo $row2["comment"];?></td>
			</tr>			
		
			<?php
		}
	}
	else
	{
		echo "You don't have any feedback!!!";
	}
}
else
{
	header("location:error.html");
}

	?>
	</table>
		</center>
<br><br><hr><br><br>
	<center><a href="fbf.html">Go back to Home</a></center>
</body>
</html>