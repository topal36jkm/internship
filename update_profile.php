<?php

include 'template_top.php';
echo "<div style='height: 70px'></div>";
if (isset($_SESSION['checkSign']) == 'itoffside') {
    /*
     * include file
     */
    include 'config.php';

    /*
     * set var
     */
    $_SESSION['frmAction'] = md5('itoffside' . rand(1, 9999));

      /*
     * logical programming&Database
     */
    $meSQL = "SELECT * FROM member WHERE id='{$_SESSION['id']}' ";
    $meQuery = mysql_query($meSQL);
    if ($meQuery == TRUE) {
        $meResult = mysql_fetch_assoc($meQuery);
    } else {
        echo 'error';
    }
    ?>

            <center><h4>จัดการข้อมูลส่วนตัว</h4></center>
            <form name="update_profile-action" action="update_profile-action.php" method="POST">
              <div class="table-responsive container">
                <table border="0" cellpadding="6" class="table">
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">ไอดี</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="id" value="<?php echo $meResult['id']; ?>" size="40" readonly="readonly" />
                                </div>
                        </td>
                    </tr>
                    <tr>

                        <td style="text-align: right;width: 200px; font-weight: bold">ชื่อผู้ใช้งาน</td>

                            <td><div class="form-group col-md-6"> <input class="form-control" type="text" name="username" value="<?php echo $meResult['username']; ?>" size="40" />
                        </div>
                    </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">ชื่อจริง</td>

                        <td><div class="form-group col-md-6"><input class="form-control" type="text" name="firstname" value="<?php echo $meResult['firstname']; ?>" size="40" /></div></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">นามสกุลจริง</td>
                        <td>
                        <div class="form-group col-md-6"><input class="form-control" type="text" name="lastname" value="<?php echo $meResult['lastname']; ?>" size="40" /></div></td>
                    </tr>
                     <tr>
                        <td style="text-align: right;width: 400px; font-weight: bold">ที่อยู่</td>
                        <td><div class="form-group col-md-6"><input class="form-control" type="text" name="address" value="<?php echo $meResult['address']; ?>" size="100" /></div></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">เพศ</td>
                        <td>
                        <div class="form-group col-md-6">
                            <input type="radio" name="sex" value="1"
                            <?php
                            if ($meResult['sex'] == 1) {
                                echo 'checked';
                            }
                            ?>
                                   />ชาย |
                            <input type="radio" name="sex" value="2"
                            <?php
                            if ($meResult['sex'] == 2) {
                                echo 'checked';
                            }
                            ?>
                                   />หญิง
                        </div></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">เบอร์โทรศัพท์</td>
                        <td>
                        <div class="form-group col-md-6"><input class="form-control" type="text" name="phone" value="<?php echo $meResult['phone']; ?>" size="40" /></div></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">อีเมล์</td>
                        <td>
                        <div class="form-group col-md-6"><input class="form-control" type="text" name="email" value="<?php echo $meResult['email']; ?>" size="40" /></div></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">สถานะการใช้งาน</td>
                        <td>
                        <div class="form-group col-md-6">
                            <?php
                            if ($meResult['active'] == 1 OR $meResult['active'] == 2) {
                                echo 'เปิดการใช้งาน';
                            } else {
                                echo 'ปิดการใช้งาน';
                            }
                            ?>
                        </div></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">วันที่สร้าง</td>
                        <td>
                        <div class="form-group col-md-6"><?php echo $meResult['create_date']; ?></div></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><div class="form-group col-md-6"><input class="btn btn-primary"  type="submit" name="submit" value="บันทึกข้อมูล" /></div></td>
                    </tr>
                </table>
              </div>
            <input type="hidden" name="frmAction" value="<?php echo $_SESSION['frmAction']; ?>" />
        </form>

    <?php
    mysql_close();
} else {
    echo "<meta charset=\"UTF-8\">";
    echo "คุณไม่ได้เข้าสู่ระบบ กรุณาเข้าสู่ระบบก่อน!";
    echo "<br/>";
    echo "<a href='signin.php'>คลิกเพื่อเข้าสู่ระบบ</a>";
}
include 'template_buttom.php';
