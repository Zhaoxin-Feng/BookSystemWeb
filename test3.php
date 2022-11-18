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
  <title>语法测试</title>
  <link rel="stylesheet" href="css/test3.css" />
  <script src="js/jquery.min.js"></script>
  <script>
    $(function () {
      var right = 1; //当前答案是否正确
      var n = 1; //当前题目编号
      const N = 15; //题目总量
      var question; //题干
      var key; //正确选项
      var user_array = new Object(); //用户已经做的题

      load_question();

      $('#next_question').click(function () {
        //load_question();
        right = check();
        if (n == 1 && right == 0) { //答题结束
          alert('您语法测试的得分是：'+0);
          window.location.href="select_test.php?part3="+0;
        } else if (n == 15 && right == 1) {
          alert('您语法测试的得分是：'+n);
          window.location.href="select_test.php?part3="+n;
        } else if (Object.getOwnPropertyNames(user_array).length == 12) {
          var right_array = new Array();
          for (const key in user_array) {
            if (user_array[key] == 1) {
              right_array.push(key);
            }
          }
          var max = right_array[0];
          for (let i = 0; i < right_array.length; i++) {
            if (right_array[i] > max) {
              max = right_array[i];
            }
          }
          window.location.href="select_test.php?part3="+max;
          alert('您语法测试的得分是：'+max);
        } else {
          console.log('1是否正确：' + right);
          n = next();
          console.log('下一题：' + n);
          load_question();
        };

      });

      function next() { //寻找下一题编号
        var Fibo = [1, 2]; //斐波那契数列数组
        for (var i = 2; i < 7; i++) {
          Fibo[i] = Fibo[i - 1] + Fibo[i - 2];
        };
        console.log(Fibo);
        var next;
        if (right == 1) {
          var num = N - n;
          console.log(num);
          for (var i = 0; i <= num; i++) {
            if (Fibo[i] <= num && Fibo[i + 1] > num) break;
          };
          next = Fibo[i] + n;
          while (user_array[next] != null && next != 15) {
            next++;
          }
          return next;
        } else if (right == 0) {
          num = n - 1;
          console.log(num);
          for (var i = 0; i <= num; i++) {
            if (Fibo[i] <= num && Fibo[i + 1] > num) break;
          };
          next = Fibo[i];
          //console.log(Fibo[i]);
          while (user_array[next] != null && next != 1) {
            next--;
          }
          return next;
        };
      };

      function load_question() { //显示题目
        var url = 'PHP/s3.php';
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
          console.log(n2[1]);
          console.log(question);
          key = n2[1];
          // 换题目
          $("#question").html(question);
          // 换图片（选项）
          $("#answerA").attr('src','imgs/test_img/3-'+n+'-A.jpg');
          $("#answerB").attr('src','imgs/test_img/3-'+n+'-B.jpg');
          $("#answerC").attr('src','imgs/test_img/3-'+n+'-C.jpg');
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
          console.log("用户已经做完" + Object.getOwnPropertyNames(user_array).length + "道题");
          console.log(user_array);
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
    <h1>语法测试</h1>
    <br />
    <h2>你的语法能力怎么样呢？</h2>
    <h2>让我们一起做一个简单的测试叭！</h2>
  </div>
  <div class="question1">
    <br />
    <br />
    <br />
    <br />
    <p id="question">1、妈妈（ ）在织毛衣。</p>
    <table class="answer1">
      <tr align="center" width="100%">
        <th><input type="radio" name="answer" value='1' />A</th>
        <th><input type="radio" name="answer" value='2' />B</th>
        <th><input type="radio" name="answer" value='3' />C</th>
        <th><input type="radio" name="answer" value='4' />D</th>
      </tr>
      <tr align="center" width="100%">
        <td><img id="answerA" src="imgs/test_img/3-1-A.jpg" width="80%" style="border-radius: 2em;"/></td>
        <td><img id="answerB" src="imgs/test_img/3-1-B.jpg" width="80%" style="border-radius: 2em;"/></td>
        <td><img id="answerC" src="imgs/test_img/3-1-C.jpg" width="80%" style="border-radius: 2em;"/></td>
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