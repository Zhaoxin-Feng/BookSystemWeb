<?php

  function cek_data($username, $password) {
    global $connect;

    $password = md5($password);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    if ($result = mysqli_query($connect, $query)) {
      if (mysqli_num_rows($result) != 0) return true;
      else return false;
    }
  }

  function cek_login() {
    return (isset($_SESSION['user'])) ? true : false;
  }

  function cek_status($username) {
    global $connect;

    $query = "SELECT * FROM users WHERE username='$username'";

    if ($result = mysqli_query($connect, $query)) {
      while ($row = mysqli_fetch_assoc($result)) {
        $status = $row['status'];
      }
      return $status;
    }
  }

  function register_cek($username) {
    global $connect;

    $query = "SELECT * FROM users WHERE username='$username'";

    if ($result = mysqli_query($connect, $query)) {
      if (mysqli_num_rows($result) == 0) return true;
      else return false;
    }
  }


  function register_user($username, $password) {
    global $connect;

    $password = md5($password);

    $query = "INSERT INTO users(username, password, status) VALUES ('$username', '$password', 1)";
    return run($query);
  }

  //根据用户名查找用户索引
  function score_by_name($username) {
    $query = "SELECT * FROM users WHERE username='$username'";
    return result($query);
  }

  // 根据用户名添加分数
  function part1($username,$score) {
    $query = "UPDATE users SET part1='$score' WHERE username='$username'";
    run($query);
  }

  function part2($username,$score) {
    $query = "UPDATE users SET part2='$score' WHERE username='$username'";
    run($query);
  }
  function part3($username,$score) {
    $query = "UPDATE users SET part3='$score' WHERE username='$username'";
    run($query);
  }
  function part4($username,$score) {
    $query = "UPDATE users SET part4='$score' WHERE username='$username'";
    run($query);
  }
?>
