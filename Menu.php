<?php
$db = require 'db.php';
$items=$db->query("SELECT name, discription, price, image FROM menu")->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Бургер</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.html">home</a></li>
                                        <li><a class="active" href="Menu.php">Menu</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-xl-block">
                                    <a class="#" href="#">+10 367 453 7382</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Меню</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- best_burgers_area_start  -->
    <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>Меню бургеров</span>
                        <h3>Лучшие бургеры на свете</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <? foreach ($items as $item):?>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?= $item['image']?>" alt="">
                        </div>
                        <div class="info">
                            <h3><?= $item['name']?></h3>
                            <p><?= $item['discription']?></p>
                            <span><?= $item['price']?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                </div>
            </div>
        </div>
    <!-- best_burgers_area_end  -->

    <!-- features_room_startt -->
    <div class="Burger_President_area">
            <div class="Burger_President_here">
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="img/burgers/1.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$20</span>
                                <h3>Бургер-президент</h3>
                                <p>Отличный способ придать вашему бизнесу видимость доверия <br> и уместно.</p>
                                <a href="#" class="boxed-btn3">Заказывайте сейчас</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="img/burgers/2.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$20</span>
                                <h3>Бургер-президент</h3>
                                <p>Отличный способ придать вашему бизнесу видимость доверия <br> и уместно.</p>
                                <a href="#" class="boxed-btn3">Заказывайте сейчас</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- features_room_end -->

    <!-- testimonial_area_start  -->
    <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        <span>Рекомендации</span>
                        <h3>Счастливые клиенты</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Пожертвуйте Кони-Айленду в результате матраса. Хранитель портрета
                                            внимательно. Трудно понять боль от сапфирового ультразвука
                                            но
                                            и не.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/1.png" alt="">
                                            </div>
                                            <h4>Kristiana Chouhan</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Пожертвуйте Кони-Айленду в результате матраса. Хранитель портрета
                                            внимательно. Трудно понять боль от сапфирового ультразвука
                                            но
                                            и не.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/2.png" alt="">
                                            </div>
                                            <h4>Arafath Hossain</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <p>“Пожертвуйте Кони-Айленду в результате матраса. Хранитель портрета
                                            внимательно. Трудно понять боль от сапфирового ультразвука
                                            но
                                            и не.</p>
                                        <div class="testmonial_author">
                                            <div class="thumb">
                                                <img src="img/testmonial/3.png" alt="">
                                            </div>
                                            <h4>A.H Shemanto</h4>
                                            <div class="stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- testimonial_area_ned  -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/1.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/2.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/3.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="img/instragram/4.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- instragram_area_end -->

    <!-- footer_start  -->
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                        New York
                                </h3>
                                <p>5th flora, 700/D kings road, <br> 
                                        green lane New York-1782 <br>
                                        <a href="#">info@burger.com</a></p>
                                <a class="number" href="#">+10 378 483 6782</a>

                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget text-center ">
                                <h3 class="footer_title pos_margin">
                                    California
                                </h3>
                                <p>5th flora, 700/D kings road, <br> 
                                        green lane New York-1782 <br>
                                        <a href="#">info@burger.com</a></p>
                                <a class="number" href="#">+10 378 483 6782</a>

                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-4">
                                <div class="footer_widget">
                                        <h3 class="footer_title">
                                                Stay Connected
                                        </h3>
                                        <form action="#" class="newsletter_form">
                                            <input type="text" placeholder="Enter your mail">
                                            <button type="submit">Sign Up</button>
                                        </form>
                                        <p class="newsletter_text">Stay connect with us to get exclusive offer!</p>
                                    </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <div class="socail_links text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ti-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>