<?php
  require_once "functions/init.php";

  if (cek_login() === true) {
    header('Location: index.php');
  } else {
  $error = '';

  if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    // make sure if username and password is not empty
    if (!empty(trim($username).trim($password))) {
      // check if username taken
      if (register_cek($username)) {
        // register the user
        if (register_user($username, $password)) {
          $_SESSION['user'] = $username;
          header('Location: index.php');
        } else {
          $error = 'ada masalah saat daftar.';
        }
      } else {
        $error = 'nama yang didaftarkan sudah ada, pilih nama lain';
      }
    } else {
      $error = 'isi nama dan password';
    }

  }

  require_once "view/header.php";

?>

<div class="overlay">
    <form action="" method="post">
        <div class="con">
            <header class="head-form">
                <h2>注册</h2>
                <br>
                <p>在此输入您设置的用户名和密码</p>
            </header>
            <br>
            <div class="field-set">
                <span class="input-item">
                    <i class="fa fa-user-circle"></i>
                </span>
                <input class="form-input" name="username" id="txt-input" type="text" placeholder="@UserName" required>
                <br>
                <span class="input-item">
                    <i class="fa fa-key"></i>
                </span>
                <input class="form-input" type="password" id="txt-input" placeholder="@Password" name="password" required>
                <br>
                <button class="log-in" type="submit" name="submit" value="submit">注册</button>
            </div>
        </div>
    </form>
</div>

<?php } ?>

<style>
@font-face {
	font-family: xiaomaiti;
	src: url('fonts/xiaomaiti.ttf'),
		url('fonts/xiaomaiti.ttf');
}

* {
  font-family: 'xiaomaiti';
}

form {
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 2%;
    background-image: linear-gradient(-225deg, #ebddec 50%, #a1d1e2 50%);
}
form .con {
    display: -webkit-flex;
    display: flex;
  
    -webkit-justify-content: space-around;
    justify-content: space-around;
  
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
  
      margin: 0 auto;
}

header {
    margin: 2% auto 10% auto;
    text-align: center;
}
header h2 {
    font-size: 250%;
    color: #3e403f;
}
header p {letter-spacing: 0.05em;}

.input-item {
    background: #fff;
    color: #333;
    padding: 14.5px 0px 15px 9px;
    border-radius: 5px 0px 0px 5px;
}


input[class="form-input"]{
    width: 240px;
    height: 50px;
  
    margin-top: 2%;
    padding: 15px;
    
    font-size: 16px;
    color: #5E6472;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
    
}
input[id="txt-input"] {width: 250px;}
input:focus {
    transform: translateX(-2px);
    border-radius: 5px;
}

button {
    display: inline-block;
    color: #252537;
  
    width: 280px;
    height: 50px;
  
    padding: 0 20px;
    background: #fff;
    border-radius: 5px;
    
    outline: none;
    border: none;
  
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    
    margin: 7% auto;
    letter-spacing: 0.05em;
}
.submits {
    width: 48%;
    display: inline-block;
    float: left;
    margin-left: 2%;
}


button:hover {
    transform: translatey(3px);
    box-shadow: none;
}

button:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}

</style>
