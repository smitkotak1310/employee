<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>AWS EC2 RDS DEMO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Employee Information Form</h2>
	</div>
	
	<form method="post" >

		<div class="input-group">
			<label>Emp FName</label>
			<input type="text" name="emp_fname" placeholder="Enter Emp First Name" required>
		</div>
		<div class="input-group">

			<label>Emp LName</label>
			<input type="text" name="emp_lname" placeholder="Enter Emp Last Name" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email_id" placeholder="Enter Email Id" required>
		</div>
		<div class="input-group">
			<label>Mobile Number</label>
			<input type="text" placeholder="Enter Mobile NUmber" name="emp_mobile" required>
		</div>	
		<div class="input-group">
			<button type="submit" class="btn" name="reg_emp">Register</button>
		</div>
		<a href="viewempdata.php">View All Details</a>
	</form>
</body>
</html>
