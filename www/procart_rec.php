<?php

$logMsg = "";
$Max_Items = 10;

if (empty($_POST['addcart'])) {
} else {
    if ($_POST['addcart'] == 1) {
        $i = 0;
        while ($i < $Max_Items) {
            $i += 1;
            $cookie_key1 = "proid".$i;
            $cookie_key2 = "prodesc".$i;
            if (isset($_COOKIE[$cookie_key1])) {

            } else {
                $cookie_value1 = $_POST["id"];
                $cookie_value2 = $_POST["pname"]." 價格:".$_POST["price"]."元";
                setcookie($cookie_key1,$cookie_value1, time() + 60*60*24, "/");
                setcookie($cookie_key2,$cookie_value2, time() + 60*60*24, "/");
                $logMsg = $_POST["pname"]." 已加入購物車";
                break;
            }
        }
    }
}

if (empty($_POST['emptycart'])) {
} else {
    if ($_POST['emptycart'] == 1) {
        $i = 0;
        while ($i < $Max_Items) {
            $i += 1;
            $cookie_key1 = "proid".$i;
            $cookie_key2 = "prodesc".$i;
            if (isset($_COOKIE[$cookie_key1])) {
                setcookie($cookie_key1,"", time() - 1, "/");
                setcookie($cookie_key2,"", time() - 1, "/");
            }
        }
        $logMsg = "購物車已清空";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>加入購物車</title>
</head>

<body>
<?php
    echo $logMsg."<br>";
    echo "<br><a href='procart.php'>查看購物車</a>";
    echo "<script>";
    echo "window.location.replace('procart.php');";
    echo "</script>";
?>
</body>

</html>