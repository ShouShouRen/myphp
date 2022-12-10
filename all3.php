<?php require './header.php'?>
<?php 
foreach($pdo->query('SELECT * FROM PRODUCT') as $row){
    echo "<p>$row[id]:$row[name]:$row[price]</p>";
}?>
<?php require './footer.php'?>