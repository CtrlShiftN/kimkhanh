<?php

/* @var $this yii\web\View */
$cdnUrl = Yii::$app->params['frontend'];
$imgUrl = Yii::$app->params['common'];
$this->title = "Shop";
?>
<style>
    .bgFilter {
        background-color: #ececec;
    }

    .bgMainColor {
        background-color: #e51b23;
    }

    .displayForm {
        display: none;
    }

    .w-img {
        width: 100%;
    }

    @media (min-width: 450px) {
        .w-img {
            width: 210px !important;
            height: 210px !important;
        }
    }

    .heightNameProduct {
        box-sizing: border-box;
        height: 60px;
    }
</style>
<div class="container">
    <div class="row">
        <!--tools-->
        <div class="col-12 col-md-4 h-100 bgFilter py-3">
            <div class="text-center col-12 bgMainColor text-light rounded">
                <h4 class="py-3">TÌM KIẾM</h4>
            </div>
            <form id="search-form" action="" method="POST" enctype="multipart/form-data" class="w-100 mb-3">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0 mb-2">
                    <input class="form-control w-100 mb-3 mb-md-0" type="text" placeholder="Tìm kiếm..."
                           name="inf-product"
                           id="search-inf">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0 p-0">
                    <button type="submit" class="btn btn-danger w-100" id="btnSearch">Tìm kiếm</button>
                </div>
            </form>
            <!--filter-->
            <div class="text-center bgMainColor text-light col-12 rounded mt-5">
                <h4 class="py-3">LỌC SẢN PHẨM</h4>
            </div>
            <select class="custom-select" id="selectType">
                <option value="0" hidden>Chọn sản phẩm</option>
                <option value="0">Tất cả</option>
                <option value="<?= $type[0]['type'] ?>">Camera</option>
                <option value="<?= $type[1]['type'] ?>">Thang máy</option>
                <option value="<?= $type[2]['type'] ?>">Đầu ghi</option>
            </select>

            <h4>Thương hiệu</h4>
            <div class="tradmarkCb">
                <div class="trademarkCam">
                    <?php foreach ($arrTrademarkOfCamera as $key => $value) : ?>
                        <input type="checkbox" class="cameraOptions" id="<?= $value['name'] ?>" name="<?= $value['name'] ?>"
                               value="<?= $value['name'] ?>">
                        <label class="cameraOptions" for="<?= $value['name'] ?>"> <?= $value['name'] ?></label><br>
                    <?php endforeach; ?>
                </div>
                <div class="trademarkElevator">
                    <?php foreach ($arrTrademarkOfElevator as $key => $value) : ?>
                        <input class="elevatorOptions" type="checkbox" id="<?= $value['name'] ?>"
                               name="<?= $value['name'] ?>" value="<?= $value['name'] ?>">
                        <label class="elevatorOptions" for="<?= $value['name'] ?>"> <?= $value['name'] ?></label><br>
                    <?php endforeach; ?>
                </div>
                <div class="trademarkRecorder">
                    <?php foreach ($arrTrademarkOfRecorder as $key => $value) : ?>
                        <input type="checkbox" class="cameraOptions" id="<?= $value['name'] ?>"
                               name="<?= $value['name'] ?>" value="<?= $value['name'] ?>">
                        <label class="cameraOptions" for="<?= $value['name'] ?>"> <?= $value['name'] ?></label><br>
                    <?php endforeach; ?>
                </div>
            </div>
            <h4>Loại</h4>
            <div class="typeCb">
                <div class="typeCam">
                    <?php foreach ($arrCameraType as $key => $value) : ?>
                        <input type="checkbox" class="cameraOptions" id="<?= $value['name'] ?>"
                               name="<?= $value['name'] ?>" value="<?= $value['name'] ?>">
                        <label class="cameraOptions" for="<?= $value['name'] ?>"> <?= $value['name'] ?></label><br>
                    <?php endforeach; ?>
                </div>
                <div class="typeElevator">
                    <?php foreach ($arrElevatorType as $key => $value) : ?>
                        <input type="checkbox" class="elevatorOptions" id="<?= $value['name'] ?>"
                               name="<?= $value['name'] ?>" value="<?= $value['name'] ?>">
                        <label class="elevatorOptions" for="<?= $value['name'] ?>"> <?= $value['name'] ?></label><br>
                    <?php endforeach; ?>
                </div>
                <div class="typeRecorder">
                    <?php foreach ($arrRecorderType as $key => $value) : ?>
                        <input type="checkbox" class="recorderOptions" id="<?= $value['name'] ?>"
                               name="<?= $value['name'] ?>" value="<?= $value['name'] ?>">
                        <label class="recorderOptions" for="<?= $value['name'] ?>"> <?= $value['name'] ?></label><br>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0 mt-2">
                <button type="submit" class="btn btn-danger w-100" id="btnDeleteFilter">Xóa</button>
            </div>
        </div>
        <!--end tools-->










        <!--show product-->

        <div class="col-12 col-md-8 m-0 row">
            <div class="col-12 bgFilter p-0 d-flex align-items-center">
                <span class="mx-3">Sắp xếp:</span>
                <button type="submit" class="btn btn-danger" id="btnSort">Mới nhất</button>
                <div class="dropdown d-inline-block w-25 mx-3">
                    <a class="btn btn-danger dropdown-toggle w-100" href="#" role="button" id="dropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Giá
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#" id="lowToHigh">Thấp đến cao</a>
                        <a class="dropdown-item" href="#" id="highToLow">Cao đến thấp</a>
                    </div>
                </div>
            </div>










            <div id="result" class="col-12 mt-3 row">
                <?php foreach ($arrProduct as $key => $value) : ?>
                    <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 product w-100 pb-4 mx-auto mx-sm-0'>
                        <div class='text-center row px-0'>
                            <div class="col-6 col-sm-6 col-md-12">
                                <img src="<?= $imgUrl . '/media/uploads/' . $value['avatar'] ?>" class="w-img">
                            </div>
                            <div class="cardBody col-6 col-md-12 my-auto">
                                <h5 class="mx-md-2 heightNameProduct"><?= $value['name'] ?></h5>
                                <p class="m-0"><b>Hãng:</b> <?= $value['trade_mark'] ?></p>
                                <p><b>Giá:</b> <?= $value['selling_price'] ?><sup>&#8363;</sup></p>
                                <a href="#" class="btn btn-danger">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!--end show-->
    </div>
</div>
<script src="<?= $cdnUrl ?>/js/product.js" type="text/javascript"></script>
<script type="text/javascript">
    var imgUrl = "<?= $imgUrl ?>";
    var typeCamVal = <?= $type[0]['type'] ?>;
    var typeElevatorVal = <?= $type[1]['type'] ?>;
</script>