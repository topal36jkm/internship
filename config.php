<?php
/*
 * set var
 */
$cfHost = "localhost";
$cfUser = "u102639566_root";
$cfPassword = "167280943";
$cfDatabase = "u102639566_data";

/*
 * connection mysql
 */

@$meConnect = mysql_connect($cfHost,$cfUser,$cfPassword) or die("Error conncetion mysql...");
$meDatabase = mysql_select_db($cfDatabase);
mysql_query("SET NAMES UTF8");
?>
