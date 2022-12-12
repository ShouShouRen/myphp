<?php require '../header.php' ?>
<?php
session_start();
$name = $address = $login = $password = '';
if(isset($_SESSION['customer'])){
    $name = $_SESSION['customer'];
    $address = $_SESSION['customer']['address'];
    $login = $_SESSION['customer']['login'];
    $password = $_REQUEST['customer']['password'];
}
echo '<from action = "regest-output.php">'
?>
<?php require '../footer.php' ?>