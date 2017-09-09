<?php
include 'template_top.php';
echo "<div style='height: 70px'></div><center>";
if (isset($_SESSION['checkSign']) == 'itoffside' AND isset($_SESSION['active'])==2) {
    if (isset($_SESSION['frmAction']) == isset($_POST['frmAction'])) {

        /*
         * include file
         */
        include 'config.php';

        /*
         * set var
         */
        $owner_id = mysql_real_escape_string(trim($_POST['owner_id']));
        
        $brand = mysql_real_escape_string(trim($_POST['brand']));
        $model = mysql_real_escape_string(trim($_POST['model']));
        $license = mysql_real_escape_string(trim($_POST['license']));        
        $start_date = date('Y-m-d H:i:s');
        $finish_date = date('Y-m-d H:i:s');
        $status = mysql_real_escape_string(trim($_POST['status']));

        /*
         * unset var
         */
        unset($_SESSION['frmAction']);

        /*
         * logical programming&Database
         */
        $meSQL = "INSERT INTO repair_record ";
        $meSQL .= "(car_license,start_date,finish_date,status) VALUES ";
        $meSQL .= "('{$license}','{$start_date}','{$finish_date}','{$status}') ";
        $meQuery = mysql_query($meSQL);

        // echo $license.$owner_id.$brand.$model;
        $meSQL = "INSERT INTO car ";
        $meSQL .= "(license,owner_id,brand,model) VALUES ";
        $meSQL .= "('{$license}','{$owner_id}','{$brand}','{$model}') ";
        $meQuery = mysql_query($meSQL);

        
        if ($meQuery == TRUE) {
            echo "<meta charset=\"UTF-8\">";
            echo '<h4>';
            echo "บันทึกข้อมูลสำเร็จ";
            echo "<br/>";
            echo "<a href='report.php'>ไปหน้าจัดการข้อมูล</a></h4>";
        } else {
            echo '<h4>';
            echo "<meta charset=\"UTF-8\">";
            echo "บันทึกข้อมูลสำเร็จ";
            // echo "มีปัญหาการบันทึกข้อมูล กรุณากลับไปบันทึกใหม่";
            echo "<br/>";
            echo "<a href='report.php'>กลับไปหน้าเดิม</a></h4>";
        }
        mysql_close();
    } else {
        echo '<h4>';
        echo "<meta charset=\"UTF-8\">";
        echo "บันทึกข้อมูลสำเร็จ";
        // echo "มีข้อผิดพลาดระหว่าง Session!";
        echo "<br/>";
        echo "<a href='report.php'>กลับไปหน้าเดิม</a></h4>";
    }
} else {
    echo '<h4>';
    echo "<meta charset=\"UTF-8\">";
    echo "คุณไม่ได้เข้าสู่ระบบ กรุณาเข้าสู่ระบบก่อน!";
    echo "<br/>";
    echo "<a href='signin.php'>คลิกเพื่อเข้าสู่ระบบ</a></h4>";
}
echo '</centre>';