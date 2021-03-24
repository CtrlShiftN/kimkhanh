<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'FAQ-KimKhanh';
$cdnUrl = Yii::$app->params['frontend'];
?>
<style>
.bg-img-faq {
    background-image: url('<?= $cdnUrl ?>/img/background-faq.jpg');
    background-size: cover;
    background-attachment: fixed;
    margin: -70px 0px -20px 0;
}
</style>
<div class="bg-img-faq p-3">
    <div class="container bg-title-faq">
        <h4 class="text-dark title-faq pt-4 mb-3 font-weight-bold"><u><i class="far fa-question-circle"></i> CÂU HỎI THƯỜNG GẶP:</u></h4>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                1. Một hệ thống camera an ninh giám sát gồm những gì?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>
        </a>
        <div class="collapse" id="collapse">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Hệ thống an ninh cơ bản gồm có: Camera, đầu ghi hình, dây điện, dây mạng, dây tín hiệu, ổ cứng, nguồn cấp, mic thu tiếng, dây HDMI, màn hình, bộ chuyển đổi tín hiệu,…</li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse">
            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                2. Tại sao khi đã lắp đặt ổ cứng vẫn không xem lại hình ảnh được?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>
        </a>
        <div class="collapse" id="collapse1">
            <div class="card card-body border-top border-dark-0 p-1">
                <p>Trường hợp này có 2 nguyên nhân:</p>
                <ul class="m-0">
                    <li class="guide-faq">1 là ổ cứng bị lỗi</li>
                    <li class="guide-faq">2 là bạn chưa format ổ cứng trong lần lắp đặt đầu tiên.</li>
                </ul>
                <p class="document-faq ml-4">Bạn cần phải format lại ổ cứng. Hoặc có thể kiểm tra dây cáp và thử dùng ổ khác xem có bị gì không?
                </p>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                3. Ngoài ổ cứng có thể lưu video bằng cách nào khác không?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse2">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Có thể lưu video trực tiếp trên máy tính. Nhưng với điều kiện bạn dùng đầu đọc hoặc lưu trên đám mây (Tùy một số đầu hỗ trợ, ví dụ như đầu ghi Hikvision).</li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                4. Chọn mua ổ cứng dung lượng bao nhiêu để phù hợp với hệ thống camera quan sát?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse3">
            <div class="card card-body border-top border-dark-0 p-1">
                <p class="guide-faq">Có một cách tính tương đối bạn có thể áp dụng:</p>

                <ul class="m-0">
                    <li class="guide-faq">1 camera HD720P sẽ tốn khoảng 15GB một ngày. 1 camera HD1080P sẽ tốn khoảng 20GB một ngày.</li>

                </ul>
                <ul class="m-0">
                    <li class="guide-faq">Từ đó hãy suy ra số camera nhà bạn để ước tính dung lượng cần lắp đặt. Đây chỉ là cách tính tương đối vì còn phụ thuộc vào chuẩn nén và cấu hình lưu video của thiết bị.
                    </li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                5. Tôi quên mật khẩu camera wifi thì phải làm sao để khôi phục ?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse4">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Nếu bạn quên mật khẩu camera wifi thì bạn chỉ cần chọc vào nút reset của camera. Sau đó tiến hành cài đặt camera wifi là được. Tất cả camera wifi đều có nút reset cứng.</li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                6. Muốn xem hình ảnh của camera trên nhiều màn hình thì cần phải làm gì?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse5">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Bạn cần phải dung bộ chia HDMI hoặc VGA để kết nối camera với nhiều màn hình.
                    </li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                7. Camera an ninh sử dụng nguồn điện gì?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse6">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Camera an ninh sử dụng Adapter (Bộ đổi nguồn) để chuyển nguồn điện lưới AC 220V sang nguồn 12VDC hoặc 24VAC.
                    </li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                8. Khi mất điện camera có ghi hình được không?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse7">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Không. Camera muốn hoạt động được cũng cần phải có nguồn điện. Khi không có điện đồng nghĩa việc camera sẽ ngưng hoạt động. Chính vì vậy nếu bạn muốn camera hoạt động được bạn có thể mua bộ lưu điện.
                    </li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                9. Tôi có một xưởng sản xuất ở Hòa Khánh, văn phòng ở Sơn Trà. Làm thế nào tôi có thể giám sát được công việc ở xưởng ?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse8">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Nên lắp các camera analog hồng ngoại. Sử dụng đầu ghi để tập hợp hình ảnh các camera này. Tiếp sau đó thông qua mạng WAN của công ty, hoặc mạng internet bạn có thể giám sát được. Các hình ảnh và âm thanh có thể lưu vào đĩa cứng của đầu ghi.</li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                10. Khi đầu ghi hình đang hoạt động có thể chụp hình được không?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse9">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Bạn chụp được hình bình thường khi đầu ghi đang ghi hình. Bạn cũng có thể xem lại đoạn Video đã ghi mà không ảnh hưởng đến việc ghi hình.
                    </li>
                </ul>

            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                11. Camera của ghi hình ảnh không rõ nét như ban đầu ?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse10">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Nên vệ sinh ống kính, bởi vì khói và bụi bám vào ống kính làm cho hình ảnh bị mờ đi. Nên sử dụng vải mềm chùi ống kính Camera và mặt kính của hộp bảo vệ.
                    </li>
                </ul>

            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                12. Tại sao đầu ghi Camera DVR không thể nhận ổ cứng HDD ?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse11">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Nên xem lại dây nguồn hoặc cáp dữ liệu kết nối không tốt với HDD. Nếu ổ cứng HDD chưa Format thì bạn nhớ Format.

                    </li>
                </ul>

            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                13. Vì sao Remote điều khiển từ xa của đầu ghi DVR không hoạt động được nhưng khi cắm chuột vào điều khiển bằng chuột lại được.</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse12">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Có thể Remote của bạn hết hoặc chưa gắn pin.
                    </li>
                    <li class="guide-faq">Pin trong Remote đã sẵng sàng nhưng Remote vẫn không hoạt động. Bạn thực hiện khai báo trong đầu ghi.
                    </li>
                    <li class="guide-faq">Phần Remote đang ở chế độ “OFF”. Bạn mở Menu của hệ thống đầu ghi DVR, bật “ON” chế độ Remote..
                    </li>
                    <li class="guide-faq">Hoặc thực hiện bằng cách: gắn chuột vào, Click phải chuột và nhìn bên góc phải màn hình xem biểu tượng Remote đang trong chế độ màu xanh hay đỏ. Nếu đỏ thì nó đang ở chế độ “OFF”. Bạn Click trái vào để chuyển sang màu xanh là sẽ sử dụng được.
                    </li>
                </ul>

            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                14. Làm gì khi không thể tìm thấy các tập tin video trong menu tìm kiếm sau khi ghi ?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse13">
            <div class="card card-body border-top border-dark-0 p-1">
                <p class="guide-faq">Nguyên nhân có thể do:</p>
                <ul class="m-0">
                    <li class="guide-faq">Thiết lập lịch trình ghi hình chưa đúng. Chọn lại thời gian ghi hình là ” 00:00 đến 24:00 ”.
                    </li>
                    <li class="guide-faq">Cap kết nối HDD không tốt. Kiểm tra lại cáp kết nối HDD.
                    </li>
                    <li class="guide-faq">Có thể ngày giờ hệ thống không đúng. Kiểm tra lại ngày giờ hệ thống.
                    </li>
                    <li class="guide-faq">Chưa chuyển qua chế độ ghi hình. Nên chuyển qua chế độ ghi hình.
                    </li>
                    <li class="guide-faq">Khoảng thời gian tìm kiếm của bạn không đúng. Chọn lại đúng thời ghi hình.
                    </li>
                </ul>

            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                15. Camera ban ngày xem bình thường còn ban đêm chỉ có màu đen?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse14">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Kiểm tra camera nhà bạn thuộc loại nào, có hồng ngoại hay không. Nếu có thì do nguồn cấp không đủ camera hoạt động, bạn đêm camera tiêu tốn điện hơn ban ngày do bóng hồng ngoại bật.
                    </li>
                </ul>

            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                16. Tôi đã tải video về máy tính nhưng không biết video camera nằm ở đâu ?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse15">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Thông thường thì video tải về nằm ở ổ C (Ổ đĩa chứa hệ điều hành). Bạn tìm ở mục Videos trong Downloads hoặc trong thư mục phần mềm xem camera.</li>
                </ul>

            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                17. Đầu ghi camera bị treo thì phải làm sao?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse16">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Bạn nên rút điện ra sau đó khởi động lại. Nếu bị treo thường xuyên bạn nên reset đầu ghi về mặc định và chạy lại phần mềm. Hãy để chế độ bảo trì khởi động để tránh tình trạng này.</li>
                </ul>

            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                18. Lắp camera ghi hình bí mật có vi phạm pháp luật không?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse17">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Có. Điều 38, Bộ luật Dân sự đã quy định “Bất cứ hành động nào xâm phạm đều là phạm tội. Quay lén người khác khi chưa được họ đồng ý có thể bị kiện và phải bồi thường. Trừ trường hợp cơ quan nhà nước ra quyết định điều tra”.</li>
                    <li class="guide-faq">Nếu như bạn bị quay lén có thể dưa vào điều 25 của Bộ Luật để bảo vệ mình và dùng điều 121 để kiện người tiến hành quay lén.</li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                19. Đầu ghi có chế độ báo động không?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse18">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Có. Dường như các loại đầu ghi hình đều báo động qua email. Bạn cần thiết lập smtp mail cho đầu ghi để dùng được tính năng này.</li>
                </ul>
            </div>
        </div>
        <a class="text-decoration-none content-faq row" href="#" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse">

            <p class="py-3 mb-0 border-top border-dark col-10 content-faq change-content-faq font-weight-bold">
                20. Tôi có thể cắm nhiều loại camera vào 1 đầu ghi không ?</p>
            <p class="col-2 py-3 mb-0 m-auto border-top border-dark font-weight-bold content-faq change-content-faq text-center"><i class="fas fa-chevron-down"></i></p>

        </a>
        <div class="collapse" id="collapse19">
            <div class="card card-body border-top border-dark-0 p-1">
                <ul class="m-0">
                    <li class="guide-faq">Điều này tùy thuộc vào số loại camera mà đầu ghi đó hỗ trợ. Bạn có thể hỏi người bán hoặc đọc thông số kỹ thuật để biết được đầu ghi bạn muốn mua có thể cắm những loại camera gì.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".change-content-faq").click(function() {
            $(this).css("color", "#e27f42");
        });
    });
</script>