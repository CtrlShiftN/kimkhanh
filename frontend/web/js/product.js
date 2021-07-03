var checkboxes = $("input[type=checkbox]");
var typeCb = $(".typeCb input[type=checkbox]");
var trademarkCb = $(".trademarkCb input[type=checkbox]");
var categoryCb = $(".categoryCb input[type=checkbox]");
var type, trademark, category, sort, priceFrom, priceTo, cursor, keyword;

jQuery(document).ready(function () {
    $('#current_page').val(0);
    $('#firstPagination').addClass('d-none');
    $('#secPagination').removeClass('d-none');
});

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
    trademark = type = category = sort = priceTo = priceFrom = cursor = keyword = null;
    $("#keywordProductSearch").val('');
    $("#from").val('');
    $("#to").val('');
    checkboxes.prop("checked", false);
    $('#current_page').val(0);
    requestData();
    $('#firstPagination').addClass('d-none');
    $('#secPagination').removeClass('d-none');
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
        if ($("#from").val().trim() < $("#to").val().trim()) {
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

//search with information from input
function searchData() {
    $('#secPagination').addClass('d-none');
    keyword = $("#keywordProductSearch").val().trim().toLowerCase();
    trademark = type = category = sort = priceTo = priceFrom = cursor = null;
    checkboxes.prop("checked", false);
    $('#current_page').val(0);
    requestData();
}

//search data with enter key press
$("#keywordProductSearch").keypress(function (event) {
    if (event.which == 13) {
        event.preventDefault();
        searchData()
    }
});

//send request to get html
function requestData() {
    $('#secPagination').addClass('d-none');
    $('#firstPagination').removeClass('d-none');

    let request = $.ajax({
        url: cdnUrl + "/api/ajax/product-filter-ajax",
        method: "POST",
        data: {
            type: type,
            trademark: trademark,
            category: category,
            sort: sort,
            priceFrom: priceFrom,
            priceTo: priceTo,
            cursor: cursor,
            keyword: keyword
        } // gui het toan bo type, trademark, sort,...
    });
    request.done(function (response) {
        let arrRes = $.parseJSON(response);
        if (arrRes.status === 1) {
            $('#firstPagination').show();
            var result = "";
            for (let i = 0; i < arrRes.product.length; i++) {
                result += '<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 w-100 pb-4 mx-auto mx-sm-0"><div class="text-center row px-0"><div class="col-6 col-sm-6 col-md-12"><img src="' + imgUrl + '/media/uploads/' + arrRes.product[i].avatar + '" class="w-img"></div><div class="cardBody col-6 col-md-12 my-auto"><h5 class="mx-3 heightNameProduct">' + arrRes.product[i].name + '</h5><p class="m-0"><b>Hãng: </b>' + arrRes.product[i].trade_mark + '</p><p><b>Giá: </b>' + arrRes.product[i].selling_price + ' VNĐ</p><a href="#" class="btn btn-danger">Mua ngay</a></div></div></div>';
            }
            $("#result").html(result);
            var number_of_items = arrRes.count;
            var number_of_pages = Math.ceil(number_of_items / show_per_page);
            jQuery(document).ready(function () {
                var navigation_html = '<a class="first_link" href="javascript:first();">&#10094;&#10094;</a> <a class="previous_link" href="javascript:previous();">&#10094;</a>';
                var current_link = 0;
                while (number_of_pages > current_link) {
                    navigation_html += ' <a class="page_link" href="javascript:go_to_page(' + current_link + ')" id="page' + (current_link + 1) + '">' + (current_link + 1) + '</a>';
                    current_link++;
                }
                navigation_html += ' <a class="next_link" href="javascript:next();">&#10095;</a> <a class="last_link" href="javascript:last(' + number_of_pages + ');">&#10095;&#10095;</a>';
                $('#page_navigation').html(navigation_html);
                var active = parseInt($('#current_page').val()) + 1;
                $('#page' + active + '').addClass('p-active bg-danger text-light');
                if (active == 1) {
                    $('.first_link, .previous_link').css({
                        'color': '#dee2e6',
                        'border-color': '#dee2e6',
                        'cursor': 'not-allowed'
                    });
                } else if (active == current_link) {
                    $('.next_link, .last_link').css({
                        'color': '#dee2e6',
                        'border-color': '#dee2e6',
                        'cursor': 'not-allowed'
                    });
                }
                if (number_of_pages > 5) {
                    if (active < 4) {
                        $('.page_link').addClass('d-none');
                        let i = 1;
                        while (i < 6) {
                            $('#page' + i + '').removeClass('d-none');
                            i++;
                        }
                    } else if (active > current_link - 3) {
                        $('.page_link').addClass('d-none');
                        let i = current_link;
                        while (i > current_link - 5) {
                            $('#page' + i + '').removeClass('d-none');
                            i--;
                        }
                    } else {
                        $('.page_link').addClass('d-none');
                        $('#page' + (active - 2) + ',#page' + (active - 1) + ',#page' + active + ',#page' + (active + 1) + ',#page' + (active + 2) + '').removeClass('d-none');
                    }
                }
                $('html').scrollTop(0);
            });
        } else {
            var result = '<div class="text-center col-12"><h1 class="mainColor"><i class="fab fa-sistrix"></i></h1><h5 class="mainColor"><i>Không có sản phẩm để hiển thị</i></h5><h5 class="mainColor"><i>Bạn hãy thử tìm kiếm lại!</i></h5></div>';
            $('#firstPagination').hide();
            $("#result").html(result);
        }
    });
    request.fail(function (jqXHR, textStatus) {
        alert("Request failed: ");
    });
}

function first() {
    go_to_page(0);
}

function previous() {
    let new_page = parseInt($('#current_page').val()) - 1;
    if ($('#current_page').val() != 0) {
        go_to_page(new_page);
    }
}

function next() {
    let new_page = parseInt($('#current_page').val()) + 1;
    if ($('#current_page').val() != ($("#page_navigation").children(".page_link").length - 1)) {
        go_to_page(new_page);
    }
}

function last() {
    let number_of_pages = $("#page_navigation").children(".page_link").length;
    go_to_page(number_of_pages - 1);
}

function go_to_page(page_num) {
    cursor = page_num;
    $('#current_page').val(page_num);
    requestData();
}
