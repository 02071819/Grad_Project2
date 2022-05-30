<?php
session_start();
include "connection.inc.php";
// include "function.inc.php";

$order_name = $_POST['order_name'];
$order_email = $_POST['order_email'];
$order_phone = $_POST['order_phone'];
$order_address = $_POST['order_address'];
$order_pay = $_POST['order_pay'];


if (isset($_POST['order'])) {

    $id = mysqli_real_escape_string($conn, $_POST['oid']);
    $qty = mysqli_real_escape_string($conn, $_POST['qty']);

    $userCartItem = "SELECT * FROM `user_cart` WHERE `oid` = '$id' AND `qty` = '$qty'";
    $query = mysqli_query($conn, $userCartItem);


    $user_id = $_SESSION['id'];
    if (isset($user_id)) {
        header("location:order.php");
        $query = mysqli_query($conn, "INSERT INTO `user_order`(`order_name`, `order_email`, `order_phone`, `order_address`, `order_pay`, 
    `oid`, `order_user_id`, `qty`, `create_at`) 
    VALUES ('$order_name','$order_email','$order_phone','$order_address','$order_pay','$id','$user_id','$qty',NOW())");
    } else {
        echo 0;
    }
}
