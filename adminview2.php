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
				border-radius:0 20px 0 0;
			}
			.data td{
				border-bottom:1px solid #010145;
				//border-right:1px solid #010145;
			}
														/*a img{
															border-radius:5px;
														}*/
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
				<li><a href="adminview.php">Requests</a></li>
				<li><a href="" style="background-color:lightgray;color:#010145">Delete Account</a></li>
			</ul>
		</div>
		<div class="content">
			<h1>Employee Accounts</h1>
			
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
				<table align="center" cellspacing="0px" cellpadding="5px">
					<tr>
						<th>Username</th>
						<th>Email</th>
						<th>Contact</th>
						<th>Post</th>
						<th></th>
					</tr>
				<?php    
					  
					$sql = 'SELECT * FROM employee';  
					$retval=mysqli_query($conn, $sql);
					if(mysqli_num_rows($retval) > 0)
					{  
					 while($row = mysqli_fetch_assoc($retval))
					 {  
						echo "
								<tr>
									<td>{$row['username']}  </td>  
									<td>{$row['email']} </td>  
									<td>{$row['contact']} </td>
									<td>{$row['post']} </td>";
									?>
									<td align="center">
										<a href="accdelete.php/?id=<?php echo $row['id'];?>"><img src="reject.png" width="20px" height="20px"></a>
									</td>
									</tr>
									
									<?php
					 } //end of while  
					 
					}
					
					mysqli_close($conn);  
				?>
				</table>
				
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
	