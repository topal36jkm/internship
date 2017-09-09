<?php
include 'template_top.php';
echo "<div style='height: 70px'></div>";
if (isset($_SESSION['checkSign']) == 'itoffside' AND isset($_SESSION['active']) == 2) {
    /*
     * include file
     */
    include 'config.php';

    /*
     * set var
     */
    $_SESSION['frmAction'] = md5('itoffside.com' . rand(1, 9999));

    /*
     * logical programming&Database
     */
    ?>
            <center><h4>ข้อมูลส่วนตัว</h4></center>
            <form name="manager_user-add-action" action="manager_user-add-action.php" method="POST">
              <div class="table-responsive container">
                <!-- <table border="1" cellpadding="6" class="table table-bordered"> -->
                <table border="0" cellpadding="6" class="table">
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">ชื่อผู้ใช้งาน &nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="username" value="" size="40"  />
                            </div>
                        <!-- <input type="text" name="username" value="" size="40" /></td> -->
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">รหัสผ่าน&nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" name="password" value="" size="40"  />
                            <!-- </div><input type="password" name="password" value="" size="40"  /> -->
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">ชื่อจริง&nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="firstname" value="" size="40"  />
                                <!-- <input type="text" name="firstname" value="" size="40" /> -->
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">นามสกุลจริง&nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lastname" value="" size="40"  />
                            <!-- <input type="text" name="lastname" value="" size="40" /> -->
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 400px; font-weight: bold">ที่อยู่&nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="address" value="" size="100"  />
                                <!-- <input type="text" name="address" value="" size="100" /> -->
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">เพศ&nbsp;</td>
                        <td>
                            <input type="radio" name="sex" value="1" />ชาย |
                            <input type="radio" name="sex" value="2"/>หญิง
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">เบอร์โทรศัพท์&nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" value="" size="40"  />
                            <!-- <input type="text" name="phone" value="" size="40" /> -->
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">อีเมล์&nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="email" value="" size="40"  />
                                <!-- <input type="text" name="email" value="" size="40" /> -->
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">ระดับผู้ใช้งาน&nbsp;</td>
                        <td>
                            <input type="radio" name="active" value="1" />ผู้ใช้ทั่วไป |
                            <input type="radio" name="active" value="2"/>ผู้ดูแลระบบ
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <br><input type="submit" class="btn btn-primary" name="submit" value="บันทึกข้อมูล" />
                        </td>
                    </tr>
                </table>
              </div>
                <input type="hidden" name="frmAction" value="<?php echo $_SESSION['frmAction']; ?>" />
            </form>
        </body>
    </html>
    <?php
} else {
    echo "<meta charset=\"UTF-8\">";
    echo "คุณไม่ได้เข้าสู่ระบบ กรุณาเข้าสู่ระบบก่อน!";
    echo "<br/>";
    echo "<a href='signin.php'>คลิกเพื่อเข้าสู่ระบบ</a>";

}

include 'template_buttom.php';
