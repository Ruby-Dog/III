<?php
    $cookie_key1 = "member_username";
    $isLogin = FALSE;
    
    if (isset($_COOKIE[$cookie_key1])) {
        $isLogin = TRUE;
        echo "<br>有Cookie, 已登入會員.<br>";
        echo "<br>Cookie key:".$cookie_key1."<br>";
        echo "<br>Cookie value:".$_COOKIE[$cookie_key1]."<br>";
    } else {
        $isLogin = FALSE;
        echo "<br>無Cookie, 未登入<br>";
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>會員登入 - cookie -</title>
</head>

<body>
<?php if ($isLogin == FALSE) { ?>
    
<fieldset>
<form action="demo12php_c_rec.php" method="POST">
    <label>帳號:</label>
    <input type="text" name="username" placeholder="請輸入帳號"><br>
    <label>密碼:</label>
    <input type="password" name="password" placeholder="請輸入密碼"><br>
    <input type="submit" value="登入">
    <input type="reset" value="重設">
</form>
</fieldset>

<?php } else { ?>

<fieldset>
<form action="demo12php_c_rec.php" method="POST">
    <input type="hidden" name="logout" value="1">
    <input type="submit" value="登出">
</form>
</fieldset>

<?php } ?>

</body>

</html>