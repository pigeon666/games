<?php 
include './inc/config.php';
function getIP() { 
if (getenv('HTTP_CLIENT_IP')) { 
    $ip = getenv('HTTP_CLIENT_IP'); 
} 
elseif (getenv('HTTP_X_FORWARDED_FOR')) { 
    $ip = getenv('HTTP_X_FORWARDED_FOR'); 
} 
elseif (getenv('HTTP_X_FORWARDED')) { 
    $ip = getenv('HTTP_X_FORWARDED'); 
} 
elseif (getenv('HTTP_FORWARDED_FOR')) { 
    $ip = getenv('HTTP_FORWARDED_FOR'); 
} 
elseif (getenv('HTTP_FORWARDED')) { 
    $ip = getenv('HTTP_FORWARDED'); 
} 
else { 
    $ip = $_SERVER['REMOTE_ADDR']; 
} 
return $ip; 
} 

$ip =  getIP();
$utoken = $_SESSION['utoken'];
$sql = "update userinfo set lastUpdateIp='$ip',user='$_POST[user]'   where utoken='$utoken'";
$rs = $conn->Execute($sql);
if($rs){
    $_SESSION['user']=$_POST['user'];
}

header('location:./game.php');