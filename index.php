<!DOCTYPE html>
<html>

<head>
 <meta charset="gbk">
  <title>加入我们一起游戏</title>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
  <html lang="en">
<head>
	<meta charset="gbk">
	<title>加入我们一起游戏 </title>

	<!-- external styles -->
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/style2.css">


	<!-- jquery -->
	<script src="js/jquery-1.11.0.min.js"></script>
</head>

<body>

<div style="text-align:center;clear:both">
<?php

include './inc/config.php';
$utoken = $_SESSION['utoken']=mt_rand(1,10000000000);
$sql = "select * from userinfo where utoken='$utoken'";
$rs = $conn->Execute($sql);
if(!$rs->eof){
    $user = $rs -> Fields['user']->value;
    $email = $rs -> Fields['email']->value;
    $info = $rs -> Fields['info']->value;
}else{
    $user = '';
    $email = '';
    $info = '';
}

$_SESSION['user']=$user;
?>

</div>
	<!-- Contact form -->
	<form action="dologin.php" method="POST" id="contact" >

		<!-- Logo, title and informative content -->
		<div id="logo" class="bouncing">
			<em class="icon-food"></em>
		</div>

		<h1 id="title"> 一起游戏  </h1>

		<!-- Form fields wrapper -->
		<div id="wrapper" class="clearfix">

			<!-- Name -->
			<input type="text" class="has_icon" name="user" placeholder="昵称" value="<?php echo $user;?>" required>
			<label class="icon-user" for="name"></label>

			<!-- Email -->
			<input type="email"  class="has_icon" name="email" placeholder="邮箱" value="<?php echo $email;?>" required>
			<label class="icon-envelope" for="name"></label>

			<!-- Contact -->
			<textarea name="info" id="" placeholder="装x信息" value="<?php echo $info;?>" required></textarea>

			<!-- Submit -->
			<input id="submit" type="submit" value="进入" onclick="return true;alert(1);" />


		</div>

	</form>

</body>
</html>

  <script src="js/index.js"></script>
<!-- 
/*
 *
 * @author 鸽子
 * @Date   2016年6月19日
 * 
 */
-->
</body>

</html>