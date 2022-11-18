<?php
  require_once "functions/init.php";

  if(cek_login() === false){
    header('Location: login.php');
  }

  require_once "view/header.php";

  $error = '';

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
    <title>个人信息页面</title>
    <link rel="stylesheet" type="text/css" href="css/costyle.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/echarts.min.js"></script>
    
</head>

<body>
    <img src="imgs/雪人.png" style="width:200px;position:absolute;margin-left: 7%;margin-top: 15%;">
    <img src="imgs/鹿.png" style="width:200px;position:absolute;margin-left: 80%;margin-top: 30%;">
    <div class="personal">
        <br><br><br>
    <div style="text-align:center;">
        <br><br>
        <img src="imgs/小绿.png" style="width:150px;border-radius:50%"><br><br><br>
        <button class="pb" onclick="window.location.href='interests.php'">书籍推荐→</button>&nbsp;&nbsp;&nbsp; 
        <button class="pb" onclick="window.location.href='gamechoose.php'">学习资源→</button>
        <br>
    <br>
    </div>
    
    <br>
    <br>
    <div style="margin:0 atuo;">
        <table id="pt">
            <tr>
                <td id="pd">
                    <p style="font-size:2em;">识字量</p><input type="text" value="<?php echo $part1?>" >
                </td>
                <td id="pd">
                    <p style="font-size:2em;">词汇量</p><input type="text" value="<?php echo $part2?>">
                </td>
            </tr>
            <tr>
                <td id="pd">
                    <p style="font-size:2em;">句式理解</p><input type="text" value="<?php echo $part3 ?>">
                </td>
                <td id="pd">
                    <p style="font-size:2em;">阅读理解</p><input type="text" value="<?php echo $part4 ?>">
                </td>
            </tr>
        </table>
    </div>
    <div id="chart1" style="width: 80%; height: 400px;margin:0 auto;"></div>
</div>



    <!-- <div class="footer__container">
        <div class="footer__links">
          <div class="footer__link--wrapper">
            <div class="footer__link--items">
              <h2>About Us</h2>
              <a href="/sign__up">How it works</a> <a href="/">Testimonials</a>
              <a href="/">Careers</a> <a href="/">Terms of Service</a>
            </div>
            <div class="footer__link--items">
              <h2>Contact Us</h2>
              <a href="/">Contact</a> <a href="/">Support</a>
              <a href="/">Destinations</a>
            </div>
          </div>
          <div class="footer__link--wrapper">
            <div class="footer__link--items">
              <h2>Videos</h2>
              <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
              <a href="/">Agency</a>
            </div>
            <div class="footer__link--items">
              <h2>Social Media</h2>
              <a href="/">Instagram</a> <a href="/">Facebook</a>
              <a href="/">Youtube</a> <a href="/">Twitter</a>
            </div>
          </div>
        </div>
        <section class="social__media">
          <div class="social__media--wrap">
            <div class="footer__logo">
              <a href="/" id="footer__logo">Graded-Reading</a>
            </div>
            <p class="website__rights">© Graded-Reading 2022 All rights reserved</p>
          </div>
        </section>
      </div> -->
</body>


<script type="text/javascript">
  // 基于准备好的容器(这里的容器是id为chart1的div)，初始化echarts实例
  var chart1 = echarts.init(document.getElementById("chart1"));

  // 指定图表的配置项和数据
  var option = {
    // backgroundColor: "rgba(204,204,204,0.7 )",
     // 背景色，默认无背景	rgba(51,255,255,0.7)

    title: {
      text: "",
      link: "https://blog.csdn.net/gray_key",
      target: "blank",
      top: "5%",
      left: "3%",
      textStyle: {
        color: "#fff",
        fontSize: 20,
      },
    },

    radar: [
      {
        // 雷达图坐标系组件，只适用于雷达图。
        center: ["50%", "50%"], // 圆中心坐标，数组的第一项是横坐标，第二项是纵坐标。[ default: ['50%', '50%'] ]
        radius: 160, // 圆的半径，数组的第一项是内半径，第二项是外半径。
        startAngle: 90, // 坐标系起始角度，也就是第一个指示器轴的角度。[ default: 90 ]
        name: {
          // (圆外的标签)雷达图每个指示器名称的配置项。
          formatter: "{value}",
          textStyle: {
            fontSize: 15,
            color: "#000",
          },
        },
        nameGap: 15, // 指示器名称和指示器轴的距离。[ default: 15 ]
        splitNumber: 4, // (这里是圆的环数)指示器轴的分割段数。[ default: 5 ]
        shape: "circle", // 雷达图绘制类型，支持 'polygon'(多边形) 和 'circle'(圆)。[ default: 'polygon' ]
        axisLine: {
          // (圆内的几条直线)坐标轴轴线相关设置
          lineStyle: {
            color: "#fff", // 坐标轴线线的颜色。
            width: 1, // 坐标轴线线宽。
            type: "solid", // 坐标轴线线的类型。
          },
        },
        splitLine: {
          // (这里是指所有圆环)坐标轴在 grid 区域中的分隔线。
          lineStyle: {
            color: "#fff", // 分隔线颜色
            width: 2, // 分隔线线宽
          },
        },
        splitArea: {
          // 坐标轴在 grid 区域中的分隔区域，默认不显示。
          show: true,
          areaStyle: {
            // 分隔区域的样式设置。
            color: ["rgba(250,250,250,0.3)", "rgba(200,200,200,0.3)"], // 分隔区域颜色。分隔区域会按数组中颜色的顺序依次循环设置颜色。默认是一个深浅的间隔色。
          },
        },
        indicator: [
          {
            // 雷达图的指示器，用来指定雷达图中的多个变量（维度）,跟data中 value 对应
            name: "识字量", // 指示器名称
            max: 15, // 指示器的最大值，可选，建议设置
            //color: '#fff'                           // 标签特定的颜色。
          },
          {
            name: "词汇量",
            max: 15,
          },
          {
            name: "句式理解",
            max: 15,
          },
          {
            name: "阅读理解",
            max: 15,
          },
        ],
      },
    ],
    series: [
      {
        name: "雷达图", // 系列名称,用于tooltip的显示，legend 的图例筛选，在 setOption 更新数据和配置项时用于指定对应的系列。
        type: "radar", // 系列类型: 雷达图
        itemStyle: {
          // 折线拐点标志的样式。
          normal: {
            // 普通状态时的样式
            lineStyle: {
              width: 1,
            },
            opacity: 0.2,
          },
          emphasis: {
            // 高亮时的样式
            lineStyle: {
              width: 5,
            },
            opacity: 1,
          },
        },

        data: [
          {
            name: "男",
            value: [<?php echo $part1?>, <?php echo $part2?>, <?php echo $part3?>, <?php echo $part4?>],
            symbol: "circle",
            symbolSize: 5,
            label: {
              normal: {
                show: true,
                position: "top",
                distance: 5,
                color: "rgba(51,0,255,1)",
                fontSize: 14,
                formatter: function (params) {
                  return params.value;
                },
              },
            },
            itemStyle: {
              normal: {
                borderColor: "rgba(51,0,255,1)",
                borderWidth: 3,
              },
            },
            lineStyle: {
              normal: {
                opacity: 0.5,
              },
            },
            areaStyle: {
              normal: {
                color: "rgba(51,0,255,0.5)",
              },
            },
          },
        ],
      },
    ],
  };

  // 使用刚指定的配置项和数据显示图表
  chart1.setOption(option);
</script>
</html>