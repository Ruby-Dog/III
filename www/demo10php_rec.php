<?php
require 'mydb.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>接收會員表單資料</title>
</head>

<body>
<?php
$flagError = 0;
$myUsername = $myPassword = $myEmail = $myPhone = $myAddress = $myBirth = "";
$myPoints = 0;

if (empty($_POST["username"])) {
    $flagError = 1;
    echo "<br>帳號姓名欄位必填 !!<br>";
} else {
    $myUsername = $_POST["username"];
}

if (empty($_POST["password"])) {
    $flagError = 1;
    echo "<br>密碼欄位必填 !!<br>";
} else {
    $myPassword = $_POST["password"];
}

if (empty($_POST["email"])) {
    $flagError = 1;
    echo "<br>email欄位必填 !!<br>";
} else {
    $myEmail = $_POST["email"];
}

if (empty($_POST["phone"])) {
    $flagError = 1;
    echo "<br>電話欄位必填 !!<br>";
} else {
    $myPhone = $_POST["phone"];
}

if (empty($_POST["address"])) {
    $flagError = 1;
    echo "<br>地址欄位必填 !!<br>";
} else {
    $myAddress = $_POST["address"];
}

if (empty($_POST["birthday"])) {
    $flagError = 1;
    echo "<br>生日欄位必填 !!<br>";
} else {
    $myBirth = $_POST["birthday"];
}

if (empty($_POST["points"])) {
    $flagError = 1;
    echo "<br>點數欄位必填 !!<br>";
} else {
    $myPoints = $_POST["points"];
}

$memberData = array("姓名"=>$myUsername,"密碼"=>$myPassword,"電話"=>$myPhone,"email"=>$myEmail,"地址"=>$myAddress,"生日"=>$myBirth,"點數"=>$myPoints);

if ($flagError == 1) {
    echo "<br>表單輸入資料有誤<br>";
    echo "<a href='javascript:history.back()'>回上一頁</a><br>";
} else {
    addMember($memberData);
}

function addMember($myMemberData) {
    try {
        $conn = openConnection();
        $tsql = "insert into [member] values (?,?,?,?,?,?,?)";
        $params = array($myMemberData["姓名"],$myMemberData["電話"],$myMemberData["email"],$myMemberData["地址"],$myMemberData["生日"],$myMemberData["點數"],$myMemberData["密碼"]);
        $stmt = sqlsrv_query($conn,$tsql,$params);
        if ($stmt == FALSE) {
            echo "<br>資料新增失敗<br>";
            die(var_dump(sqlsrv_errors()));
        } else {
            echo "<br>資料新增成功<br>";
        }
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }
    catch(Exception $e) {
        echo "錯誤:".$e;
    }
}
?>
</body>

</html>