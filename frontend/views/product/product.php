<?php
include 'mysql/connect.php';
$cdnUrl = Yii::$app->params['frontend'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>review</title>
    <style>
        .picture{
            height: 300px;
            width: 300px;
            size: cover;
        }
    </style>
</head>
<body>
<table border="1" align="center">
    <tr>
        <td>STT</td>
        <td>Tên</td>
        <td>Thông Số</td>
        <td>Ảnh</td>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM product WHERE product_type_id = 1");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description_html'] ?></td>
                <td><img src="<?= $cdnUrl."/".$row['feature_image']?>" class="picture"></td>

            </tr>
            <?php
        }
    }
    ?>
</table>
</body>
</html>