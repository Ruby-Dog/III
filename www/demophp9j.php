<?php
//header("Content-Type: application/json; charset=utf-8");
require 'mydb.php';
//include 'mydb.php';

function showTableData($myParams, $searchType) {
    try {

        $arrayRows = array();

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

            $myRow = array();
            $myRow['id'] = $row['id'];
            $myRow['姓名'] = $row['姓名'];
            $myRow['電話'] = $row['電話'];
            $myRow['email'] = $row['email'];
            $myRow['地址'] = $row['地址'];
            $strDate = date_format($row['生日'], "Y-m-d"); //時間格式關鍵字: Y,m,d,H,i,s
            $myRow['生日'] = $strDate;
            $myRow['點數'] = $row['點數'];
            $myRow['密碼'] = $row['密碼'];
            //var_dump($myRow);
            array_push($arrayRows, $myRow);

            $resultCount += 1;
        }

        echo json_encode($arrayRows, JSON_UNESCAPED_UNICODE);

        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }
    catch(Exception $e) {
        echo "發生錯誤:".$e;
    }
}

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
