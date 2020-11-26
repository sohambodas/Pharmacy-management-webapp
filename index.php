<html>
	<head>
		<title>pharmeasy</title>
		<link rel="stylesheet" href="styleindex.css"></link>
		<style>
		
		</style>
		<script>
			function funreg(){
				document.getElementById("register").style.display="block";
			}
			function funlog(){
				document.getElementById("register").style.display="none";
			}
			function formcheck(form){
				if(form.name.value.length < 4) {
				  alert("Error: username must contain at least four characters!");
				  return false;
				}
				var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(!re.test(form.email.value)) {
				  alert("Error: invalid email!\n eg. john@example.com");
				  return false;
				}
				if(form.contact.value.length < 10) {
				  alert("Error: enter 10 digit valid mobile number!");
				  return false;
				}
				if(form.password.value.length < 6) {
				  alert("Error: Password must contain at least six characters!");
				  return false;
				}
				  
				if(form.conpassword.value!=form.password.value){
				  alert("Error: Passwords must match!");
				  return false;
				}
			} 

				
		</script>
	</head>
	<body>
		<img src="2222.png" width="100%" height="100%">

		<div class="login-box">
			<p>Login</p>
			<img src="333.png" height="100px" width="100px" style="opacity:1;background-color:#010145;border-radius:100px;padding:10px">
			<br><br>
			<p1>"Health comes first"<p1>
			<br><br><br>
			<form method="post" action="authenticate.php" autocomplete="off">
				<!--<select name="usertype">
					<option selected style="display:none">--selected--</option>
					<option> Administrator</option>
					<option> Manager</option>
					<option> Pharmacist</option>
					<option> Cashier</option>
				</select><br>-->
					<input type="text" name="username" placeholder="Username" required><br>
					<input type="password" name="password" placeholder="Password" required><br><br>
					<input class="btn login" type="submit" value="login" required>
					<input class="btn reg" type="button" value="new member" onclick="funreg()">
			
			</form>
		</div>

		<div id="register" style="display:none">
			<div class='reg-box'>
				<div class='reg-form'>
				<p>Register</p>
				<br><br>
				<form method="post" action="registeruser.php" onsubmit="return formcheck(this)" autocomplete="off">
					<table>
						<tr>
							<td>
								<label>Name:</label>
							</td>
							<td>
								<input type='text' name='name' placeholder="4 letter user name" required>
							</td>
						</tr>
						<tr>
							<td>
								<label>e-mail:</label>
							</td>
							<td>
								<input type='e-mail' name='email' required>
							</td>
						</tr>
						<tr>
							<td>
								<label>Contact:</label>
							</td>
							<td>
								<input type='number' name='contact' placeholder="10 digit number" required>
							</td>
						</tr>
						<tr>
							<td>
								<label>Password:</label>
							</td>
							<td>
								<input type='password' name='password' placeholder="more than 6 characters" required>
							</td>
						</tr>
						<tr>
							<td>
								<label>Confirm Password:</label>
							</td>
							<td>
								<input type='password' name='conpassword' required>
							</td>
						</tr>
					</table>
					<br>
					<span>
						<input type='submit' class='btn reg2' value='Register'>
						<input class='btn cancel'type='button' value='cancel' onclick='funlog()'>
					</span>
				</form>
				</div>
			</div>
			
		</div>

	</body>
</html>