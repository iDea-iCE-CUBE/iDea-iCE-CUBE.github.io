// 获取当前时间
        const currentTime = new Date();

        // 设置比较时间为8:00 AM
        const compareTime = new Date();
        compareTime.setHours(8, 0, 0, 0);

        // 检查当前时间是否早于8:00 AM
        if (currentTime < compareTime) {
            var oCountdown = document.getElementById("countdown");
            var count = 0;
            var intervalId;

            function blink() {
                if (count < 10) {
                    if (oCountdown.style.opacity === '1' || oCountdown.style.opacity === '') {
                        oCountdown.style.opacity = '0';
                    } else {
                        oCountdown.style.opacity = '1';
                    }
                    count++;
                } else {
                    clearInterval(intervalId); // 当闪烁次数达到10次后停止定时器
                    //进1

                    console.log("进1");
                    daysRemaining = Number(daysRemaining) - 1;
                    document.getElementById("countdown").textContent = String(daysRemaining);

                    oCountdown.style.opacity = '0';oCountdown.style.bottom = '0px'
                    setTimeout(() => {oCountdown.style.opacity = '1';oCountdown.style.bottom = '43px';}, 400);
                }
            }
            intervalId = setInterval(blink, 250); // 闪烁每多少毫秒一次


        }else {
            console.log("不变");
        }
//拓展，熊佳圆
    //拓展，熊佳圆
    //拓展，熊佳圆
    //拓展，熊佳圆
    //拓展，熊佳圆
    
   function xjy(){
        let titleAndCountdown = document.getElementById("titleAndCountdown");
        let oHtml = document.getElementsByTagName("html")[0];

        setTimeout(function () {
            tiaoyue();
            titleAndCountdown.style.fontSize = "200px";
            titleAndCountdown.style.right = "100px";
        }, 1000);
        setTimeout(function () {
            titleAndCountdown.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
            titleAndCountdown.style.opacity = "1";
            titleAndCountdown.textContent = "9月28日,熊佳圆 生日快乐";
        }, 2000);
        setTimeout(function () {
            titleAndCountdown.style.opacity = "0";
        },5000);
        setTimeout(function () {
            oHtml.style.background="url(\"https://iceweb.top/other/class13/xjy.svg\") center/cover";
        },  7000);
        function tiaoyue(){
            let i = 0;
            const intervalIdTiaoyue = setInterval(function () {

                //回避
                for (let i = 0; i < oLi.length; i++) {
                    oLi[i].style.right = "-50px";
                    oLi[i].style.borderLeft = "0 solid white";
                    oLi[i].style.backgroundColor = "rgba(255,255,255,0.1)";
                }
                //突出
                oLi[i].style.backgroundColor = "rgba(255,255,255,1)";
                oLi[i].style.right = "-20px";
                // 循环 i 在 1 到 9 之间
                i = i + 1;
                if (i == oLi.length) {
                    i = 0;
                }
            }, 150);
        }
    }