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
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 px-0 bg-warning text-center font-weight-bold py-2 py-sm-2 py-md-3 py-lg-3 py-xl-2">
                    <i class="far fa-clock"></i> <?= date('l, d F Y') ?>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 px-0 text-center font-weight-bold py-2 py-sm-2 py-md-3 py-lg-3 py-xl-2">
                    <div class="typewriter-text">Welcome to Kim Khanh's website!</div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-4 px-0 pl-md-3 text-center text-lg-left py-2 font-weight-bold">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 px-0">
                            <a class="text-white" href="tel:555-555-5555"><i class="fas fa-headset"></i>
                                0908.090.503</a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 px-0">
                            <a class="text-white" href="mailto:kimkhanh@gmail.com"><i class="fas fa-envelope"></i>
                                kimkhanh@gmail.com</a>
                        </div>
                    </div>
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
    <nav class="navbar navbar-expand-md navbar-dark bg-danger sticky-top py-1">
        <div class="container font-weight-bold">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-white">
                    <!-- Home -->
                    <li class="nav-item borderX px-md-1 px-lg-3">
                        <a class="nav-link text-light" href="<?= $cdnUrl ?>"><i class="fas fa-home"><span
                                        class="d-md-none"> Trang chủ</span></i></a>
                    </li>
                    <!-- Product -->
                    <li class="nav-item dropdown pr-md-3 border-md-right">
                        <a class="nav-link dropdown-toggle text-light d-lg-none" href="<?= $cdnUrl ?>/abc"
                           id="categoryDropdown"
                           role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars px-md-2"></i> Sản phẩm </i>
                        </a>
                        <a class="nav-link dropdown-toggle text-light d-none d-lg-block" href="<?= $cdnUrl ?>/abc"
                           id="categoryDropdown"
                           role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bars px-md-2"></i> Danh mục sản phẩm </i>
                        </a>
                        <ul class="dropdown-menu shadow-lg">
                            <!-- Camera -->
                            <li class="dropdown-item"><a class="nav-link text-dark"
                                                         href="<?= $cdnUrl ?>/abc"><i
                                            class="fas fa-camera"></i> Camera <i
                                            class="fas fa-caret-right float-right px-3"></i></a>
                                <ul class="submenu dropdown-menu shadow-lg">
                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 3 <i
                                                    class="fas fa-caret-right float-right"></i></a>
                                        <ul class="submenu dropdown-menu shadow-lg">
                                            <li><a class="dropdown-item" href=""> Fourth level 1</a></li>
                                            <li><a class="dropdown-item" href=""> Fourth level 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href=""> Second level 4</a></li>
                                    <li><a class="dropdown-item" href=""> Second level 5</a></li>
                                </ul>
                            </li>
                            <!-- Elevator -->
                            <li class="dropdown-item"><a class="nav-link text-dark"
                                                         href="<?= $cdnUrl ?>/abc"><i
                                            class="fas fa-hotel"></i> Thang máy <i
                                            class="fas fa-caret-right float-right px-3"></i></a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 3 <i
                                                    class="fas fa-caret-right float-right"></i></a>
                                        <ul class="submenu dropdown-menu shadow-lg">
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
                </ul>
                <ul class="navbar-nav text-white ml-auto">
                    <!-- Software -->
                    <li class="nav-item m-0 mr-lg-3 mr-xl-5">
                        <a class="nav-link text-light" href="<?= $cdnUrl ?>/#"><i class="fas fa-download"></i>Phần
                            mềm</a>
                    </li>
                    <li class="nav-item m-0 mr-lg-3 mr-xl-5">
                        <a class="nav-link text-light" href="<?= $cdnUrl ?>/#"><i
                                    class="fas fa-globe-asia"></i>
                            Tuyển dụng</a></li>
                    <!-- Support -->
                    <li class="nav-item dropdown m-0 mr-lg-3 mr-xl-5">
                        <a class="nav-link dropdown-toggle text-light" href="<?= $cdnUrl ?>/abc" id="categoryDropdown"
                           role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-compass"></i> Hỗ trợ
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Recruit -->
                            <!-- Tech support -->
                            <li class="dropdown-item"><a class="nav-link text-dark" href="<?= $cdnUrl ?>/#"><i
                                            class="fas fa-cogs"></i>
                                    Hỗ trợ kỹ thuật</a></li>
                            <!-- Contact -->
                            <li class="dropdown-item">
                                <a class="nav-link text-dark" href="<?= $cdnUrl ?>/site/contact">
                                    <i class="fas fa-globe-asia"></i> Liên hệ
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php if (Yii::$app->user->isGuest) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= $cdnUrl ?>/site/login"><i
                                        class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light d-md-none d-lg-block shortName float-right" href="#"
                               id="userDropdown " role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="far fa-user"></i> Hi, <?= Yii::$app->user->identity->name; ?> !
                            </a>
                            <a class="nav-link dropdown-toggle text-light d-none d-md-block d-lg-none" href="#"
                               id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="far fa-user"></i> Tài khoản
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item">
                                    <a class="nav-link text-dark" href="<?= $cdnUrl ?>/user/profile">
                                        <i class="fas fa-portrait"></i> Hồ sơ cá nhân
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link text-dark" href="<?= $cdnUrl ?>/site/logout">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div> <!-- navbar-collapse.// -->
    </nav>

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer bg-danger">
    <section class="kh-footer">
        <div class="container text-white">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="pb-4">Kim Khánh Groups</h3>
                    <address>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i> Trụ sở: Số 1 đường
                            Khương
                            Đình, Kim Giang, Hà Nội</p>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i> Văn phòng: Số 1 đường
                            Khương
                            Đình, Kim Giang, Hà Nội</p>
                        <p class="effect"><i class="fa fa-phone-alt my-border-radius"></i> <a class="text-white"
                                                                                              href="tel:0916354248">0916354248</a>
                        </p>
                        <p class="effect"><i class="fa fa-envelope my-border-radius"></i> <a class="text-white"
                                                                                             href="mailto:kimkhanh@gmail.com">kimkhanh@gmail.com</a>
                        </p>
                        <p class="effect"><i class="fa fa-globe-asia my-border-radius"></i> <a class="text-white"
                                                                                               href="<?= $cdnUrl ?>">www.kimkhanhgroups.com</a>
                            - <a class="text-white" href="<?= $cdnUrl ?>">www.kimkhanhgroups.com</a></p>
                        <p class="effect"><i class="fa fa-barcode my-border-radius"></i> MST: 01010xxxx</p>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i>
                            <a class="text-white"
                               href="https://www.google.com/maps/place/Kim+Giang,+Thanh+Xu%C3%A2n,+Hanoi,+Vietnam/@20.9823843,105.8095188,16z/data=!3m1!4b1!4m5!3m4!1s0x3135acec14cdcfb9:0xb4f53c8207b23974!8m2!3d20.9828413!4d105.8121513">Bản
                                đồ đường đi</a>
                        </p>
                    </address>
                    <div class="social-others">
                        <a class="pr-1" href="https://www.facebook.com/nhaantoan/" target="_blank"
                           rel="noopener noreferrer">
                            <i class="fab fa-facebook-square fa-2x text-white"></i>
                        </a>
                        <a href="https://www.facebook.com/nhaantoan/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-youtube-square fa-2x text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="pb-4">Chi nhánh miền Nam</h3>
                    <address>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i> Văn phòng: Số 1 đường
                            Khương
                            Đình, Kim Giang, Hà Nội</p>
                        <p class="effect"><i class="fa fa-phone-alt my-border-radius"></i> <a class="text-white"
                                                                                              href="tel:0916354248">0916354248</a>
                        </p>
                        <p class="effect"><i class="fa fa-envelope my-border-radius"></i> <a class="text-white"
                                                                                             href="mailto:kimkhanh@gmail.com">kimkhanh@gmail.com</a>
                        </p>
                        <p class="effect"><i class="fa fa-globe-asia my-border-radius"></i> <a class="text-white"
                                                                                               href="<?= $cdnUrl ?>">www.kimkhanhgroups.com</a>
                            - <a class="text-white" href="<?= $cdnUrl ?>">www.kimkhanhgroups.com</a></p>
                        <p class="effect"><i class="fa fa-barcode my-border-radius"></i> MST: 01010xxxx</p>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i>
                            <a class="text-white"
                               href="https://www.google.com/maps/place/Kim+Giang,+Thanh+Xu%C3%A2n,+Hanoi,+Vietnam/@20.9823843,105.8095188,16z/data=!3m1!4b1!4m5!3m4!1s0x3135acec14cdcfb9:0xb4f53c8207b23974!8m2!3d20.9828413!4d105.8121513">Bản
                                đồ đường đi</a>
                        </p>
                    </address>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="pb-4">Chi nhánh miền Trung</h3>
                    <address>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i> Văn phòng: Số 1 đường
                            Khương
                            Đình, Kim Giang, Hà Nội</p>
                        <p class="effect"><i class="fa fa-phone-alt my-border-radius"></i> <a class="text-white"
                                                                                              href="tel:0916354248">0916354248</a>
                        </p>
                        <p class="effect"><i class="fa fa-envelope my-border-radius"></i> <a class="text-white"
                                                                                             href="mailto:kimkhanh@gmail.com">kimkhanh@gmail.com</a>
                        </p>
                        <p class="effect"><i class="fa fa-globe-asia my-border-radius"></i> <a class="text-white"
                                                                                               href="<?= $cdnUrl ?>">www.kimkhanhgroups.com</a>
                            - <a class="text-white" href="<?= $cdnUrl ?>">www.kimkhanhgroups.com</a></p>
                        <p class="effect"><i class="fa fa-barcode my-border-radius"></i> MST: 01010xxxx</p>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i>
                            <a class="text-white"
                               href="https://www.google.com/maps/place/Kim+Giang,+Thanh+Xu%C3%A2n,+Hanoi,+Vietnam/@20.9823843,105.8095188,16z/data=!3m1!4b1!4m5!3m4!1s0x3135acec14cdcfb9:0xb4f53c8207b23974!8m2!3d20.9828413!4d105.8121513">Bản
                                đồ đường đi</a>
                        </p>
                    </address>
                </div>
            </div>
        </div>
    </section>
    <section class="kh-copyright">
    </section>
</footer>
<div class="fix-footer bg-danger d-none d-sm-none d-md-block">
    <div class="container text-white">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="http://hikvision.vn/danh-cho-dai-ly/dang-ky-dai-ly" target="_blank"
                   class="text-white font-weight-bold">
                    <i class="fa fa-pencil-alt text-white"></i> Đăng ký đại lý
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="tel:0916354248" class="text-white font-weight-bold">
                    <i class="fa fa-phone-alt text-white"></i> 0916 354 248
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="http://hikvision.vn/danh-cho-dai-ly/dang-ky-dai-ly" target="_blank"
                   class="text-white font-weight-bold">
                    <i class="fab fa-facebook text-white"></i> FB Kim Khánh
                </a>
            </div>
        </div>
    </div>
</div>

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