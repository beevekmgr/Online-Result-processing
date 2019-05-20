<?php
	$con=mysqli_connect("localhost","root","bresult");
	if(!$con){
		die('Connection! failed'.mysqli_error());
		}
	$id=$_POST['id'];
	$name=$_POST['name'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$sub5=$_POST['sub5'];
	$sql="INSERT INTO Bim1('roll','name','sub1','sub2','sub3','sub4','sub5') VALUES('$id','$name','$sub1','$sub2','$sub3','$sub4','$sub5')";
	if(mysqli_query($con,$sql)){
		echo "New Record Sucessfully in BiM1st";
		}
	else{
		echo "Error:".$mysqli_error($con));
		}
	mysqli_close($con);
	include ("insert1bim.html");
	?>
	
			
	
		