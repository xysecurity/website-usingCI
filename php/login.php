<?php
	require_once 'define.php';
	$name1=$_POST["correo"];
	$name2=$_POST["contrasena"];
	$shaname2=sha1($name2);
    session_start();
	
	
	if(empty($name1)||empty($name2)) 
	{
		
	echo 1;	
		
		
		
	}

	else{
		$query="SELECT Correo,Contrasena,type FROM user WHERE Correo='$name1' and Contrasena='$shaname2'";

		$data=mysqli_query($dbc,$query);
		if(mysqli_num_rows($data)!=0){
			
			$_SESSION['username']=$name1;
			setcookie("username",$name1,time()+60*60*24);
			setcookie("password",$shaname2,time()+60*60*24);
			$row=mysqli_fetch_assoc($data)['type'];
			if ($row==1){
				echo 3;
			}
			elseif($row==2){
				echo 4;
			}
			elseif($row==3){
				echo 5;
			}
			

		}
		else{
			echo 2;

		}
	
		
		
		
	mysqli_close($dbc);
		
		
	}
	
	
	
	?>
