<?php
include "top.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/order.css">
</head>

<body>
    <div class="titleText">
        <h1>您的訂單已成功送出</h1>
    </div>
    <!-- <?php
    $ip = getIP();

    $usercartSql = "SELECT * FROM `user_cart` WHERE `user_id` = '$user_id' and `ip_address` = '$ip'";
    $con = mysqli_query($conn, $usercartSql);
    $check = mysqli_num_rows($con);
    $Total_price = 0;
    $Total_total = 0;
    if ($check > 0) {
        while ($row = mysqli_fetch_assoc($con)) {
            $id = $row['pid'];
            $sql = mysqli_query($conn, "select * from products where id = '$id'");
            $data = mysqli_fetch_assoc($sql);
            $sub_total = $row['qty'] * $data['sprice'];
            $Total_price = $Total_price + $sub_total;
            $Total_total = $Total_price + 110;
    ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="./admin/assets/images/<?php echo $data['pimage'] ?>" width="80px">
                        <div>
                            <p><?php echo $data['pname'] ?></p>
                            <small>數量 : <?php echo $row['qty'] ?></small><br>
                            <small>金額 : $<?php echo $sub_total ?></small>
                        </div>
                    </div>
                </td>
            </tr>
    <?php }
    }
    ?> -->
</body>

</html>

<?php
include "footer.inc.php"
?>