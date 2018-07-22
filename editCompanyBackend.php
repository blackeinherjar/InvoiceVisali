<?php

	require "connection.php";
	$id = $_POST['id'];

	if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['phone_no']) && isset($_POST['country']))
	{

		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];	
		$phone_no = $_POST['phone_no'];	
		$country = $_POST['country'];	
	
		
		$sql = "UPDATE `company` SET `name`='$name',`address`='$address',`email`='$email',`phone_no`='$phone_no',`country`='$country' WHERE `id`='$id'";
		
		
		if (mysqli_query($conn, $sql)) {
		
			header( "refresh:0; url= ViewCompany.php" );	
			echo '<script language="javascript">';
			echo 'alert("Update Successful")';
			echo '</script>';
		
		
		
		} else {
			header("Refresh:0");
			echo '<script language="javascript">';
			echo 'alert("Update Failed,please try again")';
			echo '</script>';
		}

		
		
		
	}


?>