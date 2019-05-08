<?php
session_start();
unset($_SESSION['username']);
setcookie("username","",time()-3600);
setcookie("password","",time()-3600);
header('location: '.$_SERVER['HTTP_REFERER']);
?>