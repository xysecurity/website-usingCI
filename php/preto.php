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
if(isset($username)){
	$id=$_POST['listid'];
	$get="SELECT event,user FROM prerelation WHERE id=$id";
	$getresult=mysqli_query($dbc,$get);
	$result=mysqli_fetch_assoc($getresult);
	$user=$result['user'];
	$event=$result['event'];
	echo $user;
	echo $event;
	$delete="DELETE FROM prerelation WHERE id=$id";
	mysqli_query($dbc,$delete);
	$query="INSERT INTO relation (event,user)  VALUES ($event,$user)";
	
	$result2=mysqli_query($dbc,$query);
	echo "you have assign success";
	echo "<button onclick=";
	echo '"window.location.href=';
	echo "'../listfundation(agent).php'";
	echo '">back</button>';

 
}
mysqli_close($dbc);
?>