<?php
	$con=mysqli_connect("localhost","root","","bnresult");
	if(!$con)
	{
		die('Sorry connection failed'.mysqli_error());
	}
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$sql="SELECT * FROM login WHERE Username='".$user."'and Password='".$pass."'";
	
	$result=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)!=0)
	{
			header("location:homepage.html");
			exit();
	}
	else
	{
			echo"<html>";
			echo "<head>
			<script type='text/javascript'>
			function show_alert()
			{
				alert('Username or Password is wrong');
			}
			</script>
			</head>";
			
			echo"<body onload=show_alert()>";
			include("login.html");
			echo"</body></html>";
			
			exit();
	}
?>
	
			