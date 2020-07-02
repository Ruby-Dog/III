<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>加入會員資料表單</title>
    <style type="text/css">
        .input1 {
            font-family: "微軟正黑體";
            font-size: 20px;
        }
        .fieldset1 {
            font-family: "微軟正黑體";
            font-size: 20px;
            border: 2px solid #99cc99;
            background-color: #ccffcc;
            border-radius: 8px;
        }
        .ul1 {
            list-style-type: none;
        }
        .ul1 li {
            height: 40px;
        }
        .divcenter {
            text-align: center;
        }
        .button1 {
            font-family: "微軟正黑體";
            font-weight: bold;
            font-size: 20px;
            color: #FFFFFF;
            background-color: #116611;
            width: 150px;
            height: 40px;
            border-radius: 8px;
        }
        .button1:hover {
            background-color: #339933;
        }
    </style>
    <script type="application/javascript" src="demo10php.js">
    </script>

</head>

<body>
    <form action="demo10php_rec.php" id="form1" method="POST" enctype="multipart/form-data" onsubmit="return checkFormData()">
        
        <fieldset class="fieldset1">
            <legend>帳號資料</legend>
            <ul class="ul1">
                <li><label>帳號:</label>
                    <input type="text" name="username" placeholder="請輸入帳號" autocomplete="on" required class="input1">
                </li>
                <li><label>密碼:</label>
                    <input type="password" name="password" placeholder="請輸入密碼" autocomplete="off" required class="input1">
                </li>
            </ul>
        </fieldset>

        <fieldset class="fieldset1">
            <legend>基本資料</legend>
            <ul class="ul1">
                <li>
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="請填入Email" class="input1">
                </li>
                <li>
                    <label>電話:</label>
                    <input type="tel" name="phone" class="input1">
                </li>
                <li>
                    <label>地址:</label>
                    <input type="text" name="address" class="input1">
                </li>
                <li>
                    <label>生日:</label>
                    <input type="date" name="birthday" class="input1">
                </li>
                <li>
                    <label>點數:</label>
                    <input type="number" name="points" class="input1">
                </li>
            </ul>
        </fieldset>

        <fieldset class="fieldset1">
            <div class="divcenter">
                <input type="submit" value="送出資料" class="button1">
                <input type="reset" value="重設資料" class="button1">
            </div>
        </fieldset>

    </form>
</body>

</html>