<?php
$cdnUrl = Yii::$app->params['frontend'];

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Dashboard 3</title>

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= $cdnUrl ?>/assets/adminlte3/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style type="text/css">
        .navbar-dark{
            background-color:#dc3545;!important;
            z-index: 1039;
        }
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
</head>

<div class="wrapper border">
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= $cdnUrl ?>/uploads/avatar/Avatar.png" class="img-circle elevation-2">
                </div>
                <div class="info">
                    <a href="#" class="d-block">le dang binh</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-user"> </i>
                            <p>
                                Hồ sơ của tôi
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
<!--                        hồ sơ của tôi-->
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="./index.html" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Hồ sơ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Đổi mật khẩu</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v3</p>
                                </a>
                            </li>
                        </ul>
<!--                        hồ sơ của tôi-->
                    </li>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Hồ sơ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a class="" data-widget="pushmenu" href="#" role="button">home</a></li>
                            <li class="breadcrumb-item active">Hồ sơ</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row px-3 border bg-white">
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
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
</div>
<aside class="control-sidebar control-sidebar-dark">
</aside>
</div>
<script src="<?= $cdnUrl ?>/assets/adminlte3/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= $cdnUrl ?>/assets/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?= $cdnUrl ?>/assets/adminlte3/dist/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?= $cdnUrl ?>/assets/adminlte3/plugins/chart.js/Chart.min.js"></script>
<script src="<?= $cdnUrl ?>/assets/adminlte3/dist/js/demo.js"></script>
<script src="<?= $cdnUrl ?>/assets/adminlte3/dist/js/pages/dashboard3.js"></script>
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


