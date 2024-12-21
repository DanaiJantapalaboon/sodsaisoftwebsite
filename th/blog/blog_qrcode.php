<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="../../img/previewimage.webp"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For SEO -->
    <meta name="keywords" content="รับเขียนโปรแกรมทั่วไป, ทำเว็บไซต์ครบวงจร, เขียนแอพพลิเคชั่นมือถือ, ติวเตอร์">
    <meta name="description" content="รับเขียนโปรแกรม รับทำเว็บไซต์ โปรแกรมสร้าง QR Code">
    <meta name="author" content="Danai Jantapalaboon ดนัย จันทพลาบูรณ์">
    
    <title>สร้าง QRCode แบบฟรีๆ | สดใส devTeam</title>

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

    <!--JSBarcode and QRCode https://cdnjs.com/libraries/qrcodejs-->
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

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
        <h2 class="fw-bolder mb-4 mt-5 text-center" id="title">มาสร้าง QRCode แบบฟรีๆกันเถอะ</h2>
        <h2 class="fw-bolder mb-4 mt-5">วิธีใช้งาน</h2>
        <p class="fs-5 mb-4"><img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;1. ใส่ข้อความหรือลิ้งค์ที่ต้องการสร้าง QRCode หรือ BarCode ลงในช่อง Input<br>
                             <img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;2. กดปุ่ม Generate QRCode หรือ Barcode หากต้องการล้างช่อง Input ให้กด Clear Text<br>
                             <img src="../../img/icon/bullet.webp" width="30px">&nbsp;&nbsp;&nbsp;3. เซฟรูปภาพไปใช้งาน<br>
                             <i><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;note : </b>ท่านสามารถดาวน์โหลดโปรแกรม QRCode ฟรีได้ -->&nbsp;&nbsp;<a href="../download/download_main">ที่นี่</a></i>&nbsp;&nbsp;<--</p>
        <div class="row">
            <div class="col-sm">
                <h3>BarCode Generator</h3>
                <form>
                    <input type="text" id="txt-input" class="form-control mb-2" placeholder="Enter Barcode..." autocomplete="off">
                    <button class="btn btn-danger" type="button" id="generate-barcode">Generate BarCode</button>
                    <button type="reset" class="btn btn-danger">Clear Text</button>
                </form>
                <div class="canvas-barcode">
                    <canvas id="barcode">
                        <script src="../../js/blog-barcode.js"></script>
                    </canvas>
                </div>
            </div>

            <div class="col-sm">
                <h3>QRCode Generator</h3>
                <form>
                    <input type="text" id="input_text" class="form-control mb-2" placeholder="Enter QRcode..." autocomplete="off">
                    <button class="button btn btn-danger" type="button">Generate QRCode</button>
                    <button type="reset" class="btn btn-danger">Clear Text</button>
                </form>
                <div class="canvas-qrcode">
                    <div class="qr-code my-2">
                        <script src="../../js/blog-qrcode.js"></script>
                    </div>
                </div>
            </div>
            <i><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเหตุ : </b>BarCode ไม่รองรับภาษาไทย</i></p>
        </div>
    </div>

    <!--เริ่มส่วนเนื้อหา-->
    <div class="container px-3">
        <h2 class="fw-bolder mb-4 mt-5">อธิบายโค้ด</h2>
        <p class="fs-5 mb-4">สำหรับเนื้อหานี้ผมจะขออธิบายในส่วน Front-End อย่างเดียวนะครับเนื่องจากเป็นส่วนที่เขียนเอง สำหรับส่วนเบื้องหลัง javascript นั้นจะขอแปะลิ้งค์ของผู้พัฒนาเป็น references แทนนะครับ เพราะผมเองก็ก็อปมาใช้ทั้งดุ้นเลยครับ ฮ่าาๆ</p>
        <p class="fs-5 mb-4">- div class กำหนดเป็น row และ col-sm เนื่องจากเราใช้คุณสมบัติ CSS Grid แบบ 2 คอลัมน์ของ bootstrap5<br>
                             - ใช้ col-sm เพราะต้องการให้จัดการแสดงผลได้ดีในจอมือถือทั่วๆไป (ถือเป็น small devices ที่มีขนาดจอ ≥ 576px)<br>
                             - ตั้งแท็กฟอร์มปิดเปิดให้คลุมในส่วน input และ button เนื่องจากเรามีปุ่ม reset ด้วย ซึ่งจะทำงานเฉพาะในฟอร์มนั้นๆครับ<br>
                             - กำหนด id ของ input และ button ตรงนี้จะถูกเรียกใช้ใน javascript (เอาไว้เป็น selector)</p>

        <p class="fs-5"><xmp>        <div class="row">
            <div class="col-sm">
                <h3>BarCode Generator</h3>
                <form>
                    <input type="text" id="txt-input" class="form-control mb-2" placeholder="Enter Barcode..." autocomplete="off">
                    <button class="btn btn-danger" type="button" id="generate-barcode">Generate BarCode</button>
                    <button type="reset" class="btn btn-danger">Clear Text</button>
                </form>
                <div class="canvas-barcode">
                    <canvas id="barcode">
                        <script src="../../js/blog-barcode.js"></script>
                    </canvas>
                </div>
            </div>

            <div class="col-sm">
                <h3>QRCode Generator</h3>
                <form>
                    <input type="text" id="input_text" class="form-control mb-2" placeholder="Enter QRcode..." autocomplete="off">
                    <button class="button btn btn-danger" type="button">Generate QRCode</button>
                    <button type="reset" class="btn btn-danger">Clear Text</button>
                </form>
                <div class="canvas-qrcode">
                    <div class="qr-code my-2">
                        <script src="../../js/blog-qrcode.js"></script>
                    </div>
                </div>
            </div>
        </div></xmp></p>

        <p class="fs-5 mb-4">- ส่วน BarCode และ QRCode จะแยก div class คนละตัว เนื่องจากต้องการใช้คุณสมบัติของ CSS Grid แบบ 2 คอลัมน์ในแถวเดียวกัน<br>
                             - ส่วน div class barcode และ qrcode จะเป็นกล่องว่างๆสำหรับแสดงผลรูปภาพเมื่อกดปุ่ม Generate<br>
                             - เปิดแท็ก script สำหรับเรียกใช้ javascript เบื้องหลังมาทำงาน เดี๋ยวผมแปะรูปไว้ครับ<br></p>

        <p class="fs-5 mb-4">นอกจากนี้ อย่าลืมเรียก library สำหรับสร้างมาด้วยโดยไว้ในส่วนของ head ดังนี้</p>
        <p class="fs-5"><xmp>    <!--JSBarcode and QRCode https://cdnjs.com/libraries/qrcodejs-->
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script></xmp></p>

        <p class="fs-5 mb-4">javascript เบื้องหลัง</p>
    </div>

    <div class="container">
        <img class="mb-3 center" src="../../img/picture/qrbarcode.webp" width="80%" alt="สร้าง QR Code ง่ายๆ">
    </div>

    <div class="container px-3">
        <p class="fs-5 mb-4">หวังว่าจะทำให้การสร้าง BarCode และ QRCode ง่ายขึ้นนะครับ และใช้งานได้หลากหลายเลยทั้งแปะลิ้งค์ google maps, google forms ต่างๆ ขอบพระคุณทุกท่านที่ติดตามครับ</p>
        <p class="fs-5 mb-4"><b>อ้างอิง</b><br>Barcode : <a href="https://github.com/lindell/JsBarcode" target="_blank">JSBarcode</a><br>QRCode : <a href="https://jsitor.com/tt9KH2IaP" target="_blank">JSQRCode</a></p>
        <b>Writer</b><br>
        <i class="text-center">Danai Jantapalaboon | July 8, 2022</i>
        <p>SodsaiDevTeam, Co-Founder</p>
    </div>
</section>


<?php include 'blogfooter.php'; ?>
</body>
</html>