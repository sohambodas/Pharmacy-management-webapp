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
	$post=$_GET['post'];
	$sql = "update employee set post='$post' where id='$id'";  
	$retval=mysqli_query($conn, $sql);  
	
	mysqli_close($conn);
	header("location:../managerpost.php");
?>