<?php

/* @var $this yii\web\View */
$cdnUrl = Yii::$app->params['frontend'];
$this->title = "Shop";
?>
<style>
    .displayForm {
        display: none;
    }
    .w-img {
        width: 100%;
    }
    @media (min-width: 450px){
        .w-img {
            width: 210px !important;
            height:210px !important;
        }
    }
    .heightNameProduct {
        box-sizing: border-box;
        height: 60px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="text-center text-lg-left col-12">
            <h4>TÌM KIẾM:</h4>
        </div>
        <form id="search-form" action="" method="POST" enctype="multipart/form-data" class="w-100 form-inline mb-3">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 p-0 pr-md-2">
                <input class="form-control w-100 mb-3 mb-md-0" type="text" placeholder="Tìm kiếm toàn bộ sản phẩm" name="inf-product"
                       id="search-inf">
            </div>
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 m-0 p-0">
                <button type="submit" class="btn btn-danger w-100" id="btnSearch">Tìm kiếm</button>
            </div>
        </form>
        <div class="text-center text-lg-left col-12">
            <h4>LỌC SẢN PHẨM:</h4>
        </div>
        <select class="custom-select mb-3" id="selectType">
            <option value="0" hidden>CHỌN SẢN PHẨM</option>
            <option value="1">Camera</option>
            <option value="2">Thang máy</option>
        </select>
        <form method="POST" id="filterPluginsCamera" class="form-inline w-100 mb-5">
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5 p-0 pr-md-2">
                <select class="custom-select w-100" id="inf-filter-type-camera">
                    <option value="0" hidden>Chọn loại</option>
                    <option value="0">Tất cả</option>
                    <?php foreach ($arrCameraType as $key => $value) : ?>
                        <option value="<?= $value['code'] ?>"><?= $value['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5 p-0 pr-md-2 pt-3 pt-sm-0">
                <select class="custom-select w-100" id="inf-filter-trademark-camera">
                    <option hidden>Chọn hãng</option>
                    <option value="0">Tất cả</option>
                    <?php foreach ($arrTrademarkOfCamera as $key => $value) : ?>
                        <option value="<?= $value['trade_mark'] ?>"><?= $value['trade_mark'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 p-0">
                <button type="submit" class="btn btn-danger w-100 mt-3 mt-md-0">Lọc</button>
            </div>
        </form>
        <form method="POST" id="filterPluginsElevator" class="form-inline w-100 mb-5">
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5 pl-md-0">
                <select class="custom-select w-100" id="inf-filter-type-elevator">
                    <option value="0" hidden>Chọn loại</option>
                    <option value="0">Tất cả</option>
                    <?php foreach ($arrElevatorType as $key => $value) : ?>
                        <option value="<?= $value['code'] ?>"><?= $value['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-lg-5 col-xl-5 pt-3 pt-sm-0">
                <select class="custom-select w-100" id="inf-filter-trademark-elevator">
                    <option value="0" hidden>Chọn hãng</option>
                    <option value="0">Tất cả</option>
                    <?php foreach ($arrTrademarkOfElevator as $key => $value) : ?>
                        <option value="<?= $value['trade_mark'] ?>"><?= $value['trade_mark'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 p-0">
                <button type="submit" class="btn btn-danger w-100 mt-3 mt-md-0">Lọc</button>
            </div>
        </form>

    </div>
</div>
<div class="container">
    <div id="result" class="row col-12 m-0">
        <?php foreach ($arrProduct as $key => $value) : ?>
            <div class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 product w-100 pb-4 mx-auto mx-sm-0'>
                <div class='text-center row px-0'>
                    <div class="col-6 col-sm-6 col-md-12">
                        <img src="<?= $cdnUrl . $value['avatar'] ?>" class="w-img">
                    </div>
                    <div class="cardBody col-6 col-md-12 my-auto">
                        <h5 class="mx-md-2 heightNameProduct"><?= $value['name'] ?></h5>
                        <p class="m-0"><b>Hãng:</b> <?= $value['trademark'] ?></p>
                        <p><b>Giá:</b> <?= $value['selling_price'] ?> <sup>&#8363;</sup></p>
                        <a href="#" class="btn btn-danger">Mua ngay</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="<?= $cdnUrl ?>/js/product.js" type="text/javascript"></script>