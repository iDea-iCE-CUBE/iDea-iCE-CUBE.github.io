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

        //今天没有课表
/**
        let oMessage = document.getElementById("message");
            oMessage.style.fontSize ="50px";
            oMessage.style.position ="absolute";
            oMessage.style.left ="300px";
            oMessage.style.top ="300px";
            oMessage.textContent = "今天不知道课表";
            setTimeout(function () {
        
                for (let i = 0; i < oLi.length; i++) {
                    setTimeout(function () {
                        oLi[i].style.right = "-200px";
                        oLi[i].style.borderLeft = "0 solid white";
                        oLi[i].style.backgroundColor = "rgba(255, 255, 255,0.5)";
                    }, i * 100);
                }
                setTimeout(function () {
                    ulElement.style.display = "none";
                    oMessage.style.display ="none";
                }, 1500);
            }, 2000);
**/
