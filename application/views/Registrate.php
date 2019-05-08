<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>css/leanevent.css" />
	 <link rel="stylesheet" href="<?php echo $this->config->item('base_url'); ?>css/bootstrap.min.css">
  <script src="<?php echo $this->config->item('base_url'); ?>js/jquery.min.js"></script>
	
	<script src="<?php echo $this->config->item('base_url'); ?>js/jquery.form.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/popper.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/bootstrap.min.js"></script>	
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
	<script>
		     // wait for the DOM to be loaded 
    //     $(document).ready(function() { 
    //         // bind 'myForm' and provide a simple callback function 
    //         $('#individualpage').ajaxForm(function(data) { 
				
				
				// var b=data;
				// if(b==1){
				// 	alert("fail,you should input all required information");
					
				// }
				// else{
				// 	if(b==2){
				// 	alert("sorry, your email have been registed already")
				// }else{
				// 	location.reload();
				// 	alert("Thank you for your registration! Your name is"+b); }

				// }

					
                
    //         }); 
			 //  $('#fundacionlpage').ajaxForm(function(data) { 
				
				
				// var b=data;
				// if(b==1){
				// 	alert("fail,you should input all required information");
					
				// }
				// else{
				// 	if(b==2){
				// 	alert("sorry, your email have been registed already")
				// }else{
				// 	location.reload();
				// 	alert("Thank you for your registration! Your name is"+b); }

				// }

					
                
    //         }); 
			 //  $('#agentlpage').ajaxForm(function(data) { 
				
				
				// var b=data;
				// if(b==1){
				// 	alert("fail,you should input all required information");
					
				// }
				// else{
				// 	if(b==2){
				// 	alert("sorry, your email have been registed already")
				// }else{
				// 	location.reload();
				// 	alert("Thank you for your registration! Your name is"+b); }

				// }

					
                
    //         }); 
    //     }); 
		
	function regisindi(formname){
			var x1=document.forms[formname]["correo"].value;
		var x2=document.forms[formname]["contrasena"].value;
		var x3=document.forms[formname]["nombre"].value;
		var x4=document.forms[formname]["direccion"].value;
		var x5=document.forms[formname]["ciudad"].value;
		var x6=document.forms[formname]["postal"].value;
		var pattern =/^\w+@\w+\.\w+$/;
		var pattern2=/^\w{7,16}$/;

			if(x1==""||x1==null||x2==""||x2==null||x3==""||x3==null||x4==""||x4==null||x5==""||x5==null||x6==""||x6==null){
				alert("information must be compeleted");
				return false;
			}
		if(!pattern.test(x1)){
			alert("invalid email");
			return false;
		}
		if(!pattern2.test(x2)){
			alert("invalid password");
			return false;
		}
		}
		
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
		
		
		function hideLayer(id) {
			
    var obj = id;
    obj.style.display = "none";
			cover.style.display="none";
}
	function val(){
		var pattern=/^\w+@\w+\.\w+$/;
		var pattern2=/^\w{7,16}$/;
		var pattern3=/^([0-9]{3})?[-]([0-9]{3})?[-]([0-9]{4})$/;	
		var email=document.getElementsByName("email")[0].value;
		var password1=document.getElementsByName("pass1")[0].value;
		var password2=document.getElementsByName("pass2")[0].value;
		var phone=document.getElementsByName("phone")[0].value;
		if (email==""||password1==""||password2==""||phone==""){
			alert("information should be completed");
		}
		console.log(email);
		console.log(password1);
		console.log(pattern2.test(password1));
		console.log(pattern.test(email));
		if(!pattern.test(email)){
			alert("email wrong");
			return false;
		}
		if(!pattern2.test(password1)||!pattern2.test(password2)){
		   alert("password wrong");
			return false;
		   }
		if(!pattern2.test(password1)||!pattern2.test(password2)){
		   alert("password wrong");
			return false;
		   }
		if(!pattern3.test(phone)){
		   alert("phone wrong");
			return false;
		   }
		if(password1!=password2){
		alert("password not equal")
		return false;
		}
		
		
		
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
    <li><a class="active" href="<?php echo $this->config->item('base_url'); ?>index.php/Registrate">Registrate</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Contact">Contacto</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/Login">Iniciar Sesion</a></li>
    <li><a href="<?php echo $this->config->item('base_url'); ?>index.php/buyfromus">Comprar Boletos</a></li>
  </ul>
	</div>


</div>


</div>

<div class="main" id="mainimg" align="middle">
<div><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/bannerregistro.jpg" alt="the main picture" width="100%" height="400px" /></div>
	<div style="position:relative;bottom:250px;font-size:40px;color:black"><a>REGISTRATE</a></div>
	
</div>
	
	<div id="wrapper">
		<form id="indi" class="form" style="height:120px;">
		<div class="container">
			
				<div class="row">
				<div class="col-md-12"><p>Inciar Sesion</p>

					</div>
					</div>
				<div class="row">
				<div class="col-md-3"><button type="button" class="buttonregister" onClick="showLayer(individualpage,600, 600)">Como individual</button>
				</div>
				
				<div class="col-md-5"><button type="button" class="buttonregister" onClick="showLayer(fundacionlpage,600, 650)">Como Negocio o Fundacion</button></div>
				
			<div  class="col-md-4"><button type="button" class="buttonregister" onClick="showLayer(agentlpage,600,600)">Como agente LEAN</button>
				</div>
				</div>
			
			
			
			</div>
			</form>
		
		
				<?php 
				$attributes = array('name' => 'individualpage', 'id' => 'individualpage','onSubmit'=>'return regisindi("individualpage")');


				echo form_open('form',$attributes); ?>
			<div class="container">
			
				
				
				<div class="row">
				<div class="col-md-12" style="width=100px;"><lable>Registro Individual</lable>
					</div>
					</div>
				<div class="row">
				<div class="col-md-6"><lable>Correo</lable>
					<input type="hidden" name="type1" id="type1" value="1" />
					<input type="email" name="correo"  class="form-control" placeholder="Correo" /></div>
				<div class="col-md-6">
					<lable>Contrasena</lable>
				<input required name="contrasena" type="password"  class="form-control" placeholder="Contrasena"/></div>
					</div>
				<div class="row">
				<div class="col-md-6"><lable>Nombre</lable>
					<input required name="nombre" type="text"  class="form-control" placeholder="Nombre"/></div>
				<div class="col-md-6">
					<lable>Apellido</lable>
				<input required name="apellido" type="text" class="form-control"  placeholder="Apellido" /></div>
					</div>
				
				
				<div class="row">
					<div class="col-md-12">
				<lable for'name'>Direccion</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input required name="direccion" type="text" class="form-control" placeholder="Direccion"></div></div>
				
				<div class="row">
					<div class="col-md-12">
				<lable for"name">Ciudad</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input required name="ciudad" type="text" class="form-control" placeholder="Ciudad"></div></div>
				
				<div class="row">
					<div class="col-md-6">
				<lable for"name">Estado</lable>
						<select class="form-control" style="width:200px;" name="estado">
							<option value="1" >1</option>
							<option value="2" >2</option>
						</select>
					
					
					</div>
				<div class="col-md-6">
					<lable for"name">Codigo Postal</lable>
					<input required name="postal" type="text" class="form-control">
					</div>
					
					
					
					
					
				</div>
				
				<div class="row">
					<div class="col-md-12">
						</div>
					</div>
				
				
				
				<div class="row">
				<div class="col-md-3"><button id="submit" type="submit" class="button1">Registrarse</button></div></div>
				<hr />
				
				
				<div class="row">
				<div class="col-md-2 offset-10"><button type="button" class="button2" onClick="hideLayer(individualpage)" >Cerrar</button></div></div>
		
			</div>
			</form>
	
	
	
	
	<!-- <form id="fundacionlpage" method="post" action="<?php echo $this->config->item('base_url'); ?>php/registerFunda.php" name="fundacionlpage" onSubmit="return regisindi('fundacionlpage')"> -->
		<?php 
				$attributes = array('name' => 'fundacionlpage', 'id' => 'fundacionlpage','onSubmit'=>'return regisindi("fundacionlpage")');


				echo form_open('form',$attributes); ?>
				
			<div class="container">
			
				<div class="row"></div>
				
				<div class="row">
				<div class="col-md-12" style="width=100px;"><lable>Registro Negocio o Fundacion</lable>
					</div>
					</div>
				<hr />
				<div class="row">
				<div class="col-md-6"><lable>Correo</lable>
					<input type="hidden" name="type1" id="type1" value="2" />
					<input required type="email" name="correo"  class="form-control" placeholder="Correo" /></div>
				<div class="col-md-6">
					<lable>Contrasena</lable>
				<input required name="contrasena" type="password"  class="form-control" placeholder="Contrasena"/></div>
					</div>
				<div class="row">
				<div class="col-md-6"><lable>Nombre</lable>
					<input required name="nombre" type="text"  class="form-control" placeholder="Nombre"/></div>
				<div class="col-md-6">
					<lable>Apellido</lable>
				<input required name="apellido" type="text" class="form-control"  placeholder="Apellido" /></div>
					</div>
				
				
				<div class="row">
					<div class="col-md-12">
				<lable for"name">Direccion</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input required name="direccion" type="text" class="form-control" placeholder="Direccion"></div></div>
				
				<div class="row">
					<div class="col-md-12">
				<lable for"name">Ciudad</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input required name="ciudad" type="text" class="form-control" placeholder="Ciudad"></div></div>
				
				<div class="row">
					<div class="col-md-6">
				<lable for"name">Estado</lable>
						<select class="form-control" style="width:200px;" name="estado">
							<option value="1" >1</option>
							<option value="2" >2</option>
						</select>
					
					
					</div>
				<div class="col-md-6">
					<lable for"name">Codigo Postal</lable>
					<input required name="postal" type="text" class="form-control">
					</div>
					</div>
		<div class="row">
			<div class="col-md-4">
				<input required type="radio" name="Tipo" value="Tipo1" checked><a style="font-size:12px;">Tipo de negocio 1</a>
				</div>
			<div class="col-md-4">
				<input required type="radio" name="Tipo" value="Tipo2"><a style="font-size:12px;">Tipo de negocio 2</a>
				</div>
			
			<div class="col-md-4">
				<input required type="radio" name="Tipo" value="Tipo3"><a style="font-size:12px;">Tipo de negocio 3</a>
				</div>
			
			</div>
				
				<div class="row">
					<div class="col-md-12">
						</div>
					</div>
				
				
				
				<div class="row">
				<div class="col-md-3"><button class="button1">Registrarse</button></div></div>
				<hr />
				
				
				<div class="row">
				<div class="col-md-2 offset-10"><button type="button" class="button2" onClick="hideLayer(fundacionlpage)" >Cerrar</button></div></div>
		<div class="row"></div>
		
			</div>
			</form>
	
	
	<!-- <form id="agentlpage" method="post" action="<?php echo $this->config->item('base_url'); ?>php/registerAgen.php" name="agentlpage" onSubmit="return regisindi('agentlpage')"> -->
		<?php 
				$attributes = array('name' => 'agentlpage', 'id' => 'agentlpage','onSubmit'=>'return regisindi("agentlpage")');


				echo form_open('form',$attributes); ?>
				
			<div class="container">
			
				<div class="row"></div>
				
				<div class="row">
				<div class="col-md-12" style="width=100px;"><lable>Registro de Agente LEAN</lable>
					</div>
					</div>
				<hr />
				<div class="row">
				<div class="col-md-6"><lable>Correo</lable>
					<input type="hidden" name="type1" id="type1" value="3" />
					<input required type="email" name="correo"  class="form-control" placeholder="Correo" /></div>
				<div class="col-md-6">
					<lable>Contrasena</lable>
				<input required name="contrasena" type="password"  class="form-control" placeholder="Contrasena"/></div>
					</div>
				<div class="row">
				<div class="col-md-6"><lable>Nombre</lable>
					<input required name="nombre" type="text"  class="form-control" placeholder="Nombre"/></div>
				<div class="col-md-6">
					<lable>Apellido</lable>
				<input required name="apellido" type="text" class="form-control"  placeholder="Apellido" /></div>
					</div>
				
				
				<div class="row">
					<div class="col-md-12">
				<lable for"name">Direccion</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input required name="direccion" type="text" class="form-control" placeholder="Direccion"></div></div>
				
				<div class="row">
					<div class="col-md-12">
				<lable for"name">Ciudad</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input required name="ciudad" type="text" class="form-control" placeholder="Ciudad"></div></div>
				
				<div class="row">
					<div class="col-md-6">
				<lable for"name">Estado</lable>
						<select class="form-control" style="width:200px;" name="estado">
							<option value="1" >1</option>
							<option value="2" >2</option>
						</select>
					
					
					</div>
				<div class="col-md-6">
					<lable for"name">Codigo Postal</lable>
					<input required required name="postal" type="text" class="form-control">
					</div>
					</div>
		
				
				<div class="row">
					<div class="col-md-12">
						</div>
					</div>
				
				
				
				<div class="row">
				<div class="col-md-3"><button class="button1">Registrarse</button></div></div>
				<hr />
				
				
				<div class="row">
				<div class="col-md-2 offset-10"><button type="button" class="button2" onClick="hideLayer(agentlpage)" >Cerrar</button></div></div>
		<div class="row"></div>
		
			</div>
			</form>
		
		
	</div>
	<?php echo validation_errors(); ?>

<div id="footer" style="text-align:center;margin-top:30px;"><b>copyright@2019 All rights reserved|This web is made by Anakin</b></div>


</div>
</body>
</html>
