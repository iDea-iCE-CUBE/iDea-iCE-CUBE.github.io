<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href="img/thiniceIco.ico">
    <title>iCE Web 主页</title>
    <style>
        body {
            margin: 0;
            font-size: 16px;
            font-family: '微软雅黑';
            background-color: #fafafa;
            overflow-y: scroll;
        }

        .card {
            min-width: 10px;
            min-height: 10px;
            padding: 16px;
            color: #646464;
            box-shadow: 0 0 25px rgba(36, 37, 38, 0.1);
            background-color: #FFFFFF;
            border-radius: 25px;
        }

        .card h1 {
            margin: 20px;
        }

        @font-face {
            font-family: 'iconfont';
            src: url('./icon/iconfont.ttf?t=1628414370915') format('truetype');
        }

        .iconfont {
            font-family: "iconfont", system-ui !important;
            font-weight: bold;
            font-style: normal;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        header {
            height: 59px;
            width: 100%;
            background-color: white;
            box-shadow: 0 0 25px rgba(36, 37, 38, 0.1);
            /*动画*/
            transition: all 0.5s cubic-bezier(0, 1, 0, 1) 0s;
            position: relative;
            top: -200px;
        }

        a {
            /* 链接 */
            color: black;
            text-decoration: none;
            transition: color 0.2s linear 0s;
        }

        a:hover {
            color: #2B5CFF;
        }

        nav {
            /* 导航栏 */
            display: inline-block;
            height: 100%;
            width: 35%;
            min-width: 130px;
        }

        nav a {

            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            height: 54px;
            margin-right: 5%;
            line-height: 59px;
        }

        #focusA {
            /* 当前导航选项的蓝色底 */
            border-bottom: #2B5CFF solid 5px;
        }

        #logo {
            /* logo */
            float: left;
            height: 100%;
            margin-left: 5%;
            margin-right: 5%;
        }

        #searchIndex {
            /* 搜索键 */
            float: right;
            margin-top: 11px;
            padding: 8px 18px;
            font-size: 14px;
            background-color: #e9e9e9;
            border-radius: 25px;
            transition: all 0.2s linear 0s;
        }

        #searchIndex:hover {
            /* 搜索键 */
            color: #2B5CFF;
            background-color: #e9eff6;
        }

        .clickable {
            /* 能够被点击的键 */
            cursor: pointer;
        }

        #avatarBox {
            /* 头像容器 */
            float: right;
            margin: 5px 3% auto 1%;
            height: 39px;
            width: 39px;
            padding: 0;
            background-image: url("avatar/noneAvatar.jpg");
            background-size: auto 100%;
            border-radius: 50%;
            border: white solid 3px;
            box-shadow: 2px 2px 18px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.2s linear 0s;
        }

        #avatarBox:hover {
            /* 头像容器 */
            border-color: #2B5CFF;
        }

        #centerBox {
            width: 1200px;
            padding: 10px;
            margin: 20px auto 20px auto;
            height: 500px;
        }

        #load1 {
            width: 100%;
            margin-top: 5.5%;
        }

        #bigSec {
            display: inline-block;
            width: 49%;
            padding: 0;
            margin: 0;
            height: 330px;
            border: white solid 5px;
            border-radius: 10px;
            background-size: 102%;
            box-shadow: 2px 2px 18px rgba(0, 0, 0, 0.1);
            /*动画*/
            position: relative;
            transition: all 2s cubic-bezier(0, 1, 0, 1) 0s;
            opacity: 0;
            top: 100px;
        }

        #bigSec:hover {
            transform: scale(1.1);
        }

        #smallSecBox {
            float: right;
            width: 50%;
            padding: 0;
            margin: 0;
            height: 340px;
        }

        .smallSec {
            float: right;
            width: 258px;
            padding: 5px;
            height: 140px;
            border: white solid 5px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 2px 2px 18px rgba(0, 0, 0, 0.1);
            background-size: 102%;
            background-position: center;
            /*动画*/
            position: relative;
            transition: all 2s cubic-bezier(0, 1, 0, 1) 0s;
            opacity: 0;
            top: 50px;
        }

        #load0 {
            height: 1000px;
            transition: all 1s cubic-bezier(0, 1, 0, 1) 0s;
        }

        #load0text p, #load0text h3, #load0text ul {
            margin-left: 30px;
        }

        footer {
            position: fixed;
            bottom: -200px;
            height: 60px;
            width: 90%;
            padding: 30px 5% 0 5%;
            color: #888888;
            background-color: white;
            box-shadow: 0 0 25px rgba(36, 37, 38, 0.1);
            /*动画*/
            transition: all 0.5s cubic-bezier(0, 1, 0, 1) 0s;
        }

        .button {

        }

        .button:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        #smallSec1 {
            margin-left: 20px;
        }

        #smallSec3 {
            margin-left: 20px;
        }

        @media screen and (min-width: 1100px) {
            .minScreen {
                display: none;
            }

            #bigSec:hover {
                transform: translateX(-30px) scale(1.1);
            }
        }

        @media screen and (max-width: 1100px) {
            /*窄荧幕界面*/
            #searchIndex {
                display: none;
            }

            #centerBox {
                width: 95%;
            }

            #bigSec {
                width: 340px;
                height: 196px;
                display: block;
                margin: auto;
            }

            #smallSecBox {
                width: 350px;
                float: none;
                margin: 20px auto;
            }

            .smallSec {
                float: none;
                display: inline-block;
                width: 150px;
                height: 80px;
            }

            #smallSec1 {
                margin: auto 3px auto 0;
            }

            #smallSec3 {
                margin: auto 3px auto 0;
            }
        }
    </style>
