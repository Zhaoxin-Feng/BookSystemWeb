<?php

  header("Content-Type: text/html;charset=utf-8");
  require_once "functions/init.php";

  if(cek_login() === false){
    header('Location: login.php');
  }

  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Graded Reading</title>
    <link rel="stylesheet" href="css/game_intro.css" />
  </head>
  <body>
    <hr />
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php require_once "view/header.php"; ?>
    <div class="begin">
      <h1>游戏化学习</h1>
    </div>

    <section>
      <br /><br /><br /><br />
      <div class="container">
        <h1 class="text">游戏化学习</h1>
      </div>

      <br />
    </section>
    <div class="begin">
      <p class="normal" style="color: #fff">
        <br />测试完成后，您可以选择进入不同板块进行学习、巩固和游戏，分为识字量训练、词汇量训练和句式训练。<br /><br />
        在游戏中学习能够更好地激发学生的学习兴趣，契合孩子好动、爱玩的天性，帮助孩子更深入地理解、运用知识。<br /><br />
      </p>
      <br />
    </div>

    <section>
      <p class="mouse-out mouse-out-down">识字量训练</p>
    </section>
    <div class="word">
      <table class="table_one">
        <tr>
          <th><img src="imgs/one.svg" class="img1" /></th>
          <th>
            <p class="p_one" style="text-decoration: none">
              在这一部分，孩子将通过在线网站进行交互式学习，了解汉字的构成、部首查字法等知识，并在最后通过连连看的游戏形式进行测验巩固，帮助孩子建立查阅字典的意识，有助于识字量的扩充
            </p>
          </th>
        </tr>
      </table>

      <br />
    </div>

    <section>
      <p class="mouse-out mouse-out-left">词汇量训练</p>
    </section>
    <div class="vacabulary">
      <table class="table_two">
        <tr>
          <th>
            <p class="p_two" style="text-decoration: none">
              在这一部分，孩子将通过在线网站进行交互式学习，了解词汇的构成、词汇的类别等知识，并深入认识名词、动词、形容词等重点实词的用法，在最后通过变色词的游戏形式进行测验巩固，帮助孩子从理论角度更深入地理解词汇
            </p>
          </th>
          <th>
            <img src="imgs/two.svg" class="img1" />
          </th>
        </tr>
      </table>

      <br />
    </div>

    <section>
      <p class="mouse-out mouse-out-up">句式训练</p>
    </section>
    <div class="sentence">
      <table class="table_one">
        <tr>
          <th><img src="imgs/three.svg" class="img1" /></th>
          <th>
            <p class="p_one" style="text-decoration: none">
              在这一部分，孩子将通过在线网站进行交互式学习，了解句子的构成、句子的类型等知识，并在最后通过打地鼠的游戏形式进行测验巩固，帮助孩子从构成上对句式了解地更加透彻
            </p>
          </th>
        </tr>
      </table>

      <br />
    </div>

    <!-- 
      A row of links helps the imagination.
      -->
    <section>
      <br />
      <br />

      <br />
      <br />
      <ul class="nav">
        <a class="mouse-out">游</a>
        <a class="mouse-out mouse-out-up">戏</a>
        <a class="mouse-out mouse-out-down">化</a>
        <a class="mouse-out mouse-out-up">学</a>
        <a class="mouse-out mouse-out-left">习</a>
      </ul>
    </section>
  </body>
</html>
