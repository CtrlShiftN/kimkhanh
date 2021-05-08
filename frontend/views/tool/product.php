<?php
$this->title = "Shop";
$cdnUrl = Yii::$app->params['frontend'];

?>
<style>
    .product-inner {
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        padding: 10px;
        width: 100%;
        height: 100%;
    }
    .font-title {
        font-weight: bolder;
        font-family: "Times New Roman", sans-serif;
    }
    @media (max-width: 768px){
        img{
            width: 225px!important;
        }
        div>.product-inner {
            height: 250px !important;
            box-sizing: border-box;
        }
    }
</style>
<div class="row">
    <div class="col-12 col-md-3 pl-0 ml-0 pb-4 pb-md-0">
        <div class="shadow p-3 rounded">
            <div class="row pb-3 ml-2 ml-md-0" id="search">
                <h4 class="font-title">Tìm kiếm:</h4>
                <form id="search-form" action="" method="POST" enctype="multipart/form-data" class="w-100">
                    <div class="form-group col-9 m-0 p-0 pb-2">
                        <input class="form-control" type="text" placeholder="Search"/>
                    </div>
                    <div class="form-group col-3 m-0 p-0">
                        <button type="submit" class="btn btn-danger px-4">Search</button>
                    </div>
                </form>
            </div>
            <div class="row ml-2 ml-md-0" id="filter">
                <h4 class="font-title">Phân loại:</h4>
                <form class="w-100 pr-3">
                    <div class="form-group col-12 m-0 p-0 pb-2">
                        <select data-filter="code" class="filter-code w-100 filter form-control">
                            <option value="">Loại</option>
                            <option value="">Tất cả</option>
                            <?php foreach ($arrProduct as $key => $value) : ?>
                                <option value='<?= $value['code'] ?>'><?= $value['code'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-12 m-0 p-0 pb-2">
                        <select data-filter="tradeMark" class="filter-trade-mark w-100 filter form-control">
                            <option value="">Hãng</option>
                            <option value="">Tất cả</option>
                            <?php foreach ($arrProduct as $key => $value) : ?>
                                <option value='<?= $value['trademark'] ?>'><?= $value['trademark'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-12 m-0 p-0 pb-2">
                        <select data-filter="price" class="filter-price w-100 filter form-control">
                            <option value="">Giá</option>
                            <option value="">Tất cả</option>
                            <?php foreach ($arrProduct as $key => $value) : ?>
                                <option value='<?= $value['selling_price'] ?>'><?= $value['selling_price'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row col-12 col-md-9 ml-2 border">
        <div class="row text-center col-12" id="products">
            <?php foreach ($arrProduct as $key => $value) : ?>
                <div class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 product w-100 pb-4 mx-auto mx-sm-0'
                     data-name='<?= $value['name'] ?>' data-code='<?= $value['code'] ?>'
                     data-tradeMark='<?= $value['trademark'] ?>'>
                    <div class='product-inner text-center row px-0'>
                        <div class="col-6 col-sm-6 col-md-12" >
                            <img src="<?= $cdnUrl . $value['avatar'] ?>" class="w-100">
                        </div>
                        <div class="cardBody col-6 col-md-12 my-auto">
                            <h5><?= $value['name'] ?></h5>
                            <p class="m-0"><b>Hãng:</b> <?= $value['trademark'] ?></p>
                            <p><b>Giá:</b> <?= $value['selling_price'] ?> <sup>&#8363;</sup></p>
                            <a href="#" class="btn btn-danger">Mua ngay</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<script>
    var filtersObject = {};

    //on filter change
    $(".filter").on("change", function () {
        var filterName = $(this).data("filter"),
            filterVal =  $(this).val();

        if (filterVal == "") {
            delete filtersObject[filterName];
        } else {
            filtersObject[filterName] = filterVal;
        }

        var filters = "";

        for (var key in filtersObject) {
            if (filtersObject.hasOwnProperty(key)) {
                filters += "[data-" + key + "='" + filtersObject[key] + "']";
            }
        }

        if (filters == "") {
            $(".product").show();
        } else {
            $(".product").hide();
            $(".product").hide().filter(filters).show();
        }
    });

    //on search form submit
    $("#search-form").click(function (e) {
        e.preventDefault();
        var query = $("#search-form input").val().toLowerCase();

        $(".product").hide();
        $(".product").each(function () {
            var code = $(this).data("code").toLowerCase(),
                tradeMark = $(this).data("tradeMark").toLowerCase(),
                name = $(this).data("name").toLowerCase();

            if (code.indexOf(query) > -1 || tradeMark.indexOf(query) > -1 || name.indexOf(query) > -1) {
                $(this).show();
            }
        });
    });
</script>