<?php
$this->title = "Khuyến cáo";
$cdnUrl = Yii::$app->params['frontend'];

?>
<?php foreach ($arrRecommend as $key => $value) : ?>
    <div class="row pb-5">
        <div class="col-3">
            <img src="<?= $cdnUrl.'/'.$value['feature_image'] ?>" alt="<?= $value['title'] ?>" width="100%">
        </div>
        <div class="col-9">
            <h4 class="text-uppercase"><?= $value['title'] ?></h4>
            <p><?= $value['description'] ?></p>
            <a class="btn btn-danger" href="<?= $cdnUrl ?>/tool/recommend-detail?detail=<?= $value['id'] ?>">Xem
                thêm >></a>
        </div>
    </div>
<?php endforeach; ?>
