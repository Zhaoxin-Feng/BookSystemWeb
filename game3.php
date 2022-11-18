<?php
  require_once "functions/init.php";

  if(cek_login() === false){
    header('Location: login.php');
  }

  // require_once "view/header.php";

  $error = '';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>交互式词汇学习</title>
    <link rel="stylesheet" href="css/game3.css" />
  </head>
  <script type="text/javascript">
    var doc = document,
      docEl = doc.documentElement;
    docEl.className = docEl.className.replace(/(^|\s)no-js(\s|$)/, " js ");
  </script>
  <script src="js/responsive-nav.js"></script>
  <!-- <script src="jquery-smoove.js"></script> -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>

  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

  <body>
    <img src="imgs/zan.gif" id="good">
    <!-- <script src="http://responsive-nav.com/demo/responsive-nav.js"></script> -->

    <div role="navigation" id="nav">
      <ul>
        <li class="active"><a href="gamechoose.php">返回</a></li>
        <li><a href="#first">词义</a></li>
        <li><a href="#first">词的分类</a></li>
        <li><a href="#third">名词</a></li>
        <li><a href="#fourth">形容词</a></li>
        <li><a href="#fifth">动词</a></li>
      </ul>
    </div>

    <div role="main" class="main">
      <a href="#nav" id="toggle">Menu</a>
      <h1>词汇</h1>
      <p>词汇是一种语言里所有的（或特定范围的）词和固定短语的总和。</p>
      <br />

      <p style="margin: 0">
        词是由一个或几个词素构成的。词素分两种，一种叫<span class="intropro1"
          ><span class="intro0">词根</span
          ><span class="intro1"
            >指的是意义实在、在合成词内位置不固定的成词词素</span
          ></span
        >
        &nbsp &nbsp &nbsp ，一种叫<span class="intropro2"
          ><span class="intro2">词缀</span
          ><span class="intro3"
            >指的是词义虚化不实在、在合成词内位置固定在前或在后的不成词词素</span
          ></span
        >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 。
      </p>
      <p>
        例如：“桌子”中的<span id="firstpart" class="highlight">“桌”</span
        >是<span id="firstpart1">成词词素</span>，<span
          id="firstpart"
          class="highlight"
          >“子”</span
        >是<span id="firstpart1">词缀语素</span>。
      </p>
      <div><img src="imgs/table.jpg" width="30%" class="gif" /></div>
      <h2 id="first">词义</h2>
      <p>
        词义即词的语音形式所表达的意思，有很多词自身有多种含义，在<span
          id="firstpart"
          class="highlight"
          >不同的句子</span
        >中有<span id="firstpart1">不同的解释</span>。
      </p>
      <p>词义可分为以下三种：</p>
      <h3>[1] 本义</h3>
      <p>
        <span id="firstpart" class="highlight">本义</span>是指<span
          id="firstpart1"
          >词原来的、最初的意义</span
        >。例如：“日”的本义是“太阳”。
      </p>
      <div><img src="imgs/sun.gif" width="30%" class="gif" /></div>
      <h3>[2] 引申义</h3>
      <p>
        <span id="firstpart" class="highlight">引申义</span>是指<span
          id="firstpart1"
          >由词的本义推演派生出来的意义</span
        >。
      </p>
      <p>例如：“深”字有五个意义，查看下面的内容叭！</p>
      <p style="text-align: center;">
        <span id="firstpart" class="highlight">&nbsp&nbsp&nbsp这口井很深。 </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <span id="firstpart1">距离大 </span>
    </p>
    <p style="text-align: center;">
        <span id="firstpart" class="highlight"> &nbsp&nbsp&nbsp这本书很深奥。</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <span id="firstpart1">深奥 </span>&nbsp
    </p>
    <p style="text-align: center;">
        <span id="firstpart" class="highlight">&nbsp&nbsp&nbsp我们的友谊很深。 </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <span id="firstpart1">深厚 </span>&nbsp
    </p>
    <p style="text-align: center;">
        <span id="firstpart" class="highlight">&nbsp&nbsp&nbsp夜已经很深了。 </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <span id="firstpart1">时间长 </span>&nbsp
    </p>
    <p style="text-align: center;">
        <span id="firstpart" class="highlight">&nbsp&nbsp&nbsp这种面的颜色很深。 </span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <span id="firstpart1">浓重 </span>&nbsp
    </p>
        <h3>[3] 比喻义</h3>
        <p>
          <span id="firstpart" class="highlight">比喻义</span>是指<span
            id="firstpart1"
            >由词的本义的比喻用法而产生的新词义</span
          >。
        </p>

        <table
          class="tableone"
          margin: 0 auto;
        
          align="center"
          style="font-size: 1.5em; margin: 0 auto"
        >
          <tr bgcolor="#0881f1" align="center" width="100%" style="color:white ;">
            <th>&nbsp&nbsp词汇&nbsp&nbsp</th>
            <th>本义</th>
            <th>&nbsp&nbsp比喻义&nbsp&nbsp</th>
          </tr>
          <tr bgcolor="#aad6ff" align="center" width="100%">
            <td>坎坷</td>
            <td>道路坑坑洼洼</td>
            <td>人生不得志</td>
          </tr>
          <tr bgcolor="white" align="center" width="100%">
            <td>果实</td>
            <td>&nbsp&nbsp植物体的一部分&nbsp&nbsp</td>
            <td>劳动得到的收获</td>
          </tr>
          <tr bgcolor="#aad6ff" align="center" width="100%">
            <td>包袱</td>
            <td>布包儿</td>
            <td>&nbsp&nbsp影响思想或行动的负担&nbsp&nbsp</td>
          </tr>
          <tr bgcolor="white" align="center" width="100%">
            <td>迷雾</td>
            <td>浓厚的雾</td>
            <td>让人迷失方向的事</td>
          </tr>
        </table>

        <br />
        <h3>【练习】</h3>
        <p>请选择下面5句话中“冒”字的含义</p>
        <p>
          （1）他气得快冒烟了。(<span>
            <select class="select1" name="first">
              <!--下拉列表框-->
              <option value="one">涌出、露出</option>
              <option value="two" selected="selected">顶着、不顾</option>
              <option value="three">以假的充真的</option>
            </select> </span
          >)。
        </p>
        <p>
          （2）妈妈冒雨来接我。(<span>
            <select class="select2" name="first">
              <!--下拉列表框-->
              <option value="one">涌出、露出</option>
              <option value="two" selected="selected">顶着、不顾</option>
              <option value="three">以假的充真的</option>
            </select> </span
          >)。
        </p>
        <p>
          （3）我们不要买冒牌商品。(<span>
            <select class="select3" name="first">
              <!--下拉列表框-->
              <option value="one">涌出、露出</option>
              <option value="two" selected="selected">顶着、不顾</option>
              <option value="three">以假的充真的</option>
            </select> </span
          >)。
        </p>
        <p>
          （4）我哥哥最爱冒险了。(<span>
            <select class="select4" name="first">
              <!--下拉列表框-->
              <option value="one">涌出、露出</option>
              <option value="two" selected="selected">顶着、不顾</option>
              <option value="three">以假的充真的</option>
            </select> </span
          >)。
        </p>
        <p>
          （5）小草从泥土里冒了出来。(<span>
            <select class="select5" name="first">
              <!--下拉列表框-->
              <option value="one">涌出、露出</option>
              <option value="two" selected="selected">顶着、不顾</option>
              <option value="three">以假的充真的</option>
            </select> </span
          >)。
        </p>

        <button id="button1" class="go-on">继续</button>

        <div class="one">
          <h2 id="second">词的分类</h2>
          <p>
            <span id="firstpart" class="highlight">实词</span
            >是<span id="firstpart1">有实在意义的词</span>，可以独立充当句子成分，一般可以单独回答问题。每一个实词都可以详细解说其词义，现代汉语中的<span
              id="firstpart"
              class="highlight"
              >实词</span
            >一般分为<span id="firstpart1">名词、动词、形容词、数词、量词、代词</span>六类。
          </p>
          <p>
            无论在现代汉语中还是在文言文中，实词都带有绝对多的数量，因为<span id="firstpart" class="highlight">语言的基本作用是表意</span
            >，<span id="firstpart1">离开有实际意义的实词，这一作用将很难达到</span>。
          </p>
          <div><img src="imgs/kind.png" width="30%" class="gif" /></div>
         
          <br />
          <br />
          <button id="button2" class="go-on">继续</button>
        </div>
        <div class="two">
          <h2 id="third">名词</h2>
        
            <p style="margin: 0">
              名词表示<span class="intropro1"
                ><span class="intro0">人</span
                ><span class="intro1"
                  >工人、学生</span
                ></span>
              &nbsp &nbsp &nbsp 、<span class="intropro2"
                ><span class="intro2">事物（抽象事物和具体事物）</span
                ><span class="intro3"
                  >河流、黄瓜、计算机、思想、质量、友谊</span
                ></span>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp 、<span class="intropro2"
                ><span class="intro2">时间</span
                ><span class="intro3"
                  >大寒、未来、下午、秋天</span
                ></span>
                &nbsp &nbsp &nbsp 、<span class="intropro2"
                ><span class="intro2">处所</span
                ><span class="intro3"
                  >家、学校</span
                ></span>
                &nbsp &nbsp &nbsp 、<span class="intropro2"
                ><span class="intro2">方位</span
                ><span class="intro3"
                  >上、下、左、右、东北</span
                >等的名称。
            </p>
            <div><img src="imgs/nun.png" width="100%" class="gif" /></div>
            <br />
        <h3>【练习】</h3>
            <p>请选择下列词语的类别</p>
            <p>
              （1）桌子(<span>
                <select class="select31" name="first">
                  <!--下拉列表框-->
                  <option value="one">人的名称</option>
                  <option value="two" selected="selected">具体事物</option>
                  <option value="three">抽象事物</option>
                  <option value="three">时间名称</option>
                  <option value="three">处所名称</option>
                  <option value="three">方位名称</option>
                </select> </span>)
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            
              （2）鲁迅(<span>
                <select class="select32" name="first">
                  <!--下拉列表框-->
                  <option value="one">人的名称</option>
                  <option value="two" selected="selected">具体事物</option>
                  <option value="three">抽象事物</option>
                  <option value="three">时间名称</option>
                  <option value="three">处所名称</option>
                  <option value="three">方位名称</option>
                </select> </span>)
            </p>
            <p>
              （3）下午(<span>
                <select class="select33" name="first">
                  <!--下拉列表框-->
                  <option value="one">人的名称</option>
                  <option value="two" selected="selected">具体事物</option>
                  <option value="three">抽象事物</option>
                  <option value="three">时间名称</option>
                  <option value="three">处所名称</option>
                  <option value="three">方位名称</option>
                </select> </span>)
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
              （4）东南(<span>
                <select class="select34" name="first">
                  <!--下拉列表框-->
                  <option value="one">人的名称</option>
                  <option value="two" selected="selected">具体事物</option>
                  <option value="three">抽象事物</option>
                  <option value="three">时间名称</option>
                  <option value="three">处所名称</option>
                  <option value="three">方位名称</option>
                </select> </span>)
            </p>
            <p>
              （5）走势(<span>
                <select class="select35" name="first">
                  <!--下拉列表框-->
                  <option value="one">人的名称</option>
                  <option value="two" selected="selected">具体事物</option>
                  <option value="three">抽象事物</option>
                  <option value="three">时间名称</option>
                  <option value="three">处所名称</option>
                  <option value="three">方位名称</option>
                </select> </span>)
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
              （6）操场(<span>
                <select class="select36" name="first">
                  <!--下拉列表框-->
                  <option value="one">人的名称</option>
                  <option value="two" selected="selected">具体事物</option>
                  <option value="three">抽象事物</option>
                  <option value="three">时间名称</option>
                  <option value="three">处所名称</option>
                  <option value="three">方位名称</option>
                </select> </span>)
            </p>
