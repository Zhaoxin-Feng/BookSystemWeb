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
    <title>部首查字法学习</title>
    <link rel="stylesheet" href="css/game2.css" />
</head>
<script type="text/javascript">
    var doc = document, docEl = doc.documentElement;
    docEl.className = docEl.className.replace(/(^|\s)no-js(\s|$)/, " js ");
</script>
<script src="js/responsive-nav.js"></script>
<!-- <script src="jquery-smoove.js"></script> -->
<script src="js/jquery.min.js"></script>
<script>
    $(function () {
    $('.clickable').click(function () {
        const b = parseFloat(this.getAttribute('data-b'));
        const v = document.querySelector('#v1');
        v.currentTime = b;
        v.play();
    });
});
function updata(){
    var audio=document.querySelector('#v1');
    var b=Math.floor(audio.currentTime);
    console.log(audio.currentTime);
    if(b>=0&&b<=4){
        $('#1').css("background-color","rgb(236,194,165)");
        $('#1').css("border-radius","10px");
    }

    if(b>=4&&b<=9){
        $('#1').css("background-color","transparent");
        $('#2').css("background-color","rgb(236,194,165)");
        $('#2').css("border-radius","10px");
    }

    if(b>=9&&b<=15){
        $('#1').css("background-color","transparent");
        $('#2').css("background-color","transparent");
        $('#3').css("background-color","rgb(236,194,165)");
        $('#3').css("border-radius","10px");
    }

    if(b>=15&&b<=19){
        $('#1').css("background-color","transparent");
        $('#2').css("background-color","transparent");
        $('#3').css("background-color","transparent");
        $('#4').css("background-color","rgb(236,194,165)");
        $('#4').css("border-radius","10px");
    }
    if(b>19){
        $('#1').css("background-color","transparent");
        $('#2').css("background-color","transparent");
        $('#3').css("background-color","transparent");
        $('#4').css("background-color","transparent");

    }
    }
