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
            height: auto;
            width: 300px;
        }
    </style>
</head>
<body>
<table border="1" align="center">
    <tr>
        <td>Tên</td>
        <td>Thông Số</td>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM product WHERE product_type_id = 2");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><h5 class="text-center text-black"><?php echo $row['name']; ?></h5><br>
                    <img src="<?= $cdnUrl."/".$row['feature_image']?>" class="picture">
                </td>
                <td><?php echo $row['description_html'] ?></td>
            </tr>
            <?php
        }
    }
    ?>
</table>
</body>
</html>