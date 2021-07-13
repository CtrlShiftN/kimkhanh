<?php

/* @var $this yii\web\View */

$cdnUrl = Yii::$app->params['frontend'];
$imgUrl = Yii::$app->params['common'];
$this->title = "Chi tiết sản phẩm";
?>
<link rel="stylesheet" href="<?= $cdnUrl ?>/css/productDetail.css">
<link rel="stylesheet" href="<?= $cdnUrl ?>/css/easyzoom.css" type="text/css">
<link rel="stylesheet" href="<?= $cdnUrl ?>/css/swiper-bundle.min.css" type="text/css">
<script src="<?= $cdnUrl ?>/js/easyzoom.js" type="text/javascript"></script>
<script src="<?= $cdnUrl ?>/js/swiper-bundle.min.js" type="text/javascript"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
<?php $imgArr = explode(',', $productDetail['images']); ?>
<div class="container">
    <div class="row py-3">
        <div class="col-12 col-md-5">
            <div class="product__carousel">
                <div class="swiper-container gallery-top h-50">
                    <div class="swiper-wrapper">
                        <?php foreach ($imgArr as $key => $value) : ?>
                            <div class="swiper-slide easyzoom easyzoom--overlay">
                                <a href="<?= $imgUrl . '/' . $value ?>">
                                    <img src="<?= $imgUrl . '/' . $value ?>" alt="">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>
                <div class="swiper-container gallery-thumbs d-none d-md-block">
                    <div class="swiper-wrapper">
                        <?php foreach ($imgArr as $key => $value) : ?>
                            <div class="swiper-slide">
                                <img src="<?= $imgUrl . '/' . $value ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7">
            <h3 class="py-2 m-0 text-bold mulishFont"><?= $productDetail['name'] ?></h3>
            <h3 class="bgGrayColor p-3 text-danger my-3 mulishFont"><?= number_format($productDetail['selling_price']) ?>
                VNĐ</h3>
            <div class="row pt-3 pb-4 border-bottom">
                <!--promotion-->
                <div class="col-12 row my-2 mx-0">
                    <div class="col-12 col-md-5 col-lg-4 pr-0">
                        <h5>Khuyến mại:</h5>
                    </div>
                    <div class="col-12 col-md-7 col-lg-8 pl-0 pl-3 pr-md-0">
                        <ul class="pl-2" id="promotion">
                            <li class="row">
                                <div class="col-2 col-md-3 col-lg-2 p-0 text-center">
                                    <img src="<?= $cdnUrl ?>/img/freeShip.png">
                                </div>
                                <div class="col-10 col-md-9 col-lg-10 p-0">
                                    Miễn phí vận chuyển
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-2 col-md-3 col-lg-2 p-0 text-center">
                                    <i class="fas fa-tools text-danger"></i>
                                </div>
                                <div class="col-10 col-md-9 col-lg-10 p-0">
                                    Bảo hành 12 tháng
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--amount-->
                <div class="col-12 row my-2 mx-0">
                    <div class="col-12 col-md-5 col-lg-4 pr-0">
                        <h5>Số lượng:</h5>
                    </div>
                    <div class="col-12 col-md-7 col-lg-8 pl-0 form-inline pl-3 pr-md-0">
                        <button type="button" onclick="DESC()" id="btnDESC" class="btn btn-gray mx-1">-</button>
                        <input type="text" id="amountInput" value="1" class="form-control text-center mx-1">
                        <button type="button" onclick="ASC()" id="btnASC" class="btn btn-gray mx-1">+</button>
                        <i class="notifyColor mt-md-2 mt-lg-2 mt-xl-0 ml-2">Hiện
                            còn <?= $productDetail['products_available'] ?> sản phẩm.</i>
                    </div>
                </div>
                <!--add to cart-->
                <div class="col-12 row my-2 mx-0">
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6 text-center p-0">
                        <a class="btn p-3 btn-light w-100 border-danger" href="#" id="btnAdd"><i
                                    class="fas fa-cart-plus text-danger"></i> Thêm vào giỏ hàng</a>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 col-lg-6 mt-md-2 mt-lg-0 p-0 text-center">
                        <a class="btn p-3 btn-danger text-light w-100" href="#" id="btnBuyNow"><i
                                    class="fas fa-dollar-sign text-light"></i> Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-12 py-3">
                <span class="text-bold"><img src="<?= $cdnUrl ?>/img/favicon.ico"> MinhKhanh cam kết: </span> <i
                        class="notifyColor mt-md-2 mt-lg-2 mt-xl-0 ml-2">3 Ngày trả hàng / Hoàn tiền</i>
            </div>
        </div>
    </div>
    <div class="row border-top py-3">
        <div class="col-12 col-md-6 my-2 mx-0">
            <h3 class="text-uppercase px-2 py-3 m-0 text-center bgGrayColor mb-2">chi tiết sản phẩm</h3>
            <ul>
                <li class="py-2"><b>Danh mục:</b> <?= $type ?> > <?= $categoryType['name'] ?>
                    > <?= $productDetail['code'] ?></li>
                <li class="py-2"><b>Thương hiệu:</b> <?= $productDetail['trade_mark'] ?></li>
                <li class="py-2"><b>Kho hàng:</b> <?= $productDetail['products_available'] ?></li>
            </ul>
        </div>
        <div class="col-12 col-md-6 my-2" class="text-justify">
            <h3 class="text-uppercase py-3 px-2 m-0 text-center bgGrayColor mb-2">Mô tả sản phẩm</h3>
            <ul class="text-justify">
                <?= $productDetail['description_html'] ?>
            </ul>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-12">
            <h3 class="text-uppercase py-3 px-2 m-0 text-center bgGrayColor mb-3">sản phẩm tương tự</h3>
        </div>
        <?php foreach ($arrProduct

        as $key => $value) : ?>
        <div class="col-6 col-md-4 col-lg-3 w-100 pb-4">
            <div class="text-center p-2 m-0 border bgGrayColor">
                <a href="<?= $cdnUrl ?>/shop/detail?detail=<?= $arrProduct[$key]['id'] ?>"
                   class="text-decoration-none linkOtherProduct">
                    <img src="<?= $imgUrl ?>/<?= $arrProduct[$key]['avatar'] ?>" class="w-100">
                    <div class="cardBody my-auto border-top py-2">
                        <h5 class="mb-0"><?= $type ?></h5>
                        <h5 class="mb-0 crop"><?= $arrProduct[$key]['code'] ?></h5>
                        <h5 class="text-danger text-l"><?= number_format($arrProduct[$key]['selling_price']) ?> VNĐ</h5>
                        <a href="<?= $cdnUrl ?>/shop/detail?detail=<?= $arrProduct[$key]['id'] ?>"
                           class="btn btn-danger">Xem thêm</a>
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>
<script src="<?= $cdnUrl ?>/js/productDetail.js" type="text/javascript"></script>
