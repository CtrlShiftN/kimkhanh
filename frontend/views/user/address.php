<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="row">
    <div class="col-12 col-md-2 col-sm-2 col-lg-2 col-xl-2 row h-25">
        <div class="card">
            <div class="card-header" id="headingOne">
                <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                   aria-controls="collapseOne">
                    <i class="fas fa-user"></i> Hồ sơ của tôi
                </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="tab">
                    <a href="profile" class="tablinks btn form-control btn-light">Hồ sơ</a>
                    <a href="change-password" class="tablinks btn form-control btn-light" id="defaultOpen1">Đổi mật
                        khẩu</a>
                    <a href="address" class="tablinks btn form-control btn-light active">Địa chỉ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-10 col-lg-10 col-sm-10 col-xl-10">
        <div class="border">
            <div class="m-3">
                <div>
                    <h3 class="float-left">Địa chỉ của tôi</h3>
                    <button class="btn btn-danger float-right">Thêm địa chỉ</button>
                    <br>
                    <hr>
                    <b>Bạn chưa có địa chỉ</b>
                </div>
            </div>
        </div>
    </div>
</div>
