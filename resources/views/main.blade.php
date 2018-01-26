<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="utf-8">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{ URL::asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('/bower_components/owl.carousel/dist/assets/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('/assets/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/bower_components/owl.carousel/dist/assets/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('/bower_components/owl.carousel/dist/assets/owl.theme.green.min.css') }}"/>


    <script src="/bower_components/jquery/dist/jquery.min.js" ></script>
    <script type="text/javascript" src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>


</head>
<body>

<div id="top_header">
    <div id="top_header_container">
        <button id="signup_signin_btn">ورود/عضویت</button>
        <div id="gas_station_div">
            <a href="">
                <img id="gas_station_img" src="/assets/images/gas-station.svg">
            </a>
        </div>
        <form id="search_form">
            <input type="text" name="entered_search" placeholder="جست و جوی فیلم، سریال، بازیگران و ...">
            <button class="fa fa-search">
            </button>
        </form>
    </div>
</div>
<div class="my_nav" id="my_navigtion_bar">
    <div class="my_nav" id="my_navigation_bar_container">
        <ul class="my_nav" id="my_navigation_bar_list">
            <li class="my_nav menu_item">
                <a href="">
                    آخرین‌ها
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    فیلم
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    سریال
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    انیمیشن
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    مستند
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    مجموعه‌ها
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    انیمه
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    دوبله
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    زیک‌زاک
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    باکس آفیس
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    آنونس
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
            <li class="my_nav menu_item">
                <a>
                    برترین‌ها
                    <span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div id="middle_div">




    <div class="black_container">
        <div id="main_slider">
            <h3 class="col-lg-12">
                دانلود فیلم،انیمیشن، سریال با ۱۳۶۲۲ عنوان
            </h3>
            <div class="container">
                <div class="input-group ver-father col-lg-6 mr-auto offset-lg-3 ">
                            <span class="input-group-btn flex_child p-1">
                                <button class="btn fantastic-radius-btn purple-b m-1">
                                    <i class="fa fa-search white-f"></i>
                                </button>
                                <button class="btn fantastic-radius-btn green-b mt-1 ml-1 mb-1 mr-1">
                                    <i class="fa fa-search-plus white-f"></i>
                                </button>
                            </span>
                    <input id="search_input" type="text" class="form-control ver-child" placeholder="...جستجوی فیلم، سریال، بازیگر، کارگردان و " style=" height: 80px;text-align: right;direction: rtl; line-height: 2px">

                </div>
                <button class="btn btn-default col-lg-3 offset-lg-3 btn btn-warning" >
                    جستجو
                </button>
            </div>
        </div>


        <div class="carousel_container">
            <div class="carousel_row">
                <ul class="tab-menu menu labelStyle">
                    <li class="active">
                                <span>
                                    همه
                                </span>
                    </li>
                    <li>
                                <span>
انیمیشن
                                </span>
                    </li>
                    <li>
                                <span>
فیلم سینمایی
                                </span>
                    </li>
                    <li>
                                <span>
دوبله
                                </span>
                    </li>
                    <li>
                                <span>
