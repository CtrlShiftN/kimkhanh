<?php
$this->title = "Khuyến cáo";
$cdnUrl = Yii::$app->params['frontend'];

?>
<?php foreach ($arrRecommend as $key => $value) : ?>
    <div class="row pb-5">
        <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <img src="<?= $cdnUrl.'/'.$value['feature_image'] ?>" alt="<?= $value['title'] ?>" class="w-100 pb-4 pb-sm-0">
        </div>
        <div class="col-12 col-sm-6 col-md-9 col-lg-9 col-xl-9 pb-3 pb-sm-0">
            <h4 class="text-uppercase"><?= $value['title'] ?></h4>
            <p><?= $value['description'] ?></p>
            <a class="btn btn-danger" href="<?= $cdnUrl ?>/tool/recommend-detail?detail=<?= $value['id'] ?>">Xem
                thêm >></a>
        </div>
    </div>
<?php endforeach; ?>
