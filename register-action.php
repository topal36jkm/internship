<?php
        include 'config.php';
  date_default_timezone_set("Asia/Bangkok");
  //echo $id = $_POST['id'];echo "<br>";
  $username = $_POST['username'];
  $password = mysql_real_escape_string(sha1($_POST['password']));
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $sex = $_POST['sex'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $active = $_POST['active'];
  $created = date("Y-m-d H:i:s");
  $modified = date("Y-m-d H:i:s");
  $address = $_POST['address'];

	$connect = mysqli_connect("localhost" , "u102639566_root" , "167280943" , "u102639566_data");
  $sql1 = 'INSERT INTO member VALUE (NULL,"'.$username.'","'.$password.'","'.$firstname.'","'.$lastname.'","'.$sex.'","'.$phone.'","'.$email.'","'.$active.'","'.$created.'","'.$modified.'","'.$address.'")';

  $result  = mysqli_query($connect, $sql1);
  if(!$result)
  {
    echo mysqli_error().'<br>';
    die('Can not access database!');
  }

	$sql2 = 'SELECT * FROM member';

	$result  = mysqli_query($connect, $sql2);
	if (!$result)
    {
		echo mysqli_error().'<br>';
		die('Can not access database!');
	} else {
		 echo "<script language=\"JavaScript\">";
		 echo "alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว');window.location='index.php';";
		 echo "</script>";
		mysqli_close($connect);
	}
?>
