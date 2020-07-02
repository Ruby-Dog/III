<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Demo PHP 4</title>
</head>

<body>

<?php
//-- Constants 常數 --//
define ("PI", 3.141592);
echo PI;
echo "<br>";
define ("BRAND_ARRAY", ["Apple", "Microsoft","Google","Samsung"]); 
echo BRAND_ARRAY[2];
echo "<br>";

// -- Array 陣列 --//
echo "<br>-- Array -- <br>";
$corp = array("Microsoft", "Apple", "Google", "Adobe", "Oracle");
echo $corp[2];
echo "<br>";
$corp[4] = "Amazon";
echo $corp[4];
echo "<br>";
echo "陣列長度:".count($corp);
echo "<br>";

foreach ($corp as $corpName) {
    echo $corpName."<br>";
}

var_dump($corp);

$corp[5] = "Asus";
$corp[6] = "Samsung";
$corp[8] = "LG";
$corp[10] = "Sony";

//var_dump($corp[9]); //空心;
var_dump($corp);

array_push($corp, "HTC", "Toshiba", "Panasonic");
var_dump($corp);

unset($corp[2]);
var_dump($corp);

$corp = array_values($corp); //重新建立array 索引index;
echo "corp";
var_dump($corp);

$corp2 = array_slice($corp, 2);
echo "corp2";
var_dump($corp2);

$corp3 = array_slice($corp, -4);
echo "corp3";
var_dump($corp3);

$corp4 = array_slice($corp, 2, 3);
echo "corp4";
var_dump($corp4);

$corp5 = array_slice($corp, -4, 2);
echo "corp5";
var_dump($corp5);

$corp6 = array_slice($corp, 3, 3, false);
echo "corp6";
var_dump($corp6);

$corp7 = array_slice($corp, 3, 3, true);
echo "corp7";
var_dump($corp7);

$corp8 = array_slice($corp, 0, count($corp) - 2);
echo "corp8 移除最後兩個元素";
var_dump($corp8);

$insertArray = array("BMW", "Benz", "Brown");
$corp9 = array_splice($corp, 3, 3, $insertArray);
echo "corp";
var_dump($corp);
echo "corp9";
var_dump($corp9);

$corp10 = array_splice($corp, count($corp), 0, $insertArray);
echo "corp";
var_dump($corp);
echo "corp10";
var_dump($corp10);

$corp11 = array_reverse($corp);
echo "array reverse";
var_dump($corp11);

sort($corp);
var_dump($corp);

rsort($corp);
var_dump($corp);

array_pop($corp); //剪最後一個
var_dump($corp);

$sindex = array_search("Microsoft", $corp);
echo "Microsoft index: ".$sindex;
echo "<br><br>";

//-- Dictionary --//
echo "<br>-- Dictionary key-value --<br>";
$mpoints = array("John"=>200, "David"=>500, "Mary"=>640, "Joy"=>2000, "Eric"=>2800);
echo "Mary:".$mpoints["Mary"];
echo "<br>";
var_dump($mpoints);

foreach ($mpoints as $key => $value) {
    echo "key:".$key.",value:".$value;
    echo "<br>";
}

$mpoints["David"] += 200;
var_dump($mpoints);

ksort($mpoints);
var_dump($mpoints);

krsort($mpoints);
var_dump($mpoints);

asort($mpoints);
var_dump($mpoints);

arsort($mpoints);
var_dump($mpoints);

echo array_search(640, $mpoints);
echo "<br>";

$a1 = array("red", "green","blue");
$a2 = array("black", "white");
$a3 = array_replace($a1, $a2);
var_dump($a3);

$a1 = array("red", "green","blue");
$a2 = array("black", "white", "deepgreen");
$a3 = array("pink","brown");
$a4 = array_replace($a1, $a2, $a3);
var_dump($a4);

$a1 = array("a"=>"red", "green", "blue");
$a2 = array("a"=>"pink", "b"=>"brown");
$a3 = array_replace($a1, $a2);
var_dump($a3);

$a1 = array("red", "green","blue");
$a2 = array(0=>"purple", 3=>"deepred");
$a3 = array_replace($a1, $a2);
var_dump($a3);

?>


</body>

</html>