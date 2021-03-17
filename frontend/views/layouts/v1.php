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
                <div class="col-12 col-sm-12 col-md-3 col-lg-4 px-0 pl-md-3 text-center text-lg-left py-2 font-weight-bold">
                    <a class="text-white" href="tel:555-555-5555"><i class="fas fa-headset"></i> 0908.090.503</a>
                    <br>
                    <a class="text-white" href="mailto:kimkhanh@gmail.com"><i class="fas fa-envelope"></i>
                        kimkhanh@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 px-0 text-center pt-3 d-none d-sm-none d-md-block">
                <a class="navbar-brand pt-0" href="<?php echo Url::home() ?>" target="_blank"
                   title="Trang chủ Kim Khánh Group">
                    <img class="img-fluid img-responsive" src="<?php echo Url::base() . '/img/logo.png' ?>"
                         alt="Kim Khánh">
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 px-0 text-center pl-3 pl-sm-0">
                <a class="navbar-brand" href="<?php echo Url::home() ?>" target="_blank"
                   title="Trang chủ Kim Khánh Groups">
                    <img class="img-fluid img-responsive" src="<?php echo Url::base() . '/img/khuyenmai.jpg' ?>"
                         alt="Kim Khánh khuyến mại">
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
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= $cdnUrl ?>"><i class="fas fa-globe-asia"></i> Trang
                            chủ</a>
                    </li>
                    <!-- Product -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="<?= $cdnUrl ?>/abc" id="categoryDropdown"
                           role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-tags"></i> Sản phẩm
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Camera -->
                            <li><a class="dropdown-item" href="<?= $cdnUrl ?>/abc"> Camera &#9654 </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 3 &raquo </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href=""> Fourth level 1</a></li>
                                            <li><a class="dropdown-item" href=""> Fourth level 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href=""> Second level 4</a></li>
                                    <li><a class="dropdown-item" href=""> Second level 5</a></li>
                                </ul>
                            </li>
                            <!-- Elevator -->
                            <li><a class="dropdown-item" href="<?= $cdnUrl ?>/abc"> Elevator &#9654 </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 3 &raquo </a>
                                        <ul class="submenu dropdown-menu">
                                            <li><a class="dropdown-item" href=""> Fourth level 1</a></li>
                                            <li><a class="dropdown-item" href=""> Fourth level 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href=""> Second level 4</a></li>
                                    <li><a class="dropdown-item" href=""> Second level 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"> First level 1 </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> First level 2 </a></li>
                </ul>
            </div>
        </div> <!-- navbar-collapse.// -->
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
<script>
    // Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
        $('.dropdown-menu a').click(function (e) {
            e.preventDefault();
            if ($(this).next('.submenu').length) {
                $(this).next('.submenu').toggle();
            }
            $('.dropdown').on('hide.bs.dropdown', function () {
                $(this).find('.submenu').hide();
            })
        });
    }
</script>
</body>
</html>