<?php require './header.php' ?>
<?php
$sql = $pdo->prepare('INSERT INTO PRODUCT VALUES(NULL,?,?)');
if (empty($_REQUEST['name'])) {
    echo '請輸入商品名稱';
} else if (!preg_match('/[0-9]+/', $_REQUEST['price'])) {
    echo '請輸入整數';
} else if ($sql->execute([htmlspecialchars($_REQUEST['name']), $_REQUEST['price']])) {
    echo '新增成功';
} else {
    echo '新增失敗';
}
?>
<?php require './footer.php' ?>