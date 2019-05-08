<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>css/leanevent.css" />
	 <link rel="stylesheet" href="<?php echo $this->config->item('base_url'); ?>css/bootstrap.min.css">
  <script src="<?php echo $this->config->item('base_url'); ?>js/jquery.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/popper.min.js"></script>
	<script src="<?php echo $this->config->item('base_url'); ?>js/jquery.form.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/bootstrap.min.js"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
	<script>
		 $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#login').ajaxForm(function(data) { 
				
				
				var b=data;
				if(b==1){
					alert("you should input all required information");
					
				}
				else if(b==2){
					alert("wrong username or password");
				}
				else if(b==3){
					
					alert("welcome,individual user");
					window.location.href='listevent';
				}
				else if(b==4){
					
					alert("welcome,fundation user");
					window.location.href='listeventfundation';
				}
				else if(b==5){
					
					alert("welcome,agent");
					window.location.href='HomeAge';
				}
				
       
            }); 
        }); 
	function showLayer(id,width, height){
		
		var a=id;
        var winWidth=document.documentElement.clientWidth;
        var winHeight=document.documentElement.clientHeight;
        var offsetTop=document.documentElement.scrollTop;
		
        var left=(winWidth-width)/2;
		
        var top=(winHeight-height)/2+offsetTop;
        a.style.top=top+"px";
        a.style.left=left+"px";
		
        a.style.display="block";
		
		cover.style.display="block";
		
	}
		
		
		function hideLayer() {
			
    var obj = document.getElementById("layer");
    obj.style.display = "none";
			cover.style.display="none";
}
	</script>
</head>

<body>
	
	


	<div id="cover">
	
	</div>
	
	
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
    <li><a  class="active" href="<?php echo $this->config->item('base_url'); ?>index.php/Login">Iniciar Sesion</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/buyfromus">Comprar Boletos</a></li>
  </ul>
	</div>


</div>


</div>

<div class="main" id="mainimg" align="middle">
<div><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/bannerlogin.jpg" alt="the main picture" width="100%" height="400px" /></div>
	<div style="position:relative;bottom:250px;font-size:40px;color:black"><a>INCIAR SESION</a></div>
	
</div>
	
	<div id=wrapper>
		
		
		<div align=center>
			<form id="login" class="form" method="post" action="<?php echo $this->config->item('base_url'); ?>php/login.php">
				
				<div style="width:200px;position:relative;right:200px;top:20px"><p>Inciar Sesion</p>
					</div>
				<div class="row">
					<div class="col-md-6">
					<p>Nombre de Usuario</p>
					<input name="correo" type="text" /></div>
				<div class="col-md-6"><p>Contrasena</p>
				<input name="contrasena" type="password" /></div>
				</div>
				
			
				
				<div style="width:200px;position:relative;bottom:10px;"><a href="javascript:void(0);" onClick="showLayer(layer,600,200)">Olvido su contrasena?</a></div>
				
				<div style="width:200px;position:relative;bottom:10px;"><button class="button1" type="submit">Entra</button></div>
				
				
	</form>
			
			
			
			
		
			</div>
			
		
		<form id="layer">
				
				<div class="container">
				<div class="row">
				<div class="col-md-10"><lable>Recuperar su Contrasena</lable>
					
					</div>
					<div class="col-md-2">
					<button class="button2" type="button" onClick="hideLayer()">Close</button>
						</div>
					</div>
	
				<div class="row">
				<div class="col-md-12"><lable>Correo</lable>
					</div>
					</div>
					
					<div class="row">
				<div class="col-md-12"><input type="text" class="form-control" placeholder="Correo"/>
					</div>
						</div>
					
				
				
			
				<div class="row">
				<div class="col-md-2 offset-7"><button class="button1">Cerrar</button></div>
					<div class="col-md-3">
					<button class="button1">Enviar</button>
					</div>
					
						</div>
						
	</div>
			</form>
	
			</div>
	
	
	
	
	
		
	
	
	</div>
		
		
		
		

	
	

<div id="footer" style="text-align:center;margin-top:30px;"><b>copyright@2019 All rights reserved|This web is made by Anakin</b></div>



	
</body>
</html>
