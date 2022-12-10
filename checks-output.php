<?php require './header.php'; ?>
<?php
    foreach($_REQUEST['genre'] as $item){
    echo '<p>',$item,'</p>';
    }
echo '商品訂閱成功';
?>
<?php require './footer.php'; ?>