<?php

session_start();
echo "<meta charset=\"UTF-8\">";
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

    /*
     * unset var
     */
    unset($_SESSION['frmAction']);

    /*
     * logical programming&Database
     */
    $meSQL = "SELECT id,username,active FROM member WHERE username='{$username}' AND password='{$password}' AND active != 0";
    $meQuery = mysql_query($meSQL);
    $meCount = mysql_num_rows($meQuery);
    if ($meCount == 1) {
        $meResult = mysql_fetch_assoc($meQuery);
        $_SESSION['id'] = $meResult['id'];
        $_SESSION['username'] = $meResult['username'];
        $_SESSION['active'] = $meResult['active'];
        $_SESSION['checkSign'] = 'itoffside';
        echo "เข้าสู่ระบบสำเร็จ";
        echo "<br/>";

        echo "<script language=\"JavaScript\">";
         echo "window.location='mainpage.php';";
         echo "</script>";
    } else {
        $_SESSION['login_alert'] = "User name and password is NOT valid!";
         echo "<script language=\"JavaScript\">";
         echo "window.location='login.php';";
         echo "</script>";
    }
} else {
    echo "มีข้อผิดพลาดระหว่าง Session!";
    echo "<br/>";
    echo "<a href='index.php'>กลับไปหน้าเดิม</a>";
}
