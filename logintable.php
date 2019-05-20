<?php
	$con=mysqli_connect("localhost","root","","bnresult");
	if(!$con)
	{
		die('Sorry connection failed'.mysqli_error());
	}
	$sql="CREATE TABLE login(
		Username VARCHAR(15),
		Password VARCHAR(15));";
	if(mysqli_query($con,$sql))
	{
		echo"Table created successfully";
	}
	else{
		echo"Error creating table".mysqli_error($con);
	}
	$sql1="INSERT INTO login(Username,Password)
		VALUES('admin','admin');";
	
	if(mysqli_query($con,$sql1))
	{
		echo"Record inserted Successfully";
	}
	else{
		echo"Error on inserting".mysqli_error($con);
	}
	mysqli_close($con);
?>
		