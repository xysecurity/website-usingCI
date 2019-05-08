<?php
require_once 'php/define.php';
$queryid="SELECT * FROM books";
$data=mysqli_query($dbc,$queryid);
$result=array();
$i=0;
while($row=$data->fetch_assoc()){
	$result[$i]=array($row['id'],$row['image'],$row['price'],$row['description'],$row['number'],$row['title']);
	$i++;
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>css/leanevent.css" />
	 <link rel="stylesheet" href="<?php echo $this->config->item('base_url'); ?>css/bootstrap.min.css">
  <script src="<?php echo $this->config->item('base_url'); ?>js/jquery.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/popper.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
</head>

<body>
<div class="body">
<div id="header" style="height:200px;">
	<div id="nav" class="nav">
		<div id="logo"><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/logo-blanco.png" alt="The logo" style="height:100px;float:left;"></div>
  <div style="position:relative;top:50px;left:140px">
	<ul>
     <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Home">Inicil</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Aboutus">Quienes Somos</a></li>
    <li><a href="http://anakin.uta.cloud/">Blog</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Registrate">Registrate</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Contact">Contacto</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Login">Iniciar Sesion</a></li>
    <li><a class="active" href="<?php echo $this->config->item('base_url'); ?>index.php/buyfromus">Comprar Boletos</a></li>
  </ul>
	</div>


</div>


</div>

<div class="main" id="mainimg" align="middle">
<div><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/bannercboleto.jpg" alt="the main picture" width="100%" height="400px" /></div>
	<div style="position:relative;bottom:250px;font-size:40px;color:black"><a>COMPARA BOLETOS</a></div>
	
</div>
	
	<div id=wrapper>
	<div style="text-align:center"><a style="color:yellowgreen;font-size:20px">————</a><a style="font-size:30px">NUESTROS EVENTOSdaa</a><a style="color:yellowgreen;font-size:20px">————</a>
		<p>Tu asssiaskljdklasjdklasjd</p>
	</div>
		
	
		
		
	</div>
	<div class="container">
			<div class="row">
				<div class="col-md-3" align="center">
					
					<a href="buyfromus1"><img href="buyfromus1" src="<?php echo $this->config->item('base_url'); ?><?php echo $result[0][1]; ?>"  width="200px" height="250px" >
					<div align="center" style="font-size:10px;">
					<lable><?php echo $result[0][5]; ?></lable>
					<p id="price">$<?php echo $result[0][2]; ?></p>
						</div></a>
					
					</div>
				<div class="col-md-3" align="center">
					
					<a href="buyfromus2"><img src="<?php echo $this->config->item('base_url'); ?><?php echo $result[1][1]; ?>" width="200px" height="250px">
					<div align="center" style="font-size:10px;">
					<lable><?php echo $result[1][5]; ?><lable>
					<p id="price">$<?php echo $result[1][2]; ?></p>
						</div></a>
					
					</div>
				<div class="col-md-3" align="center">
					
					<a href="buyfromus3"><img src="<?php echo $this->config->item('base_url'); ?><?php echo $result[2][1]; ?>" width="200px" height="250px">
					<div align="center" style="font-size:10px;">
					<lable><?php echo $result[2][5]; ?></lable>
					<p id="price">$<?php echo $result[2][2]; ?></p>
						</div></a>
					
					</div>
				<div class="col-md-3" align="center">
					
					<a href="buyfromus4"><img src="<?php echo $this->config->item('base_url'); ?><?php echo $result[3][1]; ?>" width="200px" height="250px">
					<div align="center" style="font-size:10px;">
					<lable><?php echo $result[3][5]; ?></lable>
					<p id="price">$<?php echo $result[3][2]; ?></p>
						</div></a>
					
					</div>
				
				
				
				</div>
			
			</div>
	
	<div class="middle" >
	 <div class="row">
		 <div class="col-md-4 offset-2" align="center">
			 <img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/plant.png" />
 <strong> Registrese para recibir unboletin</strong></div> 
		 <div class="col-md-6" align="center">
	<form><input  class="form-control-sm" type="text" /><button class="button4">Suscribir</button></form></div>
  
	</div>
	</div>

<div id="footer" style="text-align:center;"><b>copyright@2019 All rights reserved|This web is made by Anakin</b></div>

</div>
	
</body>
</html>
