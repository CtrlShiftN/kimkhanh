var imgUrl = "http://localhost:81/kimkhanh/common";
$("#filterPluginsCamera").addClass("displayForm");
$("#filterPluginsElevator").addClass("displayForm");
$("#selectType").change(function () {
    if ($(this).val() == 1) {
        $("#filterPluginsElevator").addClass("displayForm");
        $("#filterPluginsCamera").removeClass("displayForm");
        $("#filterPluginsCamera").submit(function (e) {
            e.preventDefault();
            let infTypeCamera = $("#inf-filter-type-camera").val();
            let infTrademarkCamera = $("#inf-filter-trademark-camera").val();
            if ($("#inf-filter-type-camera").val() == 0) {
                infTypeCamera = "";
            }
            if ($("#inf-filter-trademark-camera").val() == 0) {
                infTrademarkCamera = "";
            }
            let request = $.ajax({
                url: "../api/ajax/search-camera-ajax",
                method: "POST",
                data: {type_cam: infTypeCamera, trademark_cam: infTrademarkCamera},
            });
            request.done(function (response) {
                arrRes = $.parseJSON(response);
                if (arrRes.status === 1) {
                    let result = "";
                    for (let i = 0; i < arrRes.camera.length; i++) {
                        result += '<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 w-100 pb-4 mx-auto mx-sm-0 row px-0 text-center"><div class="col-6 col-sm-6 col-md-12 w-100"><img src="' + imgUrl + '/media/uploads/' + arrRes.camera[i].avatar + '" class="w-img"></div><div class="cardBody col-6 col-md-12 my-auto"><h5 class="mx-md-2 heightNameProduct">' + arrRes.camera[i].name + '</h5><p class="m-0"><b>Hãng: </b>' + arrRes.camera[i].trademark + '</p><p><b>Giá: </b>' + arrRes.camera[i].selling_price + '<sup>&#8363;</sup></p><a href="#" class="btn btn-danger">Mua ngay</a></div></div>';
                    }
                    $("#result").html(result);
                }
            });
            request.fail(function (jqXHR, textStatus) {
                alert("Request failed: ");
            });
        })
    }
    else {
        $("#filterPluginsCamera").addClass("displayForm");
        $("#filterPluginsElevator").removeClass("displayForm");
        $("#filterPluginsElevator").submit(function (e) {
            e.preventDefault();
            let infTypeElevator = $("#inf-filter-type-elevator").val();
            let infTrademarkElevator = $("#inf-filter-trademark-elevator").val();
            if ($("#inf-filter-type-elevator").val() == 0) {
                infTypeElevator = "";
            }
            if ($("#inf-filter-trademark-elevator").val() == 0) {
                infTrademarkElevator = "";
            }
            let request = $.ajax({
                url: "../api/ajax/search-elevator-ajax",
                method: "POST",
                data: {type_elevator: infTypeElevator, trademark_elevator: infTrademarkElevator},
            });
            request.done(function (response) {
                arrRes = $.parseJSON(response);
                if (arrRes.status === 1) {
                    let result = "";
                    for (let i = 0; i < arrRes.elevator.length; i++) {
                        result += '<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 w-100 pb-4 mx-auto mx-sm-0 row px-0 text-center"><div class="col-6 col-sm-6 col-md-12 w-100"><img src="' + imgUrl + '/media/uploads/' + arrRes.elevator[i].avatar + '" class="w-img"></div><div class="cardBody col-6 col-md-12 my-auto"><h5 class="mx-md-2 heightNameProduct">' + arrRes.elevator[i].name + '</h5><p class="m-0"><b>Hãng: </b>' + arrRes.elevator[i].trademark + '</p><p><b>Giá: </b>' + arrRes.elevator[i].selling_price + '<sup>&#8363;</sup></p><a href="#" class="btn btn-danger">Mua ngay</a></div></div>';
                    }
                    $("#result").html(result);
                }
            });
            request.fail(function (jqXHR, textStatus) {
                alert("Request failed: ");
            });
        })
    }
});
//search form ajax
$("#search-form").submit(function (e) {
    e.preventDefault();
    let inf = $("#search-inf").val().toLowerCase();
    let request = $.ajax({
        url: "../api/ajax/product-search-ajax",
        method: "POST",
        data: {inf_product: inf},
    });
    request.done(function (response) {
        arrRes = $.parseJSON(response);
        if (arrRes.status === 1) {
            var result = "";
            for (let i = 0; i < arrRes.product.length; i++) {
                result += '<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 w-100 pb-4 mx-auto mx-sm-0"><div class="text-center row px-0"><div class="col-6 col-sm-6 col-md-12"><img src="' + imgUrl + '/media/uploads/' + arrRes.product[i].avatar + '" class="w-img"></div><div class="cardBody col-6 col-md-12 my-auto"><h5 class="mx-3 heightNameProduct">' + arrRes.product[i].name + '</h5><p class="m-0"><b>Hãng: </b>' + arrRes.product[i].trademark + '</p><p><b>Giá: </b>' + arrRes.product[i].selling_price + '<sup>&#8363;</sup></p><a href="#" class="btn btn-danger">Mua ngay</a></div></div></div>';
            }
            $("#result").html(result);
        }
    });
    request.fail(function (jqXHR, textStatus) {
        alert("Request failed: ");
    });
})