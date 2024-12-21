<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="../../img/picture/sodsaicssgradient.webp"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For SEO -->
    <meta name="keywords" content="รับเขียนโปรแกรมทั่วไป, ทำเว็บไซต์ครบวงจร, เขียนแอพพลิเคชั่นมือถือ, ติวเตอร์">
    <meta name="description" content="รับเขียนโปรแกรม รับทำเว็บไซต์ สอน HTML CSS">
    <meta name="author" content="Danai Jantapalaboon ดนัย จันทพลาบูรณ์">

    <title>วิธีใช้ CSS Gradient | สดใส devTeam</title>

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
    <link rel="stylesheet" href="../../css/custom-blog.css">
    <link rel="stylesheet" href="../../css/custom-footer.css">

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
    
</head>
<body>
<?php
    include 'blognavbar.php';
    include 'bloglist.php';
?>


<section class="py-0">
    <div class="container px-3">
        <h2 class="fw-bolder mb-4 mt-5 text-center" id="title">CSS Gradient กับการตกแต่งเว็บไซต์ให้สวยงาม</h2>
    </div>
</section>

<section class="py-0">
    <div class="container">
        <img class="center mb-4" src="../../img/picture/sodsaicssgradient.webp" alt="วิธีเขียน css gradient" width="55%">
    </div>
</section>

<section class="py-0">
    <div class="container px-3">
        <p class="fs-5 mb-4">สวัสดีครับ บทความนี้เราจะมา Workshop เล็กๆน้อยๆด้วยการตกแต่งเว็บไซต์ที่มีการใช้สีแบบไล่ระดับ (gradient) โดยเรามีเว็บที่อำนวยความสะดวกทางด้านนี้เฉพาะทาง ไม่ต้องเขียนโค้ดเอง ซึ่งง่ายมากๆเลยล่ะครับ</p>
        <h2 class="fw-bolder mb-4 mt-5">รู้จักกับ Linear Gradient CSS</h2>
        <p class="fs-5 mb-4">สำหรับเว็บไซต์ที่เราจะใช้บริการคือ https://cssgradient.io/ เมื่อเข้าหน้าเว็บมาแล้วให้เราลองกดเลือกเฉดสีเล่นๆ และจะมีโค้ดมาให ้ก็ลองก็อปปี้ CSS background ไปวางได้เลยครับ</p>
        <img class="mb-3" src="../../img/picture/cssgradient1.webp" alt="วิธีเขียน css gradient" width="70%">
        <p class="fs-5 mb-4">ผมก็ลองวาง background ลงใน body เพื่อให้เปลี่ยนทั้งแบ็คกราวด์ ลองเปิดบราวเซอร์ดูก็พบว่าพื้นหลังของเราเป็นสีสันสวยงาม</p>
        <p class="fs-5 mb-4"><xmp>body {
    background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
}</xmp></p><br>
        <p class="fs-5 mb-4">สำหรับตัวเว็บเอง มีบริการ gradient หลายแบบ ทั้ง Linear, Text, Radial ก็ลองไปเล่นกันดูครับ ส่วนเรามาต่อกันที่ Workshop ได้เลยยย..</p>
        <h2 class="fw-bolder mb-4 mt-5">Gradient Workshop</h2>
        <p class="fs-5 mb-4">เวิร์คช็อปอันนี้เราจะทำ desktop ของ Windows XP ที่มีข้อความ error อยู่ ใครที่ใช้ MS Windows มาตั้งแต่ยุค Win95, 98, ME จะพบว่า toolbar มีการไล่ระดับสีจากน้ำเงินไปฟ้า วันนี้เราจะมาทำแบบนี้โดยมีคอนเซ็ปต์ดังภาพ</p>
        <img class="mb-3" src="../../img/picture/cssgradient2.webp" width="70%">
        <p class="fs-5 mb-4">อันดับแรกเปิด VS Code ขึ้นมาครับ วางโครง html5 ให้พร้อม จากนั้นเขียนในส่วนของ body ตามนี้ เราจะทำ navbar และ textbox error กัน ปล.รูป icon หาได้ตามอินเทอร์เน็ตทั่วๆไปครับ</p>
        <p class="fs-5"><xmp>

        <div class="container-screen">
            <div class="container-navbar">
                <div class="nav-item">
                    <h3>Program CSS Gradient v1.00</h3>
                    <img src="TestCode\icon\minimize.png" width="4%" id="imgMin">
                    <img src="TestCode\icon\maximize.png" width="4%" id="img2">
                    <img src="TestCode\icon\close.png" width="4%" id="img2">
                </div>
            </div>

            <div class="container-error">
                <div class="error-bar">
                    <b>Error</b>
                    <img src="TestCode/icon/close.png">
                </div>
                    <div class="error-message">
                        <img src="TestCode/icon/error.png">
                        <p>Exception Processing Message c00000a3 error</p>
                    </div>
                <button class="button">OK</button>
            </div>
        </div>
        </xmp></p>

        <h2 class="fw-bolder mb-4 mt-5">อธิบายโค้ด</h2>
        <p class="fs-5 mb-4">- class container-screen จะวางกล่องสำหรับพื้นที่แสดงผลของเราก่อน<br>- class container-navbar จะเป็นการวางแถบ toolbar เลียนแบบ Windows ที่มีการไล่ระดับเฉดสี</p>
        <p class="fs-5 mb-4">- class nav-item เราจะใส่ icon ไว้ในส่วนนี้<br>- class container-error วาง textbox error ครับ อันนี้ทำเป็น gimmick เล่นๆเฉยๆ<br>- class error-message จะวางข้อความ และเครื่องหมาย error กากบาท<br>- class button ปุ่ม OK เป็น gimmick เช่นกัน</p>
        <p class="fs-5 mb-4">ต่อมา เรามาเขียน CSS ต่อได้เลยครับ ผมจะใส่ style ครอบไว้ในส่วนของ head นะครับ (comment ปิดส่วน container-error ไว้ก่อนนะ)</p>
                                    
                                    
        <p class="fs-5"><xmp>* {
    margin: 0;
    padding: 0;
}

