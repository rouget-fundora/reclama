<?php
session_start();
$code=$_POST['id'];
$_SESSION['code']=$code;
$_SESSION['usuario1'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
			<link rel="shortcut icon" href="../images/unioscar2.jpg">

            <title>Sistema Gestão de Reclamações</title>
			<title>Universidade Oscar Ribas</title>
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
<!-- <script type='text/javascript' src='calendar.js'></script>
<script type="text/javascript" src="view.js"></script> -->
<style type="text/css">
<!--
.Estilo20 {font-family: "Times New Roman", Times, serif}
.Estilo21 {font-weight: bold}
-->
</style>
<script>

function voltar3()
{
window.location="/secure/gestao.php";
}

</script>
</head>

<div style="background: url(../images/3289999.png); -webkit-box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);
box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);">
			

<style>
.icon-circle i{
	font-size:13px
}
</style>

<div class="col-sm-12" style=" background-color: #f4f4f4; box-shadow: 0px -2px 10px 0px rgba(0, 0, 0, 1);">                </div>
			
	   <div class="container" style="padding:0"> 
<div class="col-sm-12" style="padding:0; margin:0">	
                    <div class="col-md-6" style="margin:15px 0 20px 0">
					<a href="?p=inicio">
								<img class="imgmain pull-left img-responsive" src="../images/unioscar23.png" style="width: auto; height: 90px;" alt="" /></a>	  </div>
					<div class="col-md-6 text-right" style="margin:40px 0 20px 0">
					<ul id ="textotop" class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0 0 5px 0; padding:0"> 
        
		<li><a>Contactos</a></li>
    </ul>
					<ul id ="textotop" class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0 0 5px 0; padding:0"> 
        <li><a style="text-decoration:none; text-transform:lowercase; font-size:12px"><i class="glyphicon glyphicon-envelope"></i> secretariacademica@uor.ed.ao | <i class="glyphicon glyphicon-earphone"></i> (+244) 924 618 089</a></li>
		</ul>
		<ul class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0; padding:0"> 
		<b class="icon-circle">
		<a href="https://twitter.com/Uor_university" class="itwittter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
		<a href="https://www.facebook.com/www.uor.ed.ao/?fref=ts" class="ifacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>	</b>
		</li>
    </ul>
                    </div>
         </div>
                </div>
	        <div class="col-xs-12 mod" style="margin-bottom:-20px; padding:0">
			<div class="container" style="padding:0; width:100%; ">            </div>
            </div>
            </div>


<body id="main_body" >
	
	
	<div id="form_container">
	
		<h2 align="center" class="Estilo21">&nbsp;</h2>
		<h2 align="center" class="Estilo21"><span class="Estilo20">Despacho</span> ! </h2>
		<p align="center"><strong><span class="Estilo20">Código de Reclamação</span>: <?php echo $code; ?> </strong> </p>
		<form name="despachar" action="/secure/pc_enviar.php" method="post">						
			        
          <li id="li_5" ><label class="description" for="element_4">
		<h4><div align="center" class="Estilo20">(Máximo 160 caracteres)</div>
		</h4>
		</label>
		<div>
			<textarea id="desp" name="despacho" class="element textarea medium"></textarea> 
		</div> 
		</li>
			
		<br></br>
			    			    
  <div align="center">
	 <label>	       				  
		<button type="submit" name="processar" id="proc" class="btn btn-success btn-sm col-md-1" style="display:; margin-top: 11px; width:70px; height:30px" onClick="imprimir()";>
		<div align="center">Processar
	   </button>
	  </label>
	<label>	  
	  <button type="button" id="vol" class="btn btn-danger btn-sm col-md-1" style="display:; margin-right: 10px; margin-top: 11px; width:70px; height:30px" onClick="voltar3();">Voltar
	  </button>  
    </label>			  
 </div>
		  </li>
	</form>	
<div id="footer">
			
 </div>
</div>
	
</body>

</html>
