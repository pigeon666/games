
<?php 
include './inc/config.php';

if(isset($_POST['user']) && isset($_POST['email']) && isset($_POST['info'])){
$utoken = $_SESSION['utoken'];

$user = $_POST['user'];
$email = $_POST['email'];
$info = $_POST['info'];


$sql = "select * from userinfo where utoken='$utoken'";
$rs = $conn->Execute($sql);

if(!$rs->eof){
    $sql = "update userinfo set utoken='$utoken',user='$user',info='$info',email='$email' where utoken='$utoken'";
}else{
    $sql = "insert into userinfo (utoken,user,info,email) values('$utoken','$user','$info','$email');";
}
$rs = $conn->Execute($sql);

$_SESSION['user'] = $user;
header('location:./game.php');
} ?>
