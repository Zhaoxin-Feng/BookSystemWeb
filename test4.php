<?php
  require_once "functions/init.php";

  if(cek_login() === false){
    header('Location: login.php');
  }

  require_once "view/header.php";

  $error = '';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>阅读测试</title>
  <link rel="stylesheet" href="./css/test4.css" />
  <script src="js/jquery.min.js"></script>
  <script>
    $(function () {
      var right = 1; //当前答案是否正确
      var n = 1; //当前题目编号
      const N = 15; //题目总量
      //var question; //题干
      var key; //正确选项
      var user_array = new Object(); //用户已经做的题
      var user_right=0;//正确题目数量

      load_question();

      $('#next_question').click(function () {
        right = check();
        n++;
        load_question();
        if(n==15){//做完15道题，答题结束
          alert('您阅读测试的得分是：'+user_right);
          window.location.href="select_test.php?part4="+user_right;
        }

      });

      function change_big_pic(){
        if(n==2){
          $("#big_question").attr('src','imgs/test_img/44-2.jpg');
        }else if(n==3){
          $("#big_question").attr('src','imgs/test_img/44-3.jpg');
        }else if(n==4){
          $("#big_question").attr('src','imgs/test_img/44-4.jpg');
        }else if(n==5){
          $("#big_question").attr('src','imgs/test_img/44-4.jpg');
        }else if(n==6){
          $("#big_question").attr('src','imgs/test_img/44-5.jpg');
        }else if(n==11){
          $("#big_question").attr('src','imgs/test_img/44-6.jpg');
        }else if(n==13){
          $("#big_question").attr('src','imgs/test_img/44-7.jpg');
        }
      }

      function load_question() { //显示题目
        var url = 'PHP/s4.php';
        var data = {
          type: 'show',
          en: n
        };
        $.ajax({
          async: true,
          'type': 'POST',
          'url': url,
          'data': data
        }).done(function (msg) {
          var m = JSON.stringify(msg);
          console.log(m);
          var n2 = m.split('？');
          n2[0] = n2[0].replace('"', '');
          n2[1] = n2[1].replace('"', '');
          question = n2[0];
          question = n2[0].replace("\\",'');
          question = question.replace("\\",'');
          //console.log(n2[1]);
          //console.log(question);
          key = n2[1];
          console.log(key);
          change_big_pic();
          $("#question").html(question);
          // 换图片（选项）
          $("#answerA").attr('src','imgs/test_img/4-'+n+'-A.jpg');
          $("#answerB").attr('src','imgs/test_img/4-'+n+'-B.jpg');
          $("#answerC").attr('src','imgs/test_img/4-'+n+'-C.jpg');
        }).fail(function (msg, txt) {
          var m = JSON.stringify(msg);
          alert(m + '\n\n\n' + txt);
        });
        return false;
      };

      function check() { //判断当前选项是否正确
        var val = $(":radio[name='answer']:checked").val();
        console.log('当前选项：' + val);
        if (val == key) {
          right = 1;
          console.log('是否正确：' + right);
          //user_array.n=1;
          user_array['' + n] = 1;
          user_right++;
          console.log("用户已经做完" + Object.getOwnPropertyNames(user_array).length + "道题");
          console.log(user_right);
          return right;
        } else {
          right = 0;
          console.log('是否正确：' + right);
          user_array['' + n] = 0;
          console.log("用户已经做完" + Object.getOwnPropertyNames(user_array).length + "道题");
          console.log(user_array);
          return right;
        };
      };
    });
  </script>

</head>

<body>
  <!-- <nav class="navbar">
    <div class="navbar__container">
      <a href="#home" id="navbar__logo">Graded Reading</a>
      <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span> <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="navbar__menu">
        <li class="navbar__item">
          <a href="#home" class="navbar__links" id="home-page">Home</a>
        </li>
      </ul>
    </div>
  </nav> -->
  <div class="up">
    <br />
    <h1>阅读测试</h1>
    <br />
    <h2>你的阅读能力怎么样呢？</h2>
    <h2>让我们一起做一个简单的测试叭！</h2>
  </div>
    <br />
    <br />
    <br />
    <br />
  <div class="question1">    
    <br/>
    <!-- 大题题干 -->
    <div style="text-align:center;">
      <img id="big_question" src="imgs/test_img/44-1.jpg" width="60%">
    </div>
    <!-- 小题题干 -->
    <div style="text-align:center">
    <p id="question">1、猜一猜，这是什么</p>
    </div>
    <table class="answer1">
      <tr align="center" width="100%">
        <th><input type="radio" name="answer" value='1' />A</th>
        <th><input type="radio" name="answer" value='2' />B</th>
        <th><input type="radio" name="answer" value='3' />C</th>
        <th><input type="radio" name="answer" value='4' />D</th>
      </tr>
      <tr align="center" width="100%">
        <td><img id="answerA" src="imgs/test_img/4-1-A.jpg" width="100%" style="border-radius: 2em;"/></td>
        <td><img id="answerB" src="imgs/test_img/4-1-B.jpg" width="100%" style="border-radius: 2em;"/></td>
        <td><img id="answerC" src="imgs/test_img/4-1-C.jpg" width="100%" style="border-radius: 2em;"/></td>
        <td>不知道</td>
      </tr>
    </table>
  </div>
  
  <div class="mybutton">
    <button class="main__btn" id="next_question" style="display: block; margin: 0 auto" type="submit"
      value="Submit"><a>下一题</a></button>
  </div>
</body>

</html>