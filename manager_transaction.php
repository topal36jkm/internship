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
            <center><h4>ทำรายการ</h4></center>
            <form name="manager_user-add-action" action="manager_transaction-action.php" method="POST">
              <div class="table-responsive container">
                <!-- <table border="0" cellpadding="6" class="table table-bordered"> -->
                <table border="0" cellpadding="6">
                    <tr>
                        <!--  -->

                    <?php
                        $meSQL = "SELECT * FROM member";
                        $meQuery = mysql_query($meSQL);
                        if ($meQuery == TRUE)
                        {
                            echo '
                            <td style="text-align: right;width: 200px; font-weight: bold">ชื่อผู้ใช้งาน &nbsp;</td>
                                <td>
                                <select name="owner_id" ng-model="discussionsSelect" class="form-control">';
                            $i = 0;
                            while ($meResult = mysql_fetch_assoc($meQuery))
                            {
                                $i++;
                                echo '<option value="'.$meResult['id'].'">'.$meResult['firstname'].' '.$meResult['lastname'].'</option>';
                            }
                            echo '</select>
                                <label>
                                    or <a href="manager_user-add.php">เพิ่มรายชื่อผู้ใช้</a>
                                </label>
                            </td>';
                        }
    

                     ?>
                        <!--  -->
                        
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">Car brand &nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text"  name="brand" value="" size="40"  />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">Car model &nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="model" value="" size="40" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">Car license &nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="license" value="" size="40" />
                            </div>                            
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 400px; font-weight: bold">Start date &nbsp;</td>
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="start_date" value="" size="40" />
                            </div>                                                        
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">Finish date &nbsp;</td>
                        
                        <td>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="finish_date" value="" size="40" />
                            </div>                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="text-align: right;width: 200px; font-weight: bold">Status &nbsp;</td>
                        <td>
                            <div class="form-group">
                                <select name="status" ng-model='discussionsSelect' class='form-control'>
                                    <option value="0" style="color: green">Repair already</option>
                                    <option value="1" style="color: red" selected="TRUE">Not repair yet</option>
                                    <option value="2" >Repairing</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;</td>                        
                        <td>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit">บันทึกข้อมูล</button>
                            </div>
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
