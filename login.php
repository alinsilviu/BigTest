<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets2/stylesheet.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	<ul class="nav nav-pills" method="GET">
	  <li role="presentation"><a class="navbar-brand" href="#"><h4><b>TestProject</b></h4></a>
	  <li role="presentation"><a href="index.php" style="color: #9C9C9C"><h5>Home</h5></a></li>
	  <li role="presentation" class="nav navbar-nav pull-right"><a href="login.php" style="color: #9C9C9C"><h5>Login</h5></a></li>
	</ul>
	<div class="mijloc">
	<br>
	<h1>Log in</h1>
		<hr>
			<form id="contact_form" action="index.php" method="POST">
			  <div class="form-group">
			    <input name="username" type="username" class="form-control" id="email" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <input name="password" type="password" class="form-control" id="pwd" placeholder="Password">
			  </div>
			  <button id="button" name="submit" type="submit" class="btn btn-success" style="width: 300px; border-radius: 2px; height: 40px;" value="Submit" disabled="disabled"><b>Log in</b></button>
			</form>
			<hr>
	</div>
	
	<script>
		$(document).ready(function(){
		    $('#button').attr('disabled', true);

		    $('#email').keyup(function(){
		        if($('#email').val().length != 0 && $('#pwd').val().length != 0) {
		            $('#button').attr('disabled', false);
		        }
		        else {
		            $('#button').attr('disabled', true);     
		        }
		    });
		    $('#pwd').keyup(function(){
		        if($('#email').val().length != 0 && $('#pwd').val().length != 0) {
		            $('#button').attr('disabled', false);
		        }
		        else {
		            $('#button').attr('disabled', true);        
		        }
		    });
		});
	</script>
</body>
</html>
