<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực thi câu lệnh DELETE trong PHP</title>
</head>
<body>
    <?php
    //Truy vấn database
    include_once(__DIR__ . '/dbconnect.php');
    //Chuẩn bị query
    $httt_id = 5;
    $sql =<<<EOT
    DELETE FROM hinhthucthanhtoan
    WHERE httt_id = $httt_id
EOT;
    //Thực thi
    mysqli_query($conn,$sql);
    ?>
</body>
</html>