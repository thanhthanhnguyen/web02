<?php
$conn = mysqli_connect('localhost','root','','salomon') or die('Xin lỗi, không kết nối được database.');
$conn->query("SET NAMES 'utf8mb4'");
$conn->query("SET CHARACTER SET UTF8MB4");
$conn->query("SET SESSION collation_connection = 'utf8mb4_unicode_ci'");
?>