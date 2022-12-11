<?php require './header.php' ?>
<?php
$sql = $pdo->prepare('UPDATE PRODUCT SET NAME=?, price= ? WHERE id = ?');
if (empty($_REQUEST['name'])) {
    echo '請輸入商品名稱';
} else if (!preg_match('/[0-9]+/', $_REQUEST['price'])) {
    echo '請輸入商品整數價格';
} else if ($sql->execute([htmlspecialchars($_REQUEST['name']), $_REQUEST['price'], $_REQUEST['id']])) {
    echo '修改成功';
} else {
    echo '修改失敗';
}
?>
<?php require './footer.php' ?>