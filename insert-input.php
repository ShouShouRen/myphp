<?php require './header.php'?>
<p>新增資料：</p>
<form action="insert-output.php" method="post">
    商品名稱：<input type="text" name="name">
    價格：<input type="text" name="price">
    <input type="submit" value="確認新增">
</form>
<?php require './footer.php'?>