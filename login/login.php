<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<?php
	require('db.php');
	session_start();
	// When form submitted, check and create user session.
	if (isset($_POST['username'])) {
		$username = stripslashes($_REQUEST['username']);    // removes backslashes
		$username = mysqli_real_escape_string($con, $username);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);
		// Check user is exist in the database
		$query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
		$result = mysqli_query($con, $query) or die(mysqli_error($con));
		$rows = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		if ($rows == 1) {
			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['lname'] = $row['lname'];
			$_SESSION['gender'] = $row['gender'];
			$_SESSION['dob'] = $row['dob'];
			$_SESSION['phone'] = $row['phone'];
			$_SESSION['lang'] = $row['lang'];
			$_SESSION['country'] = $row['country'];
			$_SESSION['state'] = $row['state'];
			$_SESSION['coll'] = $row['coll'];
			$_SESSION['univ'] = $row['univ'];
			$_SESSION['create_datetime'] = $row['create_datetime'];
			// Redirect to user dashboard page
			header("Location: dashboard.php");
		} else {
			echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
		}
	} else {
	?>
		<form class="form" method="post" name="login">
			<h1 class="login-title">Login</h1>
			<input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" />
			<input type="password" class="login-input" name="password" placeholder="Password" />
			<input type="submit" value="Login" name="submit" class="login-button" />
			<p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
		</form>
	<?php
	}
	?>
</body>

</html>