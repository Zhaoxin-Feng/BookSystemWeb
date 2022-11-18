<?php
  require_once "functions/init.php";

  if(cek_login() === false){
    header('Location: login.php');
  }

//   require_once "view/header.php";

  $error = '';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>交互式句式学习</title>
    <link rel="stylesheet" href="./css/game1.css" />
</head>
<script type="text/javascript">
    var doc = document, docEl = doc.documentElement;
    docEl.className = docEl.className.replace(/(^|\s)no-js(\s|$)/, " js ");
</script>
<script src="./js/responsive-nav.js"></script>
<script src="js/jquery.min.js"></script>

<body>

    <img src="imgs/zan.gif" id="good">
    <!-- <script src="http://responsive-nav.com/demo/responsive-nav.js"></script> -->

    <div role="navigation" id="nav">
        <ul>
            <li class="active"><a href="gamechoose.php">返回</a></li>
            <li><a href="#first">句子的构成</a></li>
            <li><a href="#second">主谓句和非主谓句</a></li>
            <li><a href="#third">句子的类型</a></li>
            <li><a href="#fourth">巩固小测验</a></li>
        </ul>
    </div>

    <div role="main" class="main"> <a href="#nav" id="toggle">Menu</a>
        <h1>句式</h1>
        <p class="intro">句子是语言的基本单位，是由词或者短语构成的，它能明白地表达一个完整的意思。</p>
        <p class="intro">“字-词-句-段-篇”是语言文字训练的基本流程。</p>
        <h2 id="first">句子的构成</h2>
        <p>一个完整的句子一般可以分成两部分：<span id="firstpart" class="highlight">前一部分</span>说的是<span
                id="firstpart1">“谁”或者“什么”</span>，<span id="secondpart" class="highlight">后一部分</span>说的是<span
                id="secondpart1">“是什么”、“做什么”或者“怎么样”</span>。</p>
        <p style="text-align: center;">例如：小鸟<span class="highlight">飞翔</span>。
        </p>
        <div><img src="imgs/bird.gif" width="40%" class="gif"></div>
        <br>
        <p>【练习】</p>
        <p>小明（谁）在认真学习(<span>
                <select class="select1" name="first">
                    <!--下拉列表框-->
                    <option value="shi">是什么</option>
                    <option value="zuo" selected="selected">做什么</option>
                    <option value="zen">怎么样</option>
                </select>
            </span>)。 小红（谁）是优秀少先队员(<select class="select2" name="first">
                <!--下拉列表框-->
                <option value="shi">是什么</option>
                <option value="zuo" selected="selected">做什么</option>
                <option value="zen">怎么样</option>
            </select>)。</p>
        <p>小草（什么）有顽强的生命力(<select class="select3" name="first">
                <!--下拉列表框-->
                <option value="shi">是什么</option>
                <option value="zuo" selected="selected">做什么</option>
                <option value="zen">怎么样</option>
            </select>)。</p>
        <button id="button1" class="go-on">
            继续
        </button>

        <div class="one">
            <h2 id="second">主谓句和非主谓句</h2>
            <p>值得注意的是，句子从结构上分有<span class="highlight" id="firstpart">两大类</span>：<span
                    id="firstpart1">主谓句和非主谓句</span>。小学语文教学中强调完整的
                句子必须包含两个部分，这是对主谓句而言的。
            </p>
            <p>
                <span class="highlight" id="firstpart">非主谓句</span>是由<span
                    id="firstpart1">主谓短语以外的各种短语或单个词加上语调（句号、问号、叹号）</span>构成的，非主谓句离不开
                特定的语言环境。
                非主谓句是分不出前后两个基本部分的。但是它的<span class="highlight" id="firstpart">意思是完整的</span>，同样能<span
                    id="firstpart1">表情达意</span>，同样能完成交际任务。
            </p>
            <p style="text-align: center;">
                <span id="orange">这美丽的南国的树【赞美】 </span>&nbsp
                <span id="blue">明天一定能考好【拼搏】 </span>&nbsp
                <span id="green">该死的家伙【愤怒】</span><br><br>
                <img src="imgs/问号.png" id="mood_image">
            </p>
            <p>【<span class="highlight" id="firstpart">练习</span>：判断<span id="firstpart1">哪些是主谓句哪些是非主谓句</span>】</p>
            <p>【1】继续前进。(<span>
                    <select class="select7" name="first">
                        <!--下拉列表框-->
                        <option value="shi">主谓句</option>
                        <option value="zuo">非主谓句</option>
                    </select>
                </span>) 【2】我的心情一直平静不下来。(<select class="select8" name="first">
                    <!--下拉列表框-->
                    <option value="shi">主谓句</option>
                    <option value="zuo">非主谓句</option>
                </select>)
            </p>
            <p>【<span class="highlight" id="firstpart">练习</span>：将句子<span id="firstpart1">补充完整</span>】</p>
            <p>【1】花猫在<span>
                    <select class="select4" name="first">
                        <!--下拉列表框-->
                        <option value="shi">做游戏</option>
                        <option value="zuo" selected="selected">风景</option>
                        <option value="zen">小朋友</option>
                    </select>
                </span>。【2】 <select class="select5" name="first">
                    <!--下拉列表框-->
                    <option value="shi">小朋友</option>
                    <option value="zuo" selected="selected">做游戏</option>
                    <option value="zen">风景</option>
                </select> 睡着了。
                【3】<select class="select6" name="first">
                    <!--下拉列表框-->
                    <option value="shi">风景</option>
                    <option value="zuo" selected="selected">小朋友</option>
                    <option value="zen">做游戏</option>
                </select> 真美啊！</p>
            <br> <br>
            <button id="button2" class="go-on">
                继续
            </button>
        </div>
        <div class="two">
            <h2 id="third">句子的类型</h2>
            <p>说话和写文章都要用句子来表情达意。</p>
            <p>按照不同的用途和表达语气，句子大致可以分为<span class="highlight" id="firstpart">四种类型</span>：<span
                    id="firstpart1">陈述句、疑问句、祈使句和感叹句</span></p>
                <br>
            <table border="1" style="font-size: 1.25em;margin: 0 auto ;" width="80%">

                <tr>
                    <td class="chenshu">1.放假我去外婆家。</td>
                    <td class="qishi">2.请帮我把书本递过来。</td>
                    <td class="chenshu">3.他是我们的班长。</td>
                    <td class="yiwen">4.我们什么时候回家呢？</td>
                </tr>
                <tr>
                    <td class="gantan">5.这座山真美啊！</td>
                    <td class="yiwen">6.你写完作业了吗？</td>
                    <td class="qishi">7.不许随便乱动东西。</td>
                    <td class="gantan">8.多可怜的流浪狗啊！</td>
                </tr>
            </table><br><br>
            <p style="text-align: center;"><span id="chenshuju">陈述句</span> <span id="yiwenju">疑问句</span>
                <span id="qishiju">祈使句</span> <span id="gantanju">感叹句</span>
            </p>
            <br>
            <img id="leixing" src="imgs/类型.svg" style="margin: 0 auto;display:block;height: 6em;">
            <br>
            <button id="button3" class="go-on">
                继续
            </button>
        </div>
        <div class="three">
            <h2 id="fourth">巩固小测验</h2>
            <div id="content">
                <input style="font-size: 1.3em ;" class="highlight" type="button" value="开始游戏"
                    onclick="GameStart()" />&nbsp;&nbsp;
                <input style="font-size: 1.3em ;" class="highlight" type="button" value="结束游戏" onclick="GameOver()" />

                <form name="form1" id="form1" style="font-size: 1.5em ;">
                    <label>分数：</label>
                    <input type="text" name="score" size="5">
                    <label>命中率：</label>
                    <input type="text" name="success" size="10">
                    <label>倒计时：</label>
                    <input type="text" name="remtime" size="5">
                </form>
                <table id="dadishu_table">
                    <tr id="dadashu_tr">
                        <td id="td[0]" onclick="hit(0)"></td>
                        <td id="td[1]" onclick="hit(1)"></td>
                        <td id="td[2]" onclick="hit(2)"></td>
                        <td id="td[3]" onclick="hit(3)"></td>
                        <td id="td[4]" onclick="hit(4)"></td>
                    </tr>
                    <tr>
                        <td id="td[5]" onclick="hit(5)"></td>
                        <td id="td[6]" onclick="hit(6)"></td>
                        <td id="td[7]" onclick="hit(7)"></td>
                        <td id="td[8]" onclick="hit(8)"></td>
                        <td id="td[9]" onclick="hit(9)"></td>
                    </tr>
                    <tr>
                        <td id="td[10]" onclick="hit(10)"></td>
                        <td id="td[11]" onclick="hit(11)"></td>
                        <td id="td[12]" onclick="hit(12)"></td>
                        <td id="td[13]" onclick="hit(13)"></td>
                        <td id="td[14]" onclick="hit(14)"></td>
                    </tr>
                    <tr>
                        <td id="td[15]" onclick="hit(15)"></td>
                        <td id="td[16]" onclick="hit(16)"></td>
                        <td id="td[17]" onclick="hit(17)"></td>
                        <td id="td[18]" onclick="hit(18)"></td>
                        <td id="td[19]" onclick="hit(19)"></td>
                    </tr>
                    <tr>
                        <td id="td[20]" onclick="hit(20)"></td>
                        <td id="td[21]" onclick="hit(21)"></td>
                        <td id="td[22]" onclick="hit(22)"></td>
                        <td id="td[23]" onclick="hit(23)"></td>
                        <td id="td[24]" onclick="hit(24)"></td>
                    </tr>
                </table>
            </div>
            <br> <br> <br>
        </div>
    </div>

    </div>


