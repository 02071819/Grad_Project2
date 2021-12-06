<?php
include "top.inc.php";
// include "function.inc.php";
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>

<body>
    <nav>
        <a href="#" class="logo">WINHORN</a>
        <ul class="nav-wrap">
            <li><a href="#">Home</a></li>
            <li><a href="#">Shoes</a></li>
            <li><a href="#">Clothes</a></li>
            <li><a href="#">Accessories</a></li>
        </ul>
        <div class="search-form">
            <form>
                <input type="text" name="search-text" class="input-data" placeholder="Search">
                <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="search-icon" onclick="search()"><i class="fas fa-search"></i></div>
        <div class="right-items">
            <a href="javascript:void(0)" onclick="lForm()">Login</a>
            <a href="javascript:void(0)" onclick="rForm()">Sign Up</a>
            <a href="#"><i class="fas fa-shopping-cart"></i><sup>0</sup></a>
        </div>
    </nav>

    <section class="header">
        <div class="content">
            <div class="col50">
                <h1 class="hero-title">Lorem ipsum, dolor sit amet </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quibusdam
                    consectetur asperiores dolorem quas! Exercitationem nisi repellat sint natus impedit.</p>
                <a href="#" class="hero-btn btn">Shop Now</a>
            </div>
            <div class="Headpic">
                <div class="imgBx">
                    <img src="images/shoes01.png">
                </div>
            </div>
        </div>
    </section> -->

<div class="cartTable">
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        <?php
        $ip = getIP();
        $cartSql = "SELECT * FROM `guest_cart` WHERE `ip_address` = '$ip'";
        $con = mysqli_query($conn, $cartSql);
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
                                <small>Price: $<?php echo $data['sprice'] ?></small>
                                <br>
                                <a href="add_cart.php?id=<?php echo $row['id'] ?>">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><?php echo $row['qty'] ?></td>
                    <td>$<?php echo $sub_total ?></td>
                </tr>
        <?php }
        } else {
            echo "Cart empty !";
        } ?>



        <!-- <tr>
                <td>
                    <div class="cart-info">
                        <img src="./images/shoes_3.jpg" width="80px">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $1000.00</small>
                            <br>
                            <a href="#">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" name="" value="1"></td>
                <td>$1000.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="./images/shoes_3.jpg" width="80px">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $1000.00</small>
                            <br>
                            <a href="#">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" name="" value="1"></td>
                <td>$1000.00</td>
            </tr> -->
    </table>

    <div class="total_price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$<?php echo $Total_price ?></td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$110</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$<?php echo $Total_total ?></td>
            </tr>
        </table>
    </div>
    <div class="checkoutbtn">
        <a href="index.php" class="check-btn">Continue Shopping</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="button" class="check-btn"><span></span>checkout</button>
    </div>
</div>


<?php
include "footer.inc.php"
?>