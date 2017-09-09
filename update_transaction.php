<?php
include 'template_top.php';
echo "<div style='height: 70px'></div><center>";
if (isset($_SESSION['checkSign']) == 'itoffside') {
    if (isset($_SESSION['frmAction']) == isset($_POST['frmAction'])) {

        /*
         * include file
         */
        include 'config.php';

        /*
         * set var
         */
        $status = mysql_real_escape_string(trim($_POST['status']));
        $license = mysql_real_escape_string(trim($_POST['car_license']));
        /*
         * unset var
         */
        unset($_SESSION['frmAction']);

        /*
         * logical programming&Database
         */
        $meSQL = "UPDATE repair_record";
        $meSQL .= "SET status='".$status."'";
        $meSQL .= "WHERE car_license='".$license."';";
        $meQuery = mysql_query($meSQL);
        if ($meQuery == TRUE) {
            echo "<meta charset=\"UTF-8\">";
            echo "บันทึกข้อมูลสำเร็จ";
            echo "<br/>";
            echo "<h4><a href='report.php'>ไปหน้าจัดการข้อมูล</a></h4>";
        } else {
            echo "<meta charset=\"UTF-8\">";
            echo "มีปัญหาการบันทึกข้อมูล กรุณากลับไปบันทึกใหม่";
            echo "<br/>";
            echo "<h4><a href='report.php'>กลับไปหน้าเดิม</a></h4>";
        }
        mysql_close();
    } else {
        echo "<meta charset=\"UTF-8\">";
        echo "มีข้อผิดพลาดระหว่าง Session!";
        echo "<br/>";
        echo "<h4><a href='report.php'>กลับไปหน้าเดิม</a></h4>";
    }
} else {
    echo "<meta charset=\"UTF-8\">";
    echo "คุณไม่ได้เข้าสู่ระบบ กรุณาเข้าสู่ระบบก่อน!";
    echo "<br/>";
    echo "<h4><a href='signin.php'>คลิกเพื่อเข้าสู่ระบบ</a></h4>";
}
echo "</center>";
?>