</body>
<script type="text/javascript">
    var navigation = responsiveNav("#nav", { customToggle: "#toggle" });
</script>
<script>
    var button1_text = true;
    var button2_text = true;
    var button3_text = true;
    $("#button1").click(function () {
        $(".one").slideToggle();
        var obj = document.getElementById('button1');
        if (button1_text) {
            obj.innerHTML = "返回";
            button1_text = false;

            if ($(".select1").get(0).selectedIndex == 1 && $(".select2").get(0).selectedIndex == 0 && $(".select3").get(0).selectedIndex == 2) {
                $('#good').slideToggle();
                console.log('成功！');
                setTimeout(function () { $('#good').slideToggle(); }, 3000);
                $('body').append('<embed src="mp3/good.mp3" autostart="true" hidden="true" loop="false">');
            }
        } else {
            obj.innerHTML = "继续";
            button1_text = true;
        }
    });
    $("#button2").click(function () {
        $(".two").slideToggle();
        var obj = document.getElementById('button2');
        if (button2_text) {
            obj.innerHTML = "返回";
            button2_text = false;
            if ($(".select4").get(0).selectedIndex == 0 && $(".select5").get(0).selectedIndex == 0 && $(".select6").get(0).selectedIndex == 0
            && $(".select7").get(0).selectedIndex == 1 && $(".select8").get(0).selectedIndex == 0 ) {
                $('#good').slideToggle();
                console.log('成功！');
                setTimeout(function () { $('#good').slideToggle(); }, 3000);
                $('body').append('<embed src="mp3/good.mp3" autostart="true" hidden="true" loop="false">');
            }
        } else {
            obj.innerHTML = "继续";
            button2_text = true;
        }
    });
    $("#button3").click(function () {
        $(".three").slideToggle();
        var obj = document.getElementById('button3');
        if (button3_text) {
            obj.innerHTML = "返回";
            button3_text = false;
        } else {
            obj.innerHTML = "继续";
            button3_text = true;
        }
    });

    $('#orange').click(function () {
        console.log("橙色被点击！");
        $('#mood_image').attr("src", "imgs/tree.gif")
    })
    $('#blue').click(function () {
        console.log("蓝色被点击！");
        $('#mood_image').attr("src", "imgs/homework.gif")
    })
    $('#green').click(function () {
        console.log("绿色被点击！");
        $('#mood_image').attr("src", "imgs/shengqi.gif")
    })

    $('#chenshuju').click(function () {
        $('#leixing').attr("src", "imgs/chenshu.svg")
        console.log("陈述句被点击！");
    })
    $('#yiwenju').click(function () {
        $('#leixing').attr("src", "imgs/yiwen.svg")
    })
    $('#qishiju').click(function () {
        $('#leixing').attr("src", "imgs/qishi.svg")
    })
    $('#gantanju').click(function () {
        $('#leixing').attr("src", "imgs/gantan.svg")
    })

