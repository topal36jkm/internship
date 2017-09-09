<?php

session_start();
if (isset($_SESSION['checkSign']) == 'itoffside') {
    if (isset($_SESSION['frmAction']) == isset($_POST['frmAction'])) {

        /*
         * include file
         */
        include 'config.php';

        /*
         * set var
         */
        $firstname = mysql_real_escape_string(trim($_POST['firstname']));
        $lastname = mysql_real_escape_string(trim($_POST['lastname']));
        $sex = mysql_real_escape_string(trim($_POST['sex']));
        $phone = mysql_real_escape_string(trim($_POST['phone']));
        $email = mysql_real_escape_string(trim($_POST['email']));
        $modified_date = date('Y-m-d H:i:s');
        $address = mysql_real_escape_string(trim($_POST['address']));

        /*
         * unset var
         */
        unset($_SESSION['frmAction']);

        /*
         * logical programming&Database
         */
        $meSQL = "UPDATE member ";
        $meSQL .= "SET firstname='{$firstname}', ";
        $meSQL .= "lastname='{$lastname}', ";
        $meSQL .= "sex='{$sex}', ";
        $meSQL .= "phone='{$phone}', ";
        $meSQL .= "email='{$email}', ";
        $meSQL .= "modified_date='{$modified_date}' ";
        $meSQL .= "address='{$address}', ";
        $meSQL .= "WHERE id='".$_POST['id']."'";
        $meQuery = mysql_query($meSQL);
        if ($meQuery == TRUE) {
            echo "<meta charset=\"UTF-8\">";
            echo "บันทึกข้อมูลสำเร็จ";
            echo "<br/>";
            echo "<a href='mainpage.php'>ไปหน้าจัดการข้อมูล</a>";
        } else {
            echo "<meta charset=\"UTF-8\">";
            echo "มีปัญหาการบันทึกข้อมูล กรุณากลับไปบันทึกใหม่";
            echo "<br/>";
            echo "<a href='update_profile.php'>กลับไปหน้าเดิม</a>";
        }
        mysql_close();
    } else {
        echo "<meta charset=\"UTF-8\">";
        echo "มีข้อผิดพลาดระหว่าง Session!";
        echo "<br/>";
        echo "<a href='update_profile.php'>กลับไปหน้าเดิม</a>";
    }
} else {
    echo "<meta charset=\"UTF-8\">";
    echo "คุณไม่ได้เข้าสู่ระบบ กรุณาเข้าสู่ระบบก่อน!";
    echo "<br/>";
    echo "<a href='signin.php'>คลิกเพื่อเข้าสู่ระบบ</a>";
}
