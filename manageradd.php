<!Doctype>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="stylesheet.css">
		<style>
			.content h1{
				text-indent:30px;
				color:#010145;
			}
			.data table{
				background-color:gray;
				padding:10px;
				border-radius:10px;
			}
			.data th{
				text-align:left;
				color:#010145;
				padding:5px;
				width:200px;
				font-size:24px;
			}
			.data input{
				width:300px;
				font-size:18px;
				border-radius:10px;
				padding:5px 10px;
				outline:none;
			}
			.data input[type=submit]{
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
				<li><a href="" style="background-color:lightgray;color:#010145">Add Stock</a></li>
				<li><a href="managerremove.php">Remove Stock</a></li>
				<li><a href="managerpost.php">Post Update</a></li>
			</ul>
		</div>
		<div class="content">
			<h1>New Stock</h1>
			<div class="data">
				<form action="addmedicine.php" method="post" onsubmit="alert('Drug record added.');">
					<table align="center" ce>	
						<tr>
							<th>Name</th>
							<td><input type="text" name="name" required></td>
						</tr>
						<tr>
							<th>Quantity</th>
							<td><input type="number" name="quantity" required></td>
						</tr>
						<tr>
							<th>Expiry</th>
							<td><input type="date"  name="expiry" required></td>
						</tr>
						<tr>
							<td height="50px" align="right" colspan="2"><input class="subbtn" type="submit"></td>
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
	