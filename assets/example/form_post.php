<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>
<body>
    <h1>Form Post<h1>
    <form name="frmDangky" id="frmDangky" action="xu-ly-dang-ky.php" method="POST">
    <table border="1">
    <tr>
        <td>Tài Khoản:</td>
        <td>
            <input type="text" name="tentk" id="tentk"/>
        </td>
    </tr>
    <tr>
        <td>Mật Khẩu:</td>
        <td>
            <input type="text" name="matkhau" id="matkhau"/>
        </td>
    </tr>
    <tr>
        <td>Họ tên:</td>
        <td>
            <input type="text" name="fullname" id="fullname"/>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input name="Dangky" id="Dangky" type="submit" value="Đăng ký"/>
        </td>
    
    </tr>
    </table>
       
    </form>
</body>
</html>
<?php
