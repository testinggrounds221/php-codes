<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Registration</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<?php
	require('db.php');
	// When form submitted, insert values into the database.
	if (isset($_REQUEST['username'])) {
		// removes backslashes
		$username = stripslashes($_REQUEST['username']);
		//escapes special characters in a string
		$username = mysqli_real_escape_string($con, $username);

		$email    = stripslashes($_REQUEST['email']);
		$email    = mysqli_real_escape_string($con, $email);

		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);

		$fname    = stripslashes($_REQUEST['fname']);
		$fname    = mysqli_real_escape_string($con, $fname);

		$lname    = stripslashes($_REQUEST['lname']);
		$lname    = mysqli_real_escape_string($con, $lname);

		$gender    = stripslashes($_REQUEST['gender']);
		$gender    = mysqli_real_escape_string($con, $gender);

		$dob    = stripslashes($_REQUEST['dob']);
		$dob    = mysqli_real_escape_string($con, $dob);

		$phone    = stripslashes($_REQUEST['phone']);
		$phone    = mysqli_real_escape_string($con, $phone);

		$lang    = stripslashes($_REQUEST['lang']);
		$lang    = mysqli_real_escape_string($con, $lang);

		$country    = stripslashes($_REQUEST['country']);
		$country    = mysqli_real_escape_string($con, $country);

		$state    = stripslashes($_REQUEST['state']);
		$state    = mysqli_real_escape_string($con, $state);

		$coll    = stripslashes($_REQUEST['coll']);
		$coll    = mysqli_real_escape_string($con, $coll);

		$univ    = stripslashes($_REQUEST['univ']);
		$univ    = mysqli_real_escape_string($con, $univ);

		$create_datetime = date("Y-m-d H:i:s");
		$query    = "INSERT into `users` (username, password, email, create_datetime,fname,lname,gender,dob,phone,lang,country,state,coll,univ)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime','$fname','$lname','$gender','$dob','$phone','$lang','$country','$state','$coll','$univ')";
		$result   = mysqli_query($con, $query);
		if ($result) {
			echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
		} else {
			echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
		}
	} else {
	?>
		<form class="form" action="" method="post">
			<h1 class="login-title">Registration</h1>
			<input type="text" class="login-input" name="username" placeholder="Username" required />
			<input type="text" class="login-input" name="email" placeholder="Email Adress">
			<input type="password" class="login-input" name="password" placeholder="Password">
			<input type="text" class="login-input" name="fname" placeholder="First Name">
			<input type="text" class="login-input" name="lname" placeholder="Last Name">

			Gender :
			<br />
			<input type="radio" name="gender" value="female" />Female
			<input type="radio" name="gender" value="male" />Male
			<input type="radio" name="gender" value="other" />Other

			<br />
			<br />
			<label for="dob">Date of Birth:</label>

			<input type="date" id="birthday" name="dob" class="login-input">
			<br />

			<input type="text" class="login-input" name="phone" placeholder="Phone Number">

			<label for="lang">Choose your preffered Language : </label>
			<select name="lang">
				<option value="eng">English</option>
				<option value="hin">Hindi</option>
				<option value="tam">French</option>
				<option value="kan">Germany</option>
			</select>
			<br /><br />
			<label for="country">Choose your Country : </label>
			<br />
			<select name="country">
				<option value="in">India</option>
				<option value="us">US</option>
				<option value="ger">Germany</option>
				<option value="fr">France</option>
			</select>
			<br /><br />

			<input type="text" class="login-input" name="state" placeholder="State/Territory">
			<input type="text" class="login-input" name="coll" placeholder="College Name">
			<input type="text" class="login-input" name="univ" placeholder="University Name">
			<input type="submit" name="submit" value="Register" class="login-button">
			<p class="link">Already have an account? <a href="login.php">Login here</a></p>
		</form>
	<?php
	}
	?>
</body>

</html>