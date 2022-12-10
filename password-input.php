<?php require './header.php'; ?>
<p>請輸入密碼</p>
<p>(需8個字以上包含大小寫字母至少一個數字)</p>
<form action="password-output.php" method="post">
    <input type="password" name="password">
    <input type="submit" value="確認">
</form>
<?php require './footer.php'; ?>
