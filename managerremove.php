<!Doctype>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="stylesheet.css"></link>
		<style>
			.content h1{
				text-indent:30px;
				color:#010145;
			}
			.data table{
				width:80%;
				//border:1px solid #010145;
				color:#010145;
			}
			.data th{
				background-color:#010145;
				text-align:left;
				color:lime;
				padding:5px;
				border-radius:0 10px 0 0;
			}
			.data td{
				border-bottom:1px solid #010145;
				//border-right:1px solid #010145;
			}
			
			.data input[type=submit]{
				font-size:18px;
				border-radius:10px;
				padding:5px 10px;
				outline:none;
				background-color:#010145;
				color:lime;
				width:100px;
				border:none;
				font-weight:bold;
			}
			.data input[type=submit]:hover{
				background-color:lime;
				color:#010145;
				width:100px;
			}
		</style>
	</head>
	<body>
		<div class="head">
			<div class="title">
				<img src="333.png" height="100px" width="100px">
				<p>Pharmacy</p>
			</div>
			
			<input class="btn" type="button" value="Sign out" onclick="window.location.href='index.php'">
			
		</div>
		
		<div class="nav">
			<ul>
				<li><a href="managerview.php">View Stock</a></li>
				<li><a href="manageradd.php">Add Stock</a></li>
				<li><a href="" style="background-color:lightgray;color:#010145">Remove Stock</a></li>				
				<li><a href="managerpost.php">Post Update</a></li>
			</ul>
		</div>
		<div class="content">
			<h1>Medicine Stock</h1>
			<div class="data">
				<?php  
					$host = 'localhost';  
					$user = 'root';  
					$pass = '';  
					$dbname = 'test';  
					$conn = mysqli_connect($host, $user, $pass,$dbname);  
					if(!$conn){  
					  die('Could not connect: '.mysqli_connect_error());  
					}  
				?>
				<form action="removemedicine.php" method="post" onsubmit="return confirm('sure?')">
					<table align="center" cellspacing="0px" cellpadding="5px">
						<tr>
							<th>NAME</th>
							<th>EXPIRY</th>
							<th>QUANTITY</th>
							<th></th>
						</tr>
						<?php    
							  
							$sql = 'SELECT * FROM medicine';  
							$retval=mysqli_query($conn, $sql);
							if(mysqli_num_rows($retval) > 0)
							{  
							 while($row = mysqli_fetch_assoc($retval))
							 {  
								echo "
										<tr>
											<td>{$row['name']}  </td>  
											<td>{$row['expiry']} </td>  
											<td>{$row['quantity']} </td>"; ?>
											<td width="100px" align="center"><input type="checkbox" name="check[]" value="<?php echo $row['id']?>"></td>
										</tr><?php  
							 } //end of while  
							 
							}
							else
							{  
							echo "0 results";  
							}  
							mysqli_close($conn);  
						?>
						<tr>
							<td height="50px" align="right" colspan="4"><input type="submit" name="delete" value="Delete"></td>
						</tr>
					</table>
				</form>
			</div>
		
		</div>
		
		<div class="footer">
			<div class="foot-title">
				<img style="float:left" src="333.png" height="100%" width="2.5%">
				<p>Pharmacy</p>
			</div>
		</div>
	</body>
</html>
	