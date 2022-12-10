<?php require './header.php'; ?>
<?php
echo '您的英文姓名是『', mb_convert_kana($_REQUEST['name'], 'R'), '』。';
?>
<?php require './footer.php'; ?>
