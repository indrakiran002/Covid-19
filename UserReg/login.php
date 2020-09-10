<html>

<head>
	<title>User Login & Registration </title>
	
	<link rel = "stylesheet" href="style.css"> 
</head>

<body>
<div class="container">
   
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login-left">
		<h2>Login</h2>
		<form action="validation.php" method="post">
			<div class="form-group">
				<label>User Name</label>				
				<input type="text" name="user" class="form-control" required>


			</div>
			<div class="form-group">
				<label>Password</label>				
				<input type="password" name="password" class="form-control" 					required>
			</div>
			
			<div class="tabs">
			<button type="submit"> Login</button>
			</div>
	

	

		</form>

	</div>

	<div class="col-md-6 login-right">
		<h2>Register</h2>
		<form action="registration.php" method="post">
			<div class="form-group">
				<label>Srm-UserId</label>				
				<input type="text" name="user" class="form-control" required>


			</div>
			<div class="form-group">
				<label>Password</label>				
				<input type="password" name="password" class="form-control" 					required>
			</div>
			<div class="tabs">
			<button type="submit" > Register</button>
			</div>
	

	

		</form>

	</div>

		


	</div>
</div>
</div>



</body>


</html>