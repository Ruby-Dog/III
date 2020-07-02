<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>新增商品</title>
</head>

<body>
<form action="addProduct_rec.php" method="POST" enctype="multipart/form-data">
<fieldset>
<h3>新增商品表單</h3>
<input type="text" name="pname" placeholder="請輸入商品名稱"><br>
<input type="number" name="price" placeholder="請輸入商品價格"><br>
<input type="file" name="pimage" placeholder="請選擇商品照片"><br>
<hr>
<input type="submit" value="送出資料">
<input type="reset" value="重置表單">
</fieldset>
</form>
</body>

</html>