<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Graded Reading</title>
  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
  <?php 
  require_once "functions/init.php";
  require_once "view/header.php";
  ?>

  <!-- Hero Section -->
  <div class="hero" id="home">
    <div class="hero__container">
      <h1 class="hero__heading">“快来了解自己的<span>阅读水平</span>吧！”</h1>
      <p class="hero__description">Come and find out your reading level!</p>
      <button class="main__btn"><a href="select_test.php">参加测试</a></button>
    </div>
  </div>


  <!-- Services Section -->
  <div class="services" id="services">
    <h1>听听专家怎么说</h1>
    <div class="services__wrapper">
      <div class="services__card">
        <img src="imgs/person1.svg" width="50%" style="margin: 0 auto;">
        <br>
        <h2>梅维斯女士</h2>
        <p>“分级阅读是一个极有价值的提升学生阅读和思维能力的教学模式，因此是十分重要的。”</p>

      </div>
      <div class="services__card">
        <img src="imgs/person2.svg" width="50%" style="margin: 0 auto;">
        <br>
        <h2>德古拉先生</h2>
        <p>“本产品的测试准确性是令人震惊的，这对孩子阅读能力提升的方案制定起了很大帮助。”</p>
      </div>
      <div class="services__card">
        <img src="imgs/person3.svg" width="50%" style="margin: 0 auto;">
        <br>
        <h2>爱丽丝女士</h2>
        <p>“阅读是一个人的认知能力,理解能力,思维能力的起点，因此本产品具有巨大的应用潜力。”</p>
      </div>
      <div class="services__card">
        <img src="imgs/person4.svg" width="50%" style="margin: 0 auto;">
        <br>
        <h2>艾玛女士</h2>
        <p>“打破传统的购书方式，基于科学的儿童阅读认知方案，制定真正适合孩子的阅读能力提升计划。</p>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="main" id="about">
    <div class="main__container">
      <div class="main__img--container">
        <img src="imgs/icon4.svg" style="width:60% ;">
        <!-- <div class="main__img--card"><i class="fas fa-layer-group"></i></div> -->
      </div>
      <div class="main__content">
        <h1>01 产品开发流程</h1>
        <h2>了解项目完成过程</h2>
        <p>本项目于2022年3月份开始，陆续完成了主题确定、前期调研、测试题开发、用户端及服务端开发等。
        </p>
        <button class="main__btn"><a href="timeline.html">项目Timeline</a></button>
      </div>
    </div>
  </div>


  <!-- Features Section -->
  <div class="main" id="sign-up">
    <div class="main__container">
      <div class="main__content">
        <h1>02 书籍推荐</h1>
        <h2>个性化阅读书籍推荐</h2>
        <p>阅读能力测试后，综合识字量、词汇、句式、 阅读理解四部分进行分析，生成最适合的阅读书籍推荐。</p>
        <button class="main__btn"><a href="bookcase.php">图书总览</a></button>
      </div>
      <div class="main__img--container">
        <!-- <div class="main__img--card" id="card-2"> -->
        <!-- <i class="fas fa-users"></i> -->
        <img src="imgs/icon1.svg" style="width:60% ;">
      </div>
    </div>
  </div>
  </div>

  <!-- About Section -->
  <div class="main" id="about">
    <div class="main__container">
      <div class="main__img--container">
        <img src="imgs/icon5.svg" style="width:60% ;">
        <!-- <div class="main__img--card"><i class="fas fa-layer-group"></i></div> -->
      </div>
      <div class="main__content">
        <h1>03 游戏化学习</h1>
        <h2>游戏中的能力提升</h2>
        <p>平台中有一系列小游戏可供用户选择，在游戏当中学习，快速掌握相关知识。</p>
        <button class="main__btn"><a href="gamechoose.php">开始游戏</a></button>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <div class="footer__container">
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
  </div>

  <script src="./js/app.js"></script>
  <script src="./js/jquery.min.js"></script>
</body>

</html>