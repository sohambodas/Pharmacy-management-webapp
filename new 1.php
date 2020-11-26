<html>
<body>
<?php  
$host = 'localhost';  
$user = 'root';  
$pass = '';  
$dbname = 'test';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = 'SELECT * FROM medicine';  
$retval=mysqli_query($conn, $sql);  
?>
<table>
	<tr>
		<th>NAME</th>
		<th>QUANTITY</th>
		<th>EXPIRY</th>
	</tr>
<?php  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "
			<tr>
				<td>{$row['name']}  </td>  
				<td>{$row['quantity']} </td>  
				<td>{$row['expiry']} </td> 
			</tr>";  
 } //end of while  
 
}else{  
echo "0 results";  
}  
mysqli_close($conn);  
?>
</table> 
</body>
</html>