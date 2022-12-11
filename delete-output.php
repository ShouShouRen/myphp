<?php require './header.php' ?>
<?php
$sql = $pdo->prepare('DELETE FROM PRODUCT WHERE ID=?');
if ($sql->execute([$_REQUEST['id']])) {
    echo '刪除成功';
} else {
    echo '刪除失敗';
}
?>
<?php require './footer.php' ?>