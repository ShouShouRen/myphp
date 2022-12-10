<?php require './header.php'; ?>
<?php
if (isset($_REQUEST['user'])) {
    echo $_REQUEST['user'], ' 早安';
}
?>
<?php require './footer.php'; ?>