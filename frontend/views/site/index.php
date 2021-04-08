<?php

/* @var $this yii\web\View */
$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'Kim Khánh Group';
?>
<link rel="stylesheet" href="<?= $cdnUrl ?>/css/index.css">
<link rel="stylesheet" href="<?= $cdnUrl ?>/css/prism.css">
<link rel="stylesheet" href="<?= $cdnUrl ?>/css/testi.css">
<link href="<?= $cdnUrl ?>/css/animate.min.css" rel="stylesheet" type="text/css">
<script src="<?= $cdnUrl ?>/js/masonry.pkgd.min.js"></script>
<script src="<?= $cdnUrl ?>/js/jquery.flexslider-min.js"></script>
<script src="<?= $cdnUrl ?>/js/main.js"></script>
<script src="<?= $cdnUrl ?>/js/modernizr.js"></script>
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
    @font-face {
        font-family: "brand";
        src: url("<?= $cdnUrl ?>/fontface/VNI-Jamai.TTF");
    }
    .testimonialsRes {
        background: url("<?= $cdnUrl ?>/img/introduction/shanghai.jpg") center center no-repeat;
        background-size: cover;
        background-attachment: fixed;
        padding: 50px 0 70px;
        position: relative;
    }
</style>
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
                <li class="pl-5 ml-5">
                    <a href="<?= $cdnUrl ?>/site/shop" class="animate__animated animate__flipInY btnSlide btn btn-sm animated-button thar-three">Xem thêm</a>
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
        <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 d-flex my-5 p-5 justify-content-center align-items-center">
            <h2 class="text-white bg-danger p-5 text-uppercase fontTitle text-center">
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
    <!-- Point-->
    <div class="row-full red-background text-light">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-5">
                    <h2 class="border-bottom border-light py-sm-2 py-md-3 py-xl-4 fontTitle">MỘT SỐ ĐIỂM NỔI
                        BẬT</h2>
                    <p>Lorem ipsum dolor sit amet</p>
                    <p>Lorem ipsum dolor sit amet</p>
                    <p>Lorem ipsum dolor sit amet</p><br>
                    <div class="buttonPoints">
                        <a href="#">
                            XEM&nbsp;THÊM&nbsp;
                            <span class="shift">›</span>
                        </a>
                        <div class="mask"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 row py-5 px-5">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-bottom border-right borderPoint">
                        <h1 class="mr-2"><span class='numscroller' data-slno='1' data-min='0' data-max='93' data-delay='1' data-increment="1">0</span><span>%</span></h1>
                        <p style="font-size: 20px">Người dùng đánh giá cao</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-bottom border-light border-left borderPoint">
                        <h1 class="mr-2"><span class='numscroller' data-slno='1' data-min='0' data-max='25' data-delay='1' data-increment="1">0</span><span>th</span></h1>
                        <p style="font-size: 20px">Năm xây dựng và phát triển</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-top border-right border-light borderPoint">
                        <h1 class="mr-2"><span class='numscroller' data-slno='1' data-min='0' data-max='20' data-delay='1' data-increment="1">0</span><span>+</span></h1>
                        <p style="font-size: 20px">Đối tác trên toàn quốc và nước ngoài</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-top border-left borderPoint">
                        <h1 class="mr-2"><span class='numscroller' data-slno='1' data-min='0' data-max='50' data-delay='1' data-increment="2">0</span><span>K+</span></h1>
                        <p style="font-size: 20px">Sản phẩm được phân phối toàn quốc</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--best -->
    <div class="row p-5 m-0 text-center">
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
        <div class="col-12 text-center position-relative">
            <a href="<?= $cdnUrl ?>/site/shop" class="btn btn-sm animated-button thar-two btnShowMore">Xem thêm</a>
        </div>
    </div>
    <!--Optimal -->
    <div class="row p-5 optimal-background row-full" id="optimal">
        <h2 class="col-12 text-center text-light border-light border-bottom py-3 fontTitle text-uppercase"
            style="height:100px">Tối ưu sản phẩm</h2>
        <div class="col-12 row position-relative">
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
        </div>
        <h2 class="d-none d-lg-block col-12 text-center text-light text-uppercase mt-3" style="top: 70px">Bạn muốn biết thêm? Thật dễ
            dàng!<br>Gọi cho chúng tôi: <a href="#">(+84)123456789</a></h2>
    </div>
    <!-- TODO:   Hear from our clients-->
    <div class="container text-center mb-5">
        <h2 class="text-danger text-uppercase mb-5 fontTitle p-5 border-bottom border-danger">
            phản hồi của khách hàng
        </h2>
        <section class="testimonialsRes">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <!-- Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <!-- Item-1 -->
                                <div class="carousel-item active text-center">
                                    <img src="<?= $cdnUrl ?>/img/introduction/avatar-1.jpg" alt="" class="center-block team">
                                    <h3>Alamin Musa</h3>
                                    <h4>Front End Developer</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                        porttitordapibus dictum.<br>
                                        Fusce faucibus ligula scelerisque, eleifend turpis in</p>
                                </div>
                                <!-- Item-2 -->
                                <div class="carousel-item text-center">
                                    <img src="<?= $cdnUrl ?>/img/introduction/avatar-2.jpg" alt="" class="center-block team">
                                    <h3>Alamin Musa</h3>
                                    <h4>Front End Developer</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                        porttitordapibus dictum.<br>
                                        Fusce faucibus ligula scelerisque, eleifend turpis in</p>
                                </div>
                                <!-- Item-3 -->
                                <div class="carousel-item text-center">
                                    <img src="<?= $cdnUrl ?>/img/introduction/avatar-3.jpg" alt="" class="center-block team">
                                    <h3>Alamin Musa</h3>
                                    <h4>Front End Developer</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                        porttitordapibus dictum.<br>
                                        Fusce faucibus ligula scelerisque, eleifend turpis in</p>
                                </div>

                            </div>
                            <a class="carousel-control-prev control"
                                    data-target="#carouselExampleIndicators"
                                    role="button"
                                    data-slide="prev">
                                <i class="fas fa-angle-left iconRes"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next control"
                                    data-target="#carouselExampleIndicators"
                                    role="button"
                                    data-slide="next">
                                <i class="fas fa-angle-right iconRes"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="#0" id="hide" class="cd-see-all mt-2 btn btn-sm animated-button thar-two btnShowMore">Xem tất cả</a>
        <div class="cd-testimonials-all" style="z-index: 100">
            <div class="cd-testimonials-all-wrapper">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="cd-testimonials-item text-center">
                        <h1>~ <i>PHẢN HỒI CỦA KHÁCH HÀNG</i> ~</h1>
                    </li>
                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-1.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>
                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-2.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-3.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-4.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-5.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-6.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-1.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-2.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-3.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-4.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-5.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>

                        <div class="cd-author">
                            <img src="<?= $cdnUrl ?>/img/introduction/avatar-6.jpg" alt="Author image">
                            <ul class="cd-author-info">
                                <li>MyName</li>
                                <li>CEO, CompanyName</li>
                            </ul>
                        </div>
                    </li>
                    <li class="text-center cd-testimonials-item text-uppercase"><blockquote><i>~ end ~</i></blockquote></li>
                </ul>

            </div>
            <a href="#0" class="close-btn" id="show">Close</a>
        </div> <!-- cd-testimonials-all -->
    </div>
    <!--    Have any ideas in your mind?-->
    <div class="p-5 ideas-background row-full text-white main">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 text-center text-md-left">
                    <h1 style="font-size: 50px"><b><i>BẠN CÓ Ý TƯỞNG ???</i></b></h1>
                    <h4 class="font-weight-lighter">LIÊN HỆ NGAY VỚI CHÚNG TÔI...</h4>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center d-flex justify-content-center align-items-center">
                    <a href="<?= $cdnUrl?>/site/contact" class="contact-button">
                        Liên hệ ngay!<span>kimkhanhgroups.com</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--    Companies We Have as Clients-->
    <div class="row m-0 text-muted">
        <h2 class="text-danger text-center col-12 p-5 font-weight-bold fontTitle border-bottom border-danger">ĐỐI TÁC CỦA CHÚNG TÔI</h2>
        <div id="brand" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3 active">
                            <img src="<?= $cdnUrl ?>/img/brand/sony.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-3">
                            <img src="<?= $cdnUrl ?>/img/brand/hitachi.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3">
                            <img src="<?= $cdnUrl ?>/img/brand/lg.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3">
                            <img src="<?= $cdnUrl ?>/img/brand/fpt.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class=" col-md-3">
                            <img src="<?= $cdnUrl ?>/img/brand/hikvision.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3">
                            <img src="<?= $cdnUrl ?>/img/brand/samtech.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3">
                            <img src="<?= $cdnUrl ?>/img/brand/imou.png" class="d-block w-100" alt="...">
                        </div>
                        <div class=" col-md-3">
                            <img src="<?= $cdnUrl ?>/img/brand/logitech.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#brand" data-slide="prev">
                <i class="fas fa-angle-left fa-2x"></i>
            </a>
            <a class="carousel-control-next" href="#brand" data-slide="next">
                <i class="fas fa-angle-right fa-2x"></i>
            </a>
        </div>
    </div>
    <div class="pb-5"></div>
    <script src="<?= $cdnUrl ?>/js/numscroller-1.0.js"></script>
    <script src="<?= $cdnUrl ?>/js/prism.js"></script>
    <script>
        $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
            $(e.target)
                .prev()
                .find("i:last-child")
                .toggleClass("fa-minus fa-plus");
        });
        $(document).ready(function(){
            $("#hide").click(function(){
                $("#nav").hide();
            });
            $("#show").click(function(){
                $("#nav").show();
            });
        });
    </script>
</div>