<!DOCTYPE html>
<html>

<head>
 <meta charset="gbk">
  <title>��������һ����Ϸ</title>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>
<body>
  <html lang="en">
<head>
	<meta charset="gbk">
	<title>��������һ����Ϸ </title>

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

		<h1 id="title"> һ����Ϸ  </h1>

		<!-- Form fields wrapper -->
		<div id="wrapper" class="clearfix">

			<!-- Name -->
			<input type="text" class="has_icon" name="user" placeholder="�ǳ�" value="<?php echo $user;?>" required>
			<label class="icon-user" for="name"></label>

			<!-- Email -->
			<input type="email"  class="has_icon" name="email" placeholder="����" value="<?php echo $email;?>" required>
			<label class="icon-envelope" for="name"></label>

			<!-- Contact -->
			<textarea name="info" id="" placeholder="װx��Ϣ" value="<?php echo $info;?>" required></textarea>

			<!-- Submit -->
			<input id="submit" type="submit" value="����" onclick="return true;alert(1);" />


		</div>

	</form>

</body>
</html>

  <script src="js/index.js"></script>
<!-- 
/*
 *
 * @author ����
 * @Date   2016��6��19��
 * 
 */
-->
</body>

</html>