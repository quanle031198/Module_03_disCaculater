<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kết quả thu được</title>
</head>
<body>
    <h1>Kết quả thu được!</h1>
    <table border="1px">
        <tr>
            <th>Mô tả</th>
            <th>Giá niêm yết</th>
            <th>Tỷ lệ chiết khấu</th>
            <th>Lượng chiết khấu</th>
            <th>Giá sau khi đã được chiết khấu</th>
        </tr>
        <tr>
            <td><?php echo $describe ?></td>
            <td><?php echo $price ?></td>
            <td><?php echo $discount ?></td>
            <td><?php echo $discountAmount ?></td>
            <td><?php echo $discountPrice ?></td>
        </tr>
    </table>
</body>
</html>