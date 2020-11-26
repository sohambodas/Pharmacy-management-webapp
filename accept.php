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
	$id=$_GET['id'];
	$sql = "select * from register where id='$id'";  
	$retval=mysqli_query($conn, $sql);  
	if(mysqli_num_rows($retval) > 0)
	{  
	 $row = mysqli_fetch_assoc($retval);
	 {  
		$name=$row['username'];
		$email=$row['email'];
		$contact=$row['contact'];
		$password=$row['password'];
		mysqli_query($conn,"insert into employee(username,email,contact,password) values('$name','$email','$contact','$password')");
	 }
	}
	$sql2="delete from register where id='$id'";
	mysqli_query($conn, $sql2);
	mysqli_close($conn);
	header("location:../adminview.php");
?>