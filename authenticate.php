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
	$name=$_POST['username'];
	$pass=$_POST['password'];
	$sql = "select * from employee where username='$name'";  
	$retval=mysqli_query($conn, $sql);  
	if(mysqli_num_rows($retval) > 0)
	{  
	  $row = mysqli_fetch_assoc($retval);
	  if($pass==$row['password'])
	  {	
		if($row['post']=="Administrator")
			header("location:adminview.php");
		else if($row['post']=="Manager")
			header("location:managerview.php");
		else if($row['post']=="Pharmacist")
			header("location:.php");
		else if($row['post']=="Cashier")
			header("location:.php");
		else{
			
			?><script>alert("You are yet not assigned a post");window.location.href="index.php"</script><?php
			
		}
		
  	  }
	}
	else{
		?><script>alert("incorrect username or password!");window.location.href="index.php"</script><?php
	}				
	mysqli_close($conn);
	
?>