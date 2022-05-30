<?php
session_start();
include "connection.inc.php";
$user_id = $_SESSION['id'];
if(isset($user_id)) {
    echo 1;
}else{
    echo 0;
}
?>