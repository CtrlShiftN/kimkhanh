<?php
$cdnUrl = Yii::$app->params['frontend'];

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="row">
    <div class="col-12 col-md-2 col-sm-2 col-lg-2 col-xl-2 row h-25">
        <div class="card">
            <div class="card-header" id="headingOne">
                <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                   aria-controls="collapseOne">
                    <i class="fas fa-user"></i> Hồ sơ của tôi
                </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="tab">
                    <a href="profile" class="tablinks btn form-control btn-light active">Hồ sơ</a>
                    <a href="change-password" class="tablinks btn form-control btn-light">Đổi mật khẩu</a>
                    <a href="address" class="btn form-control btn-light">Địa chỉ</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-10 col-lg-10 col-sm-10 col-xl-10">
        <div class="border">
            <div class="p-3 row">
                <div class="col-12 col-lg-7 col-sm-7 col-md-7 col-xl-7 border-right">
                    <h3>Hồ sơ của tôi</h3>
                    <hr>
                    <?php $form = ActiveForm::begin(); ?>

                    <b>Tên đăng nhập:</b>
                    <?php echo $userModel['name']; ?><br>

                    <?= $form->field($userModel, 'email')->textInput(['autofocus' => true, 'placeholder' => 'Email'])->label('<b>Email: </b>') ?>

                    <?= $form->field($userModel, 'tel')->textInput(['placeholder' => 'Số Điện Thoại'])->label('<b>Số điện thoại</b>') ?>

                    <?= $form->field($userModel, 'gender')->radioList([0 => 'Nam', 1 => 'Nữ', 2 => 'khác'])->label('<b>Giới tính:</b> '); ?>

                    <?= $form->field($userModel, 'date_of_birth')->textInput(['value' => date('Y-m-d'), 'options' => ['class' => 'form-control'],])->label('<b>Ngày tháng năm sinh:</b>'); ?>

                    <?= Html::submitButton('Lưu', ['class' => 'form-control btn btn-primary', 'name' => 'change']) ?>

                    <?php ActiveForm::end(); ?>
                </div>
                <div class="text-center col-12 col-lg-5 col-sm-5 col-md-5 col-xl-5">
                    <img src="<?= $cdnUrl . "/uploads/avatar/" . $uploadAvatar['avatar'] ?>"
                         class="col-12 border image-responsive avatar">
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                    <?= $form->field($uploadAvatar, 'avatar')->fileInput()->label('Chỉ nhận ảnh có đuôi : png, jpg') ?>
                    <?= Html::submitButton('Lưu', ['class' => 'form-control btn btn-primary']) ?>
                    <?php ActiveForm::end() ?>
                    <?php echo $userModel['name'] ?>
                </div>
            </div>
        </div>
    </div>

</div>



