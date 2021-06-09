var type = $("#selectType");
var checkboxes = $("input[type=checkbox]");
var tradeMark = [];
// lang nghe su kien trademark
checkboxes.change(function() {
    tradeMark = checkboxes
        .filter(":checked") // Filter out unchecked boxes.
        .map(function() { // Extract values using jQuery map.
            return this.value;
        })
        .get() // Get array.
});
type.change(function () {
    if(type.val() == 0) {
        $(".typeCam").removeClass('d-none');
        $(".typeElevator").removeClass('d-none');
        $(".typeRecorder").removeClass('d-none');
        $(".trademarkCam").removeClass('d-none');
        $(".trademarkElevator").removeClass('d-none');
        $(".trademarkRecorder").removeClass('d-none');
        requestData();
    } else if(type.val() == typeCamVal){
        $(".typeCam").removeClass('d-none');
        $(".typeElevator").addClass('d-none');
        $(".typeRecorder").addClass('d-none');
        $(".trademarkCam").removeClass('d-none');
        $(".trademarkElevator").addClass('d-none');
        $(".trademarkRecorder").addClass('d-none');
        requestData();
    } else if(type.val() == typeElevatorVal) {
        $(".typeElevator").removeClass('d-none');
        $(".typeCam").addClass('d-none');
        $(".typeRecorder").addClass('d-none');
        $(".trademarkCam").addClass('d-none');
        $(".trademarkElevator").removeClass('d-none');
        $(".trademarkRecorder").addClass('d-none');
        requestData();
    } else {
        $(".typeRecorder").removeClass('d-none');
        $(".typeElevator").addClass('d-none');
        $(".typeCam").addClass('d-none');
        $(".trademarkCam").addClass('d-none');
        $(".trademarkElevator").addClass('d-none');
        $(".trademarkRecorder").removeClass('d-none');
        requestData();
    }
});



// xoa
$("#btnDeleteFilter").click(function () {
    if(checkboxes.attr('checked')){
        checkboxes.attr('checked',false);
    }
    else{
        checkboxes.attr('checked',false);
    }
});

// sort
// filter khasc
// function requestGetAllData(){
//     let request = $.ajax({
//        url: "../api/ajax/product-get-all-data",
//         method:"POST";
//        data: {}
//     });
// }
function requestData(){
    let request = $.ajax({
        // TODO: cỗ nyàô
        url: "../api/ajax/product-filter-ajax",
        method: "POST",
        contentType: "application/json; charset=utf-8",
        data: {type: '1'} // gui het toan bo type, trademark, sort,...
    });
    // request.done(function (response) {
    request.done(function () {
        alert("Request success: ");
        // arrRes = $.parseJSON(response);
        // if (arrRes.status === 1) {
        //     var result = "";
        //     for (let i = 0; i < arrRes.product.length; i++) {
        //         result += '<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 w-100 pb-4 mx-auto mx-sm-0"><div class="text-center row px-0"><div class="col-6 col-sm-6 col-md-12"><img src="' + imgUrl + '/media/uploads/' + arrRes.product[i].avatar + '" class="w-img"></div><div class="cardBody col-6 col-md-12 my-auto"><h5 class="mx-3 heightNameProduct">' + arrRes.product[i].name + '</h5><p class="m-0"><b>Hãng: </b>' + arrRes.product[i].trade_mark + '</p><p><b>Giá: </b>' + arrRes.product[i].selling_price + '<sup>&#8363;</sup></p><a href="#" class="btn btn-danger">Mua ngay</a></div></div></div>';
        //     }
        //     $("#result").html(result);
        // }
    });
    request.fail(function (jqXHR, textStatus) {
        alert("Request failed: ");
    });
}