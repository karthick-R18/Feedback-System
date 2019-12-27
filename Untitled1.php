<html>
<body>
<form method=post action=<?php echo $_SERVER["PHP_SELF"]; ?>>
enter regno :<input type=text name="regno" required>
<br>
password : <input type=password name="pass" required> <br>
<input type=submit>
</form>
<?php

if(isset($_POST["regno"])&&isset($_POST["pass"]))
{
	$regno=$_POST["regno"];
$pass=$_POST["pass"];


if($pass==$regno)
{
	header("location:date.php");
}

else
{
	echo "Invalid password";
}
}
else
echo "Enter inputs";
?>

</body>