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
        $username = mysql_real_escape_string(trim($_POST['username']));
        $password = mysql_real_escape_string(trim(sha1($_POST['password'])));
        $firstname = mysql_real_escape_string(trim($_POST['firstname']));
        $lastname = mysql_real_escape_string(trim($_POST['lastname']));
        $sex = mysql_real_escape_string(trim($_POST['sex']));
        $phone = mysql_real_escape_string(trim($_POST['phone']));
        $email = mysql_real_escape_string(trim($_POST['email']));
        $active = trim($_POST['active']);
        $create_date = date('Y-m-d H:i:s');
        $modified_date = date('Y-m-d H:i:s');
        $address = mysql_real_escape_string(trim($_POST['address']));
        // echo $username; echo "<br>";
        // echo $password; echo "<br>";
        // echo $firstname; echo "<br>";
        // echo $lastname; echo "<br>";
        // echo $sex; echo "<br>";
        // echo $phone;echo "<br>";
        // echo $email; echo "<br>";
        // echo $active; echo "<br>";
        // echo $create_date; echo "<br>";
        // echo $modified_date; echo "<br>";
        // echo $address;echo "<br>";
        /*
         * unset var
         */
        unset($_SESSION['frmAction']);

        /*
         * logical programming&Database
         */
         $meSQL = "INSERT INTO member ";
         $meSQL .= "(username,password,firstname,lastname,sex,phone,email,active,create_date,modified_date,address) VALUES ";
         $meSQL .= "('{$username}','{$password}','{$firstname}','{$lastname}','{$sex}','{$phone}','{$email}','{$active}',";
         $meSQL .= "'{$create_date}','{$modified_date}','{$address}') ";
        $meQuery = mysql_query($meSQL);
        if ($meQuery == TRUE) {
            echo "<meta charset=\"UTF-8\">";
            echo "บันทึกข้อมูลสำเร็จ";
            echo "<br/>";
            echo "<a href='manager_user.php'>ไปหน้าจัดการข้อมูล</a>";
        } else {
            echo "<meta charset=\"UTF-8\">";
            echo "มีปัญหาการบันทึกข้อมูล กรุณากลับไปบันทึกใหม่";
            echo "<br/>";
            echo "<a href='manager_user.php'>กลับไปหน้าเดิม</a>";
        }
        mysql_close();
    } else {
        echo "<meta charset=\"UTF-8\">";
        echo "มีข้อผิดพลาดระหว่าง Session!";
        echo "<br/>";
        echo "<a href='manager_user.php'>กลับไปหน้าเดิม</a>";
    }
} else {
    echo "<meta charset=\"UTF-8\">";
    echo "คุณไม่ได้เข้าสู่ระบบ กรุณาเข้าสู่ระบบก่อน!";
    echo "<br/>";
    echo "<a href='signin.php'>คลิกเพื่อเข้าสู่ระบบ</a>";
}
echo '</centre>';
