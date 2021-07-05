<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Profile Page</title>
	<!-- <link rel="stylesheet" href="style.css" /> -->
	<link rel="stylesheet" href="profile_styles.css" />
	<style>
		body {
			text-align: center;
		}

		h2 {
			font-family: Verdana, Geneva, Tahoma, sans-serif;
		}

		table {
			border-collapse: collapse;
			border-radius: 9px;
			border-style: hidden;
			/* hide standard table (collapsed) border */
			box-shadow: 0 0 0 1px #666;
			/* this draws the table border  */

			width: 100%;
			border-collapse: collapse;
			max-width: 900px;
			margin: auto;
		}

		tr {
			height: 55px;
			border-bottom: 1px lightslategrey solid;
		}

		.key {
			width: 50%;
			text-align: center;
			font-family: Verdana, Geneva, Tahoma, sans-serif;
		}

		.value {
			font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
				sans-serif;
			text-align: left;

			color: lightslategrey;
		}

		button {
			margin: 20px;
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			color: whitesmoke;
			border: hidden;
			background-color: tomato;
			border-radius: 4px;
			padding: 10px;
			cursor: pointer;
		}
	</style>

</head>

<body>
	<div class="form">

		<h2>Profile Page</h2>

		<!-- <p><a href="logout.php">Logout</a></p> -->

	</div>
	<table>
		<tr>
			<td class="key">First Name</td>
			<td class="value"><?php echo $_SESSION['fname']; ?></td>
		</tr>

		<tr>
			<td class="key">Last Name</td>
			<td class="value"><?php echo $_SESSION['lname']; ?></td>
		</tr>

		<tr>
			<td class="key">Gender</td>
			<td class="value"><?php echo $_SESSION['gender']; ?></td>
		</tr>

		<tr>
			<td class="key">Date of Birth</td>
			<td class="value"><?php echo $_SESSION['dob']; ?></td>
		</tr>

		<tr>
			<td class="key">Phone Number</td>
			<td class="value"><?php echo $_SESSION['phone']; ?></td>
		</tr>

		<tr>
			<td class="key">Preffered Language</td>
			<td class="value"><?php echo $_SESSION['lang']; ?></td>
		</tr>

		<tr>
			<td class="key">Country</td>
			<td class="value"><?php echo $_SESSION['country']; ?></td>
		</tr>

		<tr>
			<td class="key">State</td>
			<td class="value"><?php echo $_SESSION['state']; ?></td>
		</tr>

		<tr>
			<td class="key">Coll</td>
			<td class="value"><?php echo $_SESSION['coll']; ?></td>
		</tr>

		<tr>
			<td class="key">Univ</td>
			<td class="value"><?php echo $_SESSION['univ']; ?></td>
		</tr>
	</table>
	<button onclick="location.href = 'logout.php';">Log Out !</button>
	<!-- <button onclick="location.href = 'http://localhost:8000/';">Search Courses !</button> -->

</body>

</html>