<?php
$cdnUrl = Yii::$app->params['frontend'];

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<style type="text/css">

    .page {
        margin: 1em auto;
        max-width: 768px;
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
        height: 100%;
    }

    .box {
        padding: 0.5em;
        width: 100%;
        margin: 0.5em;
    }

    .box-2 {
        padding: 0.5em;
        width: calc(100% / 2 - 1em);
    }


    .options label,
    .options input {
        width: 8em;
        padding: 0.5em 1em;
    }

    .btn {
        background: white;
        color: black;
        border: 1px solid black;
        padding: 0.5em 1em;
        text-decoration: none;
        margin: 0.8em 0.3em;
        display: inline-block;
        cursor: pointer;
    }

    .hide {
        display: none;
    }

    .img-result {
        border: 2px solid black;
        max-width: 100%;
    }


</style>
<style>
    .sidenav__profile-avatar {
        background-image: url("<?= $cdnUrl ?>/uploads/avatar/<?= $userModel['avatar'] ?>");
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, .2);
        height: 64px;
        width: 64px;
        margin: 0 15px;
    }
</style>

<div class="row">
    <div class="col-12 col-md-3 col-lg-3 col-sm-3 col-xl-3">
        <aside class="sidenav">
            <div class="sidenav__profile">
                <div class="sidenav__profile-avatar"></div>
                <div class="sidenav__profile-title text-light"><?= $userModel['name'] ?></div>
            </div>
            <div class="row row--align-v-center row--align-h-center">
                <ul class="navList">
                    <li class="navList__heading">Tài khoản<i class="far fa-file-alt"></i></li>
                    <li>
                        <div class="navList__subheading row row--align-v-center">
                            <span class="navList__subheading-icon"><i class="fas fa-users"></i></span>
                            <span class="navList__subheading-title">Hồ sơ của tôi</span>
                        </div>
                        <ul class="subList subList--hidden">
                            <li class="subList__item"><a href="profile" class="">Hồ sơ</a></li>
                            <li class="subList__item"><a href="change-password" class="">Đổi mật khẩu</a></li>
                            <li class="subList__item"><a href="address" class="">Địa chỉ</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="navList__subheading row row--align-v-center">
                            <span class="navList__subheading-icon"><i class="fas fa-briefcase-medical"></i></span>
                            <span class="navList__subheading-title">insurance</span>
                        </div>
                        <ul class="subList subList--hidden">
                            <li class="subList__item"><a href="" class="">button1</a></li>
                            <li class="subList__item"><a href="" class="">button2</a></li>
                            <li class="subList__item"><a href="" class="">button3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
    <div class="col-12 col-md-9 col-lg-9 col-sm-9 col-xl-9 border color-heading">
        <div class="text-light px-3 pt-3">
            <h4>Chào <?php echo $userModel['name']; ?>!!</h4>
            <p>Vui lòng nhập vào các trường dưới đây để thay đổi hồ sơ của bạn</p>
        </div>
        <div class="row px-3 pb-1 bg-white">
            <div class="col-12 col-lg-7 col-sm-7 col-md-7 col-xl-7 py-3 border-right">
                <?php $form = ActiveForm::begin(); ?>

                <b>Tên đăng nhập:</b>
                <?php echo $userModel['name']; ?><br>

                <?= $form->field($userModel, 'email')->textInput(['autofocus' => true, 'placeholder' => 'Email'])->label('<b>Email: </b>') ?>

                <?= $form->field($userModel, 'tel')->textInput(['id' => 'tel', 'placeholder' => 'Số Điện Thoại'])->label('<b>Số điện thoại</b>') ?>

                <?= $form->field($userModel, 'gender')->radioList([0 => 'Nam', 1 => 'Nữ', 2 => 'khác'])->label('<b>Giới tính:</b> '); ?>

                <?= $form->field($userModel, 'date_of_birth')->textInput(['value' => date('Y-m-d'), 'options' => ['class' => 'form-control'],])->label('<b>Ngày tháng năm sinh:</b>'); ?>

                <?= $form->field($userModel, 'avatar')->textInput(['id' => 'avatarFirst', 'class' => 'hide'])->label(false); ?>

                <?= Html::submitButton('Lưu', ['class' => 'form-control btn btn-primary', 'name' => 'change', 'id' => 'submitAvatarFirst']) ?>

                <?php ActiveForm::end() ?>
            </div>
            <div class="text-center col-12 col-lg-5 col-sm-5 col-md-5 col-xl-5 pt-5">
                <button type="button" onclick="buttonSubmit()">
                    <img src="<?= $cdnUrl ?>/uploads/avatar/<?= $uploadAvatar['avatar'] ?>" class="avatar-border hide"
                         id="image1">
                    <img src="<?= $cdnUrl ?>/uploads/avatar/<?= $userModel['avatar'] ?>" class="avatar-border"
                         id="image2">
                </button>
                <p>Chỉ nhận ảnh có đuôi jpg,png</p>
                <b>Tải lên trước khi xem</b>
                <br>
                <div>
                    <button class="btn btn-secondary" onclick="buttonUpload()">Tải lên</button>
                    <button class="btn btn-secondary" onclick="buttonShowImage()">Xem ảnh</button>
                    <button class="btn btn-secondary" onclick="buttonCrop()">Cắt ảnh</button>
                </div>
                <main class="page">
                    <div class="box hide">
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                        <?= $form->field($uploadAvatar, 'avatar')->fileInput(['id' => 'fileUpload'])->label(false) ?>
                        <?= Html::submitButton('Lưu', ['class' => 'form-control btn btn-primary', 'id' => 'submitFileUpload']) ?>
                        <?php ActiveForm::end() ?>
                        <form>
                            <input type="file" id="file-input" class="avatar">
                        </form>
                        <button type="button" class="btn-primary btn hide" data-toggle="modal"
                                data-target="#exampleModal" id="shadowbox">Learn More
                        </button>
                    </div>
                </main>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="Modal"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cắt ảnh đại diện</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body row">
                                <div class="box-2 col-12 col-md-5 col-sm-5 col-lg-5 col-xl-5 text-center">
                                    <div class="result"></div>
                                </div>
                                <div class="box-2 col-12 col-md-7 col-sm-7 col-lg-7 col-xl-7 img-result hide">
                                    <?= Html::img('', ['alt' => '', 'class' => 'avatar-border cropped', 'id' => 'avatarNew']); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="box">
                                    <div class="options hide">
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <!-- save btn -->
                                    <button class="btn save hide">review</button>
                                    <!-- download btn -->
                                    <a href="" class="btn download hide">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--uploadfile-->
