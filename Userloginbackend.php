<?php
	session_start(); 
	require "connection.php";	
	
	

	if(!empty($_POST['email']) && !empty($_POST['password']) )
	{
		$res = array();
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM `users` WHERE `email`='$email' && `password`='$password' ";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		
		$id = $row['id'];
		$login_role = $row['role'];
		$name = $row['name'];

		
		
		if($row['email'] == $email && $row['password'] == $password)
		{		
			

			$_SESSION['user_id'] = $id;
			$_SESSION['login_role'] = $login_role;
			$_SESSION['name'] = $name;
			
				//header('location:products.php');
				header( "refresh:0; url= ViewCompany.php" );	
				echo '<script language="javascript">';
				echo 'alert("Login Successful")';
				echo '</script>';
		
		
		
			
		}
		else
		{
			header( "refresh:0; url= index.php" );
			echo '<script language="javascript">';
			echo 'alert("Login Failed")';
			echo '</script>';
		}
	}
	else
	{
			header( "refresh:0; url= index.php" );
			echo '<script language="javascript">';
			echo 'alert("No login data... ")';
			echo '</script>';
	}	

	//echo json_encode($res);	
	
?>