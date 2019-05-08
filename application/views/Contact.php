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
    <li><a  class="active" href="<?php echo $this->config->item('base_url'); ?>index.php/Contact">Contacto</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Login">Iniciar Sesion</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/buyfromus">Comprar Boletos</a></li>
  </ul>
	</div>


</div>


</div>

<div class="main" id="mainimg" align="middle">
<div><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/bannercontacto.jpg" alt="the main picture" width="100%" height="400px" /></div>
	<div style="position:relative;bottom:250px;font-size:40px;color:black"><a>Contact</a></div>
	
</div>
	
	<div id=wrapper>
	<div style="text-align:left"><b style="font-size:20px">Information del contact</b>
		
	</div>
		
		<div class="container">
			<div class="row">
				
		<div class="col-md-3"><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/1.png"><a>198 West 21th Street, Suite 721 New York NY10016</a></div>
		
		<div class="col-md-3"><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/2.png"><lable>+1235235598</lable></div>
	
		<div class="col-md-4"><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/3.png"><lable>info@diazapps.com</lable></div>
		<div class="col-md-2"><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/4.png"><a>diazapps.com</a></div>
				
				</div>
		</div>
		
			
			
			<form class="form" method="post" action="<?php echo $this->config->item('base_url'); ?>php/contact.php">
				<div class="container">
				
				<div class="row">
				<div class="col-md-12" style="width=100px;font-size:30px"><lable>Estar en contacto</lable>
					</div>
					
					</div>
					<hr />
				<div class="row">
				<div class="col-md-6"><lable>Nombre</lable>
					<input name="nombre" class="form-control" type="text" /></div>
				<div class="col-md-6">
					<lable>Apellido</lable>
				<input class="form-control" name="apellido" type="text" /></div>
					</div>
				
				
				<div class="row">
					<div class="col-md-12">
				<lable for"name">Correo</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input class="form-control" name="correo" type="text" placeholder=""></div></div>
				
				<div class="row">
					<div class="col-md-12">
				<lable for"name">Tema</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input type="text" name="tema" class="form-control" placeholder=""></div></div>
				
				<div class="row">
					<div class="col-md-12">
				<lable for"name">Mensaje</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input type="text" name="mensaje" class="form-control" placeholder=""></div></div>
				
				
				
				<div class="row">
				<div class="col-md-12 offset-4 "><button type="submit" class="button1" onClick="alert('successfully submit');">Enviar mensaje</button></div></div>
				<div class="row"></div>

			
			
			
			</div>
			
			</form>
			
			
		
		
	
<div id="footer" style="text-align:center;"><b>copyright@2019 All rights reserved|This web is made by Anakin</b></div>


</div>
</body>
</html>
