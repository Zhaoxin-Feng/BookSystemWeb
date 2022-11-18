<?php

  require_once "functions/init.php";

  // check user login, deny user to access add.php if cek_login === false
  if(cek_login() === false){
    header('Location: login.php');
  }

  require_once "view/header.php";

  $error = '';
  if(isset($_GET['part1'])!=null){
    $part1 = $_GET['part1'];
    part1($_SESSION['user'],$part1);
  }
  if(isset($_GET['part2'])!=null){
    $part2 = $_GET['part2'];
    part2($_SESSION['user'],$part2);
  }
  if(isset($_GET['part3'])!=null){
    $part3 = $_GET['part3'];
    part3($_SESSION['user'],$part3);
  }
  if(isset($_GET['part4'])!=null){
    $part4 = $_GET['part4'];
    part4($_SESSION['user'],$part4);
  }

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <title>测试选择页面</title>
    <link rel="stylesheet" type="text/css" href="css/costyle.css">
    <script src="js/jquery.min.js"></script>
    
</head>

<body>
    <!-- <nav class="navbar" style="height: 100px;">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo" >Graded Reading</a>
            <a href="#home" class="navbar__links" id="home-page" >学习资源</a>
            <a href="#home" class="navbar__links" id="home-page" >联系我们</a>
            <a href="#home" class="navbar__links" id="home-page" ><img src="imgs/个人中心.png" style="width: 25px;height: 25px;">个人中心</a>
        </div>
    </nav> -->
    <div class="testchoose">
    <br><br><br><br>
    <div style="text-align:center;color: white;">
        <p style="font-size: 3em;font-weight: bold;">从四个部分来测试你的阅读能力</p>
        <p style="font-size: 2em;">识字量、词汇量、句式理解、阅读理解</p>
    </div>
    <img src="imgs/61六一儿童节童年_读书讲故事.png" style="width: 250px;position:absolute;margin-left:10%;margin-top: 8%;">
    <div style="text-align:center;">
        <br><br><br><br><br>
        <button class="tb" onclick="window.location.href='test1.php';">识字量&nbsp;&nbsp;→</button>
        <br><br><br>
        <button class="tb" onclick="window.location.href='test2.php';">词汇量&nbsp;&nbsp;→</button>
        <br><br><br>
        <button class="tb" onclick="window.location.href='test3.php';">句式理解&nbsp;&nbsp;→</button>
        <br><br><br>
        <button class="tb" onclick="window.location.href='test4.php';">阅读理解&nbsp;&nbsp;→</button>
    </div>
    <img src="imgs/骑滑板车儿童节.png" style="width: 250px;position:absolute;margin-left:72%;margin-top: -19%;">
   </div>
   <br><br>
  
</body>
</html>