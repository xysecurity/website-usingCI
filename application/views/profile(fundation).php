<?php 
 if (isset($_SESSION['username'])){

        }
        else{
session_start();
        } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('base_url'); ?>css/leanevent.css" />
  <link rel="stylesheet" href="<?php echo $this->config->item('base_url'); ?>css/bootstrap.min.css">
  <script src="<?php echo $this->config->item('base_url'); ?>js/jquery.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/popper.min.js"></script>
	<script src="<?php echo $this->config->item('base_url'); ?>js/jquery.form.min.js"></script>
  <script src="<?php echo $this->config->item('base_url'); ?>js/bootstrap.min.js"></script>		
	<script>
		 /*   $(document).ready(function() {   
	        $('#update').ajaxForm(function(data) { 
					 				
					 				
					 				var b=data;
					 				if(b==1){
					 					alert("you should input all required information");
					 					
					 				}
					 				else{
					 					alert("You have successfully updated your information");
					 					window.location.href="profile";
					 			
					 
					 				}
					 
					 					
	            
	        }); 
	    });  */
		function showpic(mypic,upfile){
			
			if(upfile.files && upfile.files[0]){
			
				mypic.src=window.URL.createObjectURL(upfile.files[0]);
				mypic.border=1;
			}
			else{
				alert("Please upload  correct img");
			}
		}
		</script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
</head>

<body>
<div class="body">
<div id="header" style="height:200px;">
	<div id="nav" class="nav">
		<div id="logo"><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/logo-blanco.png" alt="The logo" style="height:100px;float:left;"></div>
  <div style="position:relative;top:50px;left:500px">
	<ul>
    <li><a href="listeventfundation">Inicio</a></li>
    <li><a class="active" href="profilefundation">Fundation</a></li>
   <li><a style="color:white"><?php 
			
			if(isset($_SESSION['username'])){
					echo "welcome,".$_SESSION['username']."<a href='logout'>logout</a>";}
					else{
						if(!empty($_COOKIE['username'])&&!empty($_COOKIE['password'])){
							echo "welcome back, ".$_COOKIE['username']."<a href='logout'>logout</a>";}
						else{
						echo "please login first,<a href='Login'>login</a>";}
					}
						
						
			
			 ?></a></li>
    
  </ul>
	</div>


</div>


</div>

<div class="main" id="mainimg" align="middle">
<div><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/bannercontacto.jpg" alt="the main picture" width="100%" height="400px" /></div>
	<div style="position:relative;bottom:250px;font-size:40px;color:black"><a>PERFIL</a></div>
	<div style="position:relative;bottom:250px;right:40px;font-size:20px;color:yellow"><a>INCIOL</a></div>
	<div style="position:relative;bottom:280px;left:40px;right:40px;font-size:20px;color:black"><a>PERFIL</a></div>
	
