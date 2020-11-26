<?php
	$host = 'localhost';  
	$user = 'root';  
	$pass = '';  
	$dbname = 'test';  
	$conn = mysqli_connect($host, $user, $pass,$dbname);  
	if(!$conn){  
	  die('Could not connect: '.mysqli_connect_error());  
	}  
	
		$chkarray=$_POST['check'];
		foreach($chkarray as $id)
		{
			mysqli_query($conn,"delete from medicine where id=".$id);  
		}
	
	mysqli_close($conn); 
	header("location:managerremove.php");
?>