<?php
	require_once 'define.php';
	$name1=$_POST["correo"];
	$name2=$_POST["contrasena"];
	$shaname2=sha1($name2);
	$name3=$_POST["nombre"];
	$name4=$_POST["apellido"];
		$pattern ='/^\w+@\w+\.\w+$/';
    $pattern2='/^\w{7,16}$/';
    preg_match($pattern, $_POST["correo"] ,$match1);
	preg_match($pattern2, $_POST["contrasena"] ,$match2);
	
	
	if(empty($name1)||empty($name2)||empty($name3)||empty($name4)||empty($_POST["direccion"])||empty($_POST["ciudad"])||empty($_POST["estado"])||empty($_POST["postal"])) 
	{
		
	echo 1;	
		
		
		
	}

	else{
		if(!$match1||!$match2){
		echo "information format wrong";

	}else{
		$query="SELECT * FROM user WHERE Correo='$name1'";

		$data=mysqli_query($dbc,$query);
		if(mysqli_num_rows($data)!=0){
			echo 2;
		}
		



		else{
			$query="INSERT INTO user (Correo,Contrasena,Nombre,Apellido,Direccion,Ciudad,Estado, Postal,type) VALUES ('{$_POST["correo"]}','$shaname2','{$_POST["nombre"]}','{$_POST["apellido"]}','{$_POST["direccion"]}','{$_POST["ciudad"]}','{$_POST["estado"]}','{$_POST["postal"]}','3')";
		
		if (!mysqli_query($dbc,$query)){
			die('Error: ' . mysqli_error($dbc));
		}
		echo $name1;

		}
		
		
		
	mysqli_close($dbc);
		}
		
	}
	
	
	
	?>
