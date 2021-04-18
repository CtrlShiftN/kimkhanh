<?php
$this->title = "Khuyến cáo";
$cdnUrl = Yii::$app->params['frontend'];

?>


<?php foreach ($arrRecommend as $key => $value) : ?>
    <div class="row">
        <div class="col-sm-4">
            <img src="<?= $cdnUrl . '/' . $value['feature_image'] ?>" alt="<?= $value['title'] ?>" width="240px">
        </div>
        <div class="col-sm-8">
            <h4><?= $value['title'] ?></h4>
            <?= $value['description'] ?><br>
            <a class="btn btn-success text-white"
               href="<?= $cdnUrl ?>/tool/recommend-detail?detail=<?= $value['id'] ?>">Xem
                thêm</a>
        </div>
    </div>
<?php endforeach; ?>
