<?php
include "connection.inc.php";

$uname = $_POST['uname'];
$email = $_POST['email'];
$mnumber = $_POST['mnumber'];
$password = md5($_POST['password']);

$check = mysqli_query($conn, "select * from user_registration where email='$email'");
$num = mysqli_num_rows($check);

if ($num > 0) {
	echo 1;
} else {
	$sql = "INSERT INTO `user_registration`(`uname`, `email`, `mnumber`, `password`, `create_at`)
			VALUES ('$uname','$email','$mnumber','$password', NOW())";

	if(mysqli_query($conn,$sql)) {
		echo 0;
	}
}

?>