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
            //echo "<br>資料庫連線成功<br>";
            return $conn;
        }
    }
    catch(Exception $e) {
        echo "產生錯誤".$e;
    }
}

?>