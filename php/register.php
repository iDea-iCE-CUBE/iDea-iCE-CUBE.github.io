<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>iCE　Web账号注册</title>
</head>
<style>
    body {
        text-align: center;
    }

</style>
<body>

<?php


//初始化 基本操作
$id = $_REQUEST["id"];
$fname = "'" . $_REQUEST["fname"] . "'";
$passwd = "'" . $_REQUEST["pwd"] . "'";
header("content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
/////////////////////////////////////////////////////////////////////////////////////

//连接MySQL 基本操作
$conn = new mysqli("127.0.0.1", "ae2zbf", "rhMacfUpCqAF", "ae2zbf");
//检测连接
if ($conn->connect_error) {
    die("<h1>错误 连接MySQL数据库失败:</h1>" . $conn->connect_error);
}
/////////////////////////////////////////////////////////////////////////////////////

//数据表创建 基本操作
$sql = "CREATE TABLE $id (
    fname VARCHAR(30) ,
    passwd VARCHAR(30),
    avatarId VARCHAR(30)
    )";
//检测
if ($conn->query($sql) === TRUE) {
    $idBool = true;
    echo "<h3>账号创建成功</h3>";
} else {
    $idBool = false;
    echo "<h1>错误 该id已被占用，请尝试使用其他id</h1>";
}
/////////////////////////////////////////////////////////////////////////////////////

//头像上传系统 拓展操作
//获取头像文件名
$filename = $_FILES['file']['name'];
$avatarBool = false;
//验证，上传
if ($filename != null and $idBool) {
    /*
    初始化头像
    */
    //获取文件临时路径
    $temp_name = $_FILES['file']['tmp_name'];
    //获取大小
    $size = $_FILES['file']['size'];
    //获取文件上传码，0代表文件上传成功
    $error = $_FILES['file']['error'];
    //判断文件大小是否超过设置的最大上传限制
    if ($size > 2 * 1024 * 1024) {
        //能不能上传？
        echo "<h3>头像未上传，原因：文件过大，应不超过2M大小</h3>";
        exit();
    }
    //phpinfo函数会以数组的形式返回关于文件路径的信息
    //[dirname]:目录路径[basename]:文件名[extension]:文件后缀名[filename]:不包含后缀的文件名
    $arr = pathinfo($filename);
    //获取文件的后缀名
    $ext_suffix = $arr['extension'];
    //设置允许上传文件的后缀
    $allow_suffix = array('jpg', 'jpeg', 'png');
    //判断上传的文件是否在允许的范围内（后缀）==>白名单判断
    if (!in_array($ext_suffix, $allow_suffix)) {
        //window.history.go(-1)表示返回上一页并刷新页面
        echo "<h3>头像未上传，原因：上传的文件类型只能是jpg,jpeg,png</h3>";
        exit();
    }
    //检测存放上传文件的路径是否存在，如果不存在则新建目录
    if (!file_exists('../avatar')) {
        mkdir('../avatar');
    }
    //为上传的文件新起一个名字，保证更加安全
    $new_filename = date('YmdHis', time()) . rand(100, 1000) . '.' . $ext_suffix;
    //将文件从临时路径移动到磁盘
    if (move_uploaded_file($temp_name, '../avatar/' . $new_filename)) {
        echo "<h2>一切准备就绪</h2>";
        $avatarBool = true;
    } else {
        echo "<h4>头像上传失败,错误码：$error </h4>";
    }
}
/////////////////////////////////////////////////////////////////////////////////////

//数据插入 基本操作
if ($avatarBool) {
    //插入包括头像的基本信息
    $avatarId = "'" . $new_filename . "'";
    $sql = "INSERT INTO $id (fname,passwd,avatarId) VALUES ($fname,$passwd,$avatarId)";
} elseif ($idBool) {
    //插入基本信息
    $sql = "INSERT INTO $id (fname,passwd) VALUES ($fname,$passwd)";
}
/////////////////////////////////////////////////////////////////////////////////////

//结束化 基本操作
if ($conn->query($sql) === TRUE) {
    echo "<h1>牢记你的ID'" . $id . "'这是你登陆的唯一方式</h1><a href='../'>回到iCE Web主页</a>";
}
$conn->close();
/////////////////////////////////////////////////////////////////////////////////////

/*
作者日志.
[old]语法好严谨啊，后端比前端难好多哦QAQ
[2021/8/19/10:36]完成了头像操作系统，分类整理了所有代码，不愧是我;


*/////////////////////////////////////////////////////////////////////////////////////
?>
</body>

</html>
