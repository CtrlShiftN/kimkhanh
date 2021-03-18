<?php
$cdnUrl = Yii::$app->params['frontend'];
?>

<div class="row">
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3" id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                   aria-controls="collapseOne">
                    <i class="fas fa-user"></i> Tài khoản của tôi :)
                </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <a href="#user">Hồ sơ</a><br>
                    <a href="#">Đổi mật khẩu</a><br>
                    <a href="#">:)</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">

                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                   aria-expanded="false" aria-controls="collapseTwo">
                    Thông Báo
                </a>

            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <a href="#">Khuyến mãi</a><br>
                    <a href="#">Hoạt động</a><br>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">

                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                   aria-expanded="false" aria-controls="collapseThree">
                    ok em 3
                </a>

            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
        <div id="user" class="p-3 row">
            <div class="text-center col-12 col-lg-6">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <img src="<?= $cdnUrl ?>/img/user.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <input type="file" class="text-center center-block file-upload" id="userdemo">
                </form>
            </div>
            <br>
            <div class="col-12 col-lg-6">
                <h3>Hồ sơ của tôi <3</h3>
                <p>quản lý hồ sơ để bảo mật tài khoản :p</p>
                <hr>
            </div>
        </div>
    </div>
</div>
