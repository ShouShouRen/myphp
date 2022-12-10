<?php require './header.php'; ?>
<p>請選擇有興趣商品</p>
<form action="checks-output.php" method="post">
<?php
$genre = [
    '攝錄影機',
    '個人電腦',
    '鐘錶',
    '家電',
    '書籍',
    '文具用品',
    '食品'
];
foreach($genre as $item){
    echo '<p>';
    echo '<input type="checkbox" name="genre[]" value="', $item, '">';
    echo $item;
    echo '</p>';
}
?>
<input type="submit" value="確認">
</form>
<?php require './footer.php'; ?>