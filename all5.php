<?php require './header.php' ?>
<table>
<tr>
    <th>商品編號</th>
    <th>商品名稱</th>
    <th>商品價格</th>
</tr>
<?php
function h($string){
    return htmlspecialchars($string);
}
foreach ($pdo->query('SELECT * FROM product') as $row) {
    echo '<tr>';
    echo '<td>',h($row['id']),'</td>';
    echo '<td>',h($row['name']),'</td>';
    echo '<td>',h($row['price']),'</td>';
    echo '</tr>';
    echo "\n";
}
?>
</table>
<?php require './footer.php' ?>