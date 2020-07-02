<?php 
declare(strict_types=1);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Demp PHP 5</title>
</head>

<body>

<?php
//-- function --//
echo "<br>-- function --<br>";
function welcome_msg() {
    echo "Welcome to PHP World !!";
    echo "<br>";
}
welcome_msg();

function orderMsg($pname, $price) {
    echo "您訂購了".$pname." 價格:".$price."元";
    echo "<br>";
}

orderMsg("蘋果", "50");
orderMsg("橘子", 30);
orderMsg("西瓜", 40.8);

function sum($a, $b, $c) {

    $sum = $a + $b + $c;
    return $sum;
}

echo "總和:".sum(1,2,3)."<br>";

function sum2(int $a, int $b, int $c): int {
    $sum = $a + $b + $c;
    return $sum;
}

echo "總合為:".sum2(5,6,7)."<br>";

?>

</body>

</html>