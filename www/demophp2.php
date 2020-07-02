<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>DEMO PHP 2</title>
</head>

<body>

<?php
//--- 運算子 ---//
$a = 10;
$b = 15;
$c = 3;
$d = 5.67;
$e = 80.32;
echo "<br>-- 運算子 --<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $b ** $c; //n次方;
echo "<br>";
$f = $a;
echo $f;
echo "<br>";
$a += $b; //-=, *=, /=
echo $a;
echo "<br>";
$a++; // --
echo "<br>";
echo $a;
echo "<br>-- 比較運算 --<br>";
$m = 320;
$n = "320";
var_dump($m == $n);
var_dump($m === $n);
var_dump($m != $n);
var_dump($m !== $n);
var_dump($m <> $n);
var_dump($m > $n);
var_dump($m <= $n);
var_dump($m <=> $n); //1,0,-1; spaceship
var_dump($m > 200 && $n <= 100); //and
var_dump($m >= $n || $n < 200); //or
var_dump(!($m > 100));
var_dump($n .= $m);




?>

</body>

</html>