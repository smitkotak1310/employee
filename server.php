<?php
$db=mysqli_connect('employee.c2cuq5jisxyo.us-east-1.rds.amazonaws.com','root',"root1234","emp_details");
if(isset($_POST['reg_emp']))
{
	$fname = mysqli_real_escape_string($db, $_POST['emp_fname']);
	$lname = mysqli_real_escape_string($db, $_POST['emp_lname']);
	$email = mysqli_real_escape_string($db, $_POST['email_id']);
	$mobile = mysqli_real_escape_string($db, $_POST['emp_mobile']);
	
			$query = "INSERT INTO emp_info(fname,lname,email_id,emp_mobile) 
					  VALUES('$fname','$lname','$email','$mobile')";
			$row=mysqli_query($db,$query);
			if ($row) {
				header('location: thank.php');
				# code...
			}
			else
			{
				echo "Invalid Details";
			}
		

}

?>