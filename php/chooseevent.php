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
	$queryid="SELECT id FROM user WHERE Correo='$username'";
	$idresult=mysqli_query($dbc,$queryid);
	$id=$idresult->fetch_assoc()['id'];
	
	$query1="SELECT * FROM relation WHERE (event='{$_POST['listid']}' AND user=$id)";
	$result2=mysqli_query($dbc,$query1);
	
	if(mysqli_num_rows($result2)!=0){
		echo 2;
	}else{

 $query="INSERT INTO relation (event,user)  VALUES ('{$_POST['listid']}',$id)";
 $result=mysqli_query($dbc,$query);
 

	}

 
}
mysqli_close($dbc);
?>