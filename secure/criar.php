<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

			<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
			<link rel="shortcut icon" href="../images/unioscar2.jpg">

            <title>Sistema Gestão de Reclamações da Universidade Oscar Ribas</title>
			<title>Departamento de Informática e Comunicações da Universidade Oscar Ribas</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>


            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap-social.css">
            <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="../css/stylefooter.css">
			<link rel="stylesheet" type="text/css" href="../css/navbar.css">
			<link rel="stylesheet" type="text/css" href="../css/slidermain.css">
			<link rel="stylesheet" type="text/css" href="../css/galeria.css">
			<link rel='stylesheet' type="text/css" href='../css/simplelightbox.min.css'>
			<link rel='stylesheet' type="text/css" href='../css/minisocialbotton.css'>
			<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css" />
			<link rel="stylesheet" type="text/css" href="../css/animate.min.css">
			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
			<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Rasa|Yrsa|Tenali+Ramakrishna|Rhodium+Libre|ubuntu|Roboto" rel="stylesheet">
			
		<script type="text/javascript" src="../js/jquery-2.2.4.js"></script>
         <script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="../js/gallerize.js"></script>
		<script type="text/javascript" src="../js/egallerize.js"></script>
		<script type="text/javascript" src="../js/vgallery.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>

<link rel='stylesheet' href="calendar.css" type='text/css'/>
<link rel="stylesheet" type="text/css" href="view.cs" media="all">
<script type='text/javascript' src='calendar.js'></script>
<script type="text/javascript" src="view.js"></script>
<style type="text/css">
<!--
.Estilo10 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-size: 24px;
}
.Estilo16 {font-family: Arial, Helvetica, sans-serif}
.Estilo17 {font-size: small; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.Estilo19 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>

</head>

						<div style="background: url(../images/3289999.png); -webkit-box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);
box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);">
			

<style>
.icon-circle i{
	font-size:13px
}
</style>

<div class="col-sm-12" style=" background-color: #f4f4f4; box-shadow: 0px -2px 10px 0px rgba(0, 0, 0, 1);">	
                </div>
	   <div class="container" style="padding:0"> 
<div class="col-sm-12" style="padding:0; margin:0">	
                    <div class="col-md-6" style="margin:15px 0 20px 0">
					<a href="?p=inicio">
			<img class="imgmain pull-left img-responsive" src="../images/unioscar23.png" style="width: auto; height: 90px;" alt="" /></a>  
	  </div>
	<div class="col-md-6 text-right" style="margin:40px 0 20px 0">
	<ul id ="textotop" class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0 0 5px 0; padding:0"> 
		<li><a>Contactos</a></li>
    </ul>
					<ul id ="textotop" class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0 0 5px 0; padding:0"> 
        <li><a style="text-decoration:none; text-transform:lowercase; font-size:12px"><i class="glyphicon glyphicon-envelope"></i> info@uor.ed.ao | <i class="glyphicon glyphicon-earphone"></i> (+244) 946 538 450</a></li>
		</ul>
		<ul class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0; padding:0"> 
		<b class="icon-circle">
		<a href="https://twitter.com/Uor_university" class="itwittter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
		<a href="https://www.facebook.com/www.uor.ed.ao/?fref=ts" class="ifacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
		</b>
		</li>
    </ul>
   </div>
      </div>
     </div>
  <div class="col-xs-12 mod" style="margin-bottom:-20px; padding:0">
			<div class="container" style="padding:0; width:100%; ">	

            </div>
            </div>
            </div>

<body id="main_body" >
	
<?php

 require 'liga2.php';

  $usuario = $_POST['nome'];
  $contrasena = $_POST['senha'];
  $passHash = trim(password_hash($contrasena, PASSWORD_BCRYPT, [12]));
 
  echo $passHash;
  $SQL1 = mysqli_query($conexion,"INSERT INTO usuario (usuario, contrasena) VALUES ('$usuario','$passHash')");	
  
        
   if ( !$SQL1) 
    {
	echo "<div align=center>";
	echo "<br><H3>Error al guardar registro de usuarios!</H3></br>"; 
	echo  "<meta http-equiv=Refresh content=\"5 ; url=/secure/\">"; 
	echo "</div>"; 
    }
  else
	{
	mysqli_close($conexion);
    echo "<div align=center>";
	echo "<br><H3>Usuario Inseridos Correctamente!</H3></br>"; 
	echo  "<meta http-equiv=Refresh content=\"5 ; url=/secure/\">"; 
	echo "</div>"; 
     }
	  
	 
?>
		
</body>

</html>
