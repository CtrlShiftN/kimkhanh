<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$cdnUrl = Yii::$app->params['frontend'];
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<link href="<?= $cdnUrl?>/css/cropper.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
    img {
        display: block;
        max-width: 100%;
    }

    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border: 1px solid red;
    }

</style>
<div class="container">
    <h5>Upload Images</h5>
    <form method="post">
        <input type="file" name="image" class="image">
    </form>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Crop image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <div class="row">
                        <div class="col-md-8">
                            <!--  default image where we will set the src via jquery-->
                            <img id="image">
                        </div>
                        <div class="col-md-4">
                            <div class="preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="crop">Crop</button>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-3 bg-secondary">

        </div>
        <div class="col-12 col-sm-12 col-md-9">
            <h4>CV tuyển dụng</h4>
            <h5>Thông tin:</h5>
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'fullname')->textInput(['autofocus' => 'true', 'placeholder' => 'Enter your fullname'])->label("Họ và tên:") ?>
            <?= $form->field($model, 'email')->textInput(['placeholder' => 'Enter your email'])->label("Nhap Email:") ?>
            <?= $form->field($model, 'tel')->textInput(['placeholder' => 'Enter your phone'])->label("Nhap Phone:") ?>
            <?= $form->field($model, 'birth')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Enter event time ...'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'mm/dd/yyyy'
                ]
            ])->label("Sinh nhật:") ?>
            <?= $form->field($model, 'gender')->radioList([1 => 'nam', 2 => 'nữ'])->label("Gới tính:") ?>
            <?= $form->field($model, 'note')->textarea(['placeholder' => 'Nhap Vao Ghi Chu Cua Ban'])->label("Nhap Note:") ?>
            <?= $form->field($model, 'file_cv')->fileInput(['placeholder' => 'Thêm file'])->label("Đã có CV:") ?>
            <?= Html::submitButton('Gui Phan Hoi', ['class' => 'btn btn-primary']) ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="cropperjs/cropper.min.js" type="text/javascript"></script>
<script>

    var bs_modal = $('#modal');
    var image = document.getElementById('image');
    var cropper, reader, file;


    $("body").on("change", ".image", function (e) {
        var files = e.target.files;
        var done = function (url) {
            image.src = url;
            bs_modal.modal('show');
        };


        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    bs_modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function () {
        canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });

        canvas.toBlob(function (blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function () {
                var base64data = reader.result;

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "upload.php",
                    data: {image: base64data},
                    success: function (data) {
                        bs_modal.modal('hide');
                        alert("success upload image");
                    }
                });
            };
        });
    });

</script>