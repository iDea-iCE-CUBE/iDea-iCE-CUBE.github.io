<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>iCE Web登录</title>
</head>
<body style="text-align:center;">
<?php
//初始化 基本操作
//开启session
session_start();
if (isset($_SESSION["admin"]) && $_SESSION["admin"] === true) {
    echo "<h1>请勿重复登录，" . $_SESSION['fname'] . "</h1><a href='./clearSS.php'>如果您想登录其他账号，请先点此退出登录</a><br/><a href='javascript:void(history.back())'>返回上一页</a>丨<a href='../'>返回iCE Web主页</a>";
} else {
    //设置session生命周期
    $lifeTime = 24 * 3600;
    setcookie(session_name(), session_id(), time() + $lifeTime, "/");
    //获取输入的id
    $id = $_REQUEST["id"];
    //获取输入的密码
    $pwd = $_REQUEST["pwd"];
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    /////////////////////////////////////////////////////////////////////////////////////


    //数据库 基本操作
    $conn = new mysqli("127.0.0.1", "ae2zbf", "rhMacfUpCqAF", "ae2zbf");
    if ($conn->connect_error) {
        die("错误 连接数据库: " . $conn->connect_error);
    }
    /////////////////////////////////////////////////////////////////////////////////////

    //获取并验证数据 基本操作
    $sql = "SELECT fname,passwd,avatarId FROM $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $passId = true;
        while ($row = $result->fetch_assoc()) {
            $fname = $row["fname"];
            $rpwd = $row["passwd"];
            $avatarId = $row["avatarId"];
        }
    } else {
        $passId = false;
        echo "<h1>错误:该账号不存在</h1>";
    }
    //关闭数据库
    $conn->close();
    /////////////////////////////////////////////////////////////////////////////////////

    //结束化 基本操作
    if ($rpwd === $pwd) {
        //登陆成功最终操作
        $_SESSION['id'] = $id;
        $_SESSION['fname'] = $fname;
        if ($avatarId != null) {
            $_SESSION['avatarId'] = $avatarId;
        } else {
            $_SESSION['avatarId'] = null;
        }

        $_SESSION["admin"] = true;
        echo "<h1>" . $fname . "欢迎回来</h1>正在跳转...<script>location.href='../';</script>";
    } else if ($passId) {
        echo "<h1>错误:密码不正确</h1>";
    }
}
////////////////////////////////////////////////////////////////////////////////////
?>
</body>
</html>
