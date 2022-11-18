<?php
  require_once "functions/init.php";

  if(cek_login() === false){
    header('Location: login.php');
  }

  require_once "view/header.php";

  $person = score_by_name($_SESSION['user']);
  while ($row = mysqli_fetch_assoc($person)) {
    $part1 = $row['part1'];
    $part2 = $row['part2'];
    $part3 = $row['part3'];
    $part4 = $row['part4'];
  }
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <title>游戏选择页面</title>
    <link rel="stylesheet" type="text/css" href="css/costyle.css">
    <script src="js/jquery.min.js"></script>
    
</head>

<script>
    $(function(){
        <?php if($part1 < 10 ){ ?>
        alert("根据您的阅读水平测试结果，建议您首先通过“字典查字”这个知识点提升识字量。");
        <?php }elseif( $part2 < 10){ ?>
        alert("根据您的阅读水平测试结果，建议您通过“词汇理解”这个知识点提升词汇量。");
        <?php }else{ ?>
        alert("根据您的阅读水平测试结果，建议您通过“句式学习”这个知识点完善对中文句式结构及类型的理解。");
        <?php } ?>
    });
</script>
<style>
body{
    background: url(imgs/background1.png);
    height:100%;
    width:100%;
    background-size:cover;
}
</style>
<body>
    <div class="gamechoose">
        <br><br><br><br><br>
    <div style="text-align:center;">
        <p style="font-size: 3em;font-weight: bold;">一起来玩游戏吧！</p>
    </div>
    <div style="text-align:center;">
        <table id="gt">
            <tr>
                <td id="gd">
                    <img src="imgs/连连看.jpg" style="width: 200px;height:150px">
                </td>
                <td id="gd">
                    <img src="imgs/变色词.jpg" style="width: 200px;height:150px">
                </td>
                <td id="gd">
                    <img src="imgs/打地鼠.jpg" style="width: 200px;height:150px">
                </td>
            </tr>

            <tr>
                <td id="gd">
                    <button class="gb" onclick="window.location.href='game2.php'">字典查字&nbsp;&nbsp;→</button>
                </td>
                <td id="gd">
                    <button class="gb" onclick="window.location.href='game3.php'">词汇理解&nbsp;&nbsp;→</button>
                </td>
                <td id="gd">
                    <button class="gb" onclick="window.location.href='game1.php'">句式学习&nbsp;&nbsp;→</button>
                </td>
            </tr>
        </table>
    </div>
    <br><br><br><br><br><br><br><br>
</div>

</body>
</html>