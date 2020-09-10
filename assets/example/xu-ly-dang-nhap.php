<?php
$Tentk = $_GET['Tentk'];
$MatKhau = $_GET['MatKhau'];
if($Tentk =='admin' && $MatKhau ==  '12345'){
    echo "Chào mừng bạn {$Tentk} đã đăng nhập thành công!";}
    else {echo "Đăng nhập thất bại!";}

?>