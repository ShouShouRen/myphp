<?php require './header.php'?>
<?php 
    $sql = $pdo->prepare('INSERT INTO PRODUCT VALUES(NULL,?,?)');
    if($sql->execute([$_REQUEST['name'],$_REQUEST['price']])){
        echo '新增成功';
    }else{
        echo '新增失敗';
    }
?>
<?php require './footer.php'?>