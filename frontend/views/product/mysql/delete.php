<?php
include 'connect.php';
if(isset($_GET['id'])){
    $sql = "DELETE FORM product WHERE id=".$_GET['id'];
    $result = $conn ->query($sql);
    if($result){
        header("Location:database.php");
    }
}

?>