.container-screen {
    border: 5px solid blue;
    height: 100vh;
    background-repeat: no-repeat;
    background-image: url("https://images.hdqwalls.com/download/windows-xp-bliss-4k-lu-1366x768.jpg");
}

.container-navbar {
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,9,121,1) 0%, rgba(19,161,221,1) 0%,
    rgba(30,30,201,1) 0%, rgba(14,173,229,1) 50%, rgba(5,198,246,1) 100%, rgba(0,212,255,1) 100%);
}

.nav-item {
    display: flex;
    align-items: center;
    margin-left: 3rem;
    color: #fff;
}

#imgMin {
    margin-left: auto;
}

#img2 {
    padding: 1px;
}</xmp></p>

        <h2 class="fw-bolder mb-4 mt-5">อธิบายโค้ด</h2>
        <p class="fs-5 mb-4">- margin 0, padding 0 เป็นการ reset ระยะขอบต่างๆทั้งหมด เพื่อให้เราแสดงผลได้แบบเต็มหน้าจอ<br>- container-screen กำหนดขนาดหน้าจอ และวาง wallpaper bliss<br>- container-navbar วาง css gradient<br>- nav-item และ #imgMin #img2 วางไอคอน โดยผม customized ให้ย้ายไปทางขวา<br>- และชิดกันโดยมีระยะห่าง 1 pixel ถึงตอนนี้เราจะได้ผลลัพธ์ดังภาพ</p>
        <img class="mb-3" src="../../img/picture/cssgradient3.webp" width="70%">
        <p class="fs-5 mb-4">เอาล่ะ ทีนี้เรามาเขียน CSS ในส่วนสุดท้ายกัน</p>

        <p class="fs-5 mb-4"><xmp>.container-error {
    margin: 200px auto;
    border: 4px solid blue;
    background-color: rgb(239, 235, 222);
    width: 400px;
    height: 150px;
}

.error-message p {
    display: flex;
    margin-left: 5rem;
    margin-top: -45px;
}

    .error-message img {
    margin-top: 15px;
    margin-left: 15px;
    width: 3rem;
    height: 3rem;
}

.error-bar {
    display: flex;
    color: white;
    padding-left: 1.3rem;
    align-items: center;
    height: 30px;
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,9,121,1) 0%, rgba(19,161,221,1) 0%,
    rgba(30,30,201,1) 0%, rgba(14,173,229,1) 50%, rgba(5,198,246,1) 100%, rgba(0,212,255,1) 100%);
}

.error-bar img {
    margin-left: auto;
    width: 2rem;
    height: 2rem;
}

.button {
    margin-top: 2rem;
    margin-left: 35%;
    width: 35%;
    height: 2rem;
}</xmp></p>

        <p class="fs-5 mb-4">ข้างบนนี้เราก็จะกำหนดในส่วน textbox error ข้อความ และไอคอนสัญลักษณ์กากบาทสีแดง ส่วนใหญ่จะกำหนดขนาดแบบ custom เนื่องจากต้องการให้ลงตัวและสวยงาม และเราจะได้ผลลัพธ์ดังนี้</p>
        <img class="mb-3" src="../../img/picture/cssgradient4.webp" width="70%">
        <p class="fs-5 mb-4">ก็จบกันไปสำหรับ Workshop CSS Gradient ผมลองเล่นแล้วก็สนุกดีจึงเอาแบ่งปันกันครับ ขอบพระคุณทุกท่านที่ติดตามครับ</p>
        <p class="fs-5 mb-4"><b>อ้างอิง</b><br>https://cssgradient.io/</p>
        <b>Writer</b><br>
        <i class="text-center">Danai Jantapalaboon | March 7, 2022</i>
        <p>SodsaiDevTeam, Co-Founder</p>
    </div>
</section>


<?php include 'blogfooter.php'; ?>
</body>
</html>