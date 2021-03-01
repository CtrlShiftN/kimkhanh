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
        background-image: url('<?= $cdnUrl ?>/img/background2.jpg');
        background-size: cover;
    }

    .horizontal-line {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #C0C0C0;
        line-height: 0.1em;
        margin: 10px 0 20px;
    }

    .horizontal-line span {
        background: #fff;
        padding: 0 10px;
    }
</style>

<div class="site-signup p-3">
    <div class="row pt-5">
        <div class="col-lg-7"></div>
        <div class="col-lg-5 bg-light rounded p-3">
            <div class="horizontal-line">
                <span class="bg-light">SIGNUP</span>
            </div>
            <div class="mx-auto">
                <div class="mb-4">
                    <?php $form = ActiveForm::begin(); ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'password') ?>
                    <?= $form->field($model, 'tel') ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Signup'), ['class' => 'form-control btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <div class="horizontal-line">
                <span class="bg-light">You already have a account?</span>
            </div>
            <a href="<?= $cdnUrl ?>/site/login" class="form-control btn btn-info">Login</a>
        </div>
    </div>
</div><!-- site-signup -->
