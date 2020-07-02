<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>demo php 3</title>
</head>

<body>
<?php

echo "-- 條件判斷式 -- <br>";
$x = 30;
$y = 20;
if ($x > $y) {
    echo "x > y";
} else {
    echo "x <= y";
}

echo "<br>";
if ($x == $y) {
    echo "x == y";
} else if ($x > $y) {
    echo "x > y";
} else if ($x < $y) {
    echo "x < y";
} else {
    echo "其他";
}

echo "<br>";

$teaCode = 3;

switch($teaCode) {
    case 1:
        echo "紅茶";
    break;
    case 2:
        echo "綠茶";
    break;    
    case 3:
        echo "奶茶";
    break;
    default:
        echo "無此茶品";
}

echo "<br>";
echo "-- while loop --<br>";
$a = 0;
while ($a < 10) {
    echo $a."<br>";
    $a += 1;
}

echo "<br>";
echo "-- do...while --<br>";
$b = 10;
do {
    echo $b."<br>";
    $b += 1;
} while($b < 8);

echo "<br>";
echo "-- for loop --<br>";
for ($i = 0; $i < 20; $i += 2) {
    echo $i."<br>";
}
?>
</body>

</html>