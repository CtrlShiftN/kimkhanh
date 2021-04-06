<?php
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
                        <a href="profile" class="tablinks btn form-control btn-light">Hồ sơ</a>
                        <a href="change-password" class="tablinks btn form-control btn-light active">Đổi mật khẩu</a>
                        <a href="address" class="btn form-control btn-light">Địa chỉ</a>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-12 col-md-10 col-lg-10 col-sm-10 col-xl-10">
        <div class="border">
            <div class="m-3">
                <h3>Đổi mật khẩu</h3>
                <p>Đừng cung cấp thông tin cho bất cứ ai!</p>
                <hr>
                <div class="p-3 col-5 mx-auto">
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($changePassword, 'oldPassword')->textInput(['autofocus' => true, 'placeholder' => 'Nhập mật khẩu cũ'])->label(false) ?>

                    <?= $form->field($changePassword, 'newPassword')->passwordInput(['placeholder' => 'Nhập mật khẩu mới'])->label(false) ?>

                    <?= $form->field($changePassword, 'repeatNewPassword')->passwordInput(['placeholder' => 'Nhập lại mật khẩu mới'])->label(false) ?>

                    <?= Html::submitButton('Lưu', ['class' => 'form-control btn btn-primary']) ?>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
