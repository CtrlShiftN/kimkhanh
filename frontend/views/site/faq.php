<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap;
use yii\helpers\Url;

$this->title = 'Câu hỏi thường gặp';
$cdnUrl = Yii::$app->params['frontend'];
?>
<style>
    .bg-img-faq {
        background-image: url('<?= $cdnUrl ?>/img/background-faq.jpg');
        background-size: cover;
        background-attachment: fixed;
    }

    .change-content-faq {
        color: white;
    }

    .change-content-faq a:hover {
        color: #e27f42;
    }

    .change-content-faq[aria-expanded="true"] .fa-chevron-down {
        transform: rotate(180deg);
    }
    .wrap > .container {
        padding: 0!important;
    }
</style>
<div class="container-fluid">
    <h4 class="text-dark title-faq pt-4 pb-2 mb-3 font-weight-bold"><u><i class="far fa-question-circle"></i> CÂU HỎI
            THƯỜNG GẶP:</u></h4>
</div>
<div class="bg-img-faq p-3 mb-2">
    <div class="container-fluid bg-title-faq" id="accordion">
        <?php foreach ($arrQuestion as $value): ?>
            <div class="content-faq">
                <div class="card card-header p-0 px-3" id="heading<?= $value['id'] ?>">
                    <a class="text-decoration-none row change-content-faq" href="#" data-toggle="collapse"
                       data-target="#collapse<?= $value['id'] ?>" aria-expanded="false" aria-controls="collapse">
                        <p class="py-3 mb-0  col-10 font-weight-bold">
                            <?= $value['id'] ?>. <?= $value['question_html'] ?></p>
                        <p class="col-2 py-3 mb-0 m-auto  font-weight-bold text-center"><i
                                    class="fas fa-chevron-down rorate"></i></p>
                    </a>
                </div>
                <div class="collapse" id="collapse<?= $value['id'] ?>" class="collapse show"
                     aria-labelledby="heading<?= $value['id'] ?>" data-parent="#accordion">
                    <div class="card card-body border-top p-1">
                        <?= $value['answer_html'] ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".change-content-faq").click(function () {
            $(this).css("color", "#ff6608");
        });
    });
</script>