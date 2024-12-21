<section class="contact py-5" id="anchor-contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h2 class="text-center" id="title">ติดต่อเรา</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 px-3 my-5">
                    <legend class="fw-bold" id="css_enquiry">CONTACT</legend>
                    <br>
    
                    <div class="mt-4">
    
                        <h5>
                            สดใสซอฟท์ (Sodsaisoft)
                            <h6>&nbsp;&nbsp;&nbsp;<img src="../../img/icon/contact.webp">&nbsp;&nbsp;สุทธิพงศ์ กาวิชัย (Project Manager, Lead Programmer)</h6>
                            <h6>&nbsp;&nbsp;&nbsp;<img src="../../img/icon/contact.webp">&nbsp;&nbsp;ดนัย จันทพลาบูรณ์ (Web Developer)</h6>
                            <h6>&nbsp;&nbsp;&nbsp;<img src="../../img/icon/contact.webp">&nbsp;&nbsp;ทิตติยา ภัทรมิตรภาคิน (Math-Physics Tutor)</h6>
    
                            <br>
                            <h6>&nbsp;&nbsp;&nbsp;<img src="../../img/icon/phone.webp">&nbsp;&nbsp;เบอร์โทรศัพท์ : 082-5145218 (K.สุทธิพงศ์)</h6>
                            <h6>&nbsp;&nbsp;&nbsp;<img src="../../img/icon/email.webp">&nbsp;&nbsp;E-Mail : sutthiphong.k@sodsaisoft.com</h6>
                            <h6>&nbsp;&nbsp;&nbsp;<img src="../../img/icon/line.webp">&nbsp;&nbsp;Line ID : อยู่ระหว่างการพัฒนา</h6>
                            <h6>&nbsp;&nbsp;&nbsp;<img src="../../img/icon/facebook.webp">&nbsp;&nbsp;Facebook : sodsaisoft</h6>
    
                            <br>
    
                            <legend class="fw-bold" id="css_enquiry">SERVICES</legend>
                            <p>
                               - เขียนแอพพลิเคชั่นมือถือ Android, iOS<br>
                               - เขียนเว็บไซต์ หรือเว็บแอพพลิเคชั่น<br>
                               - เขียนโปรแกรมทั่วไป Windows Application<br>
                               - วางระบบไอทีในองค์กร Network, Server หรืออื่นๆที่เกี่ยวข้อง<br>
                               - วางระบบ IoT ทั้ง Smart Home, Smart Office สำหรับธุรกิจขนาดปานกลาง-เล็ก<br>
                               - ติวเตอร์วิชาคณิตศาสตร์-ฟิสิกส์ แบบเดี่ยวหรือแบบกลุ่ม
                            </p>
                        </h5>
                    </div>
                </div>
                <!-- CONTACT BOX RIGHT -->
                <div class="col-lg-6 px-3 my-5">
                    <fieldset>
                        <legend class="fw-bold" id="css_enquiry">ENQUIRY FORM</legend>
                        <form id="emailForm" name="emailForm" method="POST">
    
                            <!-- Input Email -->
                            <label class="form-label mt-4">อีเมลล์</label>
                            <input type="text" name="email" class="form-control" placeholder="กรุณากรอกอีเมลล์" required>
                        
                            <!-- Input Contact Name -->
                            <label class="form-label mt-2">ชื่อผู้ติดต่อ</label>
                            <input type="text" name="name" class="form-control" placeholder="ชื่อผู้ติดต่อ" required>

                            <!--Input Telephone-->
                            <label class="form-label mt-2">เบอร์โทรศัพท์</label>
                            <input type="tel" name="phone" class="form-control" placeholder="เบอร์โทรศัพท์ของท่าน" required>
                        
                            <!-- Input Services -->
                            <label class="form-label mt-4">กรุณาเลือกบริการที่ต้องการ</label>
                            <select class="form-select" name="header">
                                <option>Mobile Application</option>
                                <option>Website Development</option>
                                <option>Windows Application</option>
                                <option>IT Infrastructure</option>
                                <option>Internet of Things</option>
                                <option>Math-Physics Tutor</option>
                            </select>
                        
                            <!-- Input Job Description -->
                            <label class="form-label mt-4">รายละเอียดของงาน</label>
                            <textarea class="form-control" rows="3" name="detail" required></textarea>
                        
                            <br>
                        
                            <!-- Button -->
                            <button type="submit" name="submitBtn" id="submitBtn" class="btn btn-danger">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
</section>

<?php
    if(isset($_POST["submitBtn"])) {

        // ส่วน cc ไปหาเจ้าของเว็บ
        $ccDanai = "danai.j@sodsaisoft.com";
        $ccBenz = "sutthiphong.k@sodsaisoft.com";
        $ccFean = "thittiya.p@sodsaisoft.com";
        $to = $ccDanai.", ".$ccBenz. ", ". $ccFean;

        // ส่วนลูกค้าติดต่อมา
        $service = $_POST["header"];    // บริการ
        $name = $_POST["name"];         // ชื่อผู้ส่ง
        $from = $_POST["email"];        // เมลล์ผู้ส่ง
        $phone = $_POST["phone"];       // เบอร์โทรผู้ส่ง
        $msg = $_POST["detail"];        // ข้อความที่ส่งมา
        $sendMessage = $msg . "<br><br>......................................................................................................." .
                              "<br> ชื่อผู้ส่ง : ". $name . "<br> อีเมลล์ผู้ส่ง : ". $from . "<br> เบอร์โทรศัพท์ : " . $phone . "<br> บริการ : " . $service;

        $subject = "Sodsaisoft Website - New Message $service";
        $headers = "Content-Type: text/html; charset=UTF-8";
            
        $mailSend = mail($to, $subject, $sendMessage, $headers);

        if($mailSend) {
            echo '<script type="text/javascript">
                  Swal.fire("Message Send!", "ข้อความของท่านได้ถูกส่งไปเรียบร้อยแล้ว", "success")
                  </script>';
        } else {
            echo '<script type="text/javascript">
                  Swal.fire("Something went wrong!", "พบข้อผิดพลาด กรุณาตรวจสอบการเชื่อมต่ออินเตอร์เน็ต", "error")
                  </script>';
        }
    }
?>