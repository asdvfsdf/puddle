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
