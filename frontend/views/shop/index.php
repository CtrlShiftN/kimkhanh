<?php

/* @var $this yii\web\View */

$cdnUrl = Yii::$app->params['frontend'];
$imgUrl = Yii::$app->params['common'];
$this->title = "Shop";
$type = array_column($type, 'type');
?>
<link rel="stylesheet" href="<?= $cdnUrl ?>/css/shop.css" type="text/css">
<div class="row">
    <!--tools-->
    <div class="col-12 col-md-4 h-100 bgFilter pb-3">
        <div class="text-center col-12 bgMainColor text-light rounded mt-3">
            <h4 class="py-3">TÌM KIẾM</h4>
        </div>
        <div class="col-12 p-0 mb-2">
            <input class="form-control w-100 mb-3 mb-md-0" type="text" placeholder="Tìm kiếm..."
                   name="keywordProductSearch"
                   id="keywordProductSearch">
        </div>
        <div class="col-12 m-0 p-0">
            <button type="button" onclick="searchData()" class="btn btn-danger w-100" id="btnSearch">Tìm kiếm
            </button>
        </div>

        <!--filter-->
        <div class="text-center bgMainColor text-light col-12 rounded mt-5">
            <h4 class="py-3">LỌC SẢN PHẨM</h4>
        </div>
        <div id="filter">
            <h4 class="px-md-3">Sản phẩm</h4>
            <div class="typeCb px-3">
                <?php foreach ($type as $key => $value) : ?>
                    <input type="checkbox" class="cameraOptions" id="<?= $value ?><?= $value ?>"
                           name="<?= $arrProduct[$key] ?>"
                           value="<?= common\components\encrypt\CryptHelper::encryptString($value) ?>">
                    <label class="cameraOptions" for="<?= $value ?><?= $value ?>"> <?= $arrProduct[$key] ?></label>
                    <br>
                <?php endforeach; ?>
            </div>
            <h4 class="px-md-3">Thương hiệu</h4>
            <div class="trademarkCb px-3">
                <div class="trademarkCam">
                    <span>*Camera</span><br>
                    <?php foreach ($arrTrademarkOfCamera as $key => $value) : ?>
                        <input type="checkbox" id="<?= $value['id'] ?>"
                               name="<?= $value['name'] ?>"
                               value="<?= common\components\encrypt\CryptHelper::encryptString($value['name']) ?>">
                        <label for="<?= $value['id'] ?>"> <?= $value['name'] ?></label><br>
                    <?php endforeach; ?>
                </div>
                <div class="trademarkElevator">
                    <span>*Thang máy</span><br>
                    <?php foreach ($arrTrademarkOfElevator as $key => $value) : ?>
                        <input type="checkbox" id="<?= $value['id'] ?>"
                               name="<?= $value['name'] ?>"
                               value="<?= common\components\encrypt\CryptHelper::encryptString($value['name']) ?>">
                        <label for="<?= $value['id'] ?>"> <?= $value['name'] ?></label><br>
                    <?php endforeach; ?>
                </div>
                <div class="trademarkRecorder">
                    <span>*Bộ điều khiển</span><br>
                    <?php foreach ($arrTrademarkOfRecorder as $key => $value) : ?>
                        <input type="checkbox" id="<?= $value['id'] ?>"
                               name="<?= $value['name'] ?>"
                               value="<?= common\components\encrypt\CryptHelper::encryptString($value['name']) ?>">
                        <label for="<?= $value['id'] ?>"> <?= $value['name'] ?></label><br>
                    <?php endforeach; ?>
                </div>
            </div>
            <h4 id="titleTypeProduct" class="px-md-3">Loại</h4>
            <div class="categoryCb px-3">
                <div class="typeCam">
                    <span>*Camera</span><br>
                    <?php foreach ($arrCameraType as $key => $value) : ?>
                        <input type="checkbox" class="cameraOptions"
                               id="<?= $value['name'] ?><?= $value['trade_mark'] ?>"
                               name="<?= $value['name'] ?>"
                               value="<?= common\components\encrypt\CryptHelper::encryptString($value['code']) ?>">
                        <label class="cameraOptions"
                               for="<?= $value['name'] ?><?= $value['trade_mark'] ?>"> <?= $value['name'] ?></label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <div class="typeElevator">
                    <span>*Thang máy</span><br>
                    <?php foreach ($arrElevatorType as $key => $value) : ?>
                        <input type="checkbox" class="elevatorOptions"
                               id="<?= $value['name'] ?><?= $value['trade_mark'] ?>"
                               name="<?= $value['name'] ?>"
                               value="<?= common\components\encrypt\CryptHelper::encryptString($value['code']) ?>">
                        <label class="elevatorOptions"
                               for="<?= $value['name'] ?><?= $value['trade_mark'] ?>"> <?= $value['name'] ?></label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <div class="typeRecorder">
                    <span>*Bộ điều khiển</span><br>
                    <?php foreach ($arrRecorderType as $key => $value) : ?>
                        <input type="checkbox" class="recorderOptions"
                               id="<?= $value['name'] ?><?= $value['trade_mark'] ?>"
                               name="<?= $value['name'] ?>"
                               value="<?= common\components\encrypt\CryptHelper::encryptString($value['code']) ?>">
                        <label class="recorderOptions"
                               for="<?= $value['name'] ?><?= $value['trade_mark'] ?>"> <?= $value['name'] ?></label>
                        <br>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-12 my-2 mx-0 row">
            <h4 id="price" class="col-12 pl-0 text-center text-md-left text-uppercase">Khoảng giá</h4>
            <div class="rangeNumberInput col-12 row">
                <input id="from" type='text' class="form-control border-0 col-6 col-md-12 col-lg-6 pl-0"
                       value="0 triệu VNĐ" disabled="disabled">
                <input id="to" type='text'
                       class="form-control border-0 col-6 col-md-12 col-lg-6 pl-0 text-right text-md-left text-lg-right"
                       value="100 triệu VNĐ" disabled="disabled">
            </div>
            <div class="sliderId pb-3 pt-2 col-12 px-0">
                <input value="0" min="0" max="100" step=".1" type="range" class='fromRangeInput'>
                <input value="100" min="0" max="100" step=".1" type="range" class='toRangeInput'>
            </div>
            <button type="button" class="btn btn-danger w-100 my-2" id="btnPriceRange">Áp dụng</button>
        </div>
        <div class="col-12 p-0 mt-3">
            <button type="button" class="btn btn-danger w-100" id="btnDeleteFilter">Xóa bộ lọc</button>
        </div>
    </div>
    <!--show product-->
    <div class="col-12 col-md-8 m-0 p-0">
        <div class="bgFilter p-2 text-center w-100" id="tools">
            <span class="mr-2"><b>Sắp xếp</b></span>
            <button type="button" class="btn btn-danger" id="btnSortByDate">Mới nhất</button>
            <div class="dropdown d-inline-block mx-2">
                <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Giá
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#" id="lowToHigh">Thấp đến cao</a>
                    <a class="dropdown-item" href="#" id="highToLow">Cao đến thấp</a>
                </div>
            </div>
        </div>
        <input type='hidden' id='current_page' class="w-100">
        <div id="result" class="w-100 row m-0 p-0 my-3"></div>
        <div class="mt-2 text-center w-100" id="pagination">
            <input type='hidden' id='current_page'>
            <div id='page_navigation'></div>
        </div>
    </div>
    <!--end show-->
</div>
<script type="text/javascript">
    var imgUrl = "<?= $imgUrl ?>";
    var cdnUrl = "<?= $cdnUrl ?>";
    var show_per_page = <?= \common\components\SystemConstant::LIMIT_PER_PAGE ?>;
</script>
<script src="<?= $cdnUrl ?>/js/product.js" type="text/javascript"></script>