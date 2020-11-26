<?php
	$host = 'localhost';  
	$user = 'root';  
	$pass = '';  
	$dbname = 'test';  
	$conn = mysqli_connect($host, $user, $pass,$dbname);  
	if(!$conn)
	{  
	  die('Could not connect: '.mysqli_connect_error());  
	}
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST["contact"];
	$password=$_POST['password'];
	
				
	$sql1="select username from employee where username='$name'";
	$sql2="select username from register where username='$name'";
	$retval1=mysqli_query($conn, $sql1);
	$retval2=mysqli_query($conn, $sql2);
	if(mysqli_num_rows($retval1) > 0)
	{  
		?><script>alert("username already used.\nEnroll again."); window.location.href="index.php";</script><?php
		mysqli_close($conn); 
		
	}
	
	else if(mysqli_num_rows($retval) > 0)
	{  
		?><script>alert("username already used.\nEnroll again."); window.location.href="index.php";</script><?php
		mysqli_close($conn);  
	}
	else{
		$sql = "insert into register(username,email,contact,password) values('$name','$email','$contact','$password')";  
		
		mysqli_query($conn, $sql); 
		mysqli_close($conn);
		header("location:index.php");
	}
?>