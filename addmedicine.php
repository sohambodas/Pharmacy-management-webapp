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
	$expiry=$_POST['expiry'];
	$quantity=$_POST["quantity"];
	$sql = "insert into medicine(name,expiry,quantity) values('$name','$expiry','$quantity')";  
	$retval=mysqli_query($conn, $sql);  
	
	header("location:manageradd.php");
?>