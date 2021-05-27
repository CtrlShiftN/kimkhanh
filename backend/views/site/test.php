<?php
$this->title = "Shop";
$cdnUrl = Yii::$app->params['frontend'];

?>
<form id="search-form" method="POST" enctype="multipart/form-data" class="w-100 form-inline">
    <div class="form-group col-9 m-0 p-0 pb-2">
        <input class="form-control" type="text" placeholder="Search" name="inf-product" id="search-inf">
    </div>
    <div class="form-group col-3 m-0 p-0">
        <button type="submit" class="btn btn-danger px-4">Search</button>
    </div>
</form>
<div class="container">

    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 w-100 pb-4 mx-auto mx-sm-0"><div class="text-center row px-0"><div class="col-6 col-sm-6 col-md-12"><img src="<?= $cdnUrl ?>' + arrRes.elevator[i].avatar + '" class="w-100"></div><div class="cardBody col-6 col-md-12 my-auto"><h5 class="mx-md-2">' + arrRes.elevator[i].name + '</h5><p class="m-0"><b>Hãng: </b>' + arrRes.elevator[i].trademark + '</p><p><b>Giá: </b>' + arrRes.elevator[i].selling_price + '<sup>&#8363;</sup></p><a href="#" class="btn btn-danger">Mua ngay</a></div></div></div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 w-100 pb-4 mx-auto mx-sm-0">
        <div class="text-center row px-0">
            <div class="col-6 col-sm-6 col-md-12">
                <img src="<?= $cdnUrl ?>' + arrRes.elevator[i].avatar + '" class="w-100">
            </div>
            <div class="cardBody col-6 col-md-12 my-auto">
                <h5 class="mx-3">' + arrRes.elevator[i].name + '</h5>
                <p class="m-0"><b>Hãng: </b>' + arrRes.elevator[i].trademark + '</p>
                <p><b>Giá: </b>' + arrRes.elevator[i].selling_price + '<sup>&#8363;</sup></p>
                <a href="#" class="btn btn-danger">Mua ngay</a>
            </div>
        </div>
    </div>

    <?php foreach ($arrProduct as $key => $value) : ?>
        <div class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 w-100 pb-4 mx-auto mx-sm-0'>
            <div class='text-center row px-0'>
                <div class="col-6 col-sm-6 col-md-12">
                    <img src="<?= $cdnUrl . $value['avatar'] ?>" class="w-100">
                </div>
                <div class="cardBody col-6 col-md-12 my-auto">
                    <h5 class="mx-md-2"><?= $value['name'] ?></h5>
                    <p class="m-0"><b>Hãng:</b> <?= $value['trademark'] ?></p>
                    <p><b>Giá:</b> <?= $value['selling_price'] ?> <sup>&#8363;</sup></p>
                    <a href="#" class="btn btn-danger">Mua ngay</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>













</div>

<script>
    $("#search-form").submit(function (e){
        e.preventDefault();
        var inf = $("#search-inf").val().toLowerCase();
        var request = $.ajax({
            url: "../api/ajax/test-ajax",
            method: "POST",
            data: { inf_product : inf},
        });
        request.done(function( response ) {
            arrRes = $.parseJSON(response);
            if (arrRes.status === 1){
                var result = "";
                // alert( "Request successfully: ");
                // console.log(arrRes.product);
                for(let i=0; i<arrRes.product.length; i++){
                    result += '<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 w-100 pb-4 mx-auto mx-sm-0"><div class="text-center row px-0"><div class="col-6 col-sm-6 col-md-12"><img src="<?= $cdnUrl ?>'+ arrRes.product[i].avatar +'" class="w-100"></div><div class="cardBody col-6 col-md-12 my-auto"><h5>'+ arrRes.product[i].name+ '</h5><p class="m-0"><b>Hãng:</b>' + arrRes.product[i].trademark + '</p><p><b>Giá:</b>' + arrRes.product[i].selling_price + '<sup>&#8363;</sup></p><a href="#" class="btn btn-danger">Mua ngay</a></div></div></div>';
                }
                $("#result").html(result);
            }
        });
        request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: ");
        });
    })
</script>