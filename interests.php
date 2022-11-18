<?php
  require_once "functions/init.php";

  if(cek_login() === false){
    header('Location: login.php');
  }

  require_once "view/header.php";

  $error = '';

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <title>兴趣选择页面</title>
    <link rel="stylesheet" type="text/css" href="css/costyle.css">
    <script src="js/jquery.min.js"></script>
    <script>
    function result(){
    var results=new Array();
    var answer=document.getElementsByName("answer1");
    for(var j=0;j<answer.length;j++){
            if(answer[j].checked){
                results.push(answer[j].value);
                }  
            }
    window.location.href="recommend.php?results="+results;
    // alert("你的兴趣爱好是："+results);
    }
    </script>
</head>
<style>
body{
    background: url(imgs/background2.png);
    height:100%;
    width:100%;
    background-size:cover;
}
</style>
<body>

    <div class="interestchoose" style="margin-top:100px;">
        <br><br><br><br><br>
    <div style="text-align:center;">
        <p style="font-size: 3em;font-weight: bold;">选择你的兴趣爱好</p>
    </div>
    <div style="text-align:center;">
        <table id="it">
            <tr>
                <td id="id"><label><img src="imgs/科学.png" class="ip"><br><input type="checkbox" name="answer1" value="Technology">科学</label></td>
                <td id="id"><label><img src="imgs/鹿.png" class="ip"><br><input type="checkbox" name="answer1" value="Tradition">传统文化</label></td>
                <td id="id"><label><img src="imgs/绘画.png" class="ip"><br><input type="checkbox" name="answer1" value="DIY">手工绘画</label></td>
                <td id="id"><label><img src="imgs/编程.png" class="ip"><br><input type="checkbox" name="answer1" value="Fairytales">童话</label></td>
            </tr>
            <tr>
                <td id="id"><label><img src="imgs/体育.png" class="ip"><br><input type="checkbox" name="answer1" value="Folklore">历史民俗</label></td>
                <td id="id"><label><img src="imgs/米老鼠米奇.png" class="ip"><br><input type="checkbox" name="answer1" value="LifeSkill">生活技能</label></td>
                <td id="id"><label><img src="imgs/音乐.png" class="ip"><br><input type="checkbox" name="answer1" value="Music">音乐</label></td>
                <td id="id"><label><img src="imgs/文学.png" class="ip"><br><input type="checkbox" name="answer1" value="Fairytales">文学</label></td>
            </tr>
        </table>
        <br>
        <br>
        <div><button type="button" onclick="result()" id="ib">确认提交</button></div>
    </div>
    

</div>
</body>
</html>