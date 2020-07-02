<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Demo PHP 8 SQL server 連線測試</title>
</head>

<body>
<?php

function openConnection() {
    try {
        $serverName = "localhost";
        $connectionOptions = array("Database"=>"persons","uid"=>"mydbuser","PWD"=>"mydb2314","CharacterSet"=>"UTF-8");
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if ($conn == false) {
            echo "<br>資料庫連線失敗<br>";
            die(var_dump(sqlsrv_errors()));
        } else {
            echo "<br>資料庫連線成功<br>";
            return $conn;
        }
    }
    catch(Exception $e) {
        echo "產生錯誤".$e;
    }
}

//openConnection();

function selectData() {
    try {
        $conn = openConnection();
        $tsql = "select * from [member] where [姓名] like '%' + ? + '%' or [email] like '%' + ? + '%'";
        $params = array("大", "ppp");
        $stmt = sqlsrv_query($conn, $tsql, $params);
        if ($stmt == false) {
            echo "<br>資料庫查詢失敗<br>";
            die(var_dump(sqlsrv_errors()));
        } else {
            echo "<br>資料庫查詢成功<br>";
        }

        $resultCount = 0;
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo $row["姓名"].", ".$row["email"].", ".$row["電話"]."<br>";
            $resultCount += 1;
        }
        echo "資料筆數:".$resultCount;
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }
    catch(Exception $e) {
        echo "產生錯誤".$e;
    }
}

function insertData() {
    try {
        $conn = openConnection();
        $tsql = "insert into [member] values (?,?,?,?,?,?,?)";
        $params = array('John Wang', '07-333-5555', 'rrr@jjj.com','台中市','1971-3-21',1200,'3344');
        $stmt = sqlsrv_query($conn, $tsql, $params);
        if ($stmt == false) {
            echo "<br>資料新增失敗<br>";
            die(var_dump(sqlsrv_errors()));
        } else {
            echo "<br>資料新增成功<br>";
        }
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }
    catch(Exception $e) {
        echo "產生錯誤".$e;
    }
}

function deleteData() {
    try {
        $conn = openConnection();
        $tsql = "delete from [member] where [姓名] = ?";
        $params = array('John Wang');
        $stmt = sqlsrv_query($conn, $tsql, $params);
        if ($stmt == false) {
            echo "<br>資料刪除失敗<br>";
            die(var_dump(sqlsrv_errors()));
        } else {
            echo "<br>資料刪除成功<br>";
        }
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }
    catch(Exception $e) {
        echo "產生錯誤".$e;
    }
}

function updateData() {

    try {
        $conn = openConnection();
        $tsql = "update [member] set [姓名]=?,[電話]=?,[email]=?,[地址]=?,[生日]=?,[點數]=?,[密碼]=? where [id]=?";
        $params = array('張大書','05-2222-9999','big@fff.com.tw','台中市北屯區建國路','1965-09-08',3200,'5612',3);
        $stmt = sqlsrv_query($conn, $tsql, $params);
        if ($stmt == false) {
            echo "<br>資料更新失敗<br>";
            die(var_dump(sqlsrv_errors()));
        } else {
            echo "<br>資料更新成功<br>";
        }
        sqlsrv_free_stmt($stmt);
        sqlsrv_close($conn);
    }
    catch(Exception $e) {
        echo "產生錯誤".$e;
    }
}

selectData();
insertData();
deleteData();
updateData();

?>
</body>

</html>