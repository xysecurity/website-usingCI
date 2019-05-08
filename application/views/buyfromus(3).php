<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>css/leanevent.css" />
	 <link rel="stylesheet" href="<?php echo $this->config->item('base_url'); ?>css/bootstrap.min.css">
  <script src="<?php echo $this->config->item('base_url'); ?>js/jquery.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/popper.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/bootstrap.min.js"></script>
	<script>
	function add(){
		document.getElementById('num').innerHTML=parseInt(document.getElementById("num").innerHTML)+1;
		
	}
		function minus(){
		 if(parseInt(document.getElementById('num').innerHTML)>1){document.getElementById('num').innerHTML=parseInt(document.getElementById("num").innerHTML)-1;
																 
																		}
	}
		function mouse(a){
			if (a==1){
			$('#text123').val('Goods description1111111');
			}
			else if(a==2){
				$('#text123').val('Goods description22222');
			}
			else if(a==3){
				$('#text123').val('Goods description33333');
			}
		}
		function buy(){
			var x=document.getElementById('num').innerHTML;
			document.getElementById('test').value=x;
		}
	</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buyfromus</title>
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
	<div class="row">
		<div class="col-md-5">
			<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/minibaner2.jpg"  width="200px" height="250px" >
		</div>
		
		<div class="col-md-7"><div class="row"><a>NO PERDAMOS LA FE</a></div>
		<div class="row">
			<div class="col-md-4"><a>$300.00</a></div>
			<div class="col-md-4 offset-4">★★★★★</div>
			</div>
			<div class="row"><a>Lorem ipsum dolor sit amet, sed in dicunt voluptatum, te sea vide perpetua accusamus. Bonorum lobortis democritum ea eam, sed ea alii oratio. Vim natum mediocritatem ea, eos feugait denique in, at sit accusam epicuri convenire. Mel te quod tincidunt, vis ex soluta electram salutandi. Vis magna equidem scripserit te. Utinam feugait evertitur eam eu, id mea discere tincidunt delicatissimi, vim no verear lobortis platonem. Adhuc lucilius disputando cu mel, pri te accusam scaevola intellegebat. Eu liber error melius vel. Duo te brute salutandi repudiandae.</a></div>
			<div class="row">Numero de Entradas</div>
			<div class="row">
				<div class="col-md-2">
					<form action="<?php echo $this->config->item('base_url'); ?>php/buy.php" method="post"><input value="" type="hidden" id="test" name="test" />
						<input value="3" type="hidden" id="id" name="id" />
				<button class="form-control" type="button" onclick="minus()">-</button></div>
				<div class="col-md-2" align="center"><h3 id="num" name="num">1</h3></div>
				<div class="col-md-2">
				<button class="form-control" type="button" onClick="add()">+</button>
					
			</div>
			
			</div>
			<div class="row" align="center">
				<button onClick="buy()" type="submit" class="button1" style="width:100px" >Comprar</button></div>
				</form>
			<div class="row"></div>
		</div>
		
		
		
		</div>
			
			
			
		</div>
		
		
		
		</div>
		<div class="row"><button class="button5" onmouseover="mouse(1);">DESCRIPCION</button>
		<button class="button5" onmouseover="mouse(2);">ENCARGADOS</button>
		<button class="button5" onmouseover="mouse(3);">PATROCINANTES</button></div>
		<div class="row"><textarea name="text123" id="text123" cols="30" rows="10" style="padding:5%;width: 100%;">Goods description1</textarea></div>
	
		
		
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