</div>
	
	<div id=wrapper>
	<div style="text-align:left"><strong style="font-size:30px">Tu Informacion del Perfil</strong></div>
		
		
			<div class="row">
				<?php 
				require_once 'php/define.php';
				
				$username=$_SESSION['username'];
			
				if(!empty($username)){
					$query="SELECT * FROM user WHERE Correo='$username'";
					$data=mysqli_query($dbc,$query);
					$row=mysqli_fetch_array($data);
				}
				
				
				?>
		<div class="col-md-4" style="font-size:2px;">
			<div class="row">
				<div class="col-md-12">
			<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/1.png" width="30px"><a style="width:10px;"><?php echo $row['Nombre']; ?></a>
			  </div>
		  </div>
			<div class="row">
				<div class="col-md-12">
			<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/1.png" width="30px"><a style="width:10px;"><?php echo $row['Apellido']; ?></a>
			  </div>
		  </div>
			<div class="row">
				<div class="col-md-12">
			<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/1.png" width="30px"><a style="width:10px;"><?php echo $row['Usuario'] ?> </a>
			  </div>
		  </div>
			<div class="row">
		  </div>
			
			  </div>
		
		<div class="col-md-4" style="font-size:2px;">
			<div class="row">
				<div class="col-md-12">
			<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/1.png" width="30px"><a style="width:10px;"><?php echo $row['Direccion']; ?></a>
			  </div>
		  </div>
			<div class="row">
				<div class="col-md-12">
			<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/1.png" width="30px"><a style="width:10px;"><?php echo $row['Telefono']; ?></a>
			  </div>
		  </div>
		  <div class="row">
				<div class="col-md-12" style="overflow: hidden;width:5px;">
			<img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/1.png" width="30px"><a style="width: 10px;position: relative;"><?php echo $row['Ciudad']; ?></a>
					</div>
				</div>
			
			<div class="row"></div>
			
			  </div>
	
		<div class="col-md-4"><img src="<?php echo $this->config->item('base_url'); ?><?php echo $row['img'] ?>" width="100px" height="100px"></div>
		
				
	  </div>
		
		
			
			<div class="container" style="background:#D7D7D7;">
			<!-- <form id="update" action="<?php echo $this->config->item('base_url'); ?>php/updateindi.php" method="post" enctype="multipart/form-data"> -->
				<?php 
				$attributes = array('name' => 'update', 'id' => 'update','enctype'=>'multipart/form-data');


				echo form_open('profileForm',$attributes); ?>
				
				<div class="row">
				<div class="col-md-12" style="width=100px;font-size:30px; "><lable>Estar en contacto</lable>
					<hr />
					</div>
					</div>
				<div class="row">
				<div class="col-md-8">
					
					<lable for"text1">Nombre</lable>
					<input type="hidden" value='1' name='fundationconfirm' />
					<input class="form-control" name="nombre" type="text" />
					
					
					<lable>Apellido</lable>
				<input class="form-control" name="apellido" type="text" />
						
					</div>
				<div class="col-md-4">
					<div class="row">
					<img name="showimg" id="showimg" src="<?php echo $this->config->item('base_url'); ?><?php echo $row['img'] ?>"width="120px" height="150px"></div>
			<div class="row">
					<input style="display: none;visibility: hidden;padding-top: 10px;" name="img1" id="img1" type="file" accept="image/*"  onchange="showpic(showimg,this.form.img1);" />
					
					
					
                    <label class="button1" style="padding-top:10px;" for="img1">Seleccionar Foto</label>
				</div>
					</div>
					</div>
				
				
				<div class="row">
					<div class="col-md-12">
				<lable for"name">Correo</lable></div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<input type="text" name="correo" class="form-control" placeholder=""></div></div>
				
				<div class="row">
					<div class="col-md-4">
						<lable>Telefono</lable>
						<input type="text" name="telefono" class="form-control" placeholder="Telefono"></div>
					<div class="col-md-4">
						<lable>Usuario</lable>
						<input type="text" name="usuario" class="form-control" placeholder="Usuario"></div>
					<div class="col-md-4">
						<lable>Contrasena</lable>
						<input type="text" name="contrasena" class="form-control" placeholder="Contrasena"></div>
				
				
				
				</div>
				
						
				
						
					
						
			
				
				
				
				<div class="row">
					<div class="col-md-12">
				<button type="button" class="button1">Nota:</button>
						
					</div>
				</div>
				
				<div class="row">
				<div class="col-md-12">
					<a>Solo puede cambiar los datos(Telefono, Contrasena y Foto)</a></div></div>
				
				
				
				<div class="row">
				<div class="col-md-12 offset-4 "><button type="submit" class="button1">Guardar Cambios</button></div></div>
				<div class="row"></div>

			
			
			
			
			</form>
			
			</div>
		<?php echo validation_errors(); ?>
		
	</div>
<div id="footer" style="text-align:center;"><b>copyright@2019 All rights reserved|This web is made by Anakin</b></div>


</div>
</body>
</html>
