<?php
include "top.inc2.php";
// include "function.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>羽球拍專區</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/未命名-3_工作區域 1.png">

    <link rel="stylesheet" href="./css/badminton.css">
</head>

<body>
    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/pexels-eric-anada-3660204.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/pexels-leo-zhao-5767580.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./images/pexels-vladislav-vasnetsov-2202685.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel-end -->
    <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top ">
        <a class="navbar-brand" href="#"><img class="image1" src="../img/未命名-3.png" alt="">
            <alt="">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#introsection">商品首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#introsection2">衣著服飾</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#introsection3">羽球拍專區</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#introsection4">文宏故事屋</a>
                </li>
            </ul>
        </div>
    </nav> -->
    <!-- 首頁圖片 -->
    <!-- <section class="header-container">
        <div class="banner">
            <img src="/img/muktasim-azlan-rjWfNR_AC5g-unsplash-1.jpg" alt="">
        </div>
        <div class="header-container-button">
            <a class="button-link" href="/html/storyhome.html" target="_blank">
                <div class="button">
                    <p> 前往賣場</p>
                </div>
            </a>
            <a class="button-link" href="/html/storyhome.html" target="_blank" rel="noopener noreferrer">
                <div class="button">
                    <p> 了解更多</p>
                </div>
            </a>
        </div>
    </section> -->
    <!-- 按鈕導覽 -->
    <!-- !! 標題:品牌介紹 -->
    <div class="title">
        <h1>新品介紹</h1>
    </div>
    <!-- <div class="line-slogan"></div> -->
    <!--品牌內容卡片-->
    <section class="container">
        <div class="container-box">
            <div class="container-box-img">
                <img class="img2" src="./images/KBA0500RD(3).jpg" alt="">
            </div>
            <a class="container-box-button" href="">
                <p>了解詳情</p>
            </a>
        </div>
        <div class="container-box">
            <div class="container-box-img">
                <img class="img2" src="./images/384844B502B2AC192F98D5413BE4F5D9E9F50A99.jpg" alt="">
            </div>
            <a class="container-box-button" href="">
                <p>了解詳情</p>
            </a>
        </div>
        <div class="container-box">
            <div class="container-box-img">
                <img class="img2" src="./images/1BA10100C0-SP-9406712.jpg" alt="">
            </div>
            <a class="container-box-button" href="">
                <p>了解詳情</p>
            </a>

        </div>
    </section>
    <!-- !! 標題:穿線介紹 -->
    <div class="title">
        <h1>穿線服務</h1>
    </div>
    <!--老師傅介紹-->
    <section class="section">
        <div class="section-img">
            <img data-aos="fade-left" data-aos-duration="500" src="./images/502994.jpg" alt="...">
        </div>
        <!-- <div class="section-button">
            <a href="#section1">
                <div class="box">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
        </div> -->
        <div class="section-slogan">
            <p data-aos="fade-right" data-aos-duration="1000">
                秉持最好的職業精神，用細心和嚴謹地態度以及最高的品質完成一支支的球拍;超過三十年的穿線經驗的老師傅，嫻熟的操作穿線機並用最少的時間給顧客最好的服務</p>
        </div>

    </section>
    <!-- !! 標題:服務介紹 -->
    <!-- <div class="title">
        <h1>服務介紹</h1>
    </div> -->
    <div class="line-slogan"></div>
    <!-- 流程圖 -->
    <article class="card-list" id="section1">
        <!-- 區塊一 -->
        <div data-aos="fade-up" class="card">
            <!-- TODO:上方圓形圖片 -->
            <img class="square gap " src="./images/IMG_8469a.jpg" alt="">
            <!-- TODO:下方介紹文字 -->
            <div class="card-content">
                <h2>選擇球拍</h2>
                <p>選擇你需要的羽球拍，有YY、KAWASAKI品牌的球拍，可以選擇適合你的球拍，依照價格、品牌、樣式，
                    一定可以找到你喜歡的!</p>
            </div>

        </div>
        <!-- 區塊二 -->
        <div data-aos="fade-up" data-aos-delay="500" class="card">
            <!-- 上方圓形圖片 -->
            <img class="square gap" src="./images/IMG_8472a.jpg" alt="">
            <!-- TODO:下方介紹文字 -->
            <div class="card-content">
                <h2>拍線樣式</h2>
                <p>選完球框後即可選擇你要的拍線樣式，不同磅數代表網面的軟硬度不同而你可以依照自己習慣的或是想嘗試看看不同種類的拍線，選好磅數
                    後可以交給老師傅或是其他工作人員替你服務。
                </p>
            </div>

        </div>
        <!-- 區塊三 -->
        <div data-aos="fade-up" data-aos-delay="1000" class="card">
            <!-- TODO:上方圓形圖片 -->
            <img class="square gap" src="./images/S__31965193a.jpg" alt="">
            <!-- TODO:下方介紹文字 -->
            <div class="card-content">
                <h2>穿線服務</h2>
                <p class="">選好樣式就可以留下你的電話和姓名還有註記要預計拿取的時間，等時間到就可以來取貨囉，如果之後需要換線或者是更新配件等等歡迎再到門市來服務。</p>
            </div>

            <!-- 區塊三 -->
        </div>
    </article>


    <footer class="text-center text-lg-start footer text-light">

        <!-- Section: Links  -->
        <section>
            <div class="container text-center text-md-start mt-5 ">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-4 col-xl-3 mx-auto ">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mt-4 diamond text-style">
                            <i class="fas fa-gem me-3"></i>文宏體育用品社
                        </h6>
                        <p>
                            在員林經營超過五十年的體育用品店在當地為您服務，有非常多的商品和大大小小的優惠在等待您的光顧喔。
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mt-4 text-style">
                            產品介紹
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">訂單流程</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">退換貨流程</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">產品經銷商</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">隱私權條款</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mt-4 text-style">
                            關於我們
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">會員權益</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">羽毛球專區</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">故事屋專區</a>
                        </p>
                        <p>
                            <!-- <a href="#!" class="text-reset">Help</a> -->
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 ">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mt-4 text-style">
                            聯絡我們
                        </h6>
                        <p><i class="fas fa-home me-3"></i> 彰化縣 員林市三民街55號</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            winhorn888@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> (04)-8321588</p>
                        <p><i class="fas fa-hourglass me-3"></i>營業時間 : 10:00~22:00</p>

                        <!-- <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!"
                            role="button"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-floating m-1" style="background-color: #89fa20;" href="#!"
                            role="button"><i class="fab fa-line"></i></a> -->

                    </div>
                    <!-- Grid column -->
                    <div class="qrcord-area">
                        <img class="qrcord-png" src="../img/QR_code.png" alt="">
                        <p>LINE機器人
                        </p>
                    </div>
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <!-- <div class="text-center p-4" style="background-color: rgba(253, 185, 38, 0.829);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div> -->
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- 連結網頁主程式 -->
    <script src="/js/main.js"></script>
    <script src="/js/badmintan.js"></script>
    <script>
        AOS.init({
        });
    </script>
</body>

</html>