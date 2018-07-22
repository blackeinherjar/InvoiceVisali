<?php
	session_start(); 
	require "connection.php";

	
	if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['phone_no']) && !empty($_POST['country']))
	{
			$name = $_POST['name'];
			
			$user_id = $_POST['user_id'];
			
			$address = $_POST['address'];	
			$email = $_POST['email'];
			$phone_no = $_POST['phone_no'];	
			$country = $_POST['country'];	
		
			
			
			
			$query_email = "SELECT `email` FROM `company` WHERE `email`='$email'";
			$query_run_email = mysqli_query($conn,$query_email);

			if(!filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
			{
				if (mysqli_num_rows($query_run_email))
				{
					header( "refresh:0; url= companyAdd.php" );
					echo '<script language="javascript">';
					echo 'alert("try again,email already exists")';
					echo '</script>';
				}
				else
				{
					$sql = "INSERT INTO company(`name`, `address`,`email`,`phone_no`,`country`,`user_id`)VALUES ('$name', '$address','$email', '$phone_no', '$country','$user_id')";		
					mysqli_query($conn, $sql);
					
					header( "refresh:0; url= ViewCompany.php" );
					echo '<script language="javascript">';
					echo 'alert("New Company created successful")';
					echo '</script>';
				}
			}else
			{			
				header( "refresh:0; url= companyAdd.php" );
				echo '<script language="javascript">';
				echo 'alert("email format wrong,example : test@example.c")';
				echo '</script>';
			}
			
			
	}else
	{
				header( "refresh:0; url= companyAdd.php" );
				echo '<script language="javascript">';
				echo 'alert("New Company created failed,please fill in the require information")';
				echo '</script>';
	}		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
		
?>