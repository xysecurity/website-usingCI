<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>css/leanevent.css" />
	 <link rel="stylesheet" href="<?php echo $this->config->item('base_url'); ?>css/bootstrap.min.css">
  <script src="<?php echo $this->config->item('base_url'); ?>js/jquery.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/popper.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript">
var mypics = new Array()
mypics[0] = "<?php echo $this->config->item('base_url'); ?>img/imagenes/bannerlean1.jpg"
mypics[1] = "<?php echo $this->config->item('base_url'); ?>img/imagenes/bannerlean2.jpg"
mypics[2] = "<?php echo $this->config->item('base_url'); ?>img/imagenes/bannerlean3.jpg"
		
	var c=0
    var t
		function timedCount()
 {
	
	 
 document.getElementById("img1").src=mypics[c]
 c=c+1
 t=setTimeout("timedCount()",3000)
  if(c==3){
	  c=0;
  }
 }
	window.onload=function(){
	
		timedCount();
		
	}

		
	</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Home</title>
</head>

<body>
<div class="body">
<div id="header" style="height:200px;">
	<div id="nav" class="nav">
		<div id="logo"><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/logo-blanco.png" alt="The logo" style="height:100px;float:left;"></div>
  <div style="position:relative;top:50px;left:140px">
	<ul>
    <li><a class="active" href="<?php echo $this->config->item('base_url'); ?>index.php/Home">Inicil</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Aboutus">Quienes Somos</a></li>
    <li><a href="http://anakin.uta.cloud/">Blog</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Registrate">Registrate</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Contact">Contacto</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Login">Iniciar Sesion</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/buyfromus">Comprar Boletos</a></li>
  </ul>
	</div>


</div>


</div>

<div class="main" id="mainimg" align="middle">
<img id="img1" name="img" src="<?php echo $this->config->item('base_url'); ?>img/imagenes/bannerlean1.jpg" alt="the main picture" width="100%" height="400px" />
	
	<div class="row" style="background:#CBC8C8" align="center">
		
		<div class="col-md-12">
	<div><input class="button3" type="button" onmouseover="img.src='<?php echo $this->config->item('base_url'); ?>img/imagenes/bannerlean1.jpg'"/>
	<input class="button3" type="button" onmouseover="img.src='<?php echo $this->config->item('base_url'); ?>img/imagenes/bannerlean2.jpg'"/>
	<input class="button3" type="button" onmouseover="img.src='<?php echo $this->config->item('base_url'); ?>img/imagenes/bannerlean3.jpg'"/></div>
			
			</div>
		</div>
	
	

	
	</div>
	
	<div id="wrapper">
	<div class="row">
	   <div class="col-md-12">
		<div style="text-align:center"><a style="color:yellowgreen;font-size:20px">————</a><a style="font-size:30px">¿QUÉ HACEMOS?</a><a style="color:yellowgreen;font-size:20px">————</a>
		
		</div>
		   </div>
		<div class="col-md-12">
		<div style="text-align:center"><a style="font-size:10px">La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros conciudadanos en Venezuela ante la grave escasez de medicinas e insumos médicos en que se encuentra el país. Nuestra misión consiste en recolectar ayuda médico sanitaria en delegaciones en España y, a través de agentes de transporte, llevarlos a Venezuela para que otras asociaciones se encarguen de su distribución. De esta manera aportamos nuestro granito de arena ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociación sin fines de lucro, dedicada a la defensa de los Derechos Humanos.</a>
		
		</div>
		   </div>
	</div>
</div>
	<div class="middle" >
  <div class="row">
		<div class="col-md-4" align="center">
			<a>478  </a>
			 <p>VOLUNTARIOS</p>
			
			</div>
	  <div class="col-md-4" align="center">
			<a>60.000</a>
		  <p>PERSONAS BENEFICIADAS</p>
			
			</div>
	  <div class="col-md-4" align="center">
			<a>45</a>
		  <p>ALIADOS</p>
			
			</div>
  </div>
	</div>
	<div class="row" style="background-image: url(img/imagenes/bannerabout.jpg); height:250px;">
		<div class="col-md-12" style="padding:10%; font-size: 20px;">
			
			<a>"LA injusticia, encualquier parte, es una amenaza a la justicia en todas partes."</a>
			<p align="right">Martin Luter King<p>
			
			</div>
		
		</div>
	
	
		<div id="wrapper">
	<div class="row">
	   <div class="col-md-12">
		<div style="text-align:center"><a style="color:yellowgreen;font-size:20px">————</a><a style="font-size:30px">ALIADOS</a><a style="color:yellowgreen;font-size:20px">————</a>
		
		</div>
		   </div>
		<div class="col-md-3" >
		
		
		<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/homepage_logo1.PNG" width="150px" />
		   </div>
		<div class="col-md-3">
		
		
		<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/homepage_logo2.PNG" width="150px"/>
		   </div>
		<div class="col-md-3">
		
		
		<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/homepage_logo3.PNG" width="150px"/>
		   </div>
		<div class="col-md-3">
		
		
		<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/homepage_logo4.PNG" width="150px"/>
		   </div>
	</div>
</div>
	
	
<div class="middle" >
	<form action="<?php echo $this->config->item('base_url'); ?>php/mail.php" method="post">
	 <div class="row">
		 <div class="col-md-4 offset-2" align="center">
			 <img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/plant.png" />
 <strong> Registrese para recibir unboletin</strong></div> 
		 <div class="col-md-6" align="center">
	<input  type="email" name="email" class="form-control-sm" /><button type="submit" class="button4">Suscribir</button></div>
  </form>
	</div>
	</div>
<div id="footer" style="text-align:center;"><b>copyright@2019 All rights reserved|This web is made by Anakin</b></div>

</div>
</body>
</html>
