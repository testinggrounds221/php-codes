<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Dashboard - Client area</title>
	<!-- <link rel="stylesheet" href="style.css" /> -->
	<link rel="stylesheet" href="profile_styles.css" />

</head>

<body>
	<div class="form">
		<!-- <p>Hey, <?php echo $_SESSION['username']; ?>!</p> -->
		<p>You are in user dashboard page.</p>
		<p><a href="logout.php">Logout</a></p>
	</div>
	<div class="container">
		<header>
			<i class="fa fa-bars" aria-hidden="true"></i>
		</header>
		<main>
			<div class="row">
				<div class="left col-lg-4">
					<div class="photo-left">
						<img class="photo" src="https://images.pexels.com/photos/1804796/pexels-photo-1804796.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
						<div class="active"></div>
					</div>
					<?php echo $_SESSION['country']; ?>
					<h4 class="name">Jane Doe</h4>
					<h4 class="name"></h4>
					<?php echo $_SESSION['username']; ?>


					<div class="stats row">
						<div class="stat col-xs-4" style="padding-right: 50px;">
							<p class="number-stat">3,619</p>
							<p class="desc-stat"><?php echo $_SESSION['univ']; ?></p>
						</div>
						<div class="stat col-xs-4">
							<p class="number-stat">42</p>
							<p class="desc-stat"><?php echo $_SESSION['coll']; ?></p>
						</div>
						<div class="stat col-xs-4" style="padding-left: 50px;">
							<p class="number-stat">38</p>
							<p class="desc-stat">Uploads</p>
						</div>
					</div>
					<p class="desc">Hi ! My name is Jane Doe. I'm a UI/UX Designer from Paris, in France. I really enjoy photography and mountains.</p>
					<div class="social">
						<i class="fa fa-facebook-square" aria-hidden="true"></i>
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
						<i class="fa fa-pinterest-square" aria-hidden="true"></i>
						<i class="fa fa-tumblr-square" aria-hidden="true"></i>
					</div>
				</div>

		</main>
	</div>
</body>

</html>