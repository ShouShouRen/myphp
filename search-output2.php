<?php require './header.php' ?>
<table>
    <tr>
        <th>商品編號</th>
        <th>商品名稱</th>
        <th>商品價格</th>
    </tr>
    <?php
    // prepare將SQL語句處理成一個特殊的對象，這個對象可以包含預處理語句，並且可以被多次執行（預處理）
    $sql = $pdo->prepare('SELECT * FROM PRODUCT WHERE NAME LIKE ?');
    // execute執行預處理語句可傳入參數（執行）
    $sql->execute(['%'.$_REQUEST['keyword'].'%']);
    foreach ($sql->fetchAll() as $row) {
        echo '<tr>';
        echo '<td>', $row['id'], '</td>';
        echo '<td>', $row['name'], '</td>';
        echo '<td>', $row['price'], '</td>';
        echo '</tr>';
        echo "\n";
    }
    ?>
</table>
<?php require './footer.php' ?>