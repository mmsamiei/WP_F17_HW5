<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <link href="/assets/login.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <title>ﺻﻔﺤﻪ ﻭﺭﻭﺩ</title>
</head>
<body>
<h2>صفحه ورود</h2>
<div id="container">
    <div class="close_div">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <div id="tab_box">
        <div class="tab" id="login_tab"><a href=""><i class="fa fa-sign-in" aria-hidden="true"></i> ورود </a></div>
        <div class="tab" id="signup_tab"><a href=""><i class="fa fa-user-o" aria-hidden="true"></i> عضویت </a></div>
    </div>
    <div id="google_login_div">
        <a href=""> <i class="fa fa-google-plus" style="font-size:24px;color:white" > </i> ورود با حساب کاربری گوگل </a>
    </div>
    <div id="login_panel">
        <form id="login_from">
            <div id="username_div">
                <label><b>شناسه کاربری: </b></label>
                <input type="text" name="entered_username" placeholder="نام کاربری">
            </div>
            <div id="password_div">
                <label><b>رمز عبور:</b></label>
                <input type="password" name="password" placeholder="رمز عبور">
            </div>
            <div id="captcha_div">
                <label><b>کد امنیتی:</b></label>
                <div id="captcha_input_div">
                    <input type="text" name="entered_captcha" placeholder="کد امنیتی">
                    <a href="" class="fa fa-refresh" aria-hidden="true" id="captcha_refresh_icon"></a>
                </div>
                <img id="captcha_sample_img" src="/assets/images/sample_captcha.png">
            </div>
            <div id="options_div">
                <div id="remember__me_div">
                    <span> من را به خاطر بسپار</span>
                    <input type="checkbox" name="remember_me" value="yes">
                </div>
                <a href="">بازیابی رمز عبور</a>
            </div>
            <div id="submit_div">
                <input id="submit_button" type="submit" value="ورود" >
            </div>
        </form>
    </div>
</div>
</body>
</html>
