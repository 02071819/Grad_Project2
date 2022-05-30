<?php
include "top.inc.php";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./css/badminton.css">
</head>

<body>
    <!-- intro-area -->
    <section class="main-section">
        <div class="main-container">
            <div class="left-content">
                <div class="text-area">
                    <div class="title-area">
                        <div class="title1">
                            <h1>羽球</h1>
                        </div>
                        <div class="title2">
                            <h1>專區</h1>
                        </div>
                        <div class="intro-area">
                            <p>秉持最好的職業精神，用細心和嚴謹地態度以及最高的品質完成一支支的球拍。超過三十年的穿線經驗的老師傅，嫻熟的操作穿線機並用最少的時間給顧客最好的服務
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <img src="./images/502994.jpg" alt="" class="right-content">
        </div>
        <!-- brand -->
        <div class="brand-title">
            <h2>與各大<span style="color:#5788B6">羽球</span>品牌合作</h2>
        </div>
        <div class="brand-content">
            <div class="brand1">
                <img src="./images/badminton_icon1.png" alt="" class="imgbox1">
            </div>
            <div class="brand2">
                <img src="./images/badminton_icon2.png" alt="" class="imgbox2">
            </div>
            <div class="brand3">
                <img src="./images/badminton_icon3.png" alt="" class="imgbox3">
            </div>
        </div>
        <!-- 流程section -->
        <div class="brand-title2">
            <h2>店家服務<span style="color:#5788B6">流程</span></h2>
        </div>
        <div class="process-content">
            <div data-aos="fade-up" class="process1">
                <img src="./images/badminton_service1.jpg" alt="" class="imgbox4">
                <div class="text4">
                    <h2>選擇球拍</h2>
                    <p>選擇你需要的羽球拍，有YY、KAWASAKI品牌的球拍，可以選擇適合你的球拍，依照價格、品牌、樣式，
                        一定可以找到你喜歡的!</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="process2">
                <img src="./images/badminton_service2.jpg" alt="" class="imgbox5">
                <div class="text5">
                    <h2>拍線樣式</h2>
                    <p>選完球框後即可選擇你要的拍線樣式，不同磅數代表網面的軟硬度不同而你可以依照自己習慣的或是想嘗試看看不同種類的拍線，選好磅數
                        後可以交給老師傅或是其他工作人員替你服務。
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="1000" class="process3">
                <img src="./images/badminton_service3.jpg" alt="" class="imgbox6">
                <div class="text6">
                    <h2>穿線服務</h2>
                    <p class="">選好樣式就可以留下你的電話和姓名還有註記要預計拿取的時間，等時間到就可以來取貨囉，如果之後需要換線或者是更新配件等等歡迎再到門市來服務。</p>
                </div>
            </div>
        </div>
        <!--最下方賣場連結  -->
        <section class="intro-section">
            <div data-aos="fade-right" data-aos-delay="-500" class="left-button">
                <a class="button-link" href="./index.php">
                    <h2>立即參觀選購</h2>
                </a>
            </div>
            <div data-aos="fade-left" class="right-lottie"></div>
        </section>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

<?php
include "footer.inc.php"
?>