<br>
<br>    
<br>
<br>      
          <button id="button3" class="go-on">继续</button>
        </div>
        <div class="three">
          <h2 id="fourth">形容词</h2>
          <p>
            <span>形容词是表示</span><span id="firstpart" class="highlight">人或事物</span>的<span
              id="firstpart1"
              >形状、性质</span
            >或者<span id="firstpart" class="highlight">动作、行为、发展变化</span>的<span
            id="firstpart1"
            >状态</span
          >的词。
          </p>
          <br /><br />
<h3>[两个作用]</h3>
<table
          class="tableone"
          margin: 0 auto;
        
          align="center"
          style="font-size: 1.5em; margin: 0 auto"
        >
          <tr bgcolor="#0881f1" align="center" width="100%" style="color:white ;">
            <th>作用一</th>
            <th>作用二</th>
          </tr>
          <tr bgcolor="#aad6ff" align="center" width="100%">
            <td>形容词常常加在名词或名词性短语的前面，起修饰的作用，如：大草原、红苹果、宏伟的建筑、庄严的毕业典礼；在形容词的后面，常常会加上“的”</td>
            <td>形容词也可以加在动词或动词性短语的前面，起修饰的作用，如：快乐地唱歌、勤奋地工作、细心地照顾；这类形容词后面，常常会加上“地”</td>
          </tr>
        </table>
        <br />
        <br />
        <br />
        <h3>【练习】</h3>
        <p>请选择合适的形容词</p>
        <p>
          （1）(<span>
            <select class="select41" name="first">
              <!--下拉列表框-->
              <option value="one">漆黑的</option>
              <option value="two" selected="selected">高声地</option>
              <option value="three">默默地</option>
              <option value="three">嘈杂的</option>
              <option value="three">璀璨的</option>
              <option value="three">专心地</option>
            </select> </span>)人声
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        
          （2）(<span>
            <select class="select42" name="first">
              <!--下拉列表框-->
              <option value="one">漆黑的</option>
              <option value="two" selected="selected">高声地</option>
              <option value="three">默默地</option>
              <option value="three">嘈杂的</option>
              <option value="three">璀璨的</option>
              <option value="three">专心地</option>
            </select> </span>)山洞
        </p>
        <p>
          （3）(<span>
            <select class="select43" name="first">
              <!--下拉列表框-->
              <option value="one">漆黑的</option>
              <option value="two" selected="selected">高声地</option>
              <option value="three">默默地</option>
              <option value="three">嘈杂的</option>
              <option value="three">璀璨的</option>
              <option value="three">专心地</option>
            </select> </span>)耕耘
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          （4）(<span>
            <select class="select44" name="first">
              <!--下拉列表框-->
              <option value="one">漆黑的</option>
              <option value="two" selected="selected">高声地</option>
              <option value="three">默默地</option>
              <option value="three">嘈杂的</option>
              <option value="three">璀璨的</option>
              <option value="three">专心地</option>
            </select> </span>)烟花
        </p>
        <p>
          （5）(<span>
            <select class="select45" name="first">
              <!--下拉列表框-->
              <option value="one">漆黑的</option>
              <option value="two" selected="selected">高声地</option>
              <option value="three">默默地</option>
              <option value="three">嘈杂的</option>
              <option value="three">璀璨的</option>
              <option value="three">专心地</option>
            </select> </span>)上课
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          （6）(<span>
            <select class="select46" name="first">
              <!--下拉列表框-->
              <option value="one">漆黑的</option>
              <option value="two" selected="selected">高声地</option>
              <option value="three">默默地</option>
              <option value="three">嘈杂的</option>
              <option value="three">璀璨的</option>
              <option value="three">专心地</option>
            </select> </span>)歌唱
        </p>
        <br>
        <br>
        <br>
                  <button id="button4" class="go-on">继续</button>
          <br />
         
        </div>
        <div class="four">
          <h2 id="fourth">动词</h2>
          <p>
            <span id="firstpart" class="highlight">动词</span>是表示<span
              id="firstpart1"
              >动作、行为、发展、变化、心理活动、判断</span
            >的词。
          </p>
          <br /><br />
          <h3>[看图猜动词]</h3>
          <table
          class="tableone"
          margin: 0 auto;
        
          align="center"
          style="font-size: 1.5em; margin: 0 auto"
        >
          <tr  align="center" width="100%" style="color:white ;">
            <th><img src="imgs/tai.jpg" width="50%" class="gif" /></th>
            <th><button id="abutton" class="go-on">?</button></th>
          </tr>
          <tr align="center" width="100%">
            <td><img src="imgs/tiao.jpg" width="50%" class="gif" /></td>
            <td><button id="bbutton" class="go-on">?</button></td>
          </tr>
          <tr align="center" width="100%">
            <td><img src="imgs/chi.jpg" width="50%" class="gif" /></td>
            <td><button id="cbutton" class="go-on">?</button></td>
          </tr>
        </table>
          
            <br><br>
            <button id="button5" class="go-on">继续</button>
      </div>
      <div class="five" id="main">
        <h2>小测试</h2>
        <br><br><br><br><br>
        <div id="wrap">
          <div id="header">
            <div id="title">倒计时:</div>
            <div id="count_">总分:</div>
          </div>
          <div id="content">
            <div id="remind"></div>
            <div id="message" style="text-align: center;">
              根据上面的词语从下面选择正确的字<br>选择正确自动开始
            </div>
            <div id="information"></div>
          </div>
        </div>
       </div>

          <br><br>
         
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
    var button4_text = true;
    var button5_text = true;
    var abutton_text = true;
    var bbutton_text = true;
    var cbutton_text = true;

    $("#button1").click(function () {
      $(".one").slideToggle();
      var obj = document.getElementById("button1");
      if (button1_text) {
        obj.innerHTML = "返回";
        button1_text = false;

        if ($(".select1").get(0).selectedIndex == 0 && $(".select2").get(0).selectedIndex == 1 && $(".select3").get(0).selectedIndex == 2&& $(".select4").get(0).selectedIndex == 1 && $(".select5").get(0).selectedIndex == 0) {
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
      var obj = document.getElementById("button2");
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
      var obj = document.getElementById("button3");
      if (button3_text) {
        obj.innerHTML = "返回";
        button3_text = false;
        if ($(".select31").get(0).selectedIndex == 1 && $(".select32").get(0).selectedIndex == 0 && $(".select33").get(0).selectedIndex == 3&& $(".select34").get(0).selectedIndex == 5 && $(".select35").get(0).selectedIndex == 2&& $(".select36").get(0).selectedIndex == 4) {
                $('#good').slideToggle();
                console.log('成功！');
                setTimeout(function () { $('#good').slideToggle(); }, 3000);
                $('body').append('<embed src="mp3/good.mp3" autostart="true" hidden="true" loop="false">');
            }
      } else {
        obj.innerHTML = "继续";
        button3_text = true;
      }
    });
    $("#button4").click(function () {
      $(".four").slideToggle();
      var obj = document.getElementById("button4");
      if (button4_text) {
        obj.innerHTML = "返回";
        button4_text = false;
        if ($(".select41").get(0).selectedIndex == 3 && $(".select42").get(0).selectedIndex == 0 && $(".select43").get(0).selectedIndex == 2&& $(".select44").get(0).selectedIndex == 4 && $(".select45").get(0).selectedIndex == 5&& $(".select46").get(0).selectedIndex == 1) {
                $('#good').slideToggle();
                console.log('成功！');
                setTimeout(function () { $('#good').slideToggle(); }, 3000);
                $('body').append('<embed src="mp3/good.mp3" autostart="true" hidden="true" loop="false">');
            }
      } else {
        obj.innerHTML = "继续";
        button4_text = true;
      }
    });
    
    $("#button5").click(function () {
      $(".five").slideToggle();
      var obj = document.getElementById("button5");
      if (button5_text) {
        obj.innerHTML = "返回";
        button5_text = false;
      } else {
        obj.innerHTML = "继续";
        button5_text = true;
      }
    });

    $("#abutton").click(function () {
      var obj = document.getElementById("abutton");
      if (abutton_text) {
        obj.innerHTML = "抬";
        abutton_text = false;
      } 
    });
    $("#bbutton").click(function () {
      var obj = document.getElementById("bbutton");
      if (bbutton_text) {
        obj.innerHTML = "跳";
        bbutton_text = false;
      } 
    });
    $("#cbutton").click(function () {
      var obj = document.getElementById("cbutton");
      if (cbutton_text) {
        obj.innerHTML = "吃";
        cbutton_text = false;
      } 
    });
    $("#chenshuju").click(function () {
      $("#chenshu1").attr("color", "red");
      console.log("陈述句被点击！");
      console.log($(".chenshu").val);
    });


  //定义颜色和字符数组
  var color = ['red', 'blue', 'pink', 'purple', 'orange'];
		var character = ['汹', '港', '演', '散', '荒'];
		var color1 = ['red', 'blue', 'pink', 'purple', 'orange'];
		var character1 = ['涌', '口', '绎', '落', '谬'];
		//创建信息框
		var remind = document.getElementById('remind');
		var inform_ = [];
		var count = 0;
		var time = 20;
		var a = 0;
		for(i = 0; i < character.length; i++) {
			var information = document.getElementById('information');
			var inform = document.createElement('div');
			inform.style.border = '1px solid yellowgreen';
			inform.style.width = '18%';
			inform.style.margin = '2px';
			inform.style.marginTop = '10px';
			inform.style.lineHeight = '60px';
			inform.style.height = '60px';
			inform.style.textAlign = 'center';
			inform.style.fontSize = '2rem';
			inform.style.display = 'inline-block';
			inform.onclick = click;
			inform_.push(inform);
			information.appendChild(inform);
		}
		//功能实现
		function random() {
			color = color.sort(function() {
				return Math.random() - 0.5;
			});
			color1 = color1.sort(function() {
				return Math.random() - 0.5;
			});
			character = character.sort(function() {
				return Math.random() - 0.5;
			});
			character1 = character1.sort(function() {
				return Math.random() - 0.5;
			});
			remind.style.color = color[2];
			remind.innerHTML = character[4];
			for(i = 0; i < color.length; i++) {
				inform_[i].innerHTML = character1[i];
				inform_[i].style.color = color1[i];
			}

		}
		random();
		var count_ = document.getElementById('count_');
		coun = count_.innerHTML;

		function click() {
			var char_inform = this.innerHTML;
			if(time != 0) {
				if(char_inform == '谬' && remind.innerHTML == '荒') {
					random();
					count++;
				} else if(char_inform == '落' && remind.innerHTML == '散') {
					random();
					count++;
				} else if(char_inform == '涌' && remind.innerHTML == '汹') {
					random();
					count++;
				} else if(char_inform == '口' && remind.innerHTML == '港') {
					random();
					count++;
				} else if(char_inform == '绎' && remind.innerHTML == '演') {
					random();
					count++;
				}
				count_.innerHTML = coun + count + '分';

				if(count == 1) {
					a++;
					if(a == 1) {
						cut_down();
					}
				}
			}
			console.log(count)
		}
		var timer = null;

		var title = document.getElementById('title');
		titl = title.innerHTML;
		title.innerHTML = titl + time + 's';

		function cut_down() {
			if(time >= 0) {
				timer = setInterval(function() {
					time--;
					title.innerHTML = titl + time + 's';
					console.log(time);
					if(time == 0) {
						alert('游戏结束');
						clearInterval(timer)
							//							history.go('0');
					}
				}, 1000)
			}
		}
  


  </script>
</html>
