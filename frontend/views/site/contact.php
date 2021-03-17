<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
$cdnUrl = Yii::$app->params['frontend'];

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    a {
        text-decoration: none !important;
    }
    #tel{
        border: 1px solid #198754;
        transition: 0.35s;
    }
    #gmail{
        border: 1px solid #dc3545;
        transition: 0.35s;
    }
    #fb{
        border: 1px solid #0d6efd;
        transition: 0.35s;
    }
    a:hover>#tel{
        transform: scale(1.05,1.05);
        border: 4px solid #198754;
        box-shadow: 0 10px 10px 6px gray;
    }
    a:hover>#gmail{
        transform: scale(1.05,1.05);
        border: 4px solid #dc3545;
        box-shadow: 0 10px 10px 6px gray;
    }
    a:hover>#fb{
        transform: scale(1.05,1.05);
        border: 4px solid #0d6efd;
        box-shadow: 0 10px 10px 6px gray;
    }
</style>
<div class="row shadow-lg">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3486.201257961549!2d105.7639463153368!3d21.04019029276296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b60773a811%3A0xe064604bcb54667f!2zMTI4IMSQxrDhu51uZyBI4buTIFTDuW5nIE3huq11LCBNYWkgROG7i2NoLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1615878737843!5m2!1svi!2s"
            width="100%" height="400px" style="border:0;padding:0;margin:0" allowfullscreen="" loading="lazy"></iframe>
</div>
<div class="site-contact">
    <div class="row border-bottom">
        <div class="p-3 text-center my-3">
            <h5> Nếu bạn có yêu cầu kinh doanh hoặc câu hỏi khác, vui lòng điền vào biểu mẫu sau để liên hệ với chúng tôi. Cảm ơn bạn!</h5>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <h2 class="text-center p-2 text-danger mb-3">Gửi thông tin liên hệ</h2>
            <div class="float-start">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true,])->label('Họ và tên')->textInput(['placeholder' => 'Nguyễn Văn A']) ?>

                <div class="row">
                    <div class="col-6 col-sm-7 col-md-7 col-lg-6 col-xl-6">
                        <?= $form->field($model, 'email')->label('Email')->textInput(['placeholder' => '123abc@gmail.com'],) ?>
                    </div>

                    <div class="col-6 col-sm-5 col-md-5 col-lg-6 col-xl-6">
                        <?= $form->field($model, 'phone')->label('Số điện thoại')->textInput(['placeholder' => '(+84)123456789'],) ?>
                    </div>
                </div>

                <?= $form->field($model, 'subject')->label('Chủ đề')->textInput(['placeholder' => 'Bạn đang gặp vấn đề gì?']) ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Nội dung chi tiết') ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-success col-12', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-md-block">
            <div class="text-center">
                <img src="<?= $cdnUrl ?>/img/favicon.jpg" alt="kimkhanhgroup" class="rounded-circle" width="88px"
                     height="88px" ;>
                <h3 class="text-danger pt-2">KIM KHANH COMPANY</h3>
            </div>
            <hr>
            <div class="col-12 px-4">
                <h3 class="text-danger">Địa chỉ:</h3>
                <p>Tầng 05 - Nhà A <br> Trường Cán bộ quản lý văn hóa thể thao và du lịch <br> 128A - Hồ Tùng Mậu - Mai
                    Dịch
                    - Cầu Giấy - Hà Nội</p>
                <hr>
            </div>
            <div class="col-12 px-4 d-none d-md-block">
                <img src="https://jobsgo.vn/blog/wp-content/uploads/2019/07/Cham-soc-khach-hang-01.jpg"
                     alt="Chăm sóc khách hàng." width="100%" height="100%"
                     style="border-radius:10px; border:none;" class="shadow-lg">
            </div>
        </div>
    </div>
    <h3 class="text-center text-danger py-3">Hoặc</h3>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center p-2">
            <a href="#">
                <div class="card px-2" id="tel">
                    <i class="fas fa-phone-square-alt fa-7x text-success py-3"></i>
                    <div class="card-body">
                        <h5><i class="far fa-hand-point-right"></i> Gọi cho chúng tôi!</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center p-2">
            <a href="#">
                <div class="card px-2" id="gmail">
                    <i class="fas fa-envelope fa-7x text-danger py-3"></i>
                    <div class="card-body">
                        <h5><i class="far fa-hand-point-right"></i> Email cho chúng tôi!</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center p-2">
            <a href="#">
                <div class="card px-2" id="fb">
                    <i class="fab fa-facebook-square fa-7x text-primary py-3"></i>
                    <div class="card-body">
                        <h5><i class="far fa-hand-point-right"></i> Ghé thăm page!</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
