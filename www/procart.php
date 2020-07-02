<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>購物車</title>
</head>

<body>
<?php
$i = 0;
$Max_Items = 10;

    echo "<h3>購物車</h3>";
    echo "<ul>";
    while ($i < $Max_Items) {
        $i += 1;
        $cookie_key1 = "proid".$i;
        $cookie_key2 = "prodesc".$i;
        if (isset($_COOKIE[$cookie_key1])) {
            echo "<li>".$_COOKIE[$cookie_key2]."</li>";
        }   
    }
    echo "</ul>";

    echo "<br><a href='demophp13.php'>繼續購物</a><br>";
?>

<form action="procart_rec.php" method="POST">
    <input type="hidden" name="emptycart" value="1">
    <input type="submit" value="清空購物車">
</form>
</body>

</html>