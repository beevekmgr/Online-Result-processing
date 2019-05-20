<?php
	$con=mysqli_connect("localhost","root","","bnresult");
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
	
	$sql="INSERT INTO BIM1st(id,name1,sub1,sub2,sub3,sub4,sub5) VALUES ('$roll','$name','$sub1','$sub2','$sub3','$sub4','$sub5');";
	if(mysqli_query($con,$sql))
	{
		echo"<font color='green'>New record created successfully in Bim 1st semester </font>";
	}
	else{
		echo"Error:".$sql."<br>".mysqli_error($con);
	}
	mysqli_close($con);
	include("insert1bim.html");
?>