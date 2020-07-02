<?php
header("Content-Type:text/html; charset=utf-8");
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Demo PHP 6</title>
</head>

<body>

<?php
    //-- 字串 --//
    echo "<br>-- 字串處理 --<br>";
    echo "This is the \"PHP\" \$World.";
    echo "<br>";
    echo 'The "number one" web server.';
    echo "<br>";
    $websvr = "Wamp64";
    echo "We install the $websvr server.";
    echo "<br>";
    echo "pas\$word";
    echo "<br>";
    echo 'pas$word'; //單引號不處理$特殊符號;
    echo "<br>";
    $strInput = "   高雄市前金區中正四路888號    ";
    $str1 = trim($strInput);
    echo $strInput;
    echo "<br>";
    $len = strlen($str1);
    echo "strlen字元數:".$len;
    echo "<br>";
    $chlen = mb_strlen($str1);
    echo "mb_strlen字元數:".$chlen;
    echo "<br>";
    $findex = mb_strpos($str1, "前", 0);
    echo "index position:".$findex;
    echo "<br>";
    echo mb_substr($str1, 2, 1);
    echo "<br>"; 
    echo mb_substr($str1, 6, 3);
    echo "<br>";
    $index1 = mb_strpos($str1, "路", 0);
    $index2 = mb_strpos($str1, "號", 0);
    $getLen = $index2 - $index1;
    $strNo = mb_substr($str1, $index1 + 1, $getLen);
    echo "門牌號碼:".$strNo;
    echo "<br>";
    $tel = "0912345678";
    echo substr_replace($tel, "+886", 0, 1);
    echo "<br>";

    $email = "john@goodstore.com.tw";
    $name = mb_strstr($email, "@", true);
    $domain = mb_strstr($email, "@", false);
    echo "user:$name <br> domain:$domain";

    $strOne = "I will be Back 我會回來";
    $arrayStrOne = explode(" ", $strOne);
    var_dump($arrayStrOne);

    $strTwo = "John|Mary|David|Joy|Eric";
    $arrayStrTwo =explode("|", $strTwo);
    var_dump($arrayStrTwo);

?>

</body>

</html>