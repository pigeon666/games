<?php 

include './inc/config.php';
check();
?>



<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Games</title>

    <link rel="stylesheet" href="css/style3.css" media="screen" type="text/css" />

</head>

<body>
<h1>��ӭ <a href="change.php"><?php $user = $_SESSION['user']; echo $user;?></a> ������Ϸ<h1>
  <div id="canvasContainer"></div>
<span id="textInputSpan">
</span>
<div style="text-align:center;clear:both"></div>
  <script src="js/index2.js"></script>

</body>

</html>