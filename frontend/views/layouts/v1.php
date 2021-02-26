<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;

AppAsset::register($this);
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
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top py-0">
        <div class="container font-weight-bold">
            <a class="navbar-brand" href="<?php echo Url::home() ?>" target="_blank" title="Trang chủ GoEnGroup">
                <img src="<?php echo Url::base() . '/img/logo.png' ?>" alt="JobsGO" height="60px" width="170px">
            </a>
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
                            <a class="nav-link" href="./site/login">Login</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./site/login">Logout</a>
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