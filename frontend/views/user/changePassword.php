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
                                <a href="profile" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Hồ sơ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="change-password" class="nav-link active">
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
                        <h1 class="m-0 text-dark">Đổi mật khẩu</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a class="" data-widget="pushmenu" href="#" role="button">home</a></li>
                            <li class="breadcrumb-item active">Đổi mật khẩu</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class=" px-3 pt-3 pb-1 bg-white border border-bottom ">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($changePassword, 'oldPassword')->textInput(['autofocus' => true, 'placeholder' => 'Nhập mật khẩu cũ'])->label(false) ?>

                <?= $form->field($changePassword, 'newPassword')->passwordInput(['placeholder' => 'Nhập mật khẩu mới'])->label(false) ?>

                <?= $form->field($changePassword, 'repeatNewPassword')->passwordInput(['placeholder' => 'Nhập lại mật khẩu mới'])->label(false) ?>

                <?= Html::submitButton('Lưu', ['class' => 'form-control btn btn-primary']) ?>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
        <!-- /.row -->
    </div>
</div>
<aside class="control-sidebar control-sidebar-dark">
</aside>

<script src="<?= $cdnUrl ?>/assets/adminlte3/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= $cdnUrl ?>/assets/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?= $cdnUrl ?>/assets/adminlte3/dist/js/adminlte.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?= $cdnUrl ?>/assets/adminlte3/plugins/chart.js/Chart.min.js"></script>
<script src="<?= $cdnUrl ?>/assets/adminlte3/dist/js/demo.js"></script>
<script src="<?= $cdnUrl ?>/assets/adminlte3/dist/js/pages/dashboard3.js"></script>
