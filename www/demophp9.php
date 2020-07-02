<?php
header("Content-Type: text/html; charset=utf-8");
require 'mydb.php';
//include 'mydb.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>會員資料查詢列表</title>
</head>

<body>

<?php

function showTableData($myParams, $searchType) {
    try {
        $conn = openConnection();
        $tsql = "";
        switch ($searchType) {
            case 1://姓名;
                $tsql = "select * from [member] where [姓名] like '%'+?+'%'";
            break;
            case 2://email;
                $tsql = "select * from [member] where [email] like '%'+?+'%'";
            break;
            default:
                $tsql = "select * from [member]";
            break;
        }
        $params = $myParams;
        $stmt = sqlsrv_query($conn, $tsql, $params);
        if ($stmt == false) {
            die(var_dump(sqlsrv_errors()));
        }
        $resultCount = 0;
        while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {

            $bgColor = "#FFFFCC";
            if ($resultCount % 2 == 0) {
                $bgColor = "#FFFFCC";
            } else {
                $bgColor = "#DDFFDD";
            }

            echo "<tr>";
            echo "<td bgcolor='".$bgColor."'>".$row["id"]."</td>";
            echo "<td bgcolor='".$bgColor."' align='center'>".$row["姓名"]."</td>";
            echo "<td bgcolor='".$bgColor."'>".$row["電話"]."</td>";
            echo "<td bgcolor='".$bgColor."' align='right'>".$row["email"]."</td>";
            echo "<td bgcolor='".$bgColor."'>".$row["地址"]."</td>";
            $strDate = date_format($row["生日"], "Y-m-d"); //時間格式關鍵字: Y,m,d,H,i,s
            echo "<td bgcolor='".$bgColor."'>".$strDate."</td>";
            echo "<td bgcolor='".$bgColor."'>".$row["點數"]."點</td>";
            echo "<td bgcolor='".$bgColor."'>".$row["密碼"]."</td>";
            echo "</tr>";

            $resultCount += 1;
        }
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }
    catch(Exception $e) {
        echo "發生錯誤:".$e;
    }
}

?>

<table width="90%" border="0" align="center" cellpadding="8" cellspacing="5">
    <caption>會員資料列表</caption>
    <tr>
        <th bgcolor="#CCFFFF" width="60">ID</th>
        <th bgcolor="#CCFFFF" width="80">姓名</th>
        <th bgcolor="#CCFFFF" width="110">電話</th>
        <th bgcolor="#CCFFFF" width="110">Email</th>
        <th bgcolor="#CCFFFF" width="150">地址</th>
        <th bgcolor="#CCFFFF" width="100">生日</th>
        <th bgcolor="#CCFFFF" width="80">點數</th>
        <th bgcolor="#CCFFFF" width="80">密碼</th>
    </tr>
    
<?php
    $strSearch = "";
    $searchType = 0;

    if (empty($_GET["searchname"]) == true) {

    } else {
        $strSearch = $_GET["searchname"];
        $searchType = 1;
    }

    if (empty($_GET["searchemail"]) == true) {

    } else {
        $strSearch = $_GET["searchemail"];
        $searchType = 2;
    }

    $myParams = array($strSearch);
    showTableData($myParams, $searchType);

?>
</table>

</body>

</html>