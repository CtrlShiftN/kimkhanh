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
    .picture-bg {
        background-image: url('<?= $cdnUrl ?>/img/background4.jpg');
        background-size: cover;
    }
</style>

<div class="site-signup p-3">
    <div class="row pt-2 p-3 bg-light rounded">
        <div class="col-lg-7 picture-bg rounded">

        </div>
        <div class="col-lg-5 border-left p-4">
            <div class="mx-auto">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>Please fill out the following fields to signup:</p>
                <hr>
                <div class="mb-4">
                    <?php $form = ActiveForm::begin(); ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'email') ?>
                    <?= $form->field($model, 'password') ?>
                    <?= $form->field($model, 'tel') ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Signup'), ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div><!-- site-signup -->
