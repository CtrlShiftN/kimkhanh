<?php

/* @var $this yii\web\View */
$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'Kim Khánh Group';
?>

<style>
    .wrap > .container {
        padding: 0 15px 20px;
    }
    .full-width {
        width: 100vw;
        margin-left: -50vw;
        left: 50%;
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
                <p class="text-muted">Nhằm quản lý, giám sát, tạo thêm lòng tin cho bệnh nhân khi đặt chân đến bệnh viện.</p>
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
                <p class="text-muted">Camera hành trình giúp bạn ghi lại mọi sự kiện trên đường đi , đảm bảo rõ ràng , chi tiết</p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-building"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Hệ thống công sở</p>
                <p class="text-muted">Quản lý công sở , chung cư một cách chi tiết, rõ ràng, lắp đặt được ở nhiều vị trí và góc nhìn.</p>
                <a href="#"><p class="text-danger">Tìm hiểu thêm</p></a>
            </div>
        </div>
        <div class="col-lg-4 col-12 p-3 row m-0 text-center text-lg-left rounded ">
            <div class="col-lg-3">
                <h1><i class="fas fa-photo-video"></i></h1>
            </div>
            <div class="col-lg-9">
                <p class="font-weight-bold">Truyền thông và viễn thông</p>
                <p class="text-muted">Lắp đặt dịch vụ truyền thông và viễn thông, đảm bảo chất lượng hình ảnh và âm thanh.</p>
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
                    <p class="text-muted">Chính sách ưu đãi và khuyến mại cực tốt cho mọi khách <hàng class=""></hàng></p>
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
    <div class="row m-0 p-5">
        <h2 class="col-12 p-5 text-danger text-center">Chức năng tốt nhất </h2>
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                   aria-controls="v-pills-home" aria-selected="true">Home</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                   aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                   aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                   aria-controls="v-pills-settings" aria-selected="false">Settings</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the first accordion panel. This panel is shown by
                                    default, thanks to the <code>.show</code> class.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    And lastly, the placeholder content for the third and final accordion panel.
                                    This
                                    panel is hidden by default.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                     aria-labelledby="v-pills-profile-tab">
                    ...
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                     aria-labelledby="v-pills-messages-tab">
                    ...
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                     aria-labelledby="v-pills-settings-tab">
                    ...
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
    <!--    Tell Your Security Needs-->
    <div class="row p-5 form-background">
        <h2 class="text-light text-center col-12 p-5">Hãy cho chúng tôi biết nhu cầu bảo mật của bạn</h2>
        <form>
            <div class="row">
                <h4 class="col-12 text-light">Interested In:</h4>
                <div class="row m-0 p-3 h5">
                    <div class="form-check text-light col-lg-3 col-md-6 col-12">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="form-check text-light col-lg-3 col-md-6 col-12">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Check me out</label>
                    </div>
                    <div class="form-check text-light col-lg-3 col-md-6 col-12">
                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                        <label class="form-check-label" for="exampleCheck3">Check me out</label>
                    </div>
                    <div class="form-check text-light col-lg-3 col-md-6 col-12">
                        <input type="checkbox" class="form-check-input" id="exampleCheck4">
                        <label class="form-check-label" for="exampleCheck4">Check me out</label>
                    </div>
                    <div class="form-check text-light col-lg-3 col-md-6 col-12">
                        <input type="checkbox" class="form-check-input" id="exampleCheck5">
                        <label class="form-check-label" for="exampleCheck5">Check me out</label>
                    </div>
                    <div class="form-check text-light col-lg-3 col-md-6 col-12">
                        <input type="checkbox" class="form-check-input" id="exampleCheck6">
                        <label class="form-check-label" for="exampleCheck6">Check me out</label>
                    </div>
                    <div class="form-check text-light col-lg-3 col-md-6 col-12">
                        <input type="checkbox" class="form-check-input" id="exampleCheck7">
                        <label class="form-check-label" for="exampleCheck7">Check me out</label>
                    </div>
                    <div class="form-check text-light col-lg-3 col-md-6 col-12">
                        <input type="checkbox" class="form-check-input" id="exampleCheck8">
                        <label class="form-check-label" for="exampleCheck8">Check me out</label>
                    </div>
                    <div class="form-check text-light col-lg-3 col-md-6 col-12">
                        <input type="checkbox" class="form-check-input" id="exampleCheck9">
                        <label class="form-check-label" for="exampleCheck9">Check me out</label>
                    </div>
                    <div class="form-check text-light col-lg-3 col-md-6 col-12">
                        <input type="checkbox" class="form-check-input" id="exampleCheck10">
                        <label class="form-check-label" for="exampleCheck10">Check me out</label>
                    </div>
                </div>
                <div class="col-12"></div>
                <div class="form-group col-lg-6">
                    <input type="email" class="form-control" placeholder="Tên của bạn">
                </div>
                <div class="form-group col-lg-6">
                    <input type="email" class="form-control" placeholder="Địa chỉ email">
                </div>
                <div class="form-group col-lg-6">
                    <input type="email" class="form-control" placeholder="Số điện thoại">
                </div>
                <div class="form-group col-lg-6">
                    <input type="email" class="form-control" placeholder="Tên công ty">
                </div>
                <div class="form-group col-12">
                    <textarea type="text" class="form-control" name="custommer-address"
                              placeholder="Lời nhắn"></textarea>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn bg-white">Gửi đi</button>
            </div>
        </form>
    </div>
    <!--    Hear from our clients-->
    <div class="row p-5 justify-content-between align-items-center">
        <div class="col-lg-6 p-lg-5 ">
            <div class="p-lg-3 bg-dark text-center text-light border-danger border-right ">
                <h4 class=" p-3 font-weight-bold border-bottom border-danger">
                    Phản hồi từ khách hàng
                </h4>
                <h4 class="font-weight-light">
                    <q><i>Chất lượng camera rất tốt, đảm bảo hình ảnh không bị mờ , âm thanh tuyệt vời .Ngoài ra đội ngũ hỗ trợ cũng rất nhiệt tình.</i></q>
                </h4>
                <h5>
                    Steve AustinManaging- <span class="text-danger">Đạo diễn</span>
                </h5>
            </div>
        </div>
        <div class="col-lg-6 row">
            <div class="col-lg-3 col-md-6 col-12 row m-0 rounded text-center p-2">
                <img class="w-100"
                     src="<?= $cdnUrl ?>/img/introduction/client.jpg">
            </div>
            <div class="col-lg-3 col-md-6 col-12 row m-0 rounded text-center p-2">
                <img class="w-100"
                     src="<?= $cdnUrl ?>/img/introduction/client.jpg">
            </div>
            <div class="col-lg-3 col-md-6 col-12 row m-0 rounded text-center p-2">
                <img class="w-100"
                     src="<?= $cdnUrl ?>/img/introduction/client.jpg">
            </div>
            <div class="col-lg-3 col-md-6 col-12 row m-0 rounded text-center p-2">
                <img class="w-100"
                     src="<?= $cdnUrl ?>/img/introduction/client.jpg">
            </div>
            <div class="col-lg-3 col-md-6 col-12 row m-0 rounded text-center p-2">
                <img class="w-100"
                     src="<?= $cdnUrl ?>/img/introduction/client.jpg">
            </div>
            <div class="col-lg-3 col-md-6 col-12 row m-0 rounded text-center p-2">
                <img class="w-100"
                     src="<?= $cdnUrl ?>/img/introduction/client.jpg">
            </div>
            <div class="col-lg-3 col-md-6 col-12 row m-0 rounded text-center p-2">
                <img class="w-100"
                     src="<?= $cdnUrl ?>/img/introduction/client.jpg">
            </div>
            <div class="col-lg-3 col-md-6 col-12 row m-0 rounded text-center p-2">
                <img class="w-100"
                     src="<?= $cdnUrl ?>/img/introduction/client.jpg">
            </div>
        </div>
    </div>
    <!--    Have any ideas in your mind?-->
    <div class="p-5 row col-12 justify-content-between align-self-center bg-danger">
        <div>
            <h4>Bạn có ý kiến như thế nào ?</h4>
            <h3 class="text-light">Hãy cho chúng tôi biết nhé !</h3>
        </div>
        <button class="btn btn-secondary align-self-center">Gửi phản hồi</button>
    </div>
    <!--    Companies We Have as Clients-->
    <div class="row p-5">
        <h2 class="text-danger text-center col-12 p-5">Đối tác của chúng tôi</h2>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left ">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left ">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left ">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left ">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left ">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left ">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left ">
            <div class="col-lg-3">
                <i class="fas fa-user-shield h4"></i>
            </div>
            <div class="col-lg-9">
                <h5 class="font-weight-light">Công ty ABC</h5>
            </div>
        </div>
        <div class="col-lg-3 col-12 p-3 row m-0 text-center text-lg-left ">
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
