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
        <!-- <div class="login-wrapper">
            <div class="header">登录</div>
            <form action="" name="form1" method="post">
                <input type="text" name="uname" placeholder="用户名" value="" class="input-item">
                <input type="password" name="passwd" placeholder="密码" value="" class="input-item">
                <button type="submit" class="btn">登录</button>
            </form>
        </div> -->

        <?php

        // MySQL数据库连接设置
        $servername = "localhost";
        $username = "root";
        $password = "1234qwer";
        $dbname = "puddle"; // 替换为你的数据库名称

        // 创建连接
        $conn = new mysqli($servername, $username, $password, $dbname);

        // 这里可以做一个可以进行日志注入的点，记录连接的数据库名,日志注入看来只能做一些简单的欺骗，很难对其进行引导
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        } else {
            // 获取用户 IP 地址
            $user_ip = $_SERVER['REMOTE_ADDR'];

            // 获取用户 User-Agent（浏览器信息）
            $user_agent = $_SERVER['HTTP_USER_AGENT'];

            // 记录日志
            error_log("数据库连接成功 - IP: $user_ip - User-Agent: $user_agent\n", 3, "db_log.txt");

            // 设置字符集
            $conn->set_charset("utf8mb4");
        }


        ?>

</body>

</html>