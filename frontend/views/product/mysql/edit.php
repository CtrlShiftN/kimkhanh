<?php
include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>edit</title>
</head>
<body>
<?php
    if(isset($_GET['id'])){
        $result = $conn ->query("SELECT * FROM product WHERE id='").$_GET['id'] . "'");
        $row = $result->fetch_assoc();
    }
?>
<form>

</form>
</body>
</html>


