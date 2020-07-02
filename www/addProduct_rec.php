<?php
require "mydb.php"
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>新增商品結果頁面</title>
</head>

<body>
<?php
$product_name = "";
$product_price = 0;
$save_dir = "images/";
$upload_filename = "";
$save_filepath = "";
$flagOK = 1;
$logMsg = "";

if (empty($_POST["pname"])) {
    $flagOK = 0;
    $logMsg = "請輸入商品名稱";
} else {
    $product_name = $_POST["pname"];
}

if (empty($_POST["price"])) {
    $flagOK = 0;
    $logMsg = "請輸入商品價格";
} else {
    $product_price = $_POST["price"];
}
//原檔名
//$upload_filename = basename($_FILES["pimage"]["name"]);
//時間亂數檔名
$file_pathinfo = pathinfo($_FILES["pimage"]["name"]);
$rand_name = rand(1000, 9999); //亂數產生4位數字
$upload_filename = time().$rand_name.".".$file_pathinfo["extension"];

//多檔上傳;
//$count = count($_FILES["pimage"]["name"]); //檔案數;
//$_FILES["pimage"]["name"][0];
//$_FILES["pimage"]["name"][$count-1];
$save_filepath = $save_dir.$upload_filename;

if ($_FILES["pimage"]["size"] > 1000000) {
    $logMsg .= "圖檔大小不能超過 1Mbytes<br>";
    $flagOK = 0;
}

if (file_exists($save_filepath)) {
    $logMsg .= "檔案已存在<br>";
    $flagOK = 0;
}

$imageType = strtolower(pathinfo($save_filepath, PATHINFO_EXTENSION));
if ($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg" && $imageType != "gif") {
    $logMsg .= "僅接受jpg, jpeg, png, gif檔案<br>";
    $flagOK = 0;
}

if ($flagOK == 0) {
    echo "<br>".$logMsg."<br>";
} else {
    if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $save_filepath)) {
        try {
            $conn = openConnection();
            $tsql = "insert into [products]([pname],[price],[pimage]) values(?,?,?)";
            $params = array($product_name,$product_price,$upload_filename);
            $stmt = sqlsrv_query($conn, $tsql, $params);
            if ($stmt == TRUE) {
                echo "<br>商品新增成功<br>";
                echo "<br><a href='addProduct.php'>繼續新增其他商品</a><br>";
            } else {
                echo "<br>商品新增失敗<br>";
                die(var_dump(sqlsrv_errors()));
            }
            sqlsrv_free_stmt($stmt);
            sqlsrv_close($conn);
        }
        catch (Exception $e) {
            echo "錯誤:".$e;
        }
    } else {
        echo "<br>上傳失敗<br>";
    }
}
?>
</body>

</html>