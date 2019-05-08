<?php
	require_once 'define.php';
	$name1=$_POST["correo"];
	$name2=$_POST["contrasena"];
	$shaname2=sha1($name2);

	$name3=$_POST["nombre"];
	$name4=$_POST["apellido"];
	session_start();
	if(!empty($_SESSION['username'])){
		$username=$_SESSION['username'];
	}
	else{
		$username=$_COOKIE['username'];
	}
	


	if(empty($name1)||empty($name3)||empty($name4)||empty($_POST["telefono"])||empty($_POST["usuario"])||empty($_POST["contrasena"])) 
	{
		
	echo 1;	
		
		
		
	}

	else{
		$_SESSION['username']=$name1;
		$img_file_path="/2/upload/";

		$path=$_SERVER['DOCUMENT_ROOT'].$img_file_path;
		 if($_FILES['img1']['error'] > 0){
            $resultCode = 0;
            $resultMsg  = 'errorcode：'.$_FILES['img1']['error'];
            echo $resultMsg;
        }
        echo $username;
        $uploadsrc="upload/".$_FILES['img1']['name'];


	    $savepath=$path.$_FILES['img1']['name'];
	    echo $savepath; 
		move_uploaded_file($_FILES["img1"]["tmp_name"], $savepath);
		$query="UPDATE user set Nombre='{$_POST["nombre"]}',Apellido='{$_POST["apellido"]}',Correo='{$_POST["correo"]}',Telefono='{$_POST["telefono"]}',Usuario='{$_POST["usuario"]}',Contrasena='$shaname2',img='{$uploadsrc}' WHERE Correo='$username'";

		$data=mysqli_query($dbc,$query);
		}
	mysqli_close($dbc);
	
	?>


