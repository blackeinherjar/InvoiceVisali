<?php
    require 'navbar.php';
	require "connection.php"; 

	$user_id = $_SESSION['user_id'] ;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" text = "text/css" href="css/s_up.css">  


	<link rel="stylesheet" type="text/css" href="css/background.css">
 
	<title>Invoice System</title>
 

</head>
<body >
	<div class = "signup_panel">
		<h2 class = "text-center">Add New Company</h2>			
		<form method = "post" action="Companyaddbackend.php">
			<div class = "form-horizontal">						
				<div class = "form-group">
					<label class = "control-label col-sm-2">Company Name:</label>
					<div class = "col-sm-10">
					<input type = "text" class = "form-control" name = "name" placeholder = "Enter name">
					</div>
				</div>
								
				<div class = "form-group">
					<label class = "control-label col-sm-2">Address:</label>
					<div class = "col-sm-10">
					<input type = "text" class = "form-control" name = "address" placeholder = "enter address">
					</div>
				</div>
							
				<div class = "form-group">
					<label class = "control-label col-sm-2">Email:</label>
					<div class = "col-sm-10">
					<input type = "text" class = "form-control" name = "email" placeholder = "Enter email"  >
					</div>
				</div>
								
				<div class = "form-group">
					<label class = "control-label col-sm-2">Phone No:</label>
					<div class = "col-sm-10">
					<input type = "text" class = "form-control" name = "phone_no" placeholder = "Enter phone no">
					</div>
				</div>
								
				<div class = "form-group">
					<label class = "control-label col-sm-2">Country:</label>
					<div class = "col-sm-10">
					<input type = "text" class = "form-control" name = "country" placeholder = "Enter country" >
					</div>
				</div>
								
		

			
				<div class = "form-group">
					<div class = "col-sm-push-2 col-sm-10">
						<input type = "hidden" value="<?php echo $user_id ?>" name = "user_id" >
						<button type = "submit" class = "btn btn-primary">Submit</button>
						<a href = "ViewCompany.php" class = "btn btn-link">Cancel</a>
					</div>
				</div>				
			</div>
		</form>
	</div>
		

</body>
</html>