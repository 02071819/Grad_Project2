<?php
include "connection.inc.php";
include "function.inc.php";
if(isset($_POST['cart'])){
    $ip = getIP();
    $id = mysqli_real_escape_string($conn,$_POST['pid']);
    $qty = mysqli_real_escape_string($conn,$_POST['qty']);
    $check = mysqli_query($conn,"select * from guest_cart where pid = '$id'");
    if($num = mysqli_num_rows($check)>0){
        echo "<script>alert('Product already added !')</script>";
        echo "<script>window.open('index.php','_self');</script>";
    }else{
        $query = mysqli_query($conn,"INSERT INTO 
            `guest_cart`(`pid`, `qty`, `create_on`, `ip_address`) VALUES ('$id','$qty',NOW(),'$ip')");
            header("location:index.php");
            die();
    }
}
?>