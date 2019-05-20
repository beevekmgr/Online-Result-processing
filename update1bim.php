<?php
	$con=mysqli_connect("localhost","root","","bnresult");
	if(!$con){
		die('Connection! failed'.mysqli_error());
		}
	$id=$_POST['roll'];
	$names=$_POST['Name'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	$sql="Update BIM1st SET name1='".$names."',sub1='".$sub1."',sub2='".$sub2."',sub3='".$sub3."',sub4='".$sub4."',sub5='".$sub5."'WHERE id='".$id."'";
	
	if(mysqli_query($con,$sql)){
		echo "New Record Updated Sucessfully in BiM1st";
		}
	else{
		echo "Error:".mysqli_error($con);
		}
	mysqli_close($con);
	include "1bim.html";
	?>
	