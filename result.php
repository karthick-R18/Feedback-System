<!DOCTYPE html>
<html>
<head>
	<title>result</title>
	<style>
		header{width:100%;background-color: skyblue;height: 40%;margin-top: 0;text-align: center;}		
	</style>
</head>
<body>
	<header>
		<h1>Result</h1>
	</header><hr>
	<center>
		<h2>Here's your result</h2><br>
		<?php
		$db="rdbms";
		$host="localhost";
		$user="root";
		$pwd="";
		$con=mysqli_connect($host,$user,$pwd,$db);
		if(!$con)
		{
			die("connection error".mysql_error());
		}
		if(isset($_POST["regno"]))
		{
			$regno=$_POST["regno"];
			$q="select * from result where regno='$regno'";
			
			$x=mysqli_query($con,$q);

			if(mysqli_num_rows($x) > 0)
			{
				$x1=mysqli_query($con,$q);
				$r=mysqli_fetch_array($x1);
				echo "Student name : "."<b>".$r["name"]."</b><br><br>";
				?>
				<table border="1" cellpadding="15">
						<tr style="background-color: #c1caca;">
							<th>Term</th><th>subject code</th><th>subject name</th><th>imark</th><th>emark</th><th>Tmark</th><th>result</th>
						</tr>
					
					<?php
				while($row=mysqli_fetch_array($x))
				{
					?>
					<tr>
						<td><?php echo $row["term"];?></td>
						<td><?php echo $row["sub_code"];?></td>
						<td><?php echo $row["sub_name"];?></td>
						<td><?php echo $row["imark"];?></td>
						<td><?php echo $row["emark"];?></td>
						<td><?php echo $row["tmark"];?></td>
						<td><?php echo $row["result"];?></td>
					</tr>
					
					<?php

				}
				?></table><?php
			}
		}

		?><br>
		<a href="index.html">Back</a>

	</center>



</body>
</html>