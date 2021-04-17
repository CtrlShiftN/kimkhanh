<?php
$this->title = "Khuyến cáo";
$cdnUrl = Yii::$app->params['frontend'];

?>
    <style>
        table {
            text-align: center;
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <h2 class="text-danger text-uppercase"><?= $recommendDetail['title'] ?></h2>
    <small><i>Ngày đăng: <?= $recommendDetail['updated'] ?> </i></small>
    <hr>
<?= $recommendDetail['content_html']; ?>