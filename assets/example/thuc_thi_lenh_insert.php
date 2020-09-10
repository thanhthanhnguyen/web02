<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực thi câu lệnh Insert trong PHP</title>
</head>
<body>
    <?php
    //Truy vấn database
    include_once(__DIR__ . '/dbconnect.php');
    //Chuẩn bị query
    $tenhinhthucthanhtoan ='Thanh Toán ATM';
    $sql ="INSERT INTO `hinhthucthanhtoan`(httt_mota) values('$tenhinhthucthanhtoan');";
    //Thực thi
    mysqli_query($conn,$sql);
    ?>
</body>
</html>