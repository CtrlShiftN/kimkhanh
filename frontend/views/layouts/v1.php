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
    <div class="container-fluid bg-danger">
        <div class="container text-white">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 py-2 px-0 bg-warning text-center font-weight-bold">
                    <i class="far fa-clock"></i> <?= date('l, d F Y') ?>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 px-0 py-2 text-center font-weight-bold">
                    <div class="typewriter-text">Welcome to Kim Khanh's website!</div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 px-0 text-center py-2 font-weight-bold">
                    <a class="text-white" href="tel:555-555-5555"><i class="fas fa-headset"></i> 0908.090.503</a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-2 px-0 text-center py-2 font-weight-bold">
                    <a class="text-white" href="mailto:kimkhanh@gmail.com"><i class="fas fa-envelope"></i> kimkhanh@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 px-0 text-center pt-3 d-none d-sm-none d-md-block">
                <a class="navbar-brand pt-0" href="<?php echo Url::home() ?>" target="_blank"
                   title="Trang chủ GoEnGroup">
                    <img class="img-fluid img-responsive" src="<?php echo Url::base() . '/img/logo.png' ?>"
                         alt="JobsGO">
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 px-0 text-center pl-3 pl-sm-0">
                <a class="navbar-brand" href="<?php echo Url::home() ?>" target="_blank" title="Trang chủ GoEnGroup">
                    <img class="img-fluid img-responsive" src="<?php echo Url::base() . '/img/khuyenmai.jpg' ?>"
                         alt="JobsGO">
                </a>
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
        this is a footer
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>