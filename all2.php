<?php require './header.php' ?>
<?php
foreach ($pdo->query('SELECT * FROM product') as $row) {
    echo '<p>';
    echo $row['id'], ':';
    echo $row['name'], ':';
    echo $row['price'];
    echo '</p>';
}
?>
<?php require './footer.php' ?>