مستند
                                </span>
                    </li>
                </ul>
                <h3>
                    جدیدترین عناوین
                </h3>
            </div>
            <div class="carousel_wrapper ">
                <img class="angle-point-to-right" src="/assets/images/main/angle-pointing-to-right.svg">
                <div class="owl-carousel" id="owl-carousel-father-div">
                    <!--<div class="item"> <img src="../media/main/slider/frozen.jpg" alt="Owl Image"> </div>-->
                    <!--<div class="item"> <img src="../media/main/slider/frozen.jpg" alt="Owl Image"> </div>-->
                    <!--<div class="item"> <img src="../media/main/slider/frozen.jpg" alt="Owl Image"> </div>-->
                    <!--<div class="item"> <img src="../media/main/slider/grandpa.jpg" alt="Owl Image"> </div>-->
                    <!--<div class="item"> <img src="../media/main/slider/grandpa.jpg" alt="Owl Image"> </div>-->
                    <!--<div class="item"> <img src="../media/main/slider/grandpa.jpg" alt="Owl Image"> </div>-->
                    <!--<div class="item"> <img src="../media/main/slider/grandpa.jpg" alt="Owl Image"> </div>-->
                    <!--<div class="item"> <img src="../media/main/slider/grandpa.jpg" alt="Owl Image"> </div>-->
                </div>
                <img class="angle-point-to-left" src="/assets/images/main/angle-pointing-to-left.svg">
            </div>
        </div>
    </div>

    <section style="text-align: right;height: auto" class="hero-style">
        <div>
            <div class="container" style="width: 970px; position: relative">
                {{--<img src="http://www.iranfilm.co/wp-content/uploads/2018/01/image_preview5454.png" style="width: 100%">--}}
                <img src="/assets/images/main/baner.png" style="width: 100%">
                <div style="position: absolute; top: 10%">
                    <h3>بهترین بازیگران و فیلم‌های سال کدامند؟</h3>
                    <small style="display: block; ">هفتاد و پنجمین جوایز گلدن‌گلوب</small>
                    <a class="btn hiro-btn mt-2" style="border: 1px black solid">
                        همین حالا دانلود کنید!
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="black_container">
        <div class="carousel_container">
            <div class="carousel_row">
                <h3 style="margin-left: auto;margin-right: 0px">
                    داغ ترین‌ها
                </h3>
            </div>
            <div class="carousel_wrapper ">
                <img class="angle-point-to-right" src="/assets/images/main/angle-pointing-to-right.svg">
                <div class="owl-carousel owl-theme" id="owl-carousel-hotfilms">
                    <!--<div class="item"> <img src="../media/main/slider/frozen.jpg" alt="Owl Image"> </div>-->
                </div>
                <img class="angle-point-to-left" src="/assets/images/main/angle-pointing-to-left.svg">
            </div>
        </div>
    </section>

</div>
<div id="footer">
    <div id="footer_container">
        <div id="top_footer">
            <div id="container">
                <div id="links_div">
                    <ul>
                        <li>
                            <a href="">درخواست فیلم</a>
                            |
                        </li>
                        <li>
                            <a href="">اشتراک ویژه</a>
                            |
                        </li>
                        <li>
                            <a href="">باکس آفیس</a>
                            |
                        </li>
                        <li>
                            <a href="">نرم افزارهای موردنیاز</a>
                            |
                        </li>
                        <li>
                            <a href="">پرسش های متداول</a>
                            |
                        </li>
                        <li>
                            <a href="">درباره ما</a>
                            |
                        </li>
                        <li>
                            <a href="">تماس با ما</a>
                        </li>
                    </ul>
                </div>
                <div id="bottom_linklist_div">
                    <div id="desc_div">
                        <div id="footer_banner">
                            <a href="">
                                محتوای ایــن سایت مطابــق با فرهــــنگ خانواده‌های ایرانــــــــــــــی می‌باشد
                            </a>
                        </div>
                        <div id="social_wrap">
                            <div id="image_wrapper">
                                <a href="https://plus.google.com/+mohmahsamiei">
                                    <img class="icon_image" src="/assets/images/main/Google_plus.svg">
                                </a>
                                <a href="https://www.instagram.com/mmsamiei">
                                    <img class="icon_image" src="/assets/images/main/instagram.svg">
                                </a>
                                <a href="https://telegram.me/mmsamiei">
                                    <img class="icon_image" src="/assets/images/main/telegram.svg">
                                </a>
                                <a href="https://twitter.com/mmsamiei">
                                    <img class="icon_image" src="/assets/images/main/twitter.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="about_site_div">
                        <p>
                            مجموعه دیتابیس فیلم امیرکبیر، با هدف ایجاد یک تجربه‌ی مشترک آموزشی و تفریحی برای دانشجویان دانشگاه صنعتی امیرکبیر ایجاد شده و هیچ گونه استفاده‌ی تجاری ندارد. در صورتی که از این سایت و امکانات آن لذت می‌برید آن را به دوستان خود هم معرفی کنید.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="fitter">
        </div>
        <div id="bottom_footer">
            <p>تمامی حقوق این وبسایت متعلق به دیتابیس فیلم امیرکبیر می‌باشد</p>
        </div>
    </div>
</div>

</body>
</html>







