<?php
	$con=mysqli_connect("localhost","root","","result");
	if(!$con)
	{
		die('Sorry!connection failed'.mysqli_error());
	}
	$roll=$_POST['roll'];
	$name=$_POST['Name'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	$sub6=$_POST['sub6'];
	
	$sql="INSERT INTO BIM7(roll,Name,sub1,sub2,sub3,sub4,sub5,sub6) VALUES 		('$roll','$name','$sub1','$sub2','$sub3','$sub4','$sub5','sub6')";
	if(mysqli_query($con,$sql))
	{
		echo"<font color='green'>New record created successfully in Bim 7th semester </font>";
	}
	else{
		echo"Error:".$sql."<br>".mysql_error($con);
	}
	mysqli_close($con);
	include("insert7bim.html");
?>