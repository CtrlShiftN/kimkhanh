<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$cdnUrl = Yii::$app->params['frontend'];
$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    .ggmap {
        height: 300px;
    }
</style>

<div class="site-contact">
    <div class="p-3">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-4 h-75">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-sm-4">{image}</div><div class="col-sm-8">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'form-control btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-lg-5 pt-3 ggmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0046176751866!2d105.76439379409214!3d21.032501236837337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454bbe135a505%3A0x152cff27eb8815ee!2zxJDGoW4gbmd1ecOqbiA1IGvDvSB0w7pjIHjDoSBN4bu5IMSQw6xuaA!5e0!3m2!1svi!2s!4v1614496108829!5m2!1svi!2s"
                        class="w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i> Đơn nguyên 5 ký túc xá Mỹ Đình.
                    </li>
                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        + 84 0365508163
                    </li>
                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        ledangbinh18122002@gmail.com
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
