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
    $meSQL = "SELECT * FROM member WHERE id != '{$_SESSION['id']}' ";
    $meQuery = mysql_query($meSQL);
    $meCount = mysql_num_rows($meQuery);
    ?>

        
            <?php
            if($meCount > 0) {
            ?>
            <div class="container-fluid">
              <center><h4>รายชื่อผู้ใช้งาน</h4></center>
              <div class="table-responsive">
              <table border="1" cellpadding="6" class="table table-bordered">              
                  <thead>
                      <tr style="background-color:  #b3b3ff">
                          <th>รหัสผู้ใช้</th>
                          <th>ชื่อเข้าใช้</th>
                          <th>ชื่อ-นามสกุล</th>
                          <th>ที่อยู่</th>
                          <th>เพศ</th>
                          <th>เบอร์โทร</th>
                          <th>อีเมล์</th>
                          <th>วันที่สร้าง</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $i = 1;
                      while ($meResult = mysql_fetch_assoc($meQuery)){
                        if ($i%2==0) {
                          $c = "#cce6ff";                          
                        }
                        else $c = "white";
                            if($meResult['sex'] == 1){
                                $sex = 'ชาย';
                            }else{
                                $sex = 'หญิง';
                            }
                        ?>
                        <tr>
                            <td style="background-color: <?php echo $c; ?>"><?php echo $meResult['id']; ?></td>
                            <td style="background-color: <?php echo $c; ?>"><?php echo $meResult['username']; ?></td>
                            <td style="background-color: <?php echo $c; ?>"><?php echo $meResult['firstname']; ?> <?php echo $meResult['lastname']; ?></td>
                            <td style="background-color: <?php echo $c; ?>"><?php echo $meResult['address']; ?></td>
                            <td style="background-color: <?php echo $c; ?>"><?php echo $sex ?></td>
                            <td style="background-color: <?php echo $c; ?>"><?php echo $meResult['phone']; ?></td>
                            <td style="background-color: <?php echo $c; ?>"><?php echo $meResult['email']; ?></td>
                            <td style="background-color: <?php echo $c; ?>"><?php echo $meResult['create_date']; ?></td>
                            <form method = "post" action = "manager_user-edit.php" class="col-md-2">
                            <td style="background-color: <?php echo $c; ?>">
                                <input type="hidden" name="id" value="<?php echo $meResult['id']; ?>">
                                <input type= "submit" value="แก้ข้อมูลผู้ใช้" class="btn btn-info">
                                <a href="manager_user-delete.php?id=<?php echo $meResult['id']; ?>" class="btn btn-danger">ลบผู้ใช้</a>
                            </td>
                            </form>
                        </tr>
                      <?php
                      $i = $i+1;
                      }
                      ?>
                  </tbody>
              </table>
              </div>
            </div>
<?php
            }else{
                echo "<h3>ไม่มีข้อมูลผู้ใช้งาน</h3>";
            }
            include 'template_buttom.php';
    mysql_close();
} else {
    echo "<meta charset=\"UTF-8\">";
    echo "คุณไม่ได้เข้าสู่ระบบ กรุณาเข้าสู่ระบบก่อน!";
    echo "<br/>";
    echo "<a href='signin.php'>คลิกเพื่อเข้าสู่ระบบ</a>";
}
