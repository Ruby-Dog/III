<?php
    session_start();
    require "mydb.php";

    $flagError = 0;
    $myUsername = $myPassword = "";
    $myUserErr = $myPassErr = $myLogMsg = "";
    
    if (empty($_POST["logout"])) {
    } else {
        if ($_POST["logout"] == 1) {
            session_unset();
            session_destroy();
            echo "<br>帳號已登出<br>";
            exit();
        }
    }

    if (empty($_POST["username"])) {
        $flagError = 1;
        $myUserErr = "帳號姓名欄位必填 !!";
    } else {
        $myUsername = $_POST["username"];
    }
    
    if (empty($_POST["password"])) {
        $flagError = 1;
        $myPassErr = "密碼欄位必填 !!";
    } else {
        $myPassword = $_POST["password"];
    }

    $memberData = array("username"=>$myUsername, "password"=>$myPassword);

    if ($flagError == 0) {

        $myResultCount = selectData($memberData);

        if ($myResultCount >= 1) {
            //session 寫入
            $session_key1 = "member_username";
            $_SESSION[$session_key1] = $memberData["username"];
            $myLogMsg = $memberData["username"]."登入成功";
        } else {
            $myLogMsg = $memberData["username"]."登入失敗";
        }
    } 

    function selectData($myMemberData) {
        try {
            $conn = openConnection();
            $tsql = "select * from [member] where [姓名] = ? and [密碼] = ?";
            $params = array($myMemberData["username"], $myMemberData["password"]);
            $stmt = sqlsrv_query($conn, $tsql, $params);
            if ($stmt == FALSE) {
                die(var_dump(sqlsrv_errors()));
            }
            $resultCount = 0;
            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                $resultCount += 1;
            }
            sqlsrv_free_stmt($stmt);
            sqlsrv_close($conn);
            return $resultCount;
        }
        catch(Exception $e) {
            echo "發生錯誤".$e;
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>登入結果 - session -</title>
</head>

<body>
<?php
    if ($flagError == 1) {
        echo "<br>".$myUserErr."<br>";
        echo "<br>".$myPassErr."<br>";
    } else {
        echo "<br>".$myLogMsg."<br>";
    }
?>
</body>

</html>