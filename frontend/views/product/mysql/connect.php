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