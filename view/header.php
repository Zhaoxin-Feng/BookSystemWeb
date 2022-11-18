<head>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="view/style.css">
  <meta charset="UTF-8">
</head>

<nav>
  <ul>
    <div class="container">
      <li><a href="index.php">主页</a></li>
      <?php if (cek_login() === true): ?>
        <li><a href="#">Hello,<?= $_SESSION['user']; ?></a></li>
        <li class='logout'><a href="personal.php">个人中心</a></li>
        <li class='logout'><a href='logout.php'>退出登录</a></li>
      <?php endif; ?>
      <?php if (cek_login() === false): ?>
        <li><a href="register.php">注册</a></li>
        <li class='logout'><a href='login.php'>登录</a></li>
      <?php endif; ?>
    </div>
  </ul>
</nav>
