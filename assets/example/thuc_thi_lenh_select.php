<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thực thi câu lệnh SELECT trong PHP</title>
</head>
<body>
    <?php
    //Truy vấn database
    include_once(__DIR__ . '/dbconnect.php');
    //Chuẩn bị query
    $httt_id = 5;
    $sql =<<<EOT
    SELECT httt_id as MaThanhToan,httt_mota as TenThanhToan FROM hinhthucthanhtoan
EOT;
    //Thực thi
    $result = mysqli_query($conn,$sql);
    //Tạo 1 mảng để chứa các dl được trả về
    $data =[];
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $data[] = array(
            'id' =>$row['MaThanhToan'],
            'mota' => $row['TenThanhToan'],
        );
    }
    ?>
    <table border="1">
    <thead>
            <tr>
                <th>Mã Hình thức Thanh toán</th>
                <th>Tên Hình thức Thanh toán</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $httt): ?>
            <tr>
                <td><?= $httt['id']; ?></td>
                <td><?= $httt['mota']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>