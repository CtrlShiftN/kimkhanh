<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
$cdnUrl = Yii::$app->params['backend'];
?>
<div class="site-error">
    <div id='error-page'>
        <div id='error-inner'>
            <div class='box-404'><?= Html::encode($this->title) ?></div>
            <h1><?= nl2br(Html::encode($message)) ?></h1>
            <p>You are half way around the word, but OOPS you make the wrong turn,
                let us lead you to the right way,</p>
            <p><a class="btn btn-danger" href='<?= $cdnUrl ?>' title='HOME'>Quay về trang chủ</a></p>
        </div>
    </div>
    <canvas id="c"></canvas>
    <script src="<?= $cdnUrl ?>/vendor/error/js/script.js"></script>
</div>
