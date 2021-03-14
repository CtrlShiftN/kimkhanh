<?php

/* @var $this yii\web\View */
$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'Kim Khánh Group';
?>

<style>
    .wrap > .container {
        padding: 0 15px 20px;
    }

    #v-pills-tab .active {
        background: #dc3545 !important;
    }

    .full-width {
        width: 100vw;
        margin-left: -50vw;
        left: 49%;
    }

    .bottom {
        bottom: 0;
    }

    .right {
        right: 0;
    }

    .form-background {
        background: url("<?= $cdnUrl ?>/img/introduction/red-bg.jpg");
        background-attachment: fixed;
        background-repeat: repeat;
    }

    .reason-background {
        background: url("<?= $cdnUrl ?>/img/introduction/reason.jpg");
        background-attachment: fixed;
    }

    .process-backgound {
        background: url("<?= $cdnUrl ?>/img/introduction/process.png");
        background-attachment: fixed;
    }

    .security-backgorund {
        background: url("<?= $cdnUrl ?>/img/introduction/security.jpg");
        background-attachment: fixed;
    }
</style>

<div class="site-index row">
    <!--    Carouel -->
    <div id="carouselExampleControls" class=" carousel slide full-width" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $cdnUrl ?>/img/introduction/carouel.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= $cdnUrl ?>/img/introduction/carouel.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= $cdnUrl ?>/img/introduction/carouel.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Offer-->
    <div class="row m-0 justify-content-between ">
        <h2 class="col-12 p-5 text-center text-danger">Dịch vụ của chúng tôi</h2>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-university"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Các lĩnh vực ngân hàng</p>
                <p class="text-muted">Vấn đề đảm bảo an toàn, an ninh là vấn đề đặc biệt nghiêm trọng cho ngân hàng.</p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-school"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Hệ thống trường học</p>
                <p class="text-muted"> Giám sát lớp học, kịp thời phát hiện sự cố , quản lý học sinh và giáo viên. </p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-hospital"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Hệ thống bệnh viện</p>
                <p class="text-muted">Nhằm quản lý, giám sát, tạo thêm lòng tin cho bệnh nhân khi đặt chân đến bệnh
                    viện.</p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-store-alt"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Hệ thống của hàng</p>
                <p class="text-muted">Giúp chủ cửa hàng dễ dàng quản lý khách hàng, nhân viên trực tiếp hoặc từ xa.</p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-camera"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Camera công cộng</p>
                <p class="text-muted">Thuận tiện lắp đặt ở công viên, đường phố và một số địa điểm công cộng khác. </p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-home"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Camera hộ gia đình</p>
                <p class="text-muted">Đảm bảo an ninh trong chính căn hộ của bạn, đảm bảo an ninh gia đình</p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-motorcycle"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Giám sát chuyến đi</p>
                <p class="text-muted">Camera hành trình giúp bạn ghi lại mọi sự kiện trên đường đi , đảm bảo rõ ràng ,
                    chi tiết</p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-building"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Hệ thống công sở</p>
                <p class="text-muted">Quản lý công sở , chung cư một cách chi tiết, rõ ràng, lắp đặt được ở nhiều vị trí
                    và góc nhìn.</p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-photo-video"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Truyền thông và viễn thông</p>
                <p class="text-muted">Lắp đặt dịch vụ truyền thông và viễn thông, đảm bảo chất lượng hình ảnh và âm
                    thanh.</p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
    </div>
    <!--    Reasons Why Should Choose Us?-->
    <div class="row  m-0 reason-background">
        <div class="col-lg-5 d-flex p-5 align-items-center">
            <h2 class=" text-center text-white bg-danger p-5 font-weight-bold">
                Tại sao nên chọn chúng tôi ?
            </h2>
        </div>
        <div class="col-lg-7 row m-0 bg-white">
            <div class="col-lg-6 col-12 p-3 row m-0 rounded text-center">
                <div class="col-lg-3">
                    <h1><i class="far fa-clock"></i></h1>
                </div>
                <div class="col-lg-9">
                    <p class="font-weight-bold">Hỗ trợ 24/7</p>
                    <p class="text-muted">Chúng tôi hỗ trợ tư vấn 24/7 trừ các ngày Lễ ,Tết</p>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-3 row m-0 rounded text-center">
                <div class="col-lg-3">
                    <h1><i class="fas fa-piggy-bank"></i></i></h1>
                </div>
                <div class="col-lg-9">
                    <p class="font-weight-bold">Tiết kiệm</p>
                    <p class="text-muted">Chính sách ưu đãi và khuyến mại cực tốt cho mọi khách
                        <hàng class=""></hàng>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-3 row m-0 rounded text-center">
                <div class="col-lg-3">
                    <h1><i class="fas fa-user-friends"></i></h1>
                </div>
                <div class="col-lg-9">
                    <p class="font-weight-bold">Đội ngũ nhiệt tình</p>
                    <p class="text-muted">Đội ngũ nhân viên được đào tạo chuyên nghiệp, nhiệt tình.</p>
                </div>
            </div>
            <div class="col-lg-6 col-12 p-3 row m-0 rounded text-center">
                <div class="col-lg-3">
                    <h1><i class="fas fa-hammer"></i></h1>
                </div>
                <div class="col-lg-9">
                    <p class="font-weight-bold">Bảo hành</p>
                    <p class="text-muted">Chúng tôi lắp đặt tận nhà, bảo hành tận nơi, an toàn, uy tín.</p>
                </div>
            </div>
        </div>
    </div>
    <!--    Our Best Features-->
    <div class="row m-0 p-5 w-100">
        <h2 class="col-12 p-5 text-danger text-center">Chức năng tốt nhất </h2>
        <div class="col-lg-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                   aria-controls="v-pills-home" aria-selected="true">
                    <i class="fas fa-camera"></i> Lắp đặt camera an toàn
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                   aria-controls="v-pills-profile" aria-selected="false">
                    <i class="fas fa-desktop"></i> Hệ thống màn hình
                </a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                   aria-controls="v-pills-messages" aria-selected="false">
                    <i class="fas fa-user-shield"></i> Bảo mật chống trộm
                </a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                   aria-controls="v-pills-settings" aria-selected="false">
                    <i class="fas fa-brain"></i>Hệ thống thông minh
                </a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    Chúng tôi lắp đặt hoàn chỉnh những loại camera chất lượng
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn  btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        Camera 3G ,4G
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    Giới thiệu camera 3G ,4G .
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn  btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        Camera HVR
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    Giới thiệu camera HVR
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn  btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree">
                                        Camera Wifi
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    Giới thiệu camera Wifi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                     aria-labelledby="v-pills-profile-tab">
                    Hệ thống màn hình luôn được chú trọng giúp quản lý hình ảnh từ camera chất lượng hơn . <br>Chúng tôi
                    tự hào là đon vị đi đầu trong việc đầu tư màn hình cho thiết bị giám sát
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                     aria-labelledby="v-pills-messages-tab">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                     aria-labelledby="v-pills-settings-tab">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>
    </div>
    <!--    Our Process-->
    <div class="bg-dark">
        <div class="process-backgound row p-5 m-0">
            <h2 class="col-12 text-light text-center p-3">Quy trình</h2>
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
                    <p>Hãy tận hưởng dịch vụ của chúng tôi</p>
                </div>
            </div>
            <h2 class="col-12 text-center text-light">
                Bạn cần tư vấn thêm , gãy gọi cho chúng tôi: <span class="text-danger">(00) 1234567890</span>
            </h2>
        </div>
    </div>
    <!--    Our Product-->
    <div class="row p-5">
        <h2 class="text-danger text-center col-12 p-5">Sản phẩm nổi bật</h2>
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
        <div class="col-lg-4 col-md-6 col-12 text-center p-3">
            <div class="bg-light p-3">
                <p class="font-weight-bold ">
                    <i>Thiết bị bảo mật (1)</i
                </p>
                <img src="<?= $cdnUrl ?>/img/introduction/product.png" class="w-100">
                <a href="#" class="text-danger"><p>Tim hiểu thêm ></p></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 text-center p-3">
            <div class="bg-light p-3">
                <p class="font-weight-bold ">
                    <i>Thiết bị điều khiển từ xa (1)</i
                </p>
                <img src="<?= $cdnUrl ?>/img/introduction/product.png" class="w-100">
                <a href="#" class="text-danger"><p>Tim hiểu thêm ></p></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 text-center p-3">
            <div class="bg-light p-3">
                <p class="font-weight-bold ">
                    <i>Thiết bị âm thanh (1)</i
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
    <div class="row p-5 justify-content-lg-end security-backgorund m-0">
        <div class="col-lg-6 p-3 overflow-auto bg-light  d-inline-block">
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
    <!--    Security Solutions-->
    <div class="row p-5">
        <h2 class="text-danger text-center col-12 p-5">Giải pháp bảo mật</h2>
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
    <!--    Hear from our clients-->
    <div class="p-5 text-danger text-center m-auto">
        <h2>Phản hồi của khách hàng</h2>
    </div>
    <div class="row p-5 m-0 bg-light border-danger border">
        <div class="col-lg-4 col-12">
            <div class="card d-flex mx-auto">
                <div class="card-image"><img class="img-fluid d-flex mx-auto" src="<?=$cdnUrl?>/img/introduction/client-01.jpg">
                </div>
                <div class="card-text p-3">
                    <div class="h2 text-danger">Tuyệt vời</div>
                    <p class="text-dark">Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều chế
                        độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều
                        chế độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có
                        nhiều chế độ căn chỉnh nổi bật</p>
                </div>
                <div class="p-3 bg-danger text-white text-center">
                    <h3 id="name">Micheal SmitH</h3>
                    <p>Đạo diễn</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card d-flex mx-auto">
                <div class="card-image"><img class="img-fluid d-flex mx-auto" src="<?=$cdnUrl?>/img/introduction/client-02.jpg">
                </div>
                <div class="card-text p-3">
                    <div class="h2 text-danger">Trên cả hoàn hảo</div>
                    <p class="text-dark">Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều chế
                        độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều
                        chế độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có
                        nhiều chế độ căn chỉnh nổi bật</p>
                </div>
                <div class="p-3 bg-danger text-white text-center">
                    <h3 id="name">Samama Ader</h3>
                    <p>Chủ Shop</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <div class="card d-flex mx-auto">
                <div class="card-image"><img class="img-fluid d-flex mx-auto" src="<?=$cdnUrl?>/img/introduction/client-03.jpg"">
                </div>
                <div class="card-text p-3">
                    <div class="h2 text-danger">Rất hài lòng</div>
                    <p class="text-dark">Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều chế
                        độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có nhiều
                        chế độ căn chỉnh nổi bật Chất lượng hình ảnh và âm thanh rất tuyệt hảo , đặc biệt thiết bị có
                        nhiều chế độ căn chỉnh nổi bật</p>
                </div>
                <div class="p-3 bg-danger text-white text-center">
                    <h3 id="name">Nami Oala</h3>
                    <p>Streamer</p>
                </div>
            </div>
        </div>
        <div class="mx-auto mt-5">
            <button class="btn btn-danger">Xem thêm phản hồi</button>
        </div>
    </div>
    <!--    Have any ideas in your mind?-->
    <div class="p-5 row m-0 col-12 justify-content-between align-self-center bg-danger">
        <div>
            <h4>Bạn có ý kiến như thế nào ?</h4>
            <h3 class="text-light">Hãy cho chúng tôi biết nhé !</h3>
        </div>
        <button class="btn btn-secondary align-self-center">Gửi phản hồi</button>
    </div>
    <!--    Companies We Have as Clients-->
    <div class="row p-5 text-muted">
        <h2 class="text-danger text-center col-12 p-5">Đối tác của chúng tôi</h2>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left border ">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left border">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left border">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left border">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left border">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left border">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left border">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left border">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
    </div>
    <!--    Padding bottom -->
    <div class="pb-5"></div>
</div>
