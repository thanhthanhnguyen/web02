<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực Thi Lệnh INSERT với FORM trong PHP</title>
</head>
<body>
    <form name="frmHTTT" id="frmHTTT" method="post" action="">
    Tên hình thức thanh toán:<input name="httt_mota" id="httt_mota" type="text"/><br/>
    <input name="btnLuu" id="btnLuu" type="submit" value="Lưu"/>
    </form>
    <?php
    if(isset($_POST['btnLuu'])){
        include_once(__DIR__ . '/dbconnect.php');
        //Chuẩn bị query
        $httt_mota =$_POST['httt_mota'];
        $sql = "INSERT INTO `hinhthucthanhtoan`(httt_mota) values('$httt_mota');";
        //Thực Thi
        mysqli_query($conn, $sql);  
    }
    ?>
</body>
</html>