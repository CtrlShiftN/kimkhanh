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
    .process-background {
        background-image: url("<?= $cdnUrl ?>/img/introduction/process.png");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .security-background {
        background-image: url("<?= $cdnUrl ?>/img/introduction/security.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .optimal-background {
        background-image: url("<?= $cdnUrl ?>/img/introduction/camera-background.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 650px;
    }

</style>
<div class="site-index row">
    <div class="row-full d-md-none">
        <img src="<?= $cdnUrl ?>/img/slideRes.jpg" class="d-block w-100" alt="ads">
    </div>
    <div class="row-full d-none d-md-block">
        <img src="<?= $cdnUrl ?>/img/slide.png" class="d-block w-100" alt="ads">
        <div class="row text-center text-danger transformSlide">
            <div class="col-sm-4 animate__animated animate__zoomInLeft durationSlide">
                <h1 class="fontSlideAround">CHẤT LƯỢNG</h1>
            </div>
            <div class="col-sm-4 animate__animated animate__zoomIn durationSlide">
                <h1 class="fontSlide"><i class="fas fa-shield-alt iIcon"></i> AN TOÀN <i class="fas fa-shield-alt iIcon"></i></h1>
                <a href="#" class="btn btn-lg btn-danger animate__animated animate__fadeInUp animate__fast animate__delay-2s mt-3" id="btnLink">Xem ngay!</a>
            </div>
            <div class="col-sm-4 animate__animated animate__zoomInRight durationSlide">
                <h1 class="fontSlideAround">TIỆN LỢI</h1>
            </div>
        </div>
    </div>
    <!-- Offer-->
    <div class="row mb-5 justify-content-between mt-5 mt-md-0">
        <h2 class="col-12 px-5 pb-5 pt-0 text-center text-uppercase text-danger fontTitle">dịch vụ của chúng tôi</h2>
        <div class="col-lg-4 col-12 col-sm-6 col-md-6 p-3 row my-auto text-center text-lg-left offerCard">
            <div class="col-3 slideIcon">
                <h1><i class="fas fa-school iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Hệ thống trường học</h5>
                <p> Giám sát lớp học, kịp thời phát hiện sự cố, quản lý học sinh, giáo viên. </p>
                <a href="#" class="text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 col-sm-6 col-md-6 p-3 row my-auto text-center text-lg-left offerCard">
            <div class="col-3 slideIcon">
                <h1><i class="fas fa-hospital iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Hệ thống bệnh viện</h5>
                <p>Nhằm quản lý, giám sát, tạo lòng tin cho bệnh nhân khi đặt chân đến đây.</p>
                <a href="#" class="text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 col-sm-6 col-md-6 p-3 row my-auto text-center text-lg-left offerCard">
            <div class="col-3 slideIcon">
                <h1><i class="fas fa-store-alt iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Hệ thống của hàng</h5>
                <p>Giúp chủ cửa hàng dễ dàng quản lý khách hàng, nhân viên trực tiếp hoặc từ xa.</p>
                <a href="#" class="text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 col-sm-6 col-md-6 p-3 row my-auto text-center text-lg-left offerCard">
            <div class="col-3 slideIcon">
                <h1><i class="fas fa-camera iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Camera công cộng</h5>
                <p>Thuận tiện lắp đặt ở công viên, đường phố và một số địa điểm công cộng khác. </p>
                <a href="#" class="text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 col-sm-6 sol-md-6 p-3 row my-auto text-center text-lg-left offerCard">
            <div class="col-3 slideIcon">
                <h1><i class="fas fa-home iIcon"></i></h1>
            </div>
            <div class="col-9">
                <h5 class="font-weight-bold text-dark">Camera hộ gia đình</h5>
                <p>Đảm bảo an ninh trong chính căn hộ của bạn, đảm bảo an ninh gia đình</p>
                <a href="#" class="text-danger font-weight-bold">Tìm hiểu thêm ></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 col-sm-6 sol-md-6 p-3 row my-auto text-center text-lg-left offerCard">
            <div class="col-3 slideIcon">
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
        <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 d-flex my-5  justify-content-center">
            <h2 class="text-white bg-danger p-5 m-5 font-weight-bold text-uppercase fontTitle text-center" style="font-size: 48px">
                Tại sao nên chọn<br> chúng tôi ?
            </h2>
        </div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-sm-5 row m-0 bg-light">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row m-auto text-center offerCard">
                <div class="col-lg-3">
                    <h1><i class="far fa-clock iIcon"></i></h1>
                </div>
                <div class="col-lg-9">
                    <h5 class="font-weight-bold">Hỗ trợ 24/7</h5>
                    <p class="text-muted">Luôn sẵn sàng phục vụ quý khách 24/7 trừ các ngày Lễ Tết</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row m-auto text-center offerCard">
                <div class="col-lg-3">
                    <h1><i class="fas fa-piggy-bank iIcon"></i></i></h1>
                </div>
                <div class="col-lg-9">
                    <h5 class="font-weight-bold">Tiết kiệm</h5>
                    <p class="text-muted">Chính sách ưu đãi và khuyến mại cực tốt cho mọi khách
                        hàng
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row m-auto text-center offerCard">
                <div class="col-lg-3">
                    <h1><i class="fas fa-user-friends iIcon"></i></h1>
                </div>
                <div class="col-lg-9">
                    <h5 class="font-weight-bold">Đội ngũ nhiệt tình</h5>
                    <p class="text-muted">Đội ngũ nhân viên chuyên nghiệp, nhiệt tình.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row m-auto text-center offerCard">
                <div class="col-lg-3">
                    <h1><i class="fas fa-hammer iIcon"></i></h1>
                </div>
                <div class="col-lg-9">
                    <h5 class="font-weight-bold">Bảo hành</h5>
                    <p class="text-muted">Lắp đặt tận nhà, bảo hành tận nơi, an toàn, uy tín.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Best Features-->
    <div class="row mt-5 p-5 w-100">
        <h2 class="col-12 px-5 pb-4 text-center text-uppercase border-bottom text-danger mb-5 fontTitle">Chức năng tốt nhất </h2>
        <div class="col-5 bgGray px-4 py-5">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <div class="nav-link active rounded-0 border-dark border-bottom py-4 optionsChoose" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                     aria-controls="v-pills-home" aria-selected="true">
                    <i class="fas fa-camera"></i> Lắp đặt camera an toàn <i class="fas fa-angle-right float-right invisible iconFeature"></i>
                </div>
                <div class="nav-link rounded-0 border-dark border-top border-bottom py-4 optionsChoose" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                     aria-controls="v-pills-profile" aria-selected="false">
                    <i class="fas fa-desktop"></i> Hệ thống màn hình <i class="fas fa-angle-right float-right invisible iconFeature"></i>
                </div>
                <div class="nav-link rounded-0 border-dark border-top border-bottom py-4 optionsChoose" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                     aria-controls="v-pills-messages" aria-selected="false">
                    <i class="fas fa-user-shield"></i> Bảo mật chống trộm <i class="fas fa-angle-right float-right invisible iconFeature"></i>
                </div>
                <div class="nav-link rounded-0 border-dark border-top py-4 optionsChoose" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                     aria-controls="v-pills-settings" aria-selected="false">
                    <i class="fas fa-brain"></i> Hệ thống thông minh <i class="fas fa-angle-right float-right invisible iconFeature"></i>
                </div>
            </div>
        </div>
        <div class="col-7 px-lg-1 px-0 py-lg-0 text-justify border">
            <div class="tab-content bg-white rounded p-5" id="v-pills-tabContent">
                <p class="tab-pane fade show active kiwiFont" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    Chúng tôi lắp đặt hoàn chỉnh những loại camera chất lượng
                    Camera an ninh ngoài trời là thiết bị giám sát khu vực bằng hình ảnh và âm thanh. Nó có thể được kết
                    nối với điện thoại, máy tính hoặc laptop. Một số camera an ninh gia đình giá rẻ còn có chế độ báo
                    trộm cho chủ nhân biết và xử lý.

                    Camera sử dụng nguồn điện dân dụng nên có thể giám sát 24/24. Hiện nay, hệ thống camera có hai loại
                    chính là camera có dây và camera ip không dây (còn gọi là camera ip wifi). Tùy vào nhu cầu và phương
                    thức của nó mà bạn lựa chọn thiết bị phù hợp dành cho gia đình, văn phòng, cửa hàng, siêu thị…
                </p>
                <p class="tab-pane fade kiwiFont" id="v-pills-profile" role="tabpanel"
                     aria-labelledby="v-pills-profile-tab">
                    Hệ thống màn hình luôn được chú trọng giúp quản lý hình ảnh từ camera chất lượng hơn . <br>Chúng tôi
                    tự hào là đon vị đi đầu trong việc đầu tư màn hình cho thiết bị giám sát
                </p>
                <p class="tab-pane fade kiwiFont" id="v-pills-messages" role="tabpanel"
                     aria-labelledby="v-pills-messages-tab">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p class="tab-pane fade kiwiFont" id="v-pills-settings" role="tabpanel"
                     aria-labelledby="v-pills-settings-tab">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
    <!--Optimal -->
    <div class="row p-5 optimal-background row-full position-relative" id="optimal">
        <h2 class="col-12 text-center text-light border-bottom border-light text-uppercase py-3 mb-5 fontTitle" style="height:100px">Tối ưu sản phẩm</h2>
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
                    <h2>HÌNH ẢNH</h2>
                </div>
            </div>
            <div class="main2"></div>
            <div class="main3"></div>
        </div>
        <h2 class="col-12 text-center text-light text-uppercase mt-5">Bạn muốn biết thêm? Thật dễ dàng!<br>Gọi cho chúng tôi: <a href="#">(+84)123456789</a></h2>
    </div>
    <!--    Security Solutions-->
    <div class="row p-5 m-0">
        <h2 class="text-danger text-center col-12 p-4 text-uppercase border-bottom border-dark mb-4 fontTitle">Giải pháp bảo mật</h2>
        <div class="col-lg-4 p-3 ">
            <div class="position-relative">
                <img src="<?= $cdnUrl ?>/img/introduction/security-product.jpg" class="w-100">
                <div class="p-3 bg-danger text-white position-absolute bottom right"><i class="fas fa-camera"></i>
                </div>
            </div>
            <h5 class="pt-3">Hiển thị hình ảnh âm thanh qua màn hình </h5>
            <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
                viverra quis, feugiat a, tellus</p>

        </div>
        <div class="col-lg-4 p-3 ">
            <div class="position-relative">
                <img src="<?= $cdnUrl ?>/img/introduction/security-product.jpg" class="w-100">
                <div class="p-3 bg-danger text-white position-absolute bottom right"><i class="fas fa-camera"></i>
                </div>
            </div>
            <h5 class="pt-3">Hệ thống cảnh báo chống trộm , bảo mật an toàn</h5>
            <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
                viverra quis, feugiat a, tellus</p>

        </div>
        <div class="col-lg-4 p-3 ">
            <div class="position-relative">
                <img src="<?= $cdnUrl ?>/img/introduction/security-product.jpg" class="w-100">
                <div class="p-3 bg-danger text-white position-absolute bottom right"><i class="fas fa-camera"></i>
                </div>
            </div>
            <h5 class="pt-3">Quản lý ngôi nhà của bạn một cách đon giản</h5>
            <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
                viverra quis, feugiat a, tellus</p>

        </div>
    </div>

    <!--    Our Process-->
    <div class="bg-dark">
        <div class="process-background row p-5 m-0">
            <h2 class="col-12 text-light text-center pb-4 text-uppercase mb-4 border-bottom border-light fontTitle">Quy trình</h2>
            <div class="col-lg-3 col-md-6 p-3  font-weight-bold text-center">
                <div class="rounded bg-light p-3">
                    <h2 class="text-danger"><i class="fas fa-cogs"></i></h2>
                    <h4>Nhu cầu</h4>
                    <p>Tìm sản phẩm theo nhu cầu của bạn</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-3  font-weight-bold text-center">
                <div class="rounded bg-light p-3">
                    <h2 class="text-danger"><i class="fas fa-mail-bulk"></i></h2>
                    <h4>Gửi email</h4>
                    <p>Gửi các sản phẩm đề cử qua email</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-3  font-weight-bold text-center">
                <div class="rounded bg-light p-3">
                    <h2 class="text-danger"><i class="fas fa-cogs"></i></h2>
                    <h4>Xác nhận</h4>
                    <p>Xác nhận sản phẩm tử hai bên</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-3  font-weight-bold text-center">
                <div class="rounded bg-light p-3">
                    <h2 class="text-danger"><i class="fas fa-couch"></i></i></h2>
                    <h4>Tận hưởng</h4>
                    <p>Tận hưởng dịch vụ của chúng tôi</p>
                </div>
            </div>
            <h2 class="col-12 text-center text-light">
                Bạn cần tư vấn thêm , hãy gọi cho chúng tôi: <span class="text-danger">(+84)1234567890</span>
            </h2>
        </div>
    </div>
    <!--    Our Product-->
    <div class="row p-5 m-0">
        <h2 class="text-danger text-center col-12 p-5 text-uppercase fontTitle">Sản phẩm nổi bật</h2>
        <div class="col-lg-4 col-md-6 col-12 text-center p-3">
            <div class="bg-light p-3">
                <p class="font-weight-bold ">
                    <i>Hệ thống chống trộm (1)</i
                </p>
                <img src="<?= $cdnUrl ?>/img/introduction/product.png" class="w-100">
                <a href="#" class="text-danger"><p>Tim hiểu thêm ></p></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 text-center p-3">
            <div class="bg-light p-3">
                <p class="font-weight-bold ">
                    <i>Hệ thống camera giám sát (1)</i
                </p>
                <img src="<?= $cdnUrl ?>/img/introduction/product.png" class="w-100">
                <a href="#" class="text-danger"><p>Tim hiểu thêm ></p></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 text-center p-3">
            <div class="bg-light p-3">
                <p class="font-weight-bold ">
                    <i>Màn hình điều khiển (1)</i
                </p>
                <img src="<?= $cdnUrl ?>/img/introduction/product.png" class="w-100">
                <a href="#" class="text-danger"><p>Tim hiểu thêm ></p></a>
            </div>
        </div>
        <div class="col-12 text-center">
            <button class="btn btn-danger">Xem tất cả</button>
        </div>
    </div>


    <!--    Security Alarm System-->
    <div class="row p-5 security-background m-0">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="">
                <img src="<?= $cdnUrl?>/img/introduction/protect-image.jpg" class="m-auto"/>
            </div>
        </div>
        <div class="col-lg-6 col-12 p-3 overflow-auto bg-light  d-inline-block">
            <h2>Hệ thống báo động an ninh</h2>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
                felis,
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                justo,
                fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis
                vitae, justo.</p>
            <h2>Điều khiển từ xa mọi lúc mọi nơi</h2>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
                felis,
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                justo,
                fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis
                vitae, justo.
                Cum sociis natoque penatibus et magnis dis parturient.</p>
        </div>
    </div>

    <!--    Hear from our clients-->
    <div class="p-5 text-danger text-center m-auto bg-danger w-100">
        <h2 class="text-center text-white text-uppercase">Phản hồi của khách hàng</h2>
    </div>
    <div class="row p-5 m-0 bg-light border-danger border">
        <div class="col-lg-4 col-12 rounded">
            <div class="card d-flex mx-auto">
                <div class="card-image"><img class="img-fluid d-flex mx-auto"
                                             src="<?= $cdnUrl ?>/img/introduction/client-01.jpg">
                </div>
                <div class="p-3 bg-danger text-white text-center">
                    <h3 id="name">Micheal SmitH</h3>
                    <p>Đạo diễn</p>
                </div>
                <div class="card-text p-3">
                    <p class="text-dark">Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều chế
                        độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều
                        chế độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có
                        nhiều chế độ căn chỉnh nổi bật</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 rounded">
            <div class="card d-flex mx-auto">
                <div class="card-image"><img class="img-fluid d-flex mx-auto"
                                             src="<?= $cdnUrl ?>/img/introduction/client-02.jpg">
                </div>
                <div class="p-3 bg-danger text-white text-center">
                    <h3 id="name">Samama Ader</h3>
                    <p>Chủ Shop</p>
                </div>
                <div class="card-text p-3">
                    <p class="text-dark">Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều chế
                        độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều
                        chế độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có
                        nhiều chế độ căn chỉnh nổi bật</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12 rounded">
            <div class="card d-flex mx-auto">
                <div class="card-image"><img class="img-fluid d-flex mx-auto"
                                             src="<?= $cdnUrl ?>/img/introduction/client-03.jpg"">
                </div>
                <div class="p-3 bg-danger text-white text-center">
                    <h3 id="name">Nami Oala</h3>
                    <p>Streamer</p>
                </div>
                <div class="card-text p-3">
                    <p class="text-dark">Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều chế
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
    <div class="text-center p-5 w-100 bg-danger text-white">
        <div class="p-lg-5">
            <p class="h1 text-uppercase">Đăng ký nhận thông tin mới nhất</p>
            <p>Chúng tôi sẽ gửi email cho bạn mỗi khi có chương trình mới , email của bạn sẽ không bị công khai</p>
            <form action="subcribe.php" method="post" class="px-lg-5">
                <div class="input-group mb-3 rounded-0">
                    <input type="email" class="form-control" placeholder="Email của bạn" required>
                    <div class="input-group-append">
                        <button class="btn btn-secondary oswald text-uppercase" type="submit">Đăng ký</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--    Companies We Have as Clients-->
    <div class="row m-0 py-5 text-muted">
        <h2 class="text-danger text-center col-12 p-5">ĐỐI TÁC CỦA CHÚNG TÔI</h2>
        <div id="brand" class="carousel slide w-100" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item brand-md active">
                    <div class="row inner-row">
                        <div class="col-md-3 brand active">
                            <img src="<?= $cdnUrl?>/img/brand/sony.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-3 brand">
                            <img src="<?= $cdnUrl?>/img/brand/hitachi.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl?>/img/brand/lg.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl?>/img/brand/fpt.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item brand-md">
                    <div class="row inner-row">
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl?>/img/brand/hikvision.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl?>/img/brand/samtech.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl?>/img/brand/imou.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3 brand">
                            <img src="<?= $cdnUrl?>/img/brand/logitech.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#brand" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#brand" role="button" data-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="false"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--    Padding bottom -->
    <div class="pb-5"></div>
    <script>
        function scrollWin() {
            window.scrollTo(0, 800);
        };
    </script>
</div>
