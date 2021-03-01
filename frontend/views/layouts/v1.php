<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;

AppAsset::register($this);
$cdnUrl = Yii::$app->params['frontend'];
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?= $this->render('_head') ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container-fluid pt-3 bg-danger">
        <div class="container text-white">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <p class="mb-2">Xin chào! Đăng nhập hoặc đăng ký <a class="text-warning font-weight-bold" href="<?php echo $cdnUrl ?>/site/login" target="_blank" title="Đăng nhập"> tại đây</a></p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 text-right d-none d-sm-none d-md-block">
                    <ul class="list-unstyled">
                        <li class="d-inline text-white pl-2">
                            <a class="text-warning font-weight-bold" href="<?php echo $cdnUrl ?>/#" target="_blank" title="Kiểm tra bảo hành">Kiểm tra bảo hành |</a>
                        </li>
                        <li class="d-inline text-white pl-2">
                            <a class="text-warning font-weight-bold" href="<?php echo $cdnUrl ?>/#" target="_blank" title="Tuyển dụng">Tuyển dụng |</a>
                        </li>
                        <li class="d-inline text-white pl-2">
                            <a class="text-warning font-weight-bold" href="<?php echo $cdnUrl ?>/#" target="_blank" title="Liên hệ">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row">
            <div class="col-12 col-sm-2 col-md-2 col-lg-2">
                <a class="navbar-brand" href="<?php echo Url::home() ?>" target="_blank" title="Trang chủ GoEnGroup">
                    <img src="<?php echo Url::base() . '/img/logo.png' ?>" alt="JobsGO" height="60px" width="170px">
                </a>
            </div>
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 pr-0 pl-3">
                <div class="row">
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 pt-2 pb-0">
                        <div class="row">
                            <div class="col-4 col-md-4 col-sm-4 col-lg-4 pr-0">
                                <i class="fab fa-fort-awesome-alt fa-3x" style="color: #e51b23"></i>
                            </div>
                            <div class="col-8 col-md-8 col-sm-8 col-lg-8 px-0">
                                <h6>Vận chuyển thần tốc</h6>
                                <p>Khu vực miền Bắc</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 pt-2 pb-0">
                        <div class="row">
                            <div class="col-4 col-md-4 col-sm-4 col-lg-4 pr-0">
                                <i class="fab fa-fort-awesome-alt fa-3x" style="color: #e51b23"></i>
                            </div>
                            <div class="col-8 col-md-8 col-sm-8 col-lg-8 px-0">
                                <h6>Chất lượng tuyệt vời</h6>
                                <p>bảo hành miễn phí</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 pt-2 pb-0">
                        <div class="row">
                            <div class="col-4 col-md-4 col-sm-4 col-lg-4 pr-0">
                                <i class="fab fa-fort-awesome-alt fa-3x" style="color: #e51b23"></i>
                            </div>
                            <div class="col-8 col-md-8 col-sm-8 col-lg-8 px-0">
                                <h6>Support nhiệt tình</h6>
                                <p>Hotline: 19001900</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3 pt-2 pb-0">
                        <div class="row">
                            <div class="col-4 col-md-4 col-sm-4 col-lg-4 pr-0">
                                <i class="fab fa-fort-awesome-alt fa-3x" style="color: #e51b23"></i>
                            </div>
                            <div class="col-8 col-md-8 col-sm-8 col-lg-8 px-0">
                                <h6>Hỗ trợ kỹ thuật</h6>
                                <p>24/7 trừ ngày lễ, Tết</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-dark bg-danger sticky-top py-0">
        <div class="container font-weight-bold">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-white">
                    <!--                    <li class="nav-item">-->
                    <!--                        <a class="nav-link" href="#">Link</a>-->
                    <!--                    </li>-->
                    <!--                    <li class="nav-item dropdown">-->
                    <!--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"-->
                    <!--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                    <!--                            Dropdown-->
                    <!--                        </a>-->
                    <!--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">-->
                    <!--                            <a class="dropdown-item" href="#">Action</a>-->
                    <!--                            <a class="dropdown-item" href="#">Another action</a>-->
                    <!--                            <div class="dropdown-divider"></div>-->
                    <!--                            <a class="dropdown-item" href="#">Something else here</a>-->
                    <!--                        </div>-->
                    <!--                    </li>-->
                    <?php if (Yii::$app->user->isGuest) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $cdnUrl ?>/site/login">Login</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $cdnUrl ?>/site/logout">Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>