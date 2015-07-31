<?php
	$match1 = 'admin';
	$match2 = 'admin';

	if (isset($_POST['password'])&&isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!empty($password)&&!empty($username)) {
			if ($password==$match2&&$username==$match1) {
				header("Location: index.php");
			} else {
				header("Location: login.php");
			}
		} else {
			header("Location: login.php");
		}
	}
?>