<script>
    let result = document.querySelector('.result'),
        img_result = document.querySelector('.img-result'),
        img_h = document.querySelector('.img-h'),
        options = document.querySelector('.options'),
        save = document.querySelector('.save'),
        cropped = document.querySelector('.cropped'),
        dwn = document.querySelector('.download'),
        upload = document.querySelector('#file-input'),
        cropper = '';
    random = Math.floor(Math.random() * 1000);

    // on change show image with crop options
    upload.addEventListener('change', (e) => {
        if (e.target.files.length) {
            // start file reader
            document.getElementById('shadowbox').click();
            const reader = new FileReader();
            reader.onload = (e) => {
                if (e.target.result) {
                    // create new image
                    let img = document.createElement('img');
                    img.id = 'image';
                    img.src = e.target.result
                    // clean result before
                    result.innerHTML = '';
                    // append new image
                    result.appendChild(img);
                    // show save btn and options
                    save.classList.remove('hide');
                    options.classList.remove('hide');
                    // init cropper
                    cropper = new Cropper(img);
                }
            };
            reader.readAsDataURL(e.target.files[0]);
        }
    });

    // save on click
    save.addEventListener('click', (e) => {
        e.preventDefault();
        // get result to data uri
        let imgSrc = cropper.getCroppedCanvas().toDataURL();
        // remove hide class of img
        cropped.classList.remove('hide');
        img_result.classList.remove('hide');
        // show image cropped
        cropped.src = imgSrc;
        dwn.classList.remove('hide');
        dwn.download = 'Avatar' + random + '.png';
        dwn.setAttribute('href', imgSrc);
    });

    function buttonSubmit() {
        document.getElementById('fileUpload').click();
    }

    // button below image
    function buttonUpload() {
        document.getElementById('submitFileUpload').click();
    }

    function buttonCrop() {
        document.getElementById('file-input').click();
    }

    function buttonShowImage() {
        document.getElementById('avatarFirst').value="<?= $uploadAvatar['avatar'] ?>";
        document.getElementById('image1').classList.remove('hide');
        document.getElementById('image2').classList.add('hide');

    }
</script>
<!--uploadfile-->


