<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="../../img/picture/restaurant/Slide1.webp"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For SEO -->
    <meta name="keywords" content="รับเขียนโปรแกรมทั่วไป, ทำเว็บไซต์ครบวงจร, เขียนแอพพลิเคชั่นมือถือ, ติวเตอร์">
    <meta name="description" content="รับเขียนโปรแกรม รับทำเว็บไซต์ โปรแกรมร้านอาหาร">
    <meta name="author" content="Danai Jantapalaboon ดนัย จันทพลาบูรณ์">

    <title>ระบบสั่งอาหาร | สดใส devTeam</title>
    
    <!--Bootstrap CSS Plugin-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!--Bootstrap Javascript Plugin-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!--GoogleFonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@500&display=swap" rel="stylesheet">

    <!--CSS custom-navbar-->
    <link rel="stylesheet" href="../../css/custom-body.css">
    <link rel="stylesheet" href="../../css/custom-navbar.css">
    <link rel="stylesheet" href="../../css/custom-blog.css"> <!--ใช้ร่วมกับ Learnmore ด้วย-->
    <link rel="stylesheet" href="../../css/custom-footer.css">
    <link rel="stylesheet" href="../../css/custom-contact.css">

    <!--JQuery Footer-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z62LRQQVM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-6Z62LRQQVM');
    </script>

    <!--ปรับให้คลิปและ pdf แสดงผลเต็มหน้า-->
    <style>
        .container-iframe {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
        }

        /* Then style the iframe to fit in the container div with full height and width */
        .responsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        }
    </style>

    <style>
        /* customizable snowflake styling */
        .snowflake {
        color: #fff;
        font-size: 1em;
        font-family: Arial, sans-serif;
        text-shadow: 0 0 5px #000;
        }

        @-webkit-keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@-webkit-keyframes snowflakes-shake{0%,100%{-webkit-transform:translateX(0);transform:translateX(0)}50%{-webkit-transform:translateX(80px);transform:translateX(80px)}}@keyframes snowflakes-fall{0%{top:-10%}100%{top:100%}}@keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default;-webkit-animation-name:snowflakes-fall,snowflakes-shake;-webkit-animation-duration:10s,3s;-webkit-animation-timing-function:linear,ease-in-out;-webkit-animation-iteration-count:infinite,infinite;-webkit-animation-play-state:running,running;animation-name:snowflakes-fall,snowflakes-shake;animation-duration:10s,3s;animation-timing-function:linear,ease-in-out;animation-iteration-count:infinite,infinite;animation-play-state:running,running}.snowflake:nth-of-type(0){left:1%;-webkit-animation-delay:0s,0s;animation-delay:0s,0s}.snowflake:nth-of-type(1){left:10%;-webkit-animation-delay:1s,1s;animation-delay:1s,1s}.snowflake:nth-of-type(2){left:20%;-webkit-animation-delay:6s,.5s;animation-delay:6s,.5s}.snowflake:nth-of-type(3){left:30%;-webkit-animation-delay:4s,2s;animation-delay:4s,2s}.snowflake:nth-of-type(4){left:40%;-webkit-animation-delay:2s,2s;animation-delay:2s,2s}.snowflake:nth-of-type(5){left:50%;-webkit-animation-delay:8s,3s;animation-delay:8s,3s}.snowflake:nth-of-type(6){left:60%;-webkit-animation-delay:6s,2s;animation-delay:6s,2s}.snowflake:nth-of-type(7){left:70%;-webkit-animation-delay:2.5s,1s;animation-delay:2.5s,1s}.snowflake:nth-of-type(8){left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s}.snowflake:nth-of-type(9){left:90%;-webkit-animation-delay:3s,1.5s;animation-delay:3s,1.5s}.snowflake:nth-of-type(10){left:25%;-webkit-animation-delay:2s,0s;animation-delay:2s,0s}.snowflake:nth-of-type(11){left:65%;-webkit-animation-delay:4s,2.5s;animation-delay:4s,2.5s}
    </style>
    
</head>
<body>

<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
    ❅
  </div>
  <div class="snowflake">
    ❆
  </div>
  <div class="snowflake">
    ❅
  </div>
  <div class="snowflake">
    ❆
  </div>
  <div class="snowflake">
    ❅
  </div>
  <div class="snowflake">
    ❆
  </div>
</div>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100610282674394");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v14.0'
        });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <?php include 'worksnavbar.php'; ?>


    <section class="content-header py-1 shadow-lg" style="margin-top: 60px;"> <!--class top-title อยู่กับ custom-contact.css-->
        <h2 class="mb-3 mt-5 text-center text-white">ระบบสั่งอาหาร 2023</h2>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center pb-5">ระบบสั่งอาหาร (Restaurant Ordering System)<br>ในรูปแบบ Web Application</h2>
            <img src="../../img/picture/restaurant/Slide1.webp" class="center mb-4 w-75">
        </div>

        <div class="container px-3">
            <h2 class="mb-4">เหมาะสำหรับ</h2>
            <p class="fs-5 mb-4"><img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;ร้านอาหารตั้งแต่ขนาดเล็กถึงขนาดใหญ่<br>
                                <img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;ร้านอาหารทุกประเภท เช่นร้านข้าวต้ม ร้านก๋วยเตี๋ยว ร้านสุกี้ ร้านลาบ ร้านกาแฟ ร้านขนม ไอศกรีม เป็นต้น<br>
            </p>

            <h2 class="mb-4">ใช้งานได้ แต่ต้อง Modify Code เพิ่มเติม</h2>
            <p class="fs-5 mb-4"><img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;ร้านบุฟเฟต์เหมาจ่าย</p>
            
            <h2 class="mb-4">Benefits</h2>
            <p class="fs-5 mb-4"><img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;ลด Workload ของพนักงานทุกระดับ หน้าที่หลักเหลือเพียงเสริฟอาหารและเช็คบิลเท่านั้น<br>
                                <img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;ลดการสั่งออเดอร์ผิดพลาดหรือพนักงานลืมจด เนื่องจากเป็นระบบออนไลน์<br>
                                <img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;มี Dashboard และแสดง Data Visualization ในเรื่องยอดขาย รายการอาหาร และอื่นๆที่เกี่ยวข้อง เพื่อช่วยให้ร้านวิเคราะห์ความต้องการของลูกค้าได้
            </p>
        </div>

        <div class="container">
            <img src="../../img/picture/restaurant/Slide2.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide3.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide4.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide5.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide6.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide7.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide8.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide9.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide10.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide11.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide12.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide13.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide14.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide15.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide16.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
            <hr>
            <img src="../../img/picture/restaurant/Slide17.webp" class="center mb-4 w-75" alt="โปรแกรมจัดการร้านอาหาร Web Application">
        </div>
    </section>


<?php include 'worksfooter.php'; ?>
</body>
</html>