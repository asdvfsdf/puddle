<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录页面</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            height: 100%;
        }

        body {
            height: 100%;
        }

        .container {
            height: 100%;
            background-image: linear-gradient(to right, #fbc2eb, #a6c1ee);
        }

        .login-wrapper {
            background-color: #fff;
            width: 358px;
            height: 588px;
            border-radius: 15px;
            padding: 0 50px;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .header {
            font-size: 38px;
            font-weight: bold;
            text-align: center;
            line-height: 200px;
        }

        .input-item {
            display: block;
            width: 100%;
            margin-bottom: 20px;
            border: 0;
            padding: 10px;
            border-bottom: 1px solid rgb(128, 125, 125);
            font-size: 15px;
            outline: none;
        }

        .input-item::placeholder {
            text-transform: uppercase;
        }

        .btn {
            text-align: center;
            padding: 10px;
            width: 100%;
            margin-top: 40px;
            background-image: linear-gradient(to right, #a6c1ee, #fbc2eb);
            color: #fff;
        }

        .msg {
            text-align: center;
            line-height: 88px;
        }

        a {
            text-decoration-line: none;
            color: #abc1ee;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-wrapper">
            <div class="header">登录</div>
            <form action="" name="form1" method="post">
                <input type="text" name="uname" placeholder="用户名" value="" class="input-item">
                <input type="password" name="passwd" placeholder="密码" value="" class="input-item">
                <button type="submit" class="btn">登录
        </div>
        </form>
    </div>
    <div class="msg">
        <a href="#">忘记密码？</a>
    </div>
    </div>
    </div>

    <?php
    //including the Mysql connect parameters.
    include("../sql-connections/sql-connect.php");
    error_reporting(0);

    // take the variables
    if (isset($_POST['uname']) && isset($_POST['passwd'])) {
        $uname = $_POST['uname'];
        $passwd = $_POST['passwd'];

        //logging the connection parameters to a file for analysis.
        $fp = fopen('result.txt', 'a');
        fwrite($fp, 'User Name:' . $uname);
        fwrite($fp, 'Password:' . $passwd . "\n");
        fclose($fp);


        // connectivity 
        @$sql = "SELECT username, password FROM users WHERE username='$uname' and password='$passwd' LIMIT 0,1";
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);

        if ($row) {
            // 登录成功时，弹出提示框
            echo "<script>alert('登录成功！');</script>";
        } else {
            // 登录失败时，弹出提示框
            echo "<script>alert('登录失败，用户名或密码错误！');</script>";
        }
    }

    ?>

</body>

</html>