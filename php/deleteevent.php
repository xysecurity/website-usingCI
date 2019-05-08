<?php
require_once 'define.php';
session_start();
//echo $_POST['listid'];
if(isset($_SESSION['username'])){
	$username=$_SESSION['username'];

}
elseif(isset($_COOKIE['username'])&&isset($_COOKIE['password'])){
	$username=$_COOKIE['username'];
}
else{
	echo 1;
}
$listid=$_GET['listid'];

if(isset($username)){
	$queryrelation="DELETE FROM relation WHERE event='$listid'";
	$query="DELETE FROM event WHERE id='$listid'";
	mysqli_query($dbc,$queryrelation);
	$result=mysqli_query($dbc,$query);
	echo "you have deleted event id $listid;";
	echo "<button onclick=";
	echo '"window.location.href=';
	echo "'".$_SERVER["HTTP_REFERER"]."'";
	echo '">back</button>';

 
}
mysqli_close($dbc);
?>