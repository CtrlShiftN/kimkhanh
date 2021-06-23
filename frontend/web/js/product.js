var checkboxes = $("input[type=checkbox]");
var typeCb = $(".typeCb input[type=checkbox]");
var trademarkCb = $(".trademarkCb input[type=checkbox]");
var categoryCb = $(".categoryCb input[type=checkbox]");
var type, trademark, category, sort, priceFrom, priceTo, cursor;

//get type value when click checkbox
typeCb.change(function () {
    getAllCheckedboxes();
    requestData();
});

//get trademark value when click checkbox
trademarkCb.change(function () {
    getAllCheckedboxes();
    requestData();
});

//get category value when click checkbox
categoryCb.change(function () {
    getAllCheckedboxes();
    requestData();
});

// get all & convert value to string
function getAllCheckedboxes() {
    var arrCheckedboxType = getCheckedboxes(typeCb);
    type = arrCheckedboxType.toString();
    var arrCheckedboxTrademark = getCheckedboxes(trademarkCb);
    trademark = arrCheckedboxTrademark.toString();
    var arrCheckedboxCategory = getCheckedboxes(categoryCb);
    category = arrCheckedboxCategory.toString();
    sort = priceTo = priceFrom = cursor = null;
}

//get value from checkboxes
function getCheckedboxes(checkbox) {
    return checkbox.filter(":checked")
    .map(function () {
        return this.value;
    })
    .get();
}

// delete filter
$("#btnDeleteFilter").click(function (e) {
    e.preventDefault();
    trademark = type = category = sort = priceTo = priceFrom = cursor = null;
    checkboxes.prop("checked", false);
    requestData();
});

// sort
$("#lowToHigh").click(function () {
    sort = 1;
    requestData();
});
$("#highToLow").click(function () {
    sort = 2;
    requestData();
});
$("#btnSortByDate").click(function () {
    sort = 3;
    requestData();
});

//only number can press into text-input
$("#from, #to").keypress(function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        return false;
    }
});

//sort by price range
$("#btnPriceRange").click(function () {
    if ($("#from").val().trim() === '' && $("#to").val().trim() === '') {
        $("#notifyPrice").removeClass("d-none");
    } else if ($("#from").val().trim() != '' && $("#to").val().trim() != '') {
        if ($("#from").val().trim() > $("#to").val().trim()) {
            $("#notifyPrice").removeClass("d-none");
        } else {
            priceFrom = $("#from").val().trim();
            priceTo = $("#to").val().trim();
            $("#notifyPrice").addClass("d-none");
            requestData();
        }
    } else if ($("#from").val().trim() != '' && $("#to").val().trim() === '') {
        priceFrom = $("#from").val().trim();
        priceTo = null;
        $("#notifyPrice").addClass("d-none");
        requestData();
    } else if ($("#from").val().trim() === '' && $("#to").val().trim() != '') {
        priceTo = $("#to").val().trim();
        priceFrom = null;
        $("#notifyPrice").addClass("d-none");
        requestData();
    }
});

//send request to get html
function requestData() {
    let request = $.ajax({
        url: cdnUrl + "/api/ajax/product-filter-ajax",
        method: "POST",
        data: {type: type, trademark: trademark, category: category, sort: sort, priceFrom: priceFrom, priceTo: priceTo, cursor: cursor} // gui het toan bo type, trademark, sort,...
    });
    request.done(function (response) {
        let arrRes = $.parseJSON(response);
        console.log(arrRes);
        if (arrRes.status === 1) {
            var result = "";
            for (let i = 0; i < arrRes.product.length; i++) {
                result += '<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 w-100 pb-4 mx-auto mx-sm-0"><div class="text-center row px-0"><div class="col-6 col-sm-6 col-md-12"><img src="' + imgUrl + '/media/uploads/' + arrRes.product[i].avatar + '" class="w-img"></div><div class="cardBody col-6 col-md-12 my-auto"><h5 class="mx-3 heightNameProduct">' + arrRes.product[i].name + '</h5><p class="m-0"><b>Hãng: </b>' + arrRes.product[i].trade_mark + '</p><p><b>Giá: </b>' + arrRes.product[i].selling_price + '<sup>&#8363;</sup></p><a href="#" class="btn btn-danger">Mua ngay</a></div></div></div>';
            }
            $("#result").html(result);
        } else {
            var result = '<div class="text-center col-12"><h1 class="mainColor"><i class="fab fa-sistrix"></i></h1><h5 class="mainColor"><i>Không có sản phẩm để hiển thị</i></h5><h5 class="mainColor"><i>Bạn hãy thử tìm kiếm lại!</i></h5></div>';
            $("#result").html(result);
        }
    });
    request.fail(function (jqXHR, textStatus) {
        alert("Request failed: ");
    });
}

//send request to get html from search form
$("#search-form").submit(function (e) {
    e.preventDefault();
    let inf = $("#search-inf").val().toLowerCase();
    let request = $.ajax({
        url: cdnUrl + "/api/ajax/product-search-ajax",
        method: "POST",
        data: {inf_product: inf}
    });
    request.done(function (response) {
        let arrRes = $.parseJSON(response);
        console.log(arrRes);
        if (arrRes.status === 1) {
            var result = "";
            for (let i = 0; i < arrRes.product.length; i++) {
                result += '<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 w-100 pb-4 mx-auto mx-sm-0"><div class="text-center row px-0"><div class="col-6 col-sm-6 col-md-12"><img src="' + imgUrl + '/media/uploads/' + arrRes.product[i].avatar + '" class="w-img"></div><div class="cardBody col-6 col-md-12 my-auto"><h5 class="mx-3 heightNameProduct">' + arrRes.product[i].name + '</h5><p class="m-0"><b>Hãng: </b>' + arrRes.product[i].trade_mark + '</p><p><b>Giá: </b>' + arrRes.product[i].selling_price + '<sup>&#8363;</sup></p><a href="#" class="btn btn-danger">Mua ngay</a></div></div></div>';
            }
            $("#result").html(result);
        } else {
            var result = '<div class="text-center col-12"><h1 class="mainColor"><i class="fab fa-sistrix"></i></h1><h5 class="mainColor"><i>Không có sản phẩm để hiển thị</i></h5><h5 class="mainColor"><i>Bạn hãy thử tìm kiếm lại!</i></h5></div>';
            $("#result").html(result);
        }
    });
    request.fail(function (jqXHR, textStatus) {
        alert("Request failed: ");
    });
});