</script>
<body>


    <!-- <script src="http://responsive-nav.com/demo/responsive-nav.js"></script> -->

    <div role="navigation" id="nav">
        <ul style="color: white">
            <li class="active"><a href="gamechoose.php">返回</a></li>
            <li><a href="#first">情景引入</a></li>
            <li><a href="#second">部首查字法的步骤</a></li>
            <li><a href="#third">笔画查字法的步骤</a></li>
            <li><a href="#fourth">巩固小测验</a></li>
        </ul>
    </div>

    <div role="main" class="main"> <a href="#nav" id="toggle">Menu</a>
        <h1>字典查字</h1>
        <p class="intro">“字-词-句-段-篇”是语言文字训练的基本流程。</p>
        <p class="intro">字典是学习汉字的工具，汉字是阅读的基础，掌握字典的相关查字法能够很好地提高汉字学习效率。</p>
        
        <h2 id="first">情景引入</h2>
        <p><img src="imgs/疑问.webp" style="height: 80px;width:auto;">小朋友，很高兴认识你们。昨天，我借了一本童话书，里面遇到好几个不认识的字，这些字的上面又没注音，真是急死我了。你们能帮帮我的忙吗？</p>
        
        <button id="button1" class="go-on">
            继续
        </button>

        <div class="one">
            <h2 id="second">部首查字法的步骤</h2>
            <div style="width: 600px;float:left">            
            <p>首先我们学习的是部首查字法，步骤如下：
            </p>
            <p>
                1.确定要查字的部首，并确定该部首的笔画数
            </p>
            <p>
                2."部首目录"里找到这个字的部首和页码
            </p>
            <p>
                3.根据页码在"检字表"中找到这个部首和要查的字
            </p>
            <p>
                4.按"检字表"中的页码在正文中找到要查的字
            </p>
           </div>
            <br>
            <br>
            <div id="tips" style="width:400px;float:right;">
                <button style="font-size: large; background-color: rgb(239, 189, 119);">
                    小贴士
                </button>
                <div style="height: 60px;width:200px;border: 3px dotted rgb(214, 130, 61);border-radius: 10%;">
                    用新华字典进行部首查字，在找到字的部首后，再看看除去部首还剩多少画。
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            
            <h2 style="text-align: center;">【用部首查字法查字】</h2>
            <table  style="font-size: 1.25em;margin: 0 auto ;" width="80%">
                <tr>
                    <td>要查的字</td>
                    <td>部首</td>
                    <td>除去部首有几画</td>
                    <td>在字典的哪一页</td>
                    <td>读音</td>
                </tr>

                <tr>
                    <td>陆</td>
                    <td>阝</td>
                    <td>5画</td>
                    <td>311</td>
                    <td>lù</td>
                </tr>

                <tr>
                    <td>锣</td>
                    <td>钅</td>
                    <td>8画</td>
                    <td>317</td>
                    <td>luó</td>
                </tr>
                
                <tr>
                    <td>箭</td>
                    <td>⺮</td>
                    <td>9画</td>
                    <td>223</td>
                    <td>jiàn</td>
                </tr>

                <tr>
                    <td>阔</td>
                    <td>门</td>
                    <td>9画</td>
                    <td>269</td>
                    <td>kuò</td>
                </tr>
            </table>
            <br><br><br>
            <div>
            <div id="song" style="text-align: center;width: 600px;height: auto;margin-left:22% ;">
                <h2>部首查字法儿歌</h2>
                <p id="1" class="clickable" data-b="16" style="cursor: pointer;">小小字典手中拿，看我来把汉字查。</p>
                <P id="2" class="clickable" data-b="23" style="cursor: pointer;">定部首，数笔画，部首目录找到它。</P>
                <P id="3" class="clickable" data-b="29" style="cursor: pointer;">部首外，再数数，检字表中找门牌。</P>
                <P id="4" class="clickable" data-b="33" style="cursor: pointer;">快快快，快快翻，找到正文找到家。</P>
            </div>
            <div style="float: right;margin-top:-20% ;">
                <img style="width: 150px;height: auto;" src="imgs/鹿.png" >
            </div>
        </div>
            <div id="loading" style=" margin-left: 30%;justify-content: center;">
                <audio id="v1" controls style="width: 60%; " ontimeupdate="updata()">
                    <source src="mp3/部首查字法儿歌.mp3">
                </audio>
            </div>
            <button id="button2" class="go-on">
                继续
            </button>
        </div>
       
        <div class="two">
            <h2 id="third">笔画查字法的步骤</h2>
            <p>当我们遇到一个陌生的汉字，既不知道它的读音，又不好识别它的部首，这时候该怎么办呢？</p>
            <br>
            <p>这时候我们就可以使用<span class="intropro1"><span class="intro0">笔画查字法</span><span class="intro1">笔画查字法就是按照字典笔画数的多少来查字的一种方法。</span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,步骤如下：</p>
            <p>1.先确定要查的字的笔画数</p>
            <p>2.在《难检字笔画索引》中的相应笔画数栏内找到这个字在中文中的页码</p>
            <p>3.按索引中所标的页码在正文中找到要查的字</p>
            <br><br>
            <div style="width:1000px;font-size:1em;">
                <p >以上就是我们今天所学习的有关字典查字的两种方法。大家以后遇到不认识或不理解的字可要勤查字典噢！这样，我们就可以看更多的数、读更多的报、学更多的知识了。</p>
                <p style="text-align:center;">接下来是一个巩固小测验，我们一起来试试吧！</p>
            </div>
            <button id="button3" class="go-on">
                继续
            </button>
        </div>
        <div class="three">
            <h2 id="fourth">巩固小测验</h2>
            <iframe align="center" src="lianliankan.html" frameborder="no" height="550px" width="800px" scrolling="no"></iframe>
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
    $("#chenshuju").click(function () {
        $('#chenshu1').attr("color", "red");
        console.log("陈述句被点击！");
        console.log($('.chenshu').val);
    })
</script>


</html>