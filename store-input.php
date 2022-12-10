<?php require './header.php'; ?>
<p>請選擇分店：</p>
<!-- <form action="store-output.php" method="post">
    <select name="code">
        <option value="100">新宿</option>
        <option value="101">秋葉原</option>
        <option value="102">上野</option>
        <option value="200">橫濱</option>
        <option value="201">川崎</option>
        <option value="300">非洲</option>
        <option value="400">仙台</option>
        <option value="500">名古屋</option>
        <option value="600">金都</option>
        <option value="700">博多</option>
    </select>
    <p> <input type="submit" value="確定"> </p>
</form> -->

<form action="store-output.php" method="post">
    <select name="code">
        <?php
        $store = [
            '新宿' => 100,
            '秋葉原' => 101,
            '上野' => 102,
            '橫濱' => 200,
            '川崎' => 201,
            '非洲' => 300,
            '仙台' => 400,
            '名古屋' => 500,
            '金都' => 600,
            '博多' => 700
        ];
        foreach($store as $key=>$value){
            echo '<option value="', $value, '">', $key, '</option>';
        }
        ?>
    </select>
    <p> <input type="submit" value="確認"> </p>
</form>
<?php require './footer.php'; ?>