</head>
<body>
<header>
    <a href="1.php" ><img id="logo" src="img/thiniceLogo.svg" alt="ice logo"/></a>
    <nav>
        <a class="nav" id="focusA" href="javascript:changeIndex();">首页</a>
        <a class="nav" href="./" style="display: none">待定</a>
        <a class="nav" href="./" style="display: none">待定</a>
        <a class="nav" href="javascript:changeInfo();">关于</a>
    </nav>
    <div id="avatarBox" onclick="accountSetting()" class="clickable"></div>
    <div id="searchIndex" class="clickable" onclick='notIndex()'>
        搜索&nbsp;&nbsp;<span class="iconfont">&#xe63c;</span>
    </div>
</header>

<div id="centerBox">
    <div id="load0" class="card" style="display:none">
        <div id="load0text">
            <h1>关于丨info</h1>
            <p>
                <strong class="minScreen">检测到您是移动端设备，已自动设定宽高样式!</strong><br class="minScreen"/><br
                        class="minScreen"/>
                欢迎来到新iCE Web，该页面由iCE CUBE开发<br/><br class="minScreen"/>
                iCE Web已开发出账号系统，但因服务器条件暂时停止该功能，请期待后续更新。
            </p>
            <h1>更新日志</h1>
            <h3>2022/11/25更新预告</h3>
            <ul>
                <li>账号系统页面更新</li>
                <li>THINICE表单框架构建完成</li>
            </ul>
            <h3>2022/11/25更新内容</h3>
            <ul>
                <li>主页面，账号系统页面焕然一新</li>
                <li>给所有页面添加了动画</li>
            </ul>
            <h1>关于站长</h1>
            <iframe width="100%" height="500px" src="https://kdocs.cn/l/cnsCfSAFsPLR"></iframe>
        </div>
    </div>
    <div id="load1">
        <div id="bigSec" class="button" style="background-image: url('img/oldIceWeb.png')"
             onclick=window.open("oldWeb","_self")></div>

        <div id="smallSecBox">
            <a href="https://www.bilibili.com/video/BV1X34y1p7sj">
                <div class="smallSec button" id="smallSec1" style="background-image:url('img/i1.jpg');"></div>
            </a>
            <a href="https://www.bilibili.com/video/BV1h84y1i7Am">
                <div class="smallSec button" style="background-image: url('img/i2.jpg');"></div>
            </a>
            <a href="official/register.html">
                <div class="smallSec button" id="smallSec3"
                     style=";margin-top:20px;background-image: url('img/i4.png');"></div>
            </a>
            <a href="javascript:changeInfo();">
                <div class="smallSec button" style="margin-top:20px;background-image:url('img/i3.png');"></div>
            </a>

        </div>
    </div>
