<?php
$cdnUrl = Yii::$app->params['frontend'];

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="row">
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3" id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                   aria-controls="collapseOne">
                    <i class="fas fa-user"></i> Tài khoản của tôi
                </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                           role="tab" aria-controls="v-pills-home" aria-selected="true">Hồ sơ</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                           role="tab" aria-controls="v-pills-profile" aria-selected="false">Đổi mật khẩu</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                           role="tab" aria-controls="v-pills-settings" aria-selected="false">Địa chỉ</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                   aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-bell"></i> Thông Báo
                </a>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <div class="nav flex-column nav-pills" id="notification" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-orderUpdate-tab" data-toggle="pill"
                           href="#v-pills-oderUpdate"
                           role="tab" aria-controls="v-pills-oderUpdate" aria-selected="true">Cập nhật đơn hàng</a>
                        <a class="nav-link" id="v-pills-discount-tab" data-toggle="pill" href="#v-pills-discount"
                           role="tab" aria-controls="v-pills-discount" aria-selected="false">Khuyến mại</a>
                        <a class="nav-link" id="v-pills-activities-tab" data-toggle="pill" href="#v-pills-activities"
                           role="tab" aria-controls="v-pills-activities" aria-selected="false">Hoạt động</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">

                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                   aria-expanded="false" aria-controls="collapseThree">
                    <i class="fas fa-book"></i> Đơn mua
                </a>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
    <div class="bg-light col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9  border rounded">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div id="username" class="tab-pane p-3 row">
                    <div class="col-12 col-lg-7 col-sm-7 col-md-7 col-xl-7 border-right">
                        <h3>Hồ sơ của tôi</h3>
                        <hr>
                        <?php $form = ActiveForm::begin(); ?>
                        <b>Tên đăng nhập:</b>
                        <?php echo $userModel['name']; ?><br>

                        <b>Email:</b>
                        <?= $form->field($userModel, 'email')->textInput(['autofocus' => true, 'placeholder' => 'Email'])->label(false) ?>

                        <b>Số điện thoại:</b>
                        <?= $form->field($userModel, 'tel')->textInput(['placeholder' => 'Số Điện Thoại'])->label(false) ?>

                        <b>Giới tính:</b>
                        <?= $form->field($userModel, 'gender')->radioList([0 => 'Nam', 1 => 'Nữ', 2 => 'khác'])->label(false); ?>

                        <?= $form->field($userModel, 'date_of_birth')->textInput(['value' => date( 'Y-m-d'),'options' => ['class' => 'form-control'],])->label('<b>Ngày tháng năm sinh:git check</b>'); ?>

                        <?= Html::submitButton('Lưu', ['class' => 'form-control btn btn-primary', 'name' => 'change']) ?>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="text-center col-12 col-lg-5 col-sm-5 col-md-5 col-xl-5">
                        <img src="<?= $cdnUrl . "/uploads/avatar/".$uploadAvatar['image'] ?>"
                             class="col-12 avatar border image-responsive">
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                        <?= $form->field($uploadAvatar, 'image')->fileInput()->label('Chỉ nhận ảnh có đuôi : png, jpg') ?>
                        <button>Submit</button>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade p-3" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <h3>Đổi mật khẩu</h3>
                <p>Đừng cung cấp thông tin cho bất cứ ai!</p>
                <hr>
                <div class="p-3 col-5 mx-auto">
                    <?php $form = ActiveForm::begin(); ?>
                    <?= $form->field($changePassword, 'oldPassword')->textInput(['autofocus' => true, 'placeholder' => 'Nhập mật khẩu cũ'])->label(false) ?>
                    <?= $form->field($changePassword, 'newPassword')->passwordInput(['autofocus' => true, 'placeholder' => 'Nhập mật khẩu mới'])->label(false) ?>
                    <?= $form->field($changePassword, 'repeatNewPassword')->passwordInput(['autofocus' => true, 'placeholder' => 'Nhập lại mật khẩu mới'])->label(false) ?>

                    <?= Html::submitButton('Lưu', ['class' => 'form-control btn btn-primary']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="p-3">
                    <div>
                        <h3 class="float-left">Địa chỉ</h3>
                        <button class="btn btn-danger float-right">Cập nhật địa chỉ của bạn</button>
                    </div>
                    <br>
                    <hr>
                    <div>
                        <h4>Bạn chưa có địa chỉ.</h4>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-oderUpdate" role="tabpanel"
                 aria-labelledby="v-pills-orderUpdate-tab">
                <h4>Chưa có thông báo mới.</h4>
            </div>
            <div class="tab-pane fade pb-3" id="v-pills-discount" role="tabpanel"
                 aria-labelledby="v-pills-discount-tab">
                <hr>
                <table>
                    <tr>
                        <td><img src="<?= $cdnUrl ?>/img/background1.jpg" value="giảm giá" width="100px"></td>
                        <td><h4>Giảm giá số lượng lớn</h4>
                            <p> các loại camera an ninh đời cũ để cập nhật thêm các loại camera giám sát.</p></td>
                    </tr>
                    <button class="btn btn-success float-right">Mua ngay</button>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-activities" role="tabpanel" aria-labelledby="v-pills-activities-tab">
                <h4>Chưa có hoạt động</h4></div>
        </div>
    </div>
</div>
</div>

