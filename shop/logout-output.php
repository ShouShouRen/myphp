<?php require '../header.php' ?>
<?php require './menu.php' ?>
<?php
session_start();
if (isset($_SESSION['customer'])) {
    unset($_SESSION['customer']);
    echo '登出成功';
} else {
    echo '未登入';
}
?>
<?php require '../footer.php' ?>