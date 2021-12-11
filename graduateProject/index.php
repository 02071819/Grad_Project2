<?php
include "connection.inc.php";
include "top.inc2.php";
// include "function.inc.php";
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/product-slider-style.css">
</head>


<body>
    <!-- header end -->
    <div class="banner_slider">
        <div><img src="./images/商品服務1.jfif" alt=""></div>
        <div><img src="./images/商品服務照4.jfif" alt=""></div>
        <div><img src="./images/商品服務照5.jfif" alt=""></div>
    </div>
    <div class="home-page-container">
        <h2 class="page-title">文宏運動用品</h2>
        <div class="home-page-intro">
            <p>在員林服務超過五十年的運動用品店<br>我們用心提供值得信賴的品牌及服務 !</p>
            <!-- <a class="home-page-button" href="">了解更多</a> -->
        </div>
        <div class="home-page-container2">
            <ul class="box-area">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="page-title2">
            <h2>關於文宏運動用品</h2>
            <p>員林歷史最悠久的文宏運動用品店，我們用心提供值得信賴的品牌及服務!<br>
                公司主要的營業項目是經銷全世界知名的運動品牌。<br>堅持好品質致力於追求活力與健康，
                提供所有熱愛戶外運動探索生命的人們最全面的運動用品。</p>
        </div>
    </div>
    <!--home-container -->

    <div class="news-container">
        <h1>最新消息</h1>
        <div class="news-slider" data-aos="flip-up" data-aos-duraiton="5000" data-aos-delay="100">
            <div class="sliders">
                <!-- radio button  -->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!-- slide img -->
                <div class="slide first">
                    <img src="./images/sports pt1.png" alt="">
                </div>
                <div class="slide">
                    <img src="./images/sports pt2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./images/sports pt3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./images/sports pt4.jpg" alt="">
                </div>
                <!-- automatic navigation -->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>
            </div>

            <!-- manual navigation -->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>

            <script class="news-slide" type="text/javascript">
                var counter = 1;
                setInterval(function() {
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if (counter > 4) {
                        counter = 1;
                    }
                }, 5000);
            </script>
        </div>
    </div>
    <div class="space"></div>

    <div class="brand">
        <div class="br-container">
            <img src="./images/nike logo.png" alt="">
        </div>
        <div class="br-container">
            <img src="./images/adidas logo.png" alt="">
        </div>
        <div class="br-container">
            <img src="./images/mizuno logo.png" alt="">
        </div>
        <div class="br-container">
            <img src="./images/lotto logo.jpg" alt="">
        </div>
        <div class="br-container">
            <img src="./images/keds logo.png" alt="">
        </div>

    </div>
    <div class="space"></div>

    <div class="new-product">
        <div class="slideshow-container">
            <div class="slide-product slider-fade">
                <!-- <div class="nembertext">1/3</div> -->
                <div class="slide-product1">
                    <img class="product-img" src="./images/adidas white.png" alt="">
                </div>
                <div class="slide-product-container slider-fade">
                    <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="Item">
                        <img src="./images/shoe1.jpg" alt="">
                        <div class="item-info">
                            <h1>Heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda doloribus beatae
                                rerum laborum id quod eum ipsam adipisci porro a, dolor amet facere quam est?
                                Consequuntur, aperiam! Numquam, sequi?</p>
                            <a href="#" class="item-btn">Read More</a>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="Item">
                        <img src="./images/shoe2.jpg" alt="">
                        <div class="item-info">
                            <h1>Heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda doloribus beatae
                                rerum laborum id quod eum ipsam adipisci porro a, dolor amet facere quam est?
                                Consequuntur, aperiam! Numquam, sequi?</p>
                            <a href="#" class="item-btn">Read More</a>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="Item">
                        <img src="./images/shoe3.jpg" alt="">
                        <div class="item-info">
                            <h1>Heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda doloribus beatae
                                rerum laborum id quod eum ipsam adipisci porro a, dolor amet facere quam est?
                                Consequuntur, aperiam! Numquam, sequi?</p>
                            <a href="#" class="item-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="product-readmore">
                    <button class="btn readmore-btn1">查看更多</button>
                </div>
                <!-- <div class="slide-product-text">Caption text</div> -->
            </div>
            <div class="slide-product slider-fade">
                <!-- <div class="nembertext">2/3</div> -->
                <div class="slide-product2">
                    <img class="product-img" src="./images/nike white.png" alt="" style="top:4%">
                </div>
                <div class="slide-product-container slider-fade">
                    <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="Item">
                        <img src="./images/shoe1.jpg" alt="">
                        <div class="item-info">
                            <h1>Heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda doloribus beatae
                                rerum laborum id quod eum ipsam adipisci porro a, dolor amet facere quam est?
                                Consequuntur, aperiam! Numquam, sequi?</p>
                            <a href="#" class="item-btn">Read More</a>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="Item">
                        <img src="./images/shoe2.jpg" alt="">
                        <div class="item-info">
                            <h1>Heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda doloribus beatae
                                rerum laborum id quod eum ipsam adipisci porro a, dolor amet facere quam est?
                                Consequuntur, aperiam! Numquam, sequi?</p>
                            <a href="#" class="item-btn">Read More</a>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="Item">
                        <img src="./images/shoe3.jpg" alt="">
                        <div class="item-info">
                            <h1>Heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda doloribus beatae
                                rerum laborum id quod eum ipsam adipisci porro a, dolor amet facere quam est?
                                Consequuntur, aperiam! Numquam, sequi?</p>
                            <a href="#" class="item-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="product-readmore">
                    <button class="btn readmore-btn1">查看更多</button>
                </div>
                <!-- <div class="slide-product-text">Caption text</div> -->
            </div>
            <div class="slide-product slider-fade">
                <!-- <div class="nembertext">3/3</div> -->
                <div class="slide-product3">
                    <img class="product-img" src="./images/lotto logo white.png" alt="" style="top:4%">
                </div>
                <div class="slide-product-container slider-fade">
                    <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="Item">
                        <img src="./images/shoe1.jpg" alt="">
                        <div class="item-info">
                            <h1>Heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda doloribus beatae
                                rerum laborum id quod eum ipsam adipisci porro a, dolor amet facere quam est?
                                Consequuntur, aperiam! Numquam, sequi?</p>
                            <a href="#" class="item-btn">Read More</a>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="Item">
                        <img src="./images/shoe2.jpg" alt="">
                        <div class="item-info">
                            <h1>Heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda doloribus beatae
                                rerum laborum id quod eum ipsam adipisci porro a, dolor amet facere quam est?
                                Consequuntur, aperiam! Numquam, sequi?</p>
                            <a href="#" class="item-btn">Read More</a>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="Item">
                        <img src="./images/shoe3.jpg" alt="">
                        <div class="item-info">
                            <h1>Heading</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda doloribus beatae
                                rerum laborum id quod eum ipsam adipisci porro a, dolor amet facere quam est?
                                Consequuntur, aperiam! Numquam, sequi?</p>
                            <a href="#" class="item-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="product-readmore">
                    <button class="btn readmore-btn1">查看更多</button>
                </div>
                <!-- <div class="slide-product-text">Caption text</div> -->
            </div>

            <a class="slide-product-prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="slide-product-next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <div style="text-align: center;">
            <span class="dot" onclick="currentSlides(1)"></span>
            <span class="dot" onclick="currentSlides(2)"></span>
            <span class="dot" onclick="currentSlides(3)"></span>
            <!-- <span class="dot" onclick="currentSlides(4)"></span> -->
        </div>
    </div>


    <div class="space"></div>

    <div class="com-container">
        <div class="com-img-slider" data-aos="fade-right" data-aos-duraiton="5000" data-aos-delay="200">
            <a href="">
                <div class="com-bg">
                    <!-- <h1>來<br>去<br>逛<br>逛</h1>     -->
                </div>
            </a>
        </div>
        <div data-aos="zoom-in" data-aos-duraiton="5000" data-aos-delay="200" class="com-info">
            <div class="com-info-h">
                <h1>Shop The Look</h1>
            </div>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="./images/shoe1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>PG 5 EP</h5>
                            <p>$3,800</p>
                            <a href="" class="more-button">了解更多</a>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./images/shoe2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Zoom Freak 2</h5>
                            <p>$4,180</p>
                            <a href="" class="more-button">了解更多</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/shoe3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kyrie 7 EP</h5>
                            <p>$4,200</p>
                            <a href="" class="more-button">了解更多</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <!-- 商品slider start -->

        <!-- <div class="slide hi-slide">
            <div class="hi-prev"></div>
            <div class="hi-next"></div>
            <ul>
                <li><img src="/img/com-img2.jpg" alt=""></li>
                <li><img src="/img/com-img3.jpg" alt=""></li>
                <li><img src="/img/com-img4.jpg" alt=""></li>
                <li><img src="/img/com-img5.jpg" alt=""></li>
                <li><img src="/img/com-img6.jpg" alt=""></li>
            </ul>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="/hislide/jquery.hislide.js"></script>
        <script>
            $('.slide').hiSlide();
        </script> -->

        <!-- 商品slider end -->

    </div>

    <!-- <div class="space"></div> -->

    <div class="space"></div>

    <?php
    include "footer.inc.php";
    ?>

    <!-- 加入slick.js 12/9 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.banner_slider').slick({
            // dots: true,
            infinite: true,
            // speed: 500,
            autoplay: true,
            autoplaySpeed: 2000,
            fade: true,
            cssEase: 'linear',
            arrows: false,
        });
    </script>
    <script src="./js/product-slider-script.js"></script>
    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>