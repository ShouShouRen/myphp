<?php require '../header.php'; ?>
<?php require './menu.php'; ?>
<?php
session_start();
unset($_SESSION['customer']);
$sql = $pdo->prepare('SELECT * FROM CUSTOMER WHERE LOGIN = ? AND PASSWORD = ?');
$sql->execute([$_REQUEST['login'], $_REQUEST['password']]);
foreach ($sql->fetchAll() as $row) {
    $_SESSION['customer'] = [
        'id' => $row['id'], 'name' => $row['name'],
        'address' => $row['address'], 'login' => $row['login'],
        'password' => $row['password']
    ];
}
if (isset($_SESSION['customer'])) {
    echo '親愛的', $_SESSION['customer']['name'], '、歡迎光臨。';
} else {
    echo '登入ID或密碼有誤。';
}
?>
<?php require '../footer.php'; ?>