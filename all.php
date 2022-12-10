<?php require './header.php' ?>
<?php
foreach ($pdo->query('SELECT * FROM product') as $row) {
    echo '<p>';
    echo $row['id'], ':';
    echo $row['name'], ':';
    echo $row['price'];
    echo '</p>';
}
foreach($pdo->query('SELECT * FROM PRODUCT') as $row){
    echo "<p>$row[id]:$row[name]:$row[price]</p>";
}
?>
<?php require './footer.php' ?>