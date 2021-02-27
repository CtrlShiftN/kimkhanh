<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'Login';
?>

<style>
    .wrap {
        background-image: url('<?= $cdnUrl ?>/img/background2.jpg');
        background-size: cover;
    }
</style>

<div class="site-login p-3">
    <div class="row pt-5">
        <div class="col-lg-7"></div>
        <div class="col-lg-5 bg-light p-3 rounded">
            <div>
                <h1><?= Html::encode($this->title) ?></h1>
                <p>Please fill out the following fields to Login:</p>
                <hr>
                <div>
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="float-left">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>
                <div class="float-right">
                    <?= Html::a('Forgot your password?', ['site/request-password-reset']) ?>.
                </div><br>
                <div class="mt-4 mb-3">
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'form-control btn btn-primary', 'name' => 'login-button']) ?>
                </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <div class="text-center">
                <div class="w-auto mx-auto">
                    <div class="w-25 float-left">
                        <hr>
                    </div>
                    <span>OR</span>
                    <div class="w-25 float-right">
                        <hr>
                    </div>
                </div>
                <br>
                <div class="mx-auto">
                    <div class="btn btn-primary px-3"><i class="fab fa-facebook-f"></i> Facebook</div>
                    <div class="btn btn-danger px-4"><i class="fab fa-google"></i> Google</div>
                    <div class="btn btn-success px-4"><i class="fas fa-phone"></i> Phone</div>
                </div>
            </div>
        </div>
    </div>
</div>

