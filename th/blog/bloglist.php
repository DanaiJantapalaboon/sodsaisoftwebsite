<section class="blog py-5" style="background-color: rgb(247, 244, 251)">
        <div class="container px-3" style="margin-top: 100px">
            <div class="col-sm-5 mb-2 center">
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" id="myInput" onkeyup="blogSearch()" placeholder="ค้นหาบทความ">
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>

            <!--ต้องทำ Blog List ใหม่ เรียกซ้ำไม่ได้เพราะ URL ไม่เหมือนกัน-->
            <div class="card shadow-sm">
                <h5 class="card-header text-center" style="background-color: rgb(247, 244, 251)">Blog List</h5>
                <table class="table table-hover" id="myBlog">
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="blog_printf"><h5>What is "printf" ?</h5></a></td>
                        <td>คำสั่ง "printf" ที่แสดงผลออกทางหน้าจอ terminal สีดำๆ โดยภาษา C มีประวัติมาอย่างยาวนาน แล้วทำไมต้องมี "f" ด้วยนะ print เฉยๆไม่ได้เหรอ ?</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="blog_cssgradient"><h5>CSS Gradient ง่ายๆ</td></h5></a>
                        <td>ผู้ที่เริ่มทำเว็บคงจะนั่งนึกกันอยู่นานว่าพื้นหลังจะเป็นแบบไหนดี ดังนั้นเรามีเทคนิคง่ายๆและวิธีทำมาฝาก ไปอ่านต่อเลยย..</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="blog_qrcode"><h5>สร้าง QRCode กันเถอะ</td></h5></a>
                        <td>สำหรับใครที่ใช้ QRCode Gen แบบฟรีๆตามเว็บคงจะเผชิญปัญหาการโฆษณาที่ไม่ได้รับเชิญ บ้างก็หมดอายุ งั้นเรามาทำเองกันเถอะ รออะไรล่ะ</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
</section>

<script src="../../js/blog-search.js"></script>



<!--โค้ดเก่า-->
<!--<section class="blog py-5" id="anchor-blog" style="background-color: rgb(247, 244, 251)">
        <div class="container px-5">
            <div class="col-lg-12">
                <h2 class="text-center pb-5" id="title">บทความสดใสซอฟท์</h2>
            </div>

            <div class="col-md-5 mb-2 center">
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="ค้นหาบทความ">
                    <button type="submit" class="btn btn-danger me-sm-2">Search</button>
                </form>
            </div>

            <div class="card shadow-sm">
                <h5 class="card-header text-center" style="background-color: rgb(247, 244, 251)">Blog List</h5>
                <div class="card-body border-bottom">
                    <a class="card-title" href="../blog/blog_printf.php"><h5>What is "printf" ?</h5></a>
                    <p class="card-text">คำสั่ง "printf" ที่แสดงผลออกทางหน้าจอ terminal สีดำๆ โดยภาษา C มีประวัติมาอย่างยาวนาน แล้วทำไมต้องมี "f" ด้วยนะ print เฉยๆไม่ได้เหรอ ?</p>
                </div>
                <div class="card-body">
                    <a class="card-title" href="../blog/blog_cssgradient.php"><h5>CSS Gradient แบบง่ายๆ</h5></a>
                    <p class="card-text">ผู้ที่เริ่มทำเว็บคงจะนั่งนึกกันอยู่นานว่าพื้นหลังจะเป็นแบบไหนดี ดังนั้นเรามีเทคนิคง่ายๆและวิธีทำมาฝาก ไปอ่านต่อเลยย</p>
                </div>
            </div>
        </div>
</section>-->