</script>

<script type="text/javascript">
    var td = new Array(),  //保存每个格子的地鼠
        playing = false,  //游戏是否开始
        score = 0, //分数
        beat = 0, //鼠标点击次数
        success = 0, //命中率
        knock = 0, //鼠标点中老鼠图片的次数
        countDown = 30, //倒计时
        interId = null, //指定 setInterval()的变量
        timeId = null; //指定 setTimeout()的变量
    //游戏结束
    function GameOver() {
        timeStop();
        playing = false;
        clearMouse();
        alert("游戏结束！\n 你获得的分数为：" + score + "\n 命中率为：" + success);
        success = 0;
        score = 0;
        knock = 0;
        beat = 0;
        countDown = 30;
    }
    //显示当前倒计时所剩时间
    function timeShow() {
        document.form1.remtime.value = countDown;
        if (countDown == 0) {
            GameOver();
            return;
        } else {
            countDown = countDown - 1;
            timeId = setTimeout("timeShow()", 1000);
        }
    }
    //主动停止所有计时
    function timeStop() {
        clearInterval(interId);
        clearTimeout(timeId);
    }
    //随机循环显示老鼠图片
    function show() {
        if (playing) {
            var current1 = Math.floor(Math.random() * 25);
            document.getElementById("td[" + current1 + "]").innerHTML = '<img src="imgs/3.png">';
            var current2 = Math.floor(Math.random() * 25);
            document.getElementById("td[" + current2 + "]").innerHTML = '<img src="imgs/4.png">';
            setTimeout("document.getElementById('td[" + current1 + "]').innerHtml=''", 3000);
            setTimeout("document.getElementById('td[" + current2 + "]').innerHtml=''", 3000);
        }
    }
    //清除所有老鼠图片
    function clearMouse() {
        for (var i = 0; i < 25; i++) {
            document.getElementById("td[" + i + "]").innerHTML = "";
        }
    }
    //点击事件函数，判断是否点中老鼠
    function hit(id) {
        if (playing == false) {
            alert("请点击开始游戏!");
            return;
        } else {
            beat += 1;
            if (document.getElementById("td[" + id + "]").innerHTML == '<img src="imgs/3.png">') {
                score += 1;
                knock += 1;
                success = knock / beat;
                document.form1.success.value = success;
                document.form1.score.value = score;
                //document.getElementById("td["+id+"]").innerHTML = "";
                timeStop();
                alert("恭喜你答对题目！");
                clearMouse();
            } else if (document.getElementById("td[" + id + "]").innerHTML == '<img src="imgs/4.png">') {
                //document.form1.success.value = success;
                //document.form1.score.value = score;
                //document.getElementById("td["+id+"]").innerHTML = "";
                timeStop();
                alert("继续努力哦，答案不正确");
                clearMouse();
            } else {
                score += -1;
                success = knock / beat;
                document.form1.success.value = success;
                document.form1.score.value = score;
            }
        }
    }
    //游戏开始
    function GameStart() {
        playing = true;
        interId = setInterval("show()", 1000);
        document.form1.score.value = score;
        document.form1.success.value = success;
        timeShow();
        alert("题目：李老师很____,对同学们十分友好。")
    } 
</script>

</html>