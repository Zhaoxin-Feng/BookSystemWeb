<?php

  header("Content-Type: text/html;charset=utf-8");
  require_once "functions/init.php";

  if(cek_login() === false){
    header('Location: login.php');
  }

  require_once "view/header.php";

  // $data = findAll2();


  $person = score_by_name($_SESSION['user']);
  while ($row = mysqli_fetch_assoc($person)) {
    $part1 = $row['part1'];
    $part2 = $row['part2'];
    $part3 = $row['part3'];
    $part4 = $row['part4'];
  }
  $total_score = 0.3*$part1 + 0.3*$part2 + 0.2*$part3 + 0.2*$part4;
  if($total_score<=5){
    $level='A';
  }elseif($total_score<=10){
    $level='B';
  }else{
    $level='C';
  }
  // $recommend = new Array();
  $results = explode(',',$_GET['results']);
  // echo $results[0];
  $size = count($results);

  $recommend = sort2($level,$results[0]);
  $item[0] = $recommend;
  for ($i=1; $i<= $size - 1; $i++)
{
  $item[$i] = sort2($level,$results[$i]);
}
  

  // foreach ($results as $result) {
  //   $item = sort($level,$result);
  //   $recommend = array_map('array_merge',$recommend,$item);
  // }
  // $recommend = array_unique($recommend);
  
?>

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>图书库</title>
<link rel="stylesheet" type="text/css" href="bookcase/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="bookcase/css/demo.css">
<link rel="stylesheet" href="bookcase/css/style.css" />
</head>

<body>
<div style="padding:2em 0;">

	<div id="buttons"></div>
	<div id="gallery">
    <?php for ($i=0; $i<= $size - 1; $i++){ ?>
		<?php while ($row = mysqli_fetch_assoc($item[$i])):?>
			<img src="bookcase/img/<?php echo $row['imgtag2']?>.jpg" data-tags="<?php echo $row['tag2']?>"/>
		<?php endwhile; ?>
    <?php } ?>
	</div>
	
</div>

<script src="bookcase/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="bookcase/js/filter-tags.js" type="text/javascript"></script>

</body>
</html>