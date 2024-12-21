<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="../../img/picture/sodsaiprintf.webp"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For SEO -->
    <meta name="keywords" content="รับเขียนโปรแกรมทั่วไป, ทำเว็บไซต์ครบวงจร, เขียนแอพพลิเคชั่นมือถือ, ติวเตอร์">
    <meta name="description" content="รับเขียนโปรแกรม รับทำเว็บไซต์ สอนเขียนโปรแกรม ภาษาซี printf คืออะไร">
    <meta name="author" content="Danai Jantapalaboon ดนัย จันทพลาบูรณ์">

    <title>printf คืออะไร | สดใส devTeam</title>

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
        <h2 class="fw-bolder mb-4 mt-5 text-center" id="title">ภาษา C — printf คืออะไร ทำไมต้องมี “f”</h2>
    </div>
</section>

<section class="py-0">
    <div class="container">
        <img class="center mb-4" src="../../img/picture/sodsaiprintf.webp" alt="printf คืออะไร" width="55%">
    </div>
</section>

<section class="py-0">
    <div class="container px-3">
        <p class="fs-5 mb-4">สวัสดีครับ ทุกคนที่เรียนมัธยมสายวิทยาศาสตร์-คณิตศาสตร์ คงจะได้เรียนภาษา C ในวิชาคอมพิวเตอร์กันทุกคน และคงจะสงสัยเหมือนกันหมดทุกคนใช่ไหมครับว่าคำสั่งที่แสดงผลออกทางหน้าจอนั้น มันหมายความว่าอะไร และทำไมต้องมี “f” ด้วยนะ สำหรับเรื่องนี้เราจำเป็นต้องพูดถึงประวัติศาสตร์ของตัวภาษา C กันสักหน่อย มาเริ่มกันเลยครับ</p>
        <h2 class="fw-bolder mb-4 mt-5">ภาษา C คืออะไร</h2>
        <p class="fs-5 mb-4">ภาษา C เป็นภาษาที่ออกแบบมาสำหรับใช้งานทั่วไป (general-purpose programming language) ถูกพัฒนามาตั้งแต่ปี ค.ศ.1972 โดย Dennis Ritchie จาก Bell Labs ประเทศสหรัฐอเมริกา มีผลงานเด่นคือถูกนำไปพัฒนาระบบปฏิบัติการ UNIX รวมทั้งนำไปเขียนระบบปฏิบัติการอื่นๆมากมายรวมทั้ง Windows จนถูกขนานนามว่าเป็น “system programming language” และยังเป็นภาษาคอมพิวเตอร์ยุคแรกๆที่ออกแบบมาให้มนุษย์สามารถเข้าใจได้ จึงถูกนำไปพัฒนาโปรแกรมอย่างกว้างขวางมาตั้งแต่อดีตจนถึงปัจจุบัน</p>
        <p class="fs-5 mb-4">Bell Labs นั้นมีชื่ออย่างเป็นทางการคือ Bell Telephone Laboratories เป็นของบริษัท Nokia ที่ทำโทรศัพท์มือถือนั่นแหละครับ มีภารกิจในการวิจัยพัฒนาเทคโนโลยีในวงการสื่อสารทางไกล (Telecommunication) และสารสนเทศ (Information Technology) มีผลงานโดดเด่นคือระบบปฏิบัติการ UNIX ภาษา B, C และ C++ เป็นต้น</p>
        <h2 class="fw-bolder mb-4 mt-5">ทำไมต้อง "hello, world"</h2>
        <p class="fs-5 mb-4">Hello, world นั้นถูกเขียนอยู่ใน Chapter 1  หัวข้อ 1.1 Getting Started โดยคุณ Brian W. Kernighan ที่เป็นผู้เขียนหนังสือ The C Programming Language first edition อันมีชื่อเสียงนั่นเองครับ หนังสือจะสอนให้เราพิมพ์คำสั่งแสดงผลออกทางหน้าจอดังนี้</p>
        
        <p class="fs-5 mb-4"><xmp>main ()
    {
        printf (“hello, world\n”);
    }</xmp></p>
                                        
        <p class="fs-5 mb-4">นั่นจึงเป็นที่มาว่าทำไมเวลาเราเริ่มเรียนภาษาใดๆจะต้องเริ่มจาก printf hello, world ก่อนเสมอ ดังภาพจะเป็นลายมือของ Brian W. Kernighan อันมีชื่อเสียง</p>
        <img src="../../img/picture/printf1.webp" alt="C programming book" width="45%">
        <h2 class="fw-bolder mb-4 mt-5">printf ทำงานอย่างไร</h2>
        <p class="fs-5 mb-4">printf ถูกอธิบายไว้ในหัวข้อ 7.3 หน้า 145 หัวข้อ Formatted Output – Prinf มีหลักการทำงานคือ ก่อนที่เราจะแสดงผลข้อความออกทางหน้าจอดำๆหรือที่เรียกกันว่า terminal ได้ เราจะต้องดึงชุดคำสั่ง (library) ในการแสดงผลออกมาเสียก่อน ด้วยคำสั่ง #include <stdio.h> หรือย่อมาจาก Standard Input and Output โดย .h นั้นจะมาจาก header file ซึ่งเป็นไฟล์ที่บรรจุชุดคำสั่งของภาษา C นั่นเอง และหลักการนี้ถือเป็น fundamental concepts of programming คือทุกภาษาบนโลกนี้จะใช้หลักการพื้นฐานเดียวกันนี้ทั้งหมด แต่ก็มีวิธีเขียนแตกต่างกันไปตามแต่ละภาษาครับ</p>
        <p class="fs-5 mb-4">ในส่วนของ Formatted Output จะมีคำสั่ง 2 ตัวที่เราอาจเรียกได้ว่าเป็นส่วนกลับของกันและกันคือ printf และ scanf (มี f ลงท้ายทั้งคู่) printf จะทำหน้าที่ส่งออกข้อความ (output) ส่วน scanf จะเป็นการรับข้อมูล (input) เข้ามาทำงานตามที่เรากำหนด โดยมีหลักการทำงานคือ การแสดงข้อความหรือรับข้อมูลใดๆผ่านทางคีย์บอร์ดจะเข้ามาในรูปแบบตัวหนังสือ (string) เสมอ จากนั้นคอมไพเลอร์จะทำการเปลี่ยนชนิดข้อมูล (data type) ให้เราตามชนิดของตัวแปรที่เราประกาศรับค่า เช่น int, float, double เช่นเรารับค่า scanf(“%d”, &num); ไว้ในตัวแปร int num; หากเรากดเลข 10 และกด enter หมายความว่าเรารับเลขเข้ามาเป็นสตริง แต่คอมไพเลอร์จะทำการแปลงชนิดข้อมูลให้เป็นรูปจำนวนเต็ม (integer) และเก็บไว้ในตัวแปรชื่อ num เมื่อเราต้องการแสดงผลตัวแปร num ก็จะพิมพ์คำสั่ง printf(“%d”, num); โดย %d จะทำหน้าที่เป็น conversion character คือบ่งบอกว่าข้อมูลที่จะดึงมาเป็นชนิดตัวเลขนะ และรับค่าจากตัวแปร int ที่ชื่อ num นั่นเอง</p>
        <h2 class="fw-bolder mb-4 mt-5">printf ทำไมต้องมี f</h2>
        <p class="fs-5 mb-4">printf นั้นจะเป็นคำสั่งที่นำมาจากภาษา B (เป็นภาษาก่อนที่จะนำมาพัฒนาเป็น C) และภาษา B ก็ยกมาจากภาษา BCPL อีกทีหนึ่ง ซึ่งได้รับแรงบันดาลใจมาจากคำสั่ง writef ดังนั้นเราจะมาดูกันว่า BCPL คืออะไรกันต่อ (ภาพ แสดงคำอธิบายการทำงานของคำสั่ง writef ในภาษา BCPL)</p>
        <img class="mb-3" src="../../img/picture/printf2.webp" width="45%">
        <h2 class="fw-bolder mb-4 mt-5">BCPL (Basic Combined Programming Language) คืออะไร</h2>
        <p class="fs-5 mb-4">BCPL เป็นภาษาโปรแกรมประเภท Procedural Programming เป็นยุคแรกเริ่มของภาษา B และ C พัฒนาโดย Martin Richards ตั้งแต่ปี ค.ศ.1966 ถูกใช้ในการเขียนระบบปฏิบัติการของคอมพิวเตอร์เมนเฟรมที่มีชื่อเสียงในยุคนั้นได้แก่ Honeywell 635, Honeywell 645 (ดังภาพ) และ IBM 360 เป็นต้น สำหรับคำสั่ง writef จะมีความหมายว่า formatted write ซึ่งจะทำหน้าที่เช่นเดียวกับ printf ตามที่เขียนอธิบายไว้ด้านบน</p>
        <img class="mb-3" src="../../img/picture/printf3.webp" width="45%">
        <p class="fs-5 mb-4">เอาล่ะครับก็จบกันไปสำหรับประวัติศาสตร์ของ printf ที่มีความเป็นมาอย่างยาวนาน หวังว่าจะสนุกสนานกับบทความนี้กันนะครับ ^^</p>
        <p class="fs-5 mb-4"><b>อ้างอิง</b><br>Kernighan, Brian W.; Ritchie, Dennis M. (February 1978). The C Programming Language (1st ed.). Englewood Cliffs, NJ: Prentice Hall. ISBN 0-13-110163-3.
        <br>https://www.bell-labs.com/usr/dmr/www/kbman.html
        <br>https://www.cpcwiki.eu/imgs/3/3a/ArnorBCPL.pdf</p>
        <p class="fs-5 mb-4">ขอสงวนสิทธิ์บทความ ห้ามนำไปใช้โดยมิได้รับอนุญาติ</p>
        <b>Writer</b><br>
        <i class="text-center">Danai Jantapalaboon | March 6, 2022</i>
        <p>SodsaiDevTeam, Co-Founder</p>
    </div>
</section>




<?php include 'blogfooter.php'; ?>
</body>
</html>