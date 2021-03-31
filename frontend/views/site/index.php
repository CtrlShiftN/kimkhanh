<?php

/* @var $this yii\web\View */
$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'Kim Khánh Group';
?>
<link rel="stylesheet" href="<?= $cdnUrl ?>/css/index.css">
<style>
    .reason-background {
        background-image: url("<?= $cdnUrl ?>/img/introduction/reason.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 300px;
    }

    .optimal-background {
        background-image: url("<?= $cdnUrl ?>/img/introduction/camera-background.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 750px;
    }

    .red-background {
        background-image: url("<?= $cdnUrl ?>/img/introduction/4K-red-bg.jpg");
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        min-height: 500px;
    }

    .ideas-background {
        background-image: url("<?= $cdnUrl ?>/img/introduction/ideas-bg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        min-height: 500px;
    }

    .protect-background {
        background-image: url("<?= $cdnUrl ?>/img/introduction/protect-image.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        min-height: 500px;
    }

    @font-face {
        font-family: "brand";
        src: url("<?= $cdnUrl ?>/fontface/VNI-Jamai.TTF");
    }
</style>
<div class="row">
    <div class="row-full slideMinWidth">
        <img src="<?= $cdnUrl ?>/img/slideRes.jpg" class="d-block w-100" alt="ads">
    </div>
    <div class="row-full position-relative slideMaxWidth">
        <div class="position-absolute location">
            <h1 class="px-2 pt-3 pb-2 pb-xl-3 m-0 animate__animated animate__flipInY brandFont fontSzBrand text-danger">
                KimKhanh-Groups</h1>
            <ul class="list-unstyled ml-5">
                <li class="animate__animated animate__flipInX pb-2 pb-xl-3 firstItemSlide">
                    <h3 class="fontSzSlideTitle fontSlideTitle m-0 font-weight-bold"><i
                                class="fas fa-check pr-2 slideIcon"></i>AN TOÀN</h3>
                </li>
                <li class="pl-3 ml-3 animate__animated pb-2 pb-xl-3 animate__flipInX secondItemSlide">
                    <h3 class="fontSzSlideTitle fontSlideTitle m-0 font-weight-bold"><i
                                class="fas fa-check pr-2 slideIcon"></i>CHẤT LƯỢNG</h3>
                </li>
                <li class="pl-5 ml-5 animate__animated animate__flipInX pb-2 pb-xl-3 thirdItemSlide">
                    <h3 class="fontSzSlideTitle fontSlideTitle m-0 font-weight-bold"><i
                                class="fas fa-check pr-2 slideIcon"></i>TIỆN LỢI</h3>
                </li>
                <li>
                    <a href="<?= $cdnUrl ?>/site/shop"
                       class="btn-lg btn-danger animate__animated animate__flipInY btnSlide">XEM THÊM</a>
                </li>
            </ul>
        </div>
        <img src="<?= $cdnUrl ?>/img/Sslide.jpg" class="d-block w-100" alt="ads">
    </div>
    <!-- Offer-->
    <div class="row text-center mb-5">
        <h2 class="col-12 p-5 border-bottom border-darktext-center text-uppercase text-danger fontTitle">
            dịch vụ của chúng tôi</h2>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
            <div class="col-3 offerIcon">
                <h1><i class="fas fa-school iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Hệ thống trường học</h5>
                <p> Giám sát lớp học, kịp thời phát hiện sự cố, quản lý học sinh, giáo viên. </p>
                <a href="#" class="text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
            <div class="col-3 offerIcon">
                <h1><i class="fas fa-hospital iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Hệ thống bệnh viện</h5>
                <p>Nhằm quản lý, giám sát, tạo lòng tin cho bệnh nhân khi đặt chân đến đây.</p>
                <a href="#" class="text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
            <div class="col-3 offerIcon">
                <h1><i class="fas fa-store-alt iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Hệ thống của hàng</h5>
                <p>Giúp chủ cửa hàng dễ dàng quản lý khách hàng, nhân viên trực tiếp hoặc từ xa.</p>
                <a href="#" class="text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
            <div class="col-3 offerIcon">
                <h1><i class="fas fa-camera iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Camera công cộng</h5>
                <p>Thuận tiện lắp đặt ở công viên, đường phố và một số địa điểm công cộng khác. </p>
                <a href="#" class="text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 sol-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
            <div class="col-3 offerIcon">
                <h1><i class="fas fa-home iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Camera hộ gia đình</h5>
                <p>Đảm bảo an ninh trong chính căn hộ của bạn, đảm bảo an ninh gia đình</p>
                <a href="#" class="text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 sol-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
            <div class="col-3 offerIcon">
                <h1><i class="fas fa-building iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Hệ thống công sở</h5>
                <p>Quản lý công sở, chung cư một cách bao quát, rõ ràng, vị trí lắp đặt đa dạng.</p>
                <a href="#" class="text-decoration-none text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
    </div>
    <!--    Reasons Why Should Choose Us?-->
    <div class="row reason-background row-full">
        <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 d-flex my-5 justify-content-center">
            <h2 class="text-white bg-danger p-5 m-5 font-weight-bold text-uppercase fontTitle text-center"
                style="font-size: 48px">
                Tại sao nên chọn<br> chúng tôi ?
            </h2>
        </div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-sm-5 row m-0 bg-light">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row text-center">
                <div class="col-12 col-sm-4 col-md-12 col-xl-4 mb-3 mb-xl-0">
                    <i class="far fa-clock iIcon p-3 reasonIcon"></i>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-xl-8">
                    <h5 class="font-weight-bold">Hỗ trợ 24/7</h5>
                    <p class="text-muted">Luôn sẵn sàng phục vụ quý khách 24/7 trừ các ngày Lễ Tết</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row text-center">
                <div class="col-12 col-sm-4 col-md-12 col-xl-4 mb-3 mb-xl-0">
                    <i class="fas fa-piggy-bank iIcon p-3 reasonIcon"></i>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-xl-8">
                    <h5 class="font-weight-bold">Tiết kiệm</h5>
                    <p class="text-muted">Chính sách ưu đãi và khuyến mại cực tốt cho mọi khách
                        hàng
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row text-center">
                <div class="col-12 col-sm-4 col-md-12 col-xl-4 mb-3 mb-xl-0">
                    <i class="fas fa-user-friends iIcon p-3 reasonIcon"></i>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-xl-8">
                    <h5 class="font-weight-bold">Đội ngũ nhiệt tình</h5>
                    <p class="text-muted">Đội ngũ nhân viên chuyên nghiệp, nhiệt tình.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row text-center">
                <div class="col-12 col-sm-4 col-md-12 col-xl-4 mb-3 mb-xl-0">
                    <i class="fas fa-hammer iIcon p-3 reasonIcon"></i>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-xl-8">
                    <h5 class="font-weight-bold">Bảo hành</h5>
                    <p class="text-muted">Lắp đặt tận nhà, bảo hành tận nơi, an toàn, uy tín.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Best Features-->
    <div class="row mb-5 w-100">
        <h2 class="col-12 m-0 p-5 text-center text-uppercase text-danger fontTitle">Chức năng tốt
            nhất </h2>
        <div class="warpper col-12">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <input class="radio" id="four" name="group" type="radio">
            <div class="tabs row">
                <label class="tab col-6 col-md-3 text-center p-4" id="one-tab" for="one"><i
                            class="fas fa-camera fa-2x"></i></label>
                <label class="tab col-6 col-md-3 text-center p-4" id="two-tab" for="two"><i
                            class="fas fa-desktop fa-2x"></i></label>
                <label class="tab col-6 col-md-3 text-center p-4" id="three-tab" for="three"><i
                            class="fas fa-user-shield fa-2x"></i></label>
                <label class="tab col-6 col-md-3 text-center p-4" id="four-tab" for="four"><i
                            class="fas fa-brain fa-2x"></i></label>
            </div>
            <div class="panels">
                <div class="panel" id="one-panel">
                    <div class="row p-5 m-5 border">
                        <div class="funcRes col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-center text-uppercase protect-background text-light">
                            <h1 class="px-3 py-5 bg-danger text-center fontTitle">hình ảnh chất lượng</h1>
                        </div>
                        <h1 class="text-center d-md-none text-uppercase fontTitle">hình ảnh chất lượng</h1>
                        <p class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pl-md-5 py-md-3 text-justify">
                            Chúng tôi lắp đặt hoàn chỉnh những loại camera chất lượng
                            Camera an ninh ngoài trời là thiết bị giám sát khu vực bằng hình ảnh và âm thanh. Nó có thể
                            được kết
                            nối với điện thoại, máy tính hoặc laptop. Một số camera an ninh gia đình giá rẻ còn có chế
                            độ báo
                            trộm cho chủ nhân biết và xử lý.

                            Camera sử dụng nguồn điện dân dụng nên có thể giám sát 24/24. Hiện nay, hệ thống camera có
                            hai loại
                            chính là camera có dây và camera ip không dây (còn gọi là camera ip wifi). Tùy vào nhu cầu
                            và phương
                            thức của nó mà bạn lựa chọn thiết bị phù hợp dành cho gia đình, văn phòng, cửa hàng, siêu
                            thị…
                        </p>
                    </div>
                </div>
                <div class="panel" id="three-panel">
                    <div class="row p-5 m-5 border">
                        <div class="funcRes col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-center text-uppercase protect-background text-light">
                            <h1 class="px-3 py-5 bg-danger text-center fontTitle">tốc độ cao, ổn định</h1>
                        </div>
                        <h1 class="text-center d-md-none text-uppercase fontTitle">tốc độ cao, ổn định</h1>
                        <p class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pl-md-5 py-md-3 text-justify">
                            Chúng tôi lắp đặt hoàn chỉnh những loại camera chất lượng
                            Camera an ninh ngoài trời là thiết bị giám sát khu vực bằng hình ảnh và âm thanh. Nó có thể
                            được kết
                            nối với điện thoại, máy tính hoặc laptop. Một số camera an ninh gia đình giá rẻ còn có chế
                            độ báo
                            trộm cho chủ nhân biết và xử lý.

                            Camera sử dụng nguồn điện dân dụng nên có thể giám sát 24/24. Hiện nay, hệ thống camera có
                            hai loại
                            chính là camera có dây và camera ip không dây (còn gọi là camera ip wifi). Tùy vào nhu cầu
                            và phương
                            thức của nó mà bạn lựa chọn thiết bị phù hợp dành cho gia đình, văn phòng, cửa hàng, siêu
                            thị…
                        </p>
                    </div>
                </div>
                <div class="panel" id="two-panel">
                    <div class="row p-5 m-5 border">
                        <div class="funcRes col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-center text-uppercase protect-background text-light">
                            <h1 class="px-3 py-5 bg-danger text-center fontTitle">Bảo mật cao</h1>
                        </div>
                        <h1 class="text-center d-md-none text-uppercase fontTitle">Bảo mật cao</h1>
                        <p class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pl-md-5 py-md-3 text-justify">
                            Chúng tôi lắp đặt hoàn chỉnh những loại camera chất lượng
                            Camera an ninh ngoài trời là thiết bị giám sát khu vực bằng hình ảnh và âm thanh. Nó có thể
                            được kết
                            nối với điện thoại, máy tính hoặc laptop. Một số camera an ninh gia đình giá rẻ còn có chế
                            độ báo
                            trộm cho chủ nhân biết và xử lý.

                            Camera sử dụng nguồn điện dân dụng nên có thể giám sát 24/24. Hiện nay, hệ thống camera có
                            hai loại
                            chính là camera có dây và camera ip không dây (còn gọi là camera ip wifi). Tùy vào nhu cầu
                            và phương
                            thức của nó mà bạn lựa chọn thiết bị phù hợp dành cho gia đình, văn phòng, cửa hàng, siêu
                            thị…
                        </p>
                    </div>
                </div>
                <div class="panel" id="four-panel">
                    <div class="row p-5 m-5 border">
                        <div class="funcRes col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center justify-content-center text-uppercase protect-background text-light">
                            <h1 class="px-3 py-5 bg-danger text-center fontTitle">Dễ dàng điều khiển</h1>
                        </div>
                        <h1 class="text-center d-md-none text-uppercase fontTitle">Dễ dàng điều khiển</h1>
                        <p class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pl-md-5 py-md-3 text-justify">
                            Chúng tôi lắp đặt hoàn chỉnh những loại camera chất lượng
                            Camera an ninh ngoài trời là thiết bị giám sát khu vực bằng hình ảnh và âm thanh. Nó có thể
                            được kết
                            nối với điện thoại, máy tính hoặc laptop. Một số camera an ninh gia đình giá rẻ còn có chế
                            độ báo
                            trộm cho chủ nhân biết và xử lý.

                            Camera sử dụng nguồn điện dân dụng nên có thể giám sát 24/24. Hiện nay, hệ thống camera có
                            hai loại
                            chính là camera có dây và camera ip không dây (còn gọi là camera ip wifi). Tùy vào nhu cầu
                            và phương
                            thức của nó mà bạn lựa chọn thiết bị phù hợp dành cho gia đình, văn phòng, cửa hàng, siêu
                            thị…
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Point-->
    <div class="row-full red-background text-light">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-sm-5 col-md-5 col-lg-5 p-5">
                    <h1 class="border-bottom border-light py-sm-2 py-md-3 py-xl-4 fontTitle">MỘT SỐ ĐIỂM NỔI
                        BẬT</h1>
                    <p>Lorem ipsum dolor sit amet</p>
                    <p>Lorem ipsum dolor sit amet</p>
                    <p>Lorem ipsum dolor sit amet</p><br>
                    <a href="#" class="px-4 py-3 text-decoration-none bg-light text-dark rounded">Xem thêm</a>
                </div>
                <div class="col-12 col-sm-7 col-md-7 col-lg-7 row py-5 px-5">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-bottom border-right border-light borderPoint">
                        <h1>1</h1>
                        <p>Chi nhánh trên toàn quốc</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-bottom border-left borderPoint">
                        <h1>93%</h1>
                        <p>Người dùng đánh giá cao
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-top border-light border-right borderPoint">
                        <h1>25th</h1>
                        <p>Năm xây dựng và phát triển</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-top border-left borderPoint">
                        <h1>50000</h1>
                        <p>Sản phẩm được phân phối toàn quốc</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-5 m-0">
        <h2 class="text-danger text-center col-12 p-4 mb-5 text-uppercase border-bottom border-danger fontTitle">Sản
            phẩm nổi bật</h2>
        <div class="row col-12 m-0 p-0">
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="<?= $cdnUrl ?>/img/introduction/product.png" class="w-100">
                    <div class="card-body bg-light">
                        <h4 class="card-title">Camera</h4>
                        <p class="font-weight-bold ">
                            <i>Hệ thống chống trộm (1)</i
                        </p>
                        <a href="#" class="text-danger"><p>Tim hiểu thêm ></p></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <div class="card mb-2">
                    <img src="<?= $cdnUrl ?>/img/introduction/product.png" class="w-100">
                    <div class="card-body bg-light">
                        <h4 class="card-title">Camera</h4>
                        <p class="font-weight-bold ">
                            <i>Hệ thống chống trộm (1)</i
                        </p>
                        <a href="#" class="text-danger"><p>Tim hiểu thêm ></p></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <div class="card mb-2">
                    <img src="<?= $cdnUrl ?>/img/introduction/product.png" class="w-100">
                    <div class="card-body bg-light">
                        <h4 class="card-title">Camera</h4>
                        <p class="font-weight-bold ">
                            <i>Hệ thống chống trộm (1)</i
                        </p>
                        <a href="#" class="text-danger"><p>Tim hiểu thêm ></p></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
        <a href="<?= $cdnUrl ?>/site/shop.php" class="col-4 btn btn-danger my-3">Xem thêm <i
                    class="fas fa-arrow-right"></i></a>
        <div class="col-4"></div>
    </div>
    <!--Optimal -->
    <div class="row p-5 optimal-background row-full position-relative" id="optimal">
        <h2 class="col-12 text-center text-light border-bottom border-light text-uppercase py-3 mb-5 fontTitle"
            style="height:100px">Tối ưu sản phẩm</h2>
        <div class="h-25 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 my-5 my-lg-0 py-5 py-lg-0 main">
            <div class="main1">
                <div class="text-center">
                    <i class="fas fa-tachometer-alt fa-2x"></i><br>
                    <h2>TỐC ĐỘ</h2>
                </div>
            </div>
            <div class="main2"></div>
            <div class="main3"></div>
        </div>
        <div class="h-25 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 my-5 my-lg-0 py-5 py-lg-0 main">
            <div class="main1">
                <div class="text-center">
                    <i class="fas fa-lock fa-2x"></i><br>
                    <h2>BẢO MẬT</h2>
                </div>
            </div>
            <div class="main2"></div>
            <div class="main3"></div>
        </div>
        <div class="h-25 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 my-5 my-lg-0 py-5 py-lg-0 main">
            <div class="main1">
                <div class="text-center">
                    <i class="fas fa-check fa-2x"></i><br>
                    <h2>CHẤT LƯỢNG</h2>
                </div>
            </div>
            <div class="main2"></div>
            <div class="main3"></div>
        </div>
        <div class="h-25 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 my-5 my-lg-0 py-5 py-lg-0 main">
            <div class="main1">
                <div class="text-center">
                    <i class="fas fa-photo-video fa-2x"></i><br>
                    <h2">HÌNH ẢNH</h2>
                </div>
            </div>
            <div class="main2"></div>
            <div class="main3"></div>
        </div>
        <h2 class="d-none d-lg-block col-12 text-center text-light text-uppercase mt-5">Bạn muốn biết thêm? Thật dễ
            dàng!<br>Gọi cho chúng tôi: <a href="#">(+84)123456789</a></h2>
    </div>
    <!--    Hear from our clients-->
    <div class="p-5 text-danger text-center m-auto bg-danger w-100">
        <h2 class="font-weight-bold text-center text-white text-uppercase fontTitle">Phản hồi của khách hàng</h2>
    </div>
    <div class="row p-5 m-0 bg-light">
        <div class="col-lg-4 col-12 rounded">
            <div class="card d-flex mx-auto">
                <button type="button" class="btn" data-toggle="collapse" data-target="#firstCard">
                    <div class="card-image">
                        <img class="img-fluid d-flex mx-auto" src="<?= $cdnUrl ?>/img/introduction/client-01.jpg">
                    </div>
                    <div class="text-center">
                        <h3 id="name">Micheal SmitH</h3>
                        <p>Đạo diễn</p>
                        <h3 class="p-3 text-light bg-danger">Xem</h3>
                    </div>
                </button>
                <div class="card-body p-3 collapse" id="firstCard">
                    <p class="text-light bg-danger p-3">Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết
                        bị có nhiều chế
                        độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều
                        chế độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có
                        nhiều chế độ căn chỉnh nổi bật</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 rounded">
            <div class="card d-flex mx-auto">
                <button type="button" class="btn" data-toggle="collapse" data-target="#secondCard">
                    <div class="card-image">
                        <img class="img-fluid d-flex mx-auto" src="<?= $cdnUrl ?>/img/introduction/client-02.jpg">
                    </div>
                    <div class="text-center">
                        <h3 id="name">Samama Ader</h3>
                        <p>Chủ Shop</p>
                        <h3 class="p-3 text-light bg-danger">Xem</h3>
                    </div>
                </button>
                <div class="card-body p-3 collapse" id="secondCard">
                    <p class="text-light bg-danger p-3">Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết
                        bị có nhiều chế
                        độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều
                        chế độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có
                        nhiều chế độ căn chỉnh nổi bật</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 rounded">
            <div class="card d-flex mx-auto">
                <button type="button" class="btn" data-toggle="collapse" data-target="#thirdCard">
                    <div class="card-image"><img class="img-fluid d-flex mx-auto"
                                                 src="<?= $cdnUrl ?>/img/introduction/client-03.jpg"">
                        <div class="text-center">
                            <h3 id="name">Nami Oala</h3>
                            <p>Streamer</p>
                            <h3 class="p-3 text-light bg-danger">Xem</h3>
                        </div>
                </button>
                <div class="card-body p-3 collapse" id="thirdCard">
                    <p class="text-light bg-danger p-3">Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết
                        bị có nhiều chế
                        độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều
                        chế độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có
                        nhiều chế độ căn chỉnh nổi bật</p>
                </div>
            </div>
        </div>
        <div class="mx-auto mt-5">
            <button class="btn btn-danger">Xem thêm phản hồi</button>
        </div>
    </div>
    <!--    Have any ideas in your mind?-->
    <div class="p-5 ideas-background row-full text-white align-items-center main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                    <h1 style="font-size: 50px"><b><i>BẠN CÓ Ý TƯỞNG ???</i></b></h1>
                    <h4 class="font-weight-lighter">LIÊN HỆ NGAY VỚI CHÚNG TÔI...</h4>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center mt-5 mt-md-0">
                    <a href="<?= $cdnUrl ?>/site/contact" class="btn-lg btn-light">LIÊN HỆ NGAY <i
                                class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--    Companies We Have as Clients-->
    <div class="row m-0 py-5 text-muted">
        <h2 class="text-danger text-center col-12 p-5 font-weight-bold fontTitle">ĐỐI TÁC CỦA CHÚNG TÔI</h2>
        <div id="brand" class="carousel slide w-100 row col-12" data-ride="carousel">
            <div class="carousel-inner col-12">
                <div class="carousel-item brand-md active">
                    <div class="row inner-row">
                        <div class="col-md-3 brand active">
                            <img src="<?= $cdnUrl ?>/img/brand/sony.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-3 brand">
                            <img src="<?= $cdnUrl ?>/img/brand/hitachi.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl ?>/img/brand/lg.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl ?>/img/brand/fpt.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item brand-md">
                    <div class="row inner-row">
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl ?>/img/brand/hikvision.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl ?>/img/brand/samtech.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl ?>/img/brand/imou.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl ?>/img/brand/logitech.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="controls-top col-12 text-center mt-3">
                <a class="btn btn-danger text-light" href="#brand" data-slide="prev"><i
                            class="fa fa-chevron-left fa-2x"></i></a>
                <a class="btn btn-danger text-light" href="#brand" data-slide="next"><i
                            class="fa fa-chevron-right fa-2x"></i></a>
            </div>
        </div>
    </div>
    <div class="pb-5"></div>
</div>