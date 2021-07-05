
<?php extract($_POST);
$msg = "Sign Up Success";
if (empty($name)) {
	$msg = "Name is required";
}

if (empty($email)) {
	$msg = "Email is required";
}

if (!(strpos($email, ".com") || strpos($email, ".in"))) {
	$msg = "Invalid Email";
}


if (empty($interests)) {
	$msg = "";
}

if (empty($gender)) {
	$msg = "Gender is required";
}
echo $msg;
?>