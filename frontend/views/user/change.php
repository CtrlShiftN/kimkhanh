<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'oldPassword')->textInput(['autofocus' => true, 'placeholder' => 'Nhập mật khẩu cũ'])->label(false) ?>
<?= $form->field($model, 'newPassword')->passwordInput(['autofocus' => true, 'placeholder' => 'Nhập mật khẩu mới'])->label(false) ?>
<?= $form->field($model, 'repeatNewPassword')->passwordInput(['autofocus' => true, 'placeholder' => 'Nhập lại mật khẩu mới'])->label(false) ?>
<?= Html::submitButton('Lưu', ['class' => 'form-control btn btn-primary']) ?>
<?php ActiveForm::end();?>
