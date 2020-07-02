<?php
require "mydb.php"
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>商品陳列示範 - PHP Demo</title>
    <style>
    </style>
    <link href="myec1.css" type="text/css" rel="stylesheet">
</head>

<body>
<!-- 導航列-->
<ul class="navul1">
    <li class="navli1"><a href="#" class="a1">6H光速配</a></li>
    <li class="navli1"><a href="#" class="a1">電腦</a></li>
    <li class="navli1"><a href="#" class="a1">智慧型手機</a></li>
    <li class="navli1_active"><a href="#" class="a1">美食</a></li>
    <li class="navli2"><a href="#" class="a1">加入會員</a></li>
    <li class="navli2"><a href="procart.php" class="a1">購物車</a></li>
</ul>
<!-- end 導航列-->

<!-- 商品陳列單元 -->
<!--
<div class="divpro1">
    <ul class="ulpro1">
        <li><img src="images/icecream1.jpeg" class="imgpro1"></li>
        <li>超好吃冰淇淋</li>
        <li class="pricepro1">NT$100</li>
    </ul>
</div>
-->
<!-- end 商品陳列單元 -->
<?php
try {
    $conn = openConnection();
    $tsql = "select [id],[pname],[price],[pimage] from [products]";
    $params = array("");
    $stmt = sqlsrv_query($conn, $tsql, $params);
    if ($stmt == FALSE) {
        echo "<br>資料查詢失敗<br>";
        die(var_dump(sqlsrv_errors()));
    }
    $proCount = 0;
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<div class='divpro1'>";
        echo "<ul class='ulpro1'>";
        echo "<li><img src='images/".$row["pimage"]."' class='imgpro1'></li>";
        echo "<li>".$row["pname"]."</li>";
        echo "<li class='pricepro1'>NT$".$row["price"]."</li>";
        //購買
        echo "<li>";
        echo "<form action='procart_rec.php' method='POST'>";
        echo "<input type='hidden' name='addcart' value='1'>";
        echo "<input type='hidden' name='id' value='".$row["id"]."'>";
        echo "<input type='hidden' name='pname' value='".$row["pname"]."'>";
        echo "<input type='hidden' name='price' value='".$row["price"]."'>";
        echo "<input type='submit' value='購買'>";
        echo "</form>";
        echo "</li>";
        //end 購買
        echo "</ul>";
        echo "</div>";
        $proCount += 1;
    }
    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn);
}
catch(Exception $e) {
    echo "發生錯誤:".$e;
}
?>
</body>

</html>