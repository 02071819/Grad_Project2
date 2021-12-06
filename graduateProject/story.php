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
    <title>文宏故事屋</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" type="image/png" href="../img/未命名-3_工作區域 1.png">
    
    <link rel="stylesheet" href="./css/story.css">

</head>

<body>
    <div class="loading-wrapper">
        <div style="color: #fec54f" class="la-timer la-2x loading">
            <div></div>
        </div>
    </div>
    <!-- 時間軸timeline -->
    <!-- <nav class="navbar1">
        <div class="timeline">
            <ul class="timebody">
                <li class="timelist">
                    <a class="aclass" href="#section1">初期</a>
                </li>
                <li class="timelist">
                    <a class="aclass" href="#section2">中期</a>
                </li>
                <li class="timelist">
                    <a class="aclass" href="#section-c">插曲</a>
                </li>
                <li style="border:none ;" class="timelist">
                    <a class="aclass" href="#section8">現在</a>
                </li>
            </ul>
        </div>
    </nav> -->
    <!-- nav end -->

    <!-- 整個story內容 -->
    <div class="story-list">
        <!-- 第一頁"起始"內容 -->
        <div class="story" id="section1">
            <img data-aos="fade-up" data-aos-duration="3000" class="story-img" src="/img/img006.jpg" alt="">
            <div class="story-body">
                <h1 class="story-title">起始點</h1>
                <hr>
                <p class="story-text "> 文宏體育用品的來由始於民國57年的文具用品店
                    “文宏行”，由第一代老闆蕭魏崧先生(圖左)開創，因為當時的大環境很辛苦，自己一個人騎著卡單車在彰化的田尾、二水和永靖地區販售文具、紙張等文具用品，而靠自己辛苦經營到客戶逐漸變多，接洽的人也變得不只有單一人，還有學校單位需要供應，毅然決定在員林這個地方開授店面，並決定賦予”文宏行”這個名字，因為”文宏”這兩個字則是因為以文具販買起家命名，所以有”文”這個字，而”宏”是代表著希望能夠宏圖大展。
                </p>
            </div>
        </div>
        <!-- 第一頁"起始"內容結束 -->

        <!-- 第二頁"中期"內容 (文字在左，圖片再右)-->
        <div class="story2">
            <div data-aos="fade-up" data-aos-duration="3000" class="story-body">
                <h1 class="story-title2">新意萌芽 </h1>
                <hr>
                <p class="story-text">
                    經營文宏行到變成體育用品店則是花了一段時間慢慢轉型而成，因為蕭魏嵩先生在經營的過程中慢慢發現了當時市場的需求，並想嘗試做出一些轉變，想要往體育用品這個方向去做，也在民國80年到德國慕尼黑參加世界體育展覽會後，決定開始做體育用品相關的事業，並在民國87年一月十號在彰化縣員林市光民街號開了文宏體育用品社。
                </p>
            </div>
            <img data-aos="fade-up" data-aos-duration="3000" class="story-img2" data-aos-delay="700"
                src="/img/img005.jpg" alt="">
        </div>
        <!-- 第二頁"中期"內容結束 -->

        <!-- 第三頁"插曲"內容 -->
        <div class="story3" id="section3">
            <img data-aos="fade-up" data-aos-duration="3000" class="story-img3" src="/img/img008.jpg" alt="">
            <div data-aos="fade-up" data-aos-duration="3000" class="story-body">
                <h1 class="story-title">轉型成功 </h1>
                <hr>
                <!-- TODO:改文字內容敘述 -->
                <p class="story-text">
                    開張了新店面之後，生意趨向逐漸穩定，而老闆蕭魏嵩也很高興能夠有這樣成功的轉變，也希望之後的生意能夠越來越好，他認為"人就是應該要努力打拼"去追求自己夢想的一切"。
                </p>
            </div>
        </div>
        <!-- 第三頁"插曲"內容結束 -->

        <!-- ================================穩定的經營================================= -->

        <!-- TODO:新增動畫、改掉下底線的樣式 -->
        <div class="division" id="section2">
            <h1 class="division-title animate__animated animate__bounceInDown animatestyle">穩定的經營</h1>
            <!-- <hr class="division-hr"> -->
        </div>
        <!-- 穩定的經營 -->
        <!-- 第四頁"舊店面"內容 -->
        <!-- TODO:內容重新更改或是維持原樣 -->
        <div class="story4">

            <img data-aos="fade-up" data-aos-duration="3000" class="story-img4" src="/img/文宏照片(舊照)1F_210603_0.png"
                alt="">
            <div data-aos="fade-up" data-aos-duration="3000" class="story-body">
                <h1 class="story-title">持續經營 </h1>
                <hr>
                <p class="story-text">
                    在員林的光明街上有這麼一家店，也期待它能夠一直延續下去。就像畫面上看到的一樣，文宏在那裏用心經營自己的品牌，提供良好的服務，並有著忠實的客群。

                </p>
            </div>
        </div>
        <!-- 第四頁"現今"內容結束 -->
        <!-- 第五頁 -->
        <div class="story5">
            <div data-aos="fade-up" data-aos-duration="3000" class="story-body5">
                <h1 class="story-title">堅信的理念 </h1>
                <hr>
                <!-- TODO:改文字內容敘述 -->
                <p class="story-text">
                    開張了新店面之後，生意趨向逐漸穩定，而老闆蕭魏嵩也很高興能夠有這樣成功的轉變，也希望之後的生意能夠越來越好，他認為"人就是應該要努力打拼"去追求自己夢想的一切"。
                </p>
            </div>
            <img data-aos="fade-up" data-aos-duration="3000" class="story-img5" src="/img/1F_2F 新店內擺設_210613.png"
                alt="">
        </div>

        <!-- ==============================意外的插曲=============================-->
        <div class="division" id="section-c">
            <h1 class="division-title2 animate__animated animate__bounceInDown animatestyle">意外的插曲
            </h1>

            <!-- <hr class="division-hr"> -->
        </div>
        <div class="story">
            <div id="carouselExampleSlidesOnly" class="carousel slide story-img-c carousel-fade  "
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/祝融慘害_210603_0改.png" class="d-block w-100 rounded-3" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/祝融慘害_210613.png" class="d-block w-100 rounded-3" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/祝融慘害_210603_4.png" class="d-block w-100 rounded-3" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/4752071.png" class="d-block w-100 rounded-3" alt="">
                    </div>
                </div>
            </div>
            <!-- <img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="700" class="story-img"
                src="/img/466697.jpg" alt=""> -->
            <div class=" story-body">
                <h1 class="story-title">浴火重生</h1>
                <hr>
                <p class="story-text ">
                    命運有的時候就是喜歡捉弄人，在民國102年，發生了一場意外徹底改變了蕭家的命運，在10月12日的清晨，因為一間商店的疏失導致其他九間同在光民街的商店被一把大火侵蝕，其中就包括了文宏體育用品社，這讓蕭老先生這五十年的心血全都付之一炬，但他和他的兒子蕭鈺書還有家人們並沒有因為這樣沮喪而喪失信心，反而下定決心要捲土重來。「在哪裡跌倒，就在哪裡站起來！」，在大家一同努力之下，花了九個月的時間重新翻新、整修，最後在原地方重新營業，文宏體育用品社又重新站了起來。

                </p>
            </div>
        </div>
        <!-- 第六頁 -->


        <!-- ==============================現在=============================-->
        <div class="division" id="section8">
            <h1 class="division-title animate__animated animate__bounceInDown animatestyle">傳承</h1>
            <!-- <hr class="division-hr"> -->
        </div>
        <div class="story4" id="section4">

            <img data-aos="fade-up" data-aos-duration="3000" class="story-img4" src="/img/20140622003513.png" alt="">
            <div data-aos="fade-up" data-aos-duration="3000" class="story-body">
                <h1 class="story-title">傳承的火炬 </h1>
                <hr>
                <p class="story-text">
                    而歷經這一切的成長、挑戰使得蕭魏嵩先生和
                    他的家人們更加的堅強，而他也可以放心的將傳承的火炬交給自己的下一代，兒子蕭鈺書也說自己會將這個火炬護好，可以讓他很放心的退休，這是文宏的故事而這一切也還沒到終點。


                </p>
            </div>
        </div>
        <!-- 第七頁 -->
        <div class="story5" id="section5">
            <div data-aos="fade-up" data-aos-duration="3000" class="story-body5">
                <h1 class="story-title">遠大的夢想 </h1>
                <hr>
                <!-- TODO:改文字內容敘述 -->
                <p class="story-text">
                    現在的文宏已不是當時的文宏行，卻仍存在他們的心中，蕭老先生也已年邁九十，可是內心的夢依然遠大，他很期盼總有一天後面的子孫可以將文宏推得更遠，推向世界!
                </p>
            </div>
            <img data-aos="fade-up" data-aos-duration="3000" class="story-img5" src="/img/S__31883285.png" alt="">
        </div>
        <!-- 第一頁"起始"內容 -->
        <!-- <div class="story">
            <img data-aos="fade-up" data-aos-duration="3000" data-aos-delay="700" class="story-img"
                src="/img/S__31883285.jpg" alt="">
            <div class=" story-body">
                <h1 class="story-title">起始點</h1>
                <hr>
                <p class="story-text "> 文宏體育用品的來由始於民國57年的文具用品店
                        <strong>“文宏行”</strong>，由第一代老闆蕭魏崧先生(圖左)開創，因為當時的大環境很辛苦，自己一個人騎著卡單車在彰化的田尾、二水和永靖地區販售文具、紙張等文具用品，而靠自己辛苦經營到客戶逐漸變多，接洽的人也變得不只有單一人，還有學校單位需要供應，毅然決定在員林這個地方開授店面，並決定賦予”文宏行”這個名字，因為”文宏”這兩個字則是因為以文具販買起家命名，所以有”文”這個字，而”宏”是代表著希望能夠宏圖大展。
                </p>
            </div>
        </div> -->

        <!-- 第一頁"起始"內容 -->

    </div>

    <!-- story內容 end -->


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
    <script>
        AOS.init({
        });
    </script>
    <script>

        $(document).ready(function () {

            setTimeout(function () {
                $(".loading-wrapper").fadeOut(500);
            }, 1000);
        })</script>
</body>

</html>