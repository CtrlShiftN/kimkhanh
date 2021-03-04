<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form ActiveForm */

$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'Signup';
?>

<style>
    .wrap {
        background-image: url('<?= $cdnUrl ?>/img/background-signup.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    }
</style>

<div class="site-signup">
    <div class="row">
        <div class="col-lg-5 bg-light rounded p-3">
            <h1>Đăng Kí</h1>
            <p>Vui lòng điền vào biểu mẫu này để tạo một tài khoản? </p>
            <hr>
            <div class="mx-auto">
                <div class="mb-4">
                    <?php $form = ActiveForm::begin(); ?>
                    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Nhập họ và tên'])->label(false) ?>
                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Nhập email'])->label(false) ?>
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Mật khẩu'])->label(false) ?>
                    <?= $form->field($model, 'tel')->textInput(['placeholder' => 'Nhập số điện thoại'])->label(false) ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Đăng Kí'), ['class' => 'form-control btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <div class="horizontal-line">
                <span class="bg-light">Bạn Đã Có Tài Khoản?</span>
            </div>
            <a href="<?= $cdnUrl ?>/site/login" class="form-control btn btn-info">Đăng Nhập</a>
        </div>
    </div>
</div><!-- site-signup -->