</div>
<footer>
    <span style="float:right;color:#888888">© 2020-2022 iCE Studio.</span>
    <a class="clickable" style="color:#888888"
       href="https://qm.qq.com/cgi-bin/qm/qr?k=HrnWZbONqp_B0AnK5KU_QXiejar89y5H&noverify=0&personal_qrcode_source=3">联系站长</a>
</footer>

<!--if (isset($_SESSION["admin"]) && $_SESSION["admin"] === true) {
    if ($_SESSION['avatarId'] != null) {
        echo '
                    <script>
                        let oAvatarBox = document.getElementById("avatarBox");
                        oAvatarBox.style.backgroundImage="url(\'avatar/' . $_SESSION['avatarId'] . '\')";
                        function accountSetting(){
                            window.open("official/login.html", "_self");
                        }
                    </script>
                    ';
    }
} else {
    echo '
                <script>
                    function accountSetting(){
                        window.open("official/login.html", "_self");
                    }
                </script>
            ';
}-->

<script>
    setTimeout("animalIndexStart()", 1);
    var oHeader = document.getElementsByTagName("header");
    var oBigSec = document.getElementById("bigSec");
    var oFooter = document.getElementsByTagName("footer");
    var oSmallSec = document.getElementsByClassName("smallSec");
    var oNav = document.getElementsByClassName("nav");
    var oLoad0 = document.getElementById("load0");
    var oLoad0text = document.getElementById("load0text");

    function animalIndexStart() {
        oHeader[0].style.top = "0";
        oBigSec.style.opacity = "1";
        oBigSec.style.top = "0";
        oFooter[0].style.opacity = "1";
        oFooter[0].style.bottom = "0";
        setTimeout("oLoad0.style.marginTop=\"100px\";oLoad0.style.opacity=\"0\";", 100);
        setTimeout("smallSecStart(1)", 1);
        setTimeout("smallSecStart(2)", 300);
        setTimeout("smallSecStart(0)", 100);
        setTimeout("smallSecStart(3)", 200);
    }

    function animalIndexOut() {
        oBigSec.style.opacity = "0";
        oBigSec.style.top = "100px";
        setTimeout("oLoad0.style.marginTop=\"0\";oLoad0.style.opacity=\"1\";", 200);
        setTimeout("smallSecOut(1)", 60);
        setTimeout("smallSecOut(2)", 50);
        setTimeout("smallSecOut(0)", 60);
        setTimeout("smallSecOut(3)", 50);
    }

    function smallSecStart(num) {
        oSmallSec[num].style.opacity = "1";
        oSmallSec[num].style.top = "0";
    }

    function smallSecOut(num) {
        oSmallSec[num].style.opacity = "0";
        oSmallSec[num].style.top = "100px";
    }

    function changeInfo() {
        animalIndexOut();
        setTimeout("oLoad0.style.display = \"block\";", 100);
        oNav[0].id = "none";
        oNav[3].id = "focusA";
    }

    function changeIndex() {
        animalIndexStart();
        oLoad0.style.display = "none";
        oNav[3].id = "none";
        oNav[0].id = "focusA";
    }

    function accountSetting() {
        window.open("official/login.html", "_self");
    }

    function notIndex() {
        alert("即将上线丨敬请期待");
    }
</script>
</body>
</html>