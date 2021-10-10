<?php
include "connection.inc.php";
$query = mysqli_query($conn,"select * from categories");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>
    <!-----------------------Header Part------------------------->
    <div class="toggleForm">
        <div class="lbtn" onclick="lFormClose()"></div>
        <div class="box">
            <div class="titleText">
                <h1>Login</h1>
            </div>
            <form>
                <input type="text" name="uname" placeholder="Email" class="form-data" required>
                <input type="password" name="uname" placeholder="Password" class="form-data" required>
                <input type="submit" name="login" value="Login" class="login">
                <a href="#">Forget Password ?</a>
            </form>
        </div>
    </div>
    <div class="rtoggleForm">
        <div class="lbtn" onclick="rFormClose()"></div>
        <div class="box">
            <div class="titleText">
                <h1>Register</h1>
            </div>
            <form>
                <input type="text" name="uname" placeholder="Full Name" class="form-data" required>
                <input type="text" name="email" placeholder="Email" class="form-data" required>
                <input type="text" name="mnumber" placeholder="MobileNumber" class="form-data" required>
                <input type="password" name="pswd" placeholder="Password" class="form-data" required>
                <input type="submit" name="login" value="Register" class="login">
                <a href="#">Forget Password ?</a>
            </form>
        </div>
    </div>

    <nav>
        <a href="#" class="logo">WINHORN</a>
        <ul class="nav-wrap">
            <li><a href="#">Home</a></li>
            <?php
                while($data = mysqli_fetch_assoc($query)){
                    echo " 
                    <li><a href='".$data['id']."'>".$data['catname']."</a></li>
                    ";
                }
            ?>
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
    </section>