<?php 

include "connection.inc.php";

session_start();
error_reporting(0);

$user_id=$_SESSION['id'];

// if (isset($_SESSION['uname'])) {
//     header("Location: index.php");
// }

$email = $_POST['email'];
$password = md5($_POST['password']);

$check = mysqli_query($conn, "select * from user_registration where email='$email' and password='$password'");
$num = mysqli_num_rows($check);

if ($num > 0) {
	$data=mysqli_fetch_assoc($check);
	$_SESSION['id']=$data['user_id'];
	echo 1;
} else {
	echo 0;
}


// if (isset($_POST['submit'])) {
// 	$email = $_POST['email'];
// 	$password = md5($_POST['password']);

// 	$sql = "SELECT * FROM user_registration WHERE email='$email' AND password='$password'";
// 	$result = mysqli_query($conn, $sql);
// 	if ($result->num_rows > 0) {
// 		$row = mysqli_fetch_assoc($result);
// 		$_SESSION['id'] = $row['user_id'];
// 		header("Location: index.php");
// 	} else {
// 		echo "<script>alert('Email或密碼輸入錯誤喔 !')</script>";
// 	}
// }
?>