<?php
$cdnUrl = Yii::$app->params['frontend'];
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use yii\widgets\ActiveForm;
AppAsset::register($this);
include 'upload.php';


$ID=$model['id'];
?>
<?php
$severname = "localhost";
$username ="root";
$password ="";
$database ="kimkhanh";

//tạo kết nối
$conn = new mysqli($severname,$username,$password,$database);
//kiểm tra kết nối hoạt động
if($conn->connect_error){
    die("kết nối lỗi: ".$conn ->connect_error);
}

?>
<div class="row">
    <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3" id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                   aria-controls="collapseOne">
                    <i class="fas fa-user"></i> Tài khoản của tôi
                </a>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                           role="tab" aria-controls="v-pills-home" aria-selected="true">user</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                           role="tab" aria-controls="v-pills-profile" aria-selected="false">Change password</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                           role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                           role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                    </div>
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
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="thong bao" data-toggle="pill" href="#thongbao" role="tab"
                           aria-controls="v-pills-home" aria-selected="true">Home</a>
                        <a class="nav-link" id="khuyen mai" data-toggle="pill" href="#khuyenmai" role="tab"
                           aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                    </div>
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
    <div class="bg-light col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 tab-content">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div id="username" class="tab-pane p-3 row">
                    <div class="col-12 col-lg-8 border-left">
                        <h3>Hồ sơ của tôi <3</h3>
                        <?php
                         echo Yii::$app->user->identity->name;
                        ?>
                        <hr>
                        <p><b>Tên đăng nhập:</b>
                        <span><?php echo $model['name']; ?></span></p>
                        <?php $form = ActiveForm::begin();?>
                        <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'Email'])->label('<b>Email:</b>') ?>
                        <?= $form->field($model, 'tel')->textInput(['placeholder' => 'Số Điện Thoại'])->label('<b>Số điện thoại:</b>') ?>
                        <?= Html::submitButton('Lưu', ['class' => 'form-control btn btn-primary', 'name' => 'login-button']) ?>
                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="text-center col-12 col-lg-4">
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <img src="<?= $cdnUrl ?>/img/user.png" alt="user" class="col-12">
                            <input type="file" name="fileUpload" value="">
                            <input type="submit" name="up" value="Upload">
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

            </div>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="thongbao" role="tabpanel" aria-labelledby="thong bao">

            </div>
            <div class="tab-pane fade" id="khuyenmai" role="tabpanel" aria-labelledby="khuyen mai">
            </div>

        </div>
    </div>
</div>

