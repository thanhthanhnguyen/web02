<?php
include_once(__DIR__ . '/dbconnect.php');
$httt_id = $_GET['httt_id'];
$sql =<<<EOT
    DELETE FROM hinhthucthanhtoan
    WHERE httt_id = $httt_id
EOT;
    //Thực thi
    mysqli_query($conn,$sql);.

header('location:thuc_thi_delete_form.php');
?>