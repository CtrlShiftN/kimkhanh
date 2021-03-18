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
                            <li><a class="nav-link text-black-50" href="<?= $cdnUrl ?>/abc"><i
                                            class="fas fa-camera"></i> Camera &#9654 </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 3 &#9654 </a>
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
                            <li><a class="nav-link text-black-50" href="<?= $cdnUrl ?>/abc"><i class="fas fa-hotel"></i>
                                    Thang máy &#9654 </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href=""> Third level 1</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 2</a></li>
                                    <li><a class="dropdown-item" href=""> Third level 3 &#9654 </a>
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
                    <!-- Support -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="<?= $cdnUrl ?>/abc" id="categoryDropdown"
                           role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-compass"></i> Hỗ trợ
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Recruit -->
                            <li><a class="nav-link text-black-50" href="<?= $cdnUrl ?>/#"><i
                                            class="fas fa-globe-asia"></i>
                                    Tuyển dụng</a></li>
                            <!-- Software -->
                            <li><a class="nav-link text-black-50" href="<?= $cdnUrl ?>/#"><i
                                            class="fas fa-download"></i>
                                    Phần mềm</a></li>
                            <!-- Tech support -->
                            <li><a class="nav-link text-black-50" href="<?= $cdnUrl ?>/#"><i class="fas fa-cogs"></i>
                                    Hỗ trợ kỹ thuật</a></li>
                            <!-- Contact -->
                            <li><a class="nav-link text-black-50" href="<?= $cdnUrl ?>/site/contact"><i
                                            class="fas fa-globe-asia"></i>
                                    Liên hệ</a></li>
                        </ul>
                    </li>
                    <?php if (Yii::$app->user->isGuest) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?= $cdnUrl ?>/site/login">Login</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hi, <?= Yii::$app->user->identity->name; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <a class="nav-link text-black-50" href="<?= $cdnUrl ?>/user/profile"><i
                                            class="fas fa-portrait"></i> Hồ sơ cá nhân</a>
                                <div class="dropdown-divider"></div>
                                <a class="nav-link text-black-50" href="<?= $cdnUrl ?>/site/logout"><i
                                            class="fas fa-sign-out-alt"></i> Logout</a>
                            </div>
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
    <div class="container text-light">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 d-none d-sm-block">
                        <h4 class="font-weight-bolder">Về Kim Khánh Groups</h4>
                        <ul class="list-unstyled">
                            <li class="pb-2"><a class="text-light text-decoration-none" href="<?= $cdnUrl ?>">Giới
                                    thiệu</a></li>
                            <li class="pb-2"><a class="text-light text-decoration-none"
                                                href="<?= $cdnUrl ?>/user/agreements">Thỏa
                                    thuận sử dụng</a></li>
                            <li class="pb-2"><a class="text-light text-decoration-none"
                                                href="<?= $cdnUrl ?>/user/terms">Quy
                                    định bảo mật</a></li>
                            <li class="pb-2"><a class="text-light text-decoration-none" href="<?= $cdnUrl ?>/cooperate">Hợp
                                    tác</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 d-none d-sm-block">
                        <h4>Công cụ</h4>
                        <ul class="list-unstyled">
                            <li class="pb-2"><a class="text-light text-decoration-none" href="<?= $cdnUrl ?>/download">Tải
                                    phần mềm</a></li>
                            <li class="pb-2"><a class="text-light text-decoration-none"
                                                href="<?= $cdnUrl ?>/tech">Hỗ trợ kỹ thuật</a></li>
                            <li class="pb-2"><a class="text-light text-decoration-none" href="/quy-dinh-bao-mat">Chỉnh
                                    sách bảo mật</a></li>
                            <li class="pb-2"><a class="text-light text-decoration-none"
                                                href="/Co_che_giai_quyet_tranh_chap_MW.pdf">Giải quyết tranh chấp</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <h4>Công ty cổ phần Kim Khánh Groups</h4>
                <div class="about_address">Trụ sở: Tòa nhà Siêu Việt, 23 Trần Cao Vân, Phường Đa Kao, Quận 1, TP Hồ Chí
                    Minh
                </div>
                <div class="about_address">Chi nhánh: Tầng 12A, Tòa nhà Center Building, Số 1 Nguyễn Huy Tưởng, Quận
                    Thanh Xuân, Hà Nội.
                </div>
                <div class="about_address"> Điện thoại: <a class="text-light" href="tel:090809090909">0908090909</a> |
                    <a class="text-light" href="tel:19001888">19001888</a></div>
                <div class="about_address">Email: <a class="text-light" href="mailto:hotro@mywork.com.vn">hotro@kimkhanhgroups.com</a>
                </div>
            </div>
        </div>
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