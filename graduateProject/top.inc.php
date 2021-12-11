<!-- index.php的上半部 -->
<?php
include "connection.inc.php";
include "function.inc.php";
$query = mysqli_query($conn, "select * from categories");
$subquery = mysqli_query($conn, "select * from subcategories");

$ip = getIP();
$cart = mysqli_query($conn, "select * from guest_cart where ip_address = '$ip'");
$num = mysqli_num_rows($cart);
?>

<!DOCTYPE html>
<html lang="en">

<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文宏運動用品店</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- 加入slick套件 12/9-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!-- product slider css -->
    <link rel="icon" type="image/png" href="/img/WHlogo-719px.png">
    <script src="https://kit.fontawesome.com/8851e3786a.js" crossorigin="anonymous"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        <a href="index.php" class="logo">WINHORN</a>
        <ul class="nav-wrap">

            <ul class="nav-list">
                <li class="nav-item">
                    <a href="" class="nav-link">品牌列表</a>
                    <div class="sublist-container">
                        <ul class="sub-list">
                            <?php
                            while ($data = mysqli_fetch_assoc($query)) {
                                echo " 
                                        <li><a href='categories.php?cat_id=" . $data['id'] . "'>" . $data['catname'] . "</a></li>
                                    ";
                            }
                            ?>
                        </ul>

                        <ul class="sub-list2">
                            <?php
                            while ($data = mysqli_fetch_assoc($subquery)) {
                                echo " 
                                        <li><a href='subcategories.php?subcat_id=" . $data['id'] . "'>" . $data['subname'] . "</a></li>
                                    ";
                            }
                            ?>

                        </ul>

                    </div>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">專業運動</a>
                    <div class="sublist-container2">
                        <ul class="sub-list">
                            <li class="sub-item">
                                <a href="" class="sub-link">球類用品</a>
                                <ul class="subsub-list">
                                    <li class="subsub-item"><a href="" class="subsub-link">籃球</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">棒球</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">排球</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">羽毛球</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">網球</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">桌球</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">足球</a></li>
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link"></a></li> -->
                                </ul>
                            </li>
                            <li class="sub-item">
                                <a href="" class="sub-link">訓練器材</a>
                                <ul class="subsub-list">
                                    <li class="subsub-item"><a href="" class="subsub-link">啞鈴</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">彈力帶</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">瑜珈墊</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">滾筒</a></li>
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link"></a></li> -->
                                </ul>
                            </li>
                            <li class="sub-item"><a href="" class="sub-link">登山器具</a>
                                <ul class="subsub-list">
                                    <li class="subsub-item"><a href="" class="subsub-link">登山服飾</a></li>
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link">登山褲</a></li> -->
                                    <li class="subsub-item"><a href="" class="subsub-link">登山鞋</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">登山杖</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">背包</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">睡袋</a></li>
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link">帳篷</a></li> -->
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link"></a></li> -->
                                </ul>
                            </li>
                            <li class="sub-item"><a href="" class="sub-link">自行車</a>
                                <ul class="subsub-list">
                                    <li class="subsub-item"><a href="" class="subsub-link">自行車衣</a></li>
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link">登山褲</a></li> -->
                                    <li class="subsub-item"><a href="" class="subsub-link">自行車褲</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">配件</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">背包</a></li>
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link">睡袋</a></li> -->
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link">帳篷</a></li> -->
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link"></a></li> -->
                                </ul>
                            </li>
                            <li class="sub-item"><a href="" class="sub-link">游泳</a>
                                <ul class="subsub-list">
                                    <li class="subsub-item"><a href="" class="subsub-link">泳衣</a></li>
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link">登山褲</a></li> -->
                                    <li class="subsub-item"><a href="" class="subsub-link">泳褲</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">配件</a></li>
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link"></a></li> -->
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link">睡袋</a></li> -->
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link">帳篷</a></li> -->
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link"></a></li> -->
                                </ul>
                            </li>
                            <li class="sub-item"><a href="" class="sub-link">滑板</a>
                                <ul class="subsub-list">
                                    <li class="subsub-item"><a href="" class="subsub-link">滑板</a></li>
                                    <!-- <li class="subsub-item"><a href="" class="subsub-link">登山褲</a></li> -->
                                    <li class="subsub-item"><a href="" class="subsub-link">蛇板</a></li>
                                    <li class="subsub-item"><a href="" class="subsub-link">雙龍板</a></li>
                                </ul>
                            </li>
                            <li class="sub-item"><a href="" class="sub-link">直排輪</a></li>
                            <!-- <li class="sub-item"><a href="" class="sub-link">直排輪</a></li> -->
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">棒球專區</a>
                </li>
                <li class="nav-item">
                    <a href="./badminton.php" class="nav-link">羽毛球專區</a>
                </li>
                <li class="nav-item">
                    <a href="./story.php" class="nav-link">文宏故事屋</a>
                </li>
            </ul>

        </ul>
        <!-- Search part -->
        <!-- <div class="search-form">
            <form>
                <input type="text" name="search-text" class="inputData" placeholder="Search">
                <button type="submit" class="search-botton"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="search-icon" onclick="search()"><i class="fas fa-search"></i></div> -->


        <!-- Login part -->
        <div class="right-items">
            <a href="javascript:void(0)" onclick="lForm()">Login</a>
            <a href="javascript:void(0)" onclick="rForm()">Sign Up</a>
            <a href="cart-page.php"><i class="fas fa-shopping-cart"></i><sup><?php echo $num ?></sup></a>
        </div>
    </nav>




    <!--HeadPic-->
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