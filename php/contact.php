<?php
require_once 'define.php';
$query="INSERT INTO contact (nombre,apellido,correo,tema,mensaje) VALUES ('{$_POST["nombre"]}','{$_POST["apellido"]}','{$_POST["correo"]}','{$_POST["tema"]}','{$_POST["mensaje"]}')";
$data=mysqli_query($dbc,$query);
echo"You have successfully sent conatact message!"
?>