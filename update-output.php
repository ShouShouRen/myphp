<?php require './header.php' ?>
<?php
$sql = $pdo->prepare('UPDATE PRODUCT SET NAME=?, PRICE=? WHERE ID=?');

?>
<?php require './footer.php' ?>