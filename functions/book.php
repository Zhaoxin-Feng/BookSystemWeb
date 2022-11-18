<?php

  // function to run query
  function run($query) {
    global $connect;

    if(mysqli_query($connect, $query)) return true;
    else return false;
  }

  function result($query) {
    global $connect;

    if ($result = mysqli_query($connect, $query) or die("gagal menampilkan data")) {
      return $result;
    }
  }

  // 显示图片和标签
  function findAll2() {
    $query = "SELECT * FROM book2";
    return result($query);
  }

  function findAll() {
    $query = "SELECT * FROM book";
    return result($query);
  }

    //根据等级和用户兴趣推荐图书
    function sort2($level,$results1) {
      $query = "SELECT * FROM book2 WHERE level2='$level' AND tag2 LIKE '$results1'";
      return result($query);
    }
  

?>
