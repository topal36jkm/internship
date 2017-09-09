<?php
  session_start();
  session_destroy();
  echo "<script language=\"JavaScript\">";
  echo "alert('คุณได้ออกจากระบบแล้ว');window.location='index.php';";
  echo "</script>";
?>
