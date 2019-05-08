<?php
require_once 'define.php';
$id=$_POST['id'];

    $num=$_POST['test'];
    $query="SELECT number FROM books WHERE id=$id";
    $result=mysqli_query($dbc,$query);
    $number=$result->fetch_assoc()['number'];
    $remain=intval($number)-intval($num);
    if($remain>0){
    	echo "Successful buy, we still have ";
    	echo $remain;
    	echo " books";
    	$queryid="UPDATE books set number=$remain WHERE id=$id";
    	
    	
    	 if (!mysqli_query($dbc,$queryid)){
			die('Error: ' . mysqli_error($dbc));
		}

    }
    else{
    	echo "no enough books";
    }
	
   

?>