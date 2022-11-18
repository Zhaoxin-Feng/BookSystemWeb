<?php

  header("Content-Type: text/html;charset=utf-8");
  require_once "functions/init.php";

  if(cek_login() === false){
    header('Location: login.php');
  }

  require_once "view/header.php";

  $data = findAll2();

  $error = '';
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
		<?php while ($row = mysqli_fetch_assoc($data)):?>
			<img src="bookcase/img/<?php echo $row['imgtag2']?>.jpg" data-tags="<?php echo $row['tag2']?>"/>
		<?php endwhile; ?>
	</div>
	
</div>

<script src="bookcase/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="bookcase/js/filter-tags.js" type="text/javascript"></script>

</body>
</html>