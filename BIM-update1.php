<?php
	$con=mysqli_connect("localhost","root","","resultt");
	if(!$con)
	{
		die('sorry!connectio failed'.mysqli_error());
	}
	$id=$_POST['studentId'];
	$name=$_POST['name'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	
	$sql="UPDATE BIMist SET Name='".$name."',sub1='".$sub1."',sub2='".$sub2."',sub3='".$sub3."',sub4='".$sub4."',sub5='".$sub5."' WHERE ID='".$id."'";
	if(mysqli_query($con,$sql))
	{
		echo "<font color='green'>record updated successfully in BIM 1ST semester</font>";
	}
	else
	{
		echo "error:".$sql."<br>".mysqli_error($con);
	}
	mysqli_close($con);
	include("BIM-update1.html");
?>