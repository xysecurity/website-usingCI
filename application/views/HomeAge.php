<?php session_start();?>
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
<title>Home-Agent</title>
</head>

<body>
<div class="body">
<div id="header" style="height:200px;">
	<div id="nav" class="nav">
		<div id="logo"><img src="<?php echo $this->config->item('base_url'); ?>img/imagenes/logo-blanco.png" alt="The logo" style="height:100px;float:left;"></div>
  <div style="position:relative;top:50px;left:140px">
	<ul>
    <li><a class="active" href="HomeAge">Inicil</a></li>
    <li><a href="listindiviagent">Lista de Voluntarios</a></li>
    <li><a href="listfundationagent">Listade Fundaciones</a></li>
    <li><a href="listeventagent">Eventos</a></li>
		<li>
		<a style="color:white"><?php 
			
			
			if(isset($_SESSION['username'])){
					echo "welcome,".$_SESSION['username']."<a href='logout'>logout</a>";}
					else{
						if(!empty($_COOKIE['username'])&&!empty($_COOKIE['password'])){
							echo "welcome back, ".$_COOKIE['username']."<a href='logout'>logout</a>";}
						else{
						echo "please login first,<a href='Login'>login</a>";}
					}
						
						
			
			 ?>
			
			 </a></li>
 
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
<div id="footer" style="text-align:center;"><b>copyright@2019 All rights reserved|This web is made by Anakin</b></div>

</div>
</body>
</html>
