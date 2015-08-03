<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets2/stylesheet.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	<ul class="nav nav-pills" method="GET">
	  <li role="presentation"><a class="navbar-brand" href="#"><h4><b>TestProject</b></h4></a>
	  <li role="presentation"><a href="index.php" style="color: #9C9C9C"><h5>Home</h5></a></li>
	  <?php
	  if (isset($_POST['submit'])) {
	      echo '<li role="presentation"><a href="contact.php" style="color: #9C9C9C"><h5>Contact</h5></a></li>';
		}
	  ?>
	  <li role="presentation" class="nav navbar-nav pull-right">
	  <?php 
	  if (isset($_POST['submit'])) {
	      echo '<a href="index.php" style="color: #9C9C9C"><h5>Logout</h5></a>';
		} else {
			echo '<a href="login.php" style="color: #9C9C9C"><h5>Login</h5></a>';
		}
	  ?>
	  </li>
	</ul>
	<br><br>
	<?php
		$match1 = 'admin';
		$match2 = 'admin';

		if (isset($_POST['password'])&&isset($_POST['username'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			if (!empty($password)&&!empty($username)) {
				if ($password!=$match2&&$username!=$match1) {
					header("Location: login.php");
				}
			}
		}
	?>
	<div ui-view="" class="fadeZoom ng-scope">
		<div class="container ng-scope">
		  <div class="panel panel-default">
		    <div class="panel-heading">Home Page</div>
		    <div class="panel-body">
		      <div class="row">
		        <div class="col-sm-6">
		          <h2>Heading</h2>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		        </div>
		        <div class="col-sm-6">
		          <h2>Heading</h2>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
</body>
</html>
