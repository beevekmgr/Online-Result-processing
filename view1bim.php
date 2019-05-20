
<?php
	$con=mysqli_connect("localhost","root","","bnresult");
	if(!$con){
		die ('Sorry! connection failed'.mysqli_error());
		}
	$sql="SELECT * FROM bim1st";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		echo "<table border=1>";
		echo "<caption  align='top'><font color='blue'><h2>Result of BIM 1st</h2></font></caption>";
		echo "<tr><th>ID</th><td>Name</td><td>CIS</td><td>POM</td><td>DL</td><td>Maths</td><td>English</td><td>Total</td><td>Percentage</td><td>Result</td></tr>";
		while($row=mysqli_fetch_assoc($result))
		{
				$total=$row['sub1']+$row['sub2']+$row['sub3']+$row['sub4']+$row['sub5'];
				if ($row['sub1']>=40  && $row['sub2']>=40  && $row['sub3']>=40  && $row['sub4']>=40  && $row['sub5']>=40)
				{
					$per=$total/5;
					$relt="Pass";
				}
				else
				{
					$per="Fail";
					$relt="Fail";
				}
				echo "<tr><td>".$row['Id']."</td><td>".$row['Name1']."</td><td>".$row['sub1']."</td><td>".$row['sub2']."</td><td>".$row['sub3']."</td><td>".$row['sub4']."</td><td>".$row['sub5']."</td><td>".$total."</td><td>".$per."</td><td>".$relt."</td></tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "No record found";
	}
	mysqli_close($con);
?>
	