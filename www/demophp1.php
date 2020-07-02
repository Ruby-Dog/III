<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo "Demo PHP One"; ?></title>
</head>

<body>

<?php
    print "<h1>Welecome to PHP !!</h1>";
    echo "<h2>The First PHP Application</h2>";
    echo "<br>";
    echo "one","two","three","four";
    echo "<br>";
    echo "John"."Mary"."Joy"."David";
    echo "<br>";
    /* 多行註解 */
    //單行註解

    //--- 變數 ---//
    $strWord1 = "第一個變數";
    $strWord2 = '歡迎使用';
    $a = 100;
    $b = 60.28;
    $ifRight = true;
    $objOne = null;

    echo "$strWord2 PHP $strWord1 <br>";
    echo "輸出1:".$a." 輸出2:".$b." 輸出3:".$ifRight;
    echo "<br>";
    echo "$a" + "$b"; //要注意!!
    echo "<br>";

    //--- 數值 ---//
    echo "<br>----數值探討----<br>";
    echo $a."是否為整數值:".is_int($a);
    echo "<br>";
    echo $b."是否為浮點數:".is_float($b);
    echo "<br>";

    $m = "258";
    $n = 300;
    echo $m."是否為整數值:".is_int($m);
    echo "<br>";
    $k = $m + $n;
    echo $k;
    echo "<br>";
    $p = "10";
    $q = 101;
    $r = $p / $q;
    echo $r;
    echo "<br>";

    $a1 = 1234.5678;
    $a1_int = (int)$a1;
    echo $a1_int;
    echo "<br>";

    $a2 = "1234.5678";
    $a2_int = (int)$a2;
    echo $a2_int;
    echo "<br>";

    $a3 = "abcd";
    $a3_int = (int)$a3;
    echo $a3_int;
    echo "<br>";

    //-- 變數的範圍 --//
    echo "<br>-- 變數範圍探討 --<br>";

    $globalX = 5; //global;

    function testOne() {
        global $globalX;
        echo "globalx:".$globalX;
        echo "<br>";
        echo "keyword globals:".$GLOBALS["globalX"];
        echo "<br>";
    }

    testOne();

    function testTwo() {
        $localX = 20;
        echo "local:".$localX;
        echo "<br>";
    }

    testTwo();

    function testThree() {
        static $staticX = 30;
        $staticX += 1;
        echo "staticx:".$staticX."<br>";
    }

    testThree();
    testThree();
    testThree();
    testThree();

    echo "特殊符號:'\"\n\t\$\\<br>";

    var_dump($a);
    var_dump($b);
    var_dump($strWord1);
    var_dump($objOne);
    var_dump($ifRight);
    var_dump($globalX);

?>

</body>

</html>