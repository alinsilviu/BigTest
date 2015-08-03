<!DOCTYPE html>
<html>
<head>
	<title>CONTACT</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets2/stylesheet.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	<ul class="nav nav-pills" method="GET">
	  <li role="presentation"><a class="navbar-brand" href="#"><h4><b>TestProject</b></h4></a>
	  <li role="presentation"><a href="index.php" style="color: #9C9C9C"><h5>Home</h5></a></li>
	  <li role="presentation"><a href="contact.php" style="color: #9C9C9C"><h5>Contact</h5></a></li>
	  <li role="presentation" class="nav navbar-nav pull-right"><a href="index.php" style="color: #9C9C9C"><h5>Logout</h5></a></li>
	</ul>
	<div class="mijloc2">
			<?php
			if (isset($_POST['user'])&&isset($_POST['email'])&&isset($_POST['message'])) {
				$contact_name = $_POST['user'];
				$contact_email = $_POST['email'];
				$contact_text = $_POST['message'];
				if (!empty($contact_name)&&!empty($contact_email)&&!empty($contact_text)) {
					$to = 'silviualin067@gmail.com';
					$from = 'test@test.com';
					$subject = 'Test Project';
					$body = 'From: '.$contact_name."\n".'Email: '.$contact_email."\n".'Message: '.$contact_text;
					$headers = 'From: test@test.com';

					if (@mail($to, $subject, $body, $headers)) {
						echo '<div class="alert alert-success" role="alert" style="text-align: center">Message successfully sent.</div';
						header("refresh: 3; url=index.php");
					} else {
						echo '<div class="alert alert-success" role="alert" style="text-align: center">Message not sent.</div';
					}
				} else {
					echo '<div class="alert alert-success" role="alert" style="text-align: center">All fields are required.</div';
				}
			}
			?>
			<h1>Contact us</h1>
			<hr>
			<form id="message" action="#" method="POST" name="myform">
				<div class="row">
					<input id="name2" class="form-control" name="user" type="username" value="" size="30" placeholder="Name"/>
				</div>
				<br>
				<div class="row">
					<input id="email2" class="form-control" name="email" type="text" value="" size="30" placeholder="Email"/>
				</div>
				<br>
				<div class="row">
					<textarea id="message2" class="form-control" name="message" rows="4" cols="30" placeholder="Message"></textarea>
				</div>
				<br>
				<button id="submitbt" type="submit" class="btn btn-default" style="color: white; width: 300px; border-radius: 2px; height: 40px;" disabled="disabled"><b>Send Email</b></button>
			</form>
		</form>
	</div>
	<script>
		$(document).ready(function(){
		    $('#submitbt').attr('disabled', true);

		    $('#name2').keyup(function(){
		        if($('#name2').val().length != 0 && $('#email2').val().length != 0 && $('#message2').val().length != 0)
		            $('#submitbt').attr('disabled', false);
		        else
		            $('#submitbt').attr('disabled', true);     
		    });
		    $('#email2').keyup(function(){
		        if($('#name2').val().length != 0 && $('#email2').val().length != 0 && $('#message2').val().length != 0)
		            $('#submitbt').attr('disabled', false);
		        else 
		            $('#submitbt').attr('disabled', true);        
		    });
		    $('#message2').keyup(function(){
		        if($('#name2').val().length != 0 && $('#email2').val().length != 0 && $('#message2').val().length != 0)
		            $('#submitbt').attr('disabled', false);
		        else 
		            $('#submitbt').attr('disabled', true);        
		    });
		});
	</script>
</body>
</html>
