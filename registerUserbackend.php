<?php
	session_start(); 
	require "connection.php";

	
	if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['address']) && !empty($_POST['age']) && !empty($_POST['password'])  && !empty($_POST['email']))
	{
			$first_name = $_POST['first_name'];
			
			$last_name = $_POST['last_name'];
			
			$address = $_POST['address'];	
			$age = $_POST['age'];
			$password = $_POST['password'];	
			$email = $_POST['email'];	
		
			
			
			
			$query_email = "SELECT `email` FROM `users` WHERE `email`='$email'";
			$query_run_email = mysqli_query($conn,$query_email);

			if(!filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
			{
				if (mysqli_num_rows($query_run_email))
				{
					header( "refresh:0; url= userRegister.php" );
					echo '<script language="javascript">';
					echo 'alert("try again,email already exists")';
					echo '</script>';
				}
				else
				{
					$sql = "INSERT INTO users(`first_name`, `last_name`,`address`,`age`,`password`,`email`)VALUES ('$first_name', '$last_name','$address', '$age', '$password','$email')";		
					mysqli_query($conn, $sql);
					
					header( "refresh:0; url= index.php" );
					echo '<script language="javascript">';
					echo 'alert("New User created successful")';
					echo '</script>';
				}
			}else
			{			
				header( "refresh:0; url= userRegister.php" );
				echo '<script language="javascript">';
				echo 'alert("email format wrong,example : test@example.c")';
				echo '</script>';
			}
			
			
	}else
	{
				header( "refresh:0; url= userRegister.php" );
				echo '<script language="javascript">';
				echo 'alert("New User created failed,please fill in the require information")';
				echo '</script>';
	}		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
		
?>