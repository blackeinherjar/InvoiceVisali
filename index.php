<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/background.css">


	<title>Invoice System</title>
	

</head>
<body>
	<div class = "login">
		<div class = "login_container">
			<div class = "login_panel panel panel-default">
				<div class="panel-body">
					<h1 id="textHead" class = "text-center">Company Login Page</h1>
					<div class="message1" id="msg1"></div>
					<hr>
					<form id="textContent" class = "form-horizontal"  action="Userloginbackend.php" method = "post">
					
							<div class = "form-group">
								<label class = "control-label col-sm-3"></label>
								<div class = "col-sm-12">
									<h4>Email :</h4>
									<input type = "text" class = "form-control" name = "email" placeholder = "Enter email">
								</div>
							</div>
							
							<div class = "form-group">
								<label class = "control-label col-sm-3"></label>
								<div class = "col-sm-12">
									<h4>Password : </h4>
									<input type = "password" class ="form-control" name = "password" placeholder = "Enter password">
								</div>
							</div>
							
							<div class = "form-group">
								<div class="col-sm-12">
									<input type = "submit" class = "btn btn-block btn-default btn-info" value="Login">
								</div>
							</div>
					</form>
				</div>
			</div>
			<center><a href = "userRegister.php">Register</a></center>
		</div>
	</div>

	<script>
		var err = {
			email: {
				empty: 'Email required',
				length: 'Email must contain 6 to 30 character'
			},
			
			password: {
				empty: 'Password required',
				length: 'Password must contain 6 to 15 character'
			}
		};

		
		
		$('form input').blur(function()
		{
			var nm = $(this).attr('name');
			var val = $(this).val();
			var len = val.length;
			if (val == '')
			{
				$(this).closest('.form-group').addClass('has-error').find('.col-sm-12').append('<p class="help-block">' + err[nm].empty + '</p>');
			}
			else if ((nm == 'email' && (len < 6 || len > 30)) || (nm == 'password' && (len < 6 || len > 15)))
			{
				$(this).closest('.form-group').addClass('has-error').find('.col-sm-12').append('<p class="help-block">' + err[nm].length + '</p>');
			}
		}).focus(function()
		{
			$(this).closest('.form-group').removeClass('has-error').find('.help-block').remove();
		});
		
		
	</script>
</body>
</html>