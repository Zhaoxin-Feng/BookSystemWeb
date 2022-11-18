<?php
$data = array
(   
   array("1、你能把汉字和图片匹配上吗？","2")   
);

$host = '127.0.0.1';
$db = 'php-article';
$user = 'root';
$pwd = '20030106';
$dsn = sprintf('mysql:host=%s;dbname=%s;', $host, $db);//主机名，数据库名字
$dbo = new PDO($dsn, $user, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));

//执行SELECT语句(statement)，显示所有题目
//写多行文本+自己起的名字
$sql = <<<SQL
  SELECT q.Qkey,q.Qorder,q.Qq 
  FROM question q
  WHERE Qtype='D'
SQL;
$stmt = $dbo->prepare($sql);//获取sql语句,prepare
$stmt->execute();//语句执行，select语句返回一个结果集
$order = 0;
while ($row = $stmt->fetch()) {//resultset数据集,执行一次fetch指针下移一次
   $Qq = $row['Qq'];
   $Qkey = $row['Qkey'];
   $Qorder = $row['Qorder'];
   // $data[$order] = array($Qq,$Qkey);
   $data[$order] = array($Qq,$Qkey);
   $order ++;
}
$stmt->closeCursor();//通知mysql关闭相应内存
//connection关闭

$en= isset($_REQUEST['en'])?$_REQUEST['en']:'-';//题目编号

$type=$_REQUEST['type'];
if('show'==$type){
   $m = $data[$en-1];
   echo $m[0],$m[1];
}


// <?php
// $data = array
// (   
//    '1'=>array("花生？","玉米？","大豆？","1"),
//    '2'=>array("辣椒？","红薯？","西瓜？","1"),
//    '3'=>array("太阳？","星星？","月亮？","3"),
//    // array("1、你能把汉字和图片匹配上吗？","2")   
// );

// // $host = '127.0.0.1';
// // $db = 'homework';
// // $user = 'root';
// // $pwd = '20030106';
// // $dsn = sprintf('mysql:host=%s;dbname=%s;', $host, $db);//主机名，数据库名字
// // $dbo = new PDO($dsn, $user, $pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));

// // //执行SELECT语句(statement)，显示所有题目
// // //写多行文本+自己起的名字
// // $sql = <<<SQL
// //   SELECT q.Qkey,q.Qorder,q.Qq 
// //   FROM question q
// // SQL;
// // $stmt = $dbo->prepare($sql);//获取sql语句,prepare
// // $stmt->execute();//语句执行，select语句返回一个结果集
// // $order = 0;
// // while ($row = $stmt->fetch()) {//resultset数据集,执行一次fetch指针下移一次
// //    $Qq = $row['Qq'];
// //    $Qkey = $row['Qkey'];
// //    $Qorder = $row['Qorder'];
// //    $data[$order] = array($Qq,$Qkey);
// //    $order ++;
// // }
// // $stmt->closeCursor();//通知mysql关闭相应内存
// // //connection关闭

// $en= isset($_REQUEST['en'])?$_REQUEST['en']:'-';//题目编号

// // $type=$_REQUEST['type'];
// // if('show'==$type){
//    $m = $data[$en];
//    echo $m[0],$m[1],$m[2],$m[3];
// // }



