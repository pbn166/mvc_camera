<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "mvc_camera");
// b1: kết nối
$conn=mysqli_connect("localhost", "root", "", "mvc_camera");
// b2: khai báo ngôn ngữ
mysqli_query($conn, "SET NAMES 'utf8'");

?>
  