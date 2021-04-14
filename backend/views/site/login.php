<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$cdnUrl = Yii::$app->params['backend'];
$this->title = 'Login';
?>

<style>
    .wrap {
        background-image: url('<?= $cdnUrl ?>/img/background2.jpg');
        background-size: cover;
    }

</style>

<div class="site-login">
    <div class="row mt-5">
        <div class="col-lg-7"></div>
        <div class="col-lg-5 bg-light p-3 rounded">
            <div class="horizontal-line mb-4">
                <span class="bg-light text-uppercase text-bold">Đăng Nhập</span>
            </div>
            <div>
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'admin@kimkhanhgroups.com'])->label(false) ?>
                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Nhập mật khẩu'])->label(false) ?>
                <div class="float-left">
                    <?= $form->field($model, 'rememberMe')->checkbox()->label('Nhớ mật khẩu') ?>
                </div>
                <div class="float-right">
                    <?= Html::a('Quên mật khẩu?', ['site/request-password-reset']) ?>
                </div>
                <br>
                <div class="form-group">
                    <?= Html::submitButton('Đăng Nhập', ['class' => 'form-control btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

