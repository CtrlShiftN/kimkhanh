<?php

/* @var $this yii\web\View */

use justinvoelker\separatedpager\LinkPager;

$cdnUrl = Yii::$app->params['frontend'];
$imgUrl = Yii::$app->params['common'];
$this->title = "Shop";
$type = array_column($type, 'type');
?>
<script src="<?= $cdnUrl ?>/js/jquery.twbsPagination.min.js" type="text/javascript"></script>
<style>
    .bgFilter {
        background-color: #ececec;
    }

    .bgMainColor {
        background-color: #e51b23;
    }

    .mainColor {
        color: #727272;
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

    @media (min-width: 450px) {
        .heightNameProduct {
            box-sizing: border-box;
            height: 60px;
        }
    }

    @media (max-width: 768px) {
        #filter {
            height: 450px;
            overflow: scroll;
            background-color: #f6f6f6;
            padding: 10px;
        }
    }

    .p-active {
        border-color: #dc3545 !important;
    }

    .p-active a {
        color: #fff !important;
    }

    .p-inactive {
        cursor: not-allowed;
    }

    .p-inactive a, .p-inactive span {
        color: #bababa !important;
        border-color: #bababa !important;
    }

    .page_link, .previous_link, .next_link,
    .last_link, .first_link {
        padding: 8px 16px;
        border: 1px solid #dee2e6;
        text-decoration: none !important;
        color: #000;
    }

    .page_link:hover, .previous_link:hover, .next_link:hover,
    .last_link:hover, .first_link:hover {
        color: #000;
    }

    #page_navigation {
        line-height: 42px;
    }
</style>
<div class="container px-0">
    <div class="row">
        <!--tools-->
        <div class="col-12 col-md-4 h-100 bgFilter py-3">
            <div class="text-center col-12 bgMainColor text-light rounded">
                <h4 class="py-3">TÌM KIẾM</h4>
            </div>
            <form id="search-form" action="" method="POST" enctype="multipart/form-data" class="w-100 mb-3">
                <div class="col-12 p-0 mb-2">
                    <input class="form-control w-100 mb-3 mb-md-0" type="text" placeholder="Tìm kiếm..."
                           name="inf-product"
                           id="search-inf">
                </div>
                <div class="col-12 m-0 p-0">
                    <button type="button" onclick="searchData()" class="btn btn-danger w-100" id="btnSearch">Tìm kiếm
                    </button>
                </div>
            </form>

            <!--filter-->
            <div class="text-center bgMainColor text-light col-12 rounded mt-5">
                <h4 class="py-3">LỌC SẢN PHẨM</h4>
            </div>
            <div id="filter">
                <h4>Sản phẩm</h4>
                <div class="typeCb px-3">
                    <?php foreach ($type as $key => $value) : ?>
                        <input type="checkbox" class="cameraOptions" id="<?= $value ?><?= $value ?>"
                               name="<?= $arrProduct[$key] ?>"
                               value="<?= common\components\encrypt\CryptHelper::encryptString($value) ?>">
                        <label class="cameraOptions" for="<?= $value ?><?= $value ?>"> <?= $arrProduct[$key] ?></label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <h4>Thương hiệu</h4>
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
                <h4 id="titleTypeProduct">Loại</h4>
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
            <div class="col-12 my-2">
                <h4 id="price">Khoảng giá</h4>
                <input id="from" type="text" class="form-control" placeholder="&#8363; TỪ">
                <input id="to" type="text" class="form-control my-2" placeholder="&#8363; ĐẾN">
                <div class="text-center text-danger d-none mb-2" id="notifyPrice"><small>Vui lòng điền khoảng giá
                        phù hợp</small></div>
                <button type="button" class="btn btn-danger w-100" id="btnPriceRange">Áp dụng</button>
            </div>
            <div class="col-12 p-0 mt-3">
                <button type="button" class="btn btn-danger w-100" id="btnDeleteFilter">Xóa bộ lọc</button>
            </div>
        </div>
        <!--show product-->
        <div class="col-12 col-md-8 m-0 p-0">
            <div class="bgFilter p-2 position-relative text-center" id="tools">
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
            <input type='hidden' id='current_page'>
            <input type='hidden' id='show_per_page'>
            <div id="result" class="row">
                <?php foreach ($arrAllProduct as $key => $value) : ?>
                    <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 w-100 pb-4 mx-auto mx-sm-0'>
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
            <div class="mt-2 text-center" id="firstPagination">
                <input type='hidden' id='current_page'>
                <div id='page_navigation'></div>
            </div>
            <div class="mt-2 text-center" id="secPagination">
                <?php
                // display pagination
                echo LinkPager::widget([
                    'pagination' => $pages,
                    //Css option for container
                    'options' => ['class' => 'list-unstyled d-flex align-items-center justify-content-center', 'id' => "pagination"],
                    //First option value
                    'firstPageLabel' => '&#10094;&#10094;',
                    //Last option value
                    'lastPageLabel' => '&#10095;&#10095;',
                    //Previous option value
                    'prevPageLabel' => '&#10094;',
                    //Next option value
                    'nextPageLabel' => '&#10095;',
                    //Current Active option value
                    'activePageCssClass' => 'bg-danger p-active',
                    //Max count of allowed options
                    'maxButtonCount' => 5,

                    // Css for each options. Links
                    'linkOptions' => ['class' => 'text-decoration-none'],
                    'disabledPageCssClass' => 'disabled p-2 border p-inactive',

                    // Customzing CSS class for navigating link
                    'prevPageCssClass' => 'p-back',
                    'nextPageCssClass' => 'p-next',
                    'firstPageCssClass' => 'p-first',
                    'lastPageCssClass' => 'p-last',
                ])
                ?>
            </div>
        </div>
        <!--end show-->
    </div>
</div>
<script type="text/javascript">
    var imgUrl = "<?= $imgUrl ?>";
    var cdnUrl = "<?= $cdnUrl ?>";
    var show_per_page = <?= \common\components\SystemConstant::LIMIT_PER_PAGE ?>;
    $("#pagination").children().addClass("d-inline-block py-2 px-3 border mx-1").children().addClass("text-dark");
</script>
<script src="<?= $cdnUrl ?>/js/product.js" type="text/javascript"></script>