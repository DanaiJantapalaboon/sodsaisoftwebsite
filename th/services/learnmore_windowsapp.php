<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="../../img/previewimage.webp"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For SEO -->
    <meta name="keywords" content="รับเขียนโปรแกรมทั่วไป, ทำเว็บไซต์ครบวงจร, เขียนแอพพลิเคชั่นมือถือ, ติวเตอร์">
    <meta name="description" content="รับเขียนโปรแกรม รับทำเว็บไซต์ โปรแกรมร้านอาหาร">
    <meta name="author" content="Danai Jantapalaboon ดนัย จันทพลาบูรณ์">

    <title>รับเขียนโปรแกรมทั่วไป | SodsaiDevTeam</title>

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

    <!-- SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6Z62LRQQVM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-6Z62LRQQVM');
    </script>
    
</head>
<body>

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

    <?php include 'learnmorenavbar.php'; ?>

    <section class="content-header py-1 shadow-lg" style="margin-top: 60px;"> <!--กำหนดสีใน custom-contact.css-->
        <h2 class="mb-3 mt-5 text-center text-white">รับเขียนโปรแกรมทั่วไป (Windows-Based Application)</h2>
    </section>

    <section class="py-5">
        <div class="container text-center mb-5">
            <img src="../../img/picture/sodsaiwindowsapp.webp" width="75%" alt="รับเขียนโปรแกรมทั่วไป Windows Application">
        </div>

        <div class="container px-3">
            <p class="fs-5 mb-4"><b>รับเขียนโปรแกรม Windows Application ด้วยภาษา C# .NET ใช้ฐานข้อมูล MySql หรือ SQL Server ออกแบบและพัฒนาโปรแกรมสำหรับใช้งานบนคอมพิวเตอร์สำหรับธุรกิจขนาดเล็ก-ปานกลาง ตอบโจทย์ทุกความต้องการของลูกค้า</b></p>
            <p class="fs-5 mb-4"><img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;โปรแกรมจัดการหน้าร้าน (POS)<br>
                                <img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;โปรแกรมคลังสินค้า<br>
                                <img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;โปรแกรมร้านอาหาร<br>
                                <img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;ระบบจองห้องประชุม โรงแรม<br>
                                <img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;โปรแกรมระบบอื่นๆตามความต้องการของลูกค้า<br></p>

            <p class="fs-5"><b>สามารถออกแบบส่วนการใช้งานให้ทันสมัยโดยใช้ MetroUI ได้ หรือทำเป็นแบบพื้นฐานเพื่อให้ง่ายต่อการใช้งานได้ และจะมีการวาง Layout ต้นแบบให้ลูกค้าพิจารณาก่อนเริ่มงาน</b></p>
            <button type="button" class="btn btn-danger" onclick="showContent()">&nbsp;&nbsp;&nbsp;&nbsp;ติดต่องาน&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </div>
    </section>


    <!--script button ปุ่ม Show/Hide Content-->
    <section>
        <div id="contactContent" style="display: none;">
            <?php include '../th_contact.php'; ?>
        </div>

        <script>
            function showContent() {
                var x = document.getElementById("contactContent");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>
    </section>
    <!--จบ script button-->


    <section class="py-5">
        <div class="container text-center">
            <p class="fs-5 text-center" id="title"><b>วิธีการดำเนินงาน</b></p>
            <img src="../../img/picture/servicesteps.webp" width="80%">
        </div>
    </section>

    <section class="py-5">
        <div class="container px-3">
            <div class="row text-center">
                <div class="col-sm"><img src=""></div>
                <div class="col-sm"><img src="../../img/icon/dotnet.webp" width="200px"></div>
                <div class="col-sm"><img src="../../img/icon/vstudio.webp" width="200px"></div>
                <div class="col-sm"><img src=""></div>
            </div>
        </div>
    </section>

    <?php include 'learnmorefooter.php'; ?>
</body>
</html>