<?php
	include('template_top.php');
	echo "<div style='height: 80px'></div><center>";
	$connect = mysqli_connect("localhost" , "u102639566_root" , "167280943" , "u102639566_data");
	$sql     = 'SELECT *
				      FROM member';
	$result  = mysqli_query($connect, $sql);
	if (!$result) {
		echo mysqli_error().'<br>';
		die('Can not access database!');
    } else {
			echo'<head>
					<title>เพิ่มผู้ใช้งานใหม่</title>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<link href="css/bootstrap.min.css" rel="stylesheet">
					<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
			</head>';
			echo'<form name="register-action" action="register-action.php" method="POST">';
					echo'<div class="table-responsive container">
								<table border="0" cellpadding="6" class="table table">';
							echo'<tr>';
									echo'<td style="text-align: right;width: 200px; font-weight: bold">ชื่อผู้ใช้งาน</td>';
									echo'<td><div class="form-group col-md-6">
                                <input class="form-control" type="text" name="username" value="" size="40" /></td>';
							echo'</tr>';
							echo'<tr>';
									echo'<td style="text-align: right;width: 200px; font-weight: bold">รหัสผ่าน</td>';
									echo'<td><div class="form-group col-md-6">
                                <input class="form-control" type="password" name="password" value="" size="40"  /></td>';
							echo'</tr>';
							echo'<tr>';
									echo'<td style="text-align: right;width: 200px; font-weight: bold">ชื่อจริง</td>';
									echo'<td><div class="form-group col-md-6">
                                <input class="form-control" type="text" name="firstname" value="" size="40" /></td>';
							echo'</tr>';
							echo'<tr>';
									echo'<td style="text-align: right;width: 200px; font-weight: bold">นามสกุลจริง</td>';
									echo'<td><div class="form-group col-md-6">
                                <input class="form-control" type="text" name="lastname" value="" size="40" /></td>';
							echo'</tr>';
							echo'<tr>';
									echo'<td style="text-align: right;width: 200px; font-weight: bold">ที่อยู๋</td>';
									echo'<td><div class="form-group col-md-6">
                                <input class="form-control" type="text" name="address" value="" size="100" /></td>';
							echo'</tr>';
							echo'<tr>';
									echo'<td style="text-align: right;width: 200px; font-weight: bold">เพศ</td>';
									echo'<td>';
											echo'<input type="radio" name="sex" value="1" />ชาย |';
											echo'<input type="radio" name="sex" value="2"/>หญิง';
									echo'</td>';
							echo'</tr>';
							echo'<tr>';
									echo'<td style="text-align: right;width: 200px; font-weight: bold">เบอร์โทรศัพท์</td>';
									echo'<td><div class="form-group col-md-6">
                                <input class="form-control" type="text" name="phone" value="" size="100" /></td>';
							echo'</tr>';
							echo'<tr>';
									echo'<td style="text-align: right;width: 200px; font-weight: bold">อีเมล์</td>';
									echo'<td><div class="form-group col-md-6">
                                <input class="form-control" type="text" name="email" value="" size="40" /></td>';
							echo'</tr>';
									echo'<input type="hidden" name="active" value="1" />';
							echo'<tr>';
									echo'<td>&nbsp;</td>';
									echo'<td><input class="btn btn-primary" type="submit" name="submit" value="บันทึกข้อมูล" /></td>';
							echo'</tr>';
					echo'</table>
						</div>';
			echo'</form>';
	    mysqli_close($connect);
	}
	include('template_buttom.php');
?>
