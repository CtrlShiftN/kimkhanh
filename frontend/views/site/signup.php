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
        background-image: url('<?= $cdnUrl ?>/img/signup-bg.jpg');
        background-size: cover;
    }

    .picture-bg {
        background-image: url('<?= $cdnUrl ?>/img/background4.jpg');
        background-size: cover;
    }

    .horizontal-line {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #000;
        line-height: 0.1em;
        margin: 10px 0 20px;
    }

    .horizontal-line span {
        background: #fff;
        padding: 0 10px;
    }
</style>

<div class="site-signup p-3">
    <div class="row pt-2 p-3 bg-light rounded">
        <div class="col-lg-8 picture-bg rounded"></div>
        <div class="col-lg-4 mh-50 ">
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
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div><!-- site-signup -->
