<?php
 session_start();
 require 'liga2.php'; 
 $usuario2=$_SESSION['usuario1'];
   
 if($_SESSION['usuario1']!=true){ header('refresh:0, url=/secure/error.html'); exit; } 
?>
<!DOCTYPE html>
			<html lang="pt-br">
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
			<link rel="shortcut icon" href="../images/unioscar2.jpg">
            <title>Sistema Gestão de Reclamações da Universidade Oscar Ribas</title>
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
<head>
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
<script>

function voltar3()
{
window.location="/secure/";
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
        
		<li><a href="">Contactos</a></li>
    </ul>
					<ul id ="textotop" class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0 0 5px 0; padding:0"> 
        <li><a style="text-decoration:none; text-transform:lowercase; font-size:12px"><i class="glyphicon glyphicon-envelope"></i> secretariacademica@uor.ed.ao | <i class="glyphicon glyphicon-earphone"></i> (+244) 924 618 089</a></li>
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


<body>


<div class="container" style=" position=relative; margin-top:2%; margin-bottom: 50px;">
<div class="col-md-8">	
  <form action="/secure/listar.php"  method="post" enctype="multipart/form-data" class="form-horizontal">

		<div class="form-group">
	  <label class="control-label col-sm-0" align="center"><h2>&nbsp;&nbsp;SGR - LISTAGEM</h2></label>
	  </div>
		<hr>		
	  <div class="form-group">
	  <label class="control-label col-sm-2" for="email"><small style="color:red">*</small> Curso:</label>
      <div class="col-sm-8">
	                <select class="form-control" id="subject" name="curso" required>
	                    <option selected value="">
	                        Selecione...
	                    </option>
	    
	                    <option value="1">
	                        Direito 
	                    </option>
	    
	                    <option value="2">
	                        Gestão e Marketing 
	                    </option>
						
	                    <option value="3">
	                        Psicologia 
	                    </option>

	                    <option value="4">
	                        Relações Internacionais 
	                    </option>

	                    <option value="5">
	                        Engenharia Civil 
	                    </option>

	                    <option value="6">
	                        Engenharia Informática e Comunicações 
	                    </option>

	                    <option value="7">
	                        Engenharia Electromecânica 
	                    </option>
						
						<option value="9">
	                        Contabilidade e Finanças 
	                    </option>
						
						<option value="10">
	                        Arquitetura e Urbanismo 
	                    </option>
						
						<option value="11">
	                        Gestão Industrial 
	                    </option>
	                </select>
	            </div>
	            </div>

	  <div class="form-group">
	  <label class="control-label col-sm-2" for="email"> Despachado:</label>
      <div class="col-sm-8">
                            Sim
                            <input name="despacho" type="radio" value="1"/>

                      Não
                      <input name="despacho" type="radio" value="0" checked="checked"/>
                      </div>
                      </div>
                      
	  <div class="form-group">
	  <label class="control-label col-sm-2" for="email"><small style="color:red">*</small> Data:</label>
      <div class="col-sm-8">
<div class="input-daterange input-group" id="datepicker">
    <input type="text" class="input-sm form-control" name="calendario" required/>
    <span class="input-group-addon">a</span>
    <input type="text" class="input-sm form-control" name="calendario2" required/>
</div> 
</div>
                      </div>
					
			  
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-8">
		<button type="reset" class="btn btn-danger" name="Submit2">Limpar</button>
        <button type="submit" class="btn btn-success" name="Submit">Consultar</button>
      </div>
    </div>
			  
      </form>
	  <hr>

<div class="col-sm-offset-1 col-sm-8">							  
<table class="table table-bordered table-striped table-hover table-condensed table-responsive" style="margin-left: 50px;">
	<thead>
		<tr>
			<th  class="text-center" style="width: 33%">
				BUSCAR
			</th>
			<th  class="text-center" style="width: 33%">
				DESPACHAR
			</th>
			<th  class="text-center" style="width: 33%">
				APAGAR
			</th>
		</tr>
	</thead>
	<tbody>
		<tr class="text-center">
			<td>
				<a style="text-decoration: none; color: black" class="more-btn" style="text-decoration:none;" href="#aboutModal" data-toggle="modal" data-target="#processo">Processo</a>
			</td>
			<td>
				<a style="text-decoration: none; color: black" class="more-btn" style="text-decoration:none;" href="#aboutModal" data-toggle="modal" data-target="#codigo">Reclamação</a>
			</td>
			<td>
				<a style="text-decoration: none; color: black" class="more-btn" style="text-decoration:none;" href="#aboutModal" data-toggle="modal" data-target="#apagar">Reclamação</a>
			</td>
		</tr>
	</tbody>
</table>
</div>

</div>
<div class="col-md-4">	
		<div class="form-group">
	  <label class="control-label text-center" align="center"><h2 style="color:white"><b>LISTAGEM</b></h2></label>
	  </div>


<h3>Listagem</h3> 
    <p>Faça uma listagem dos processos a partir de um periodo de tempo.</p> 
		<hr>
    <p><b>Buscar</b> um processo a partir do número do processo. <br><b>Despachar</b> um processo a partir do código do processo.</p> 
	<hr>
	<small style="color:red">*</small> Campos obrigatórios.
	<hr>
</div>

</div>
</body>

	<!-- Buscar pelo numero de processo!-->
	
        <div class="container">
          <div class="modal fade" id="processo" tabindex="-1" role="dialog" aria-labelledby="aplprocesso" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="aplprocesso"><b>BUSCAR</b></h4>
                </div>
                <div class="modal-body">
                  <center>
<form method="post" action="/secure/processo.php" class="form-horizontal">

<div class="input-group input-group-lg"> 
<input id="nlk-search-str" name="processo" type="text" maxlength="200" class="form-control" placeholder="# Processo" data-def="Zadejte dotaz" required>
    
<span class="input-group-btn">

<button class="btn btn-success" type="Submit" name="Submit" id="nlk-search-submit">
    <i class="glyphicon glyphicon-search"></i>
</button> 
</span>    
</div>

</form>
				
                  </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Voltar</button>
                </div>
              </div>
            </div>
          </div>
        </div>

	<!-- Despachar por numero de codigo!-->
	
        <div class="container">
          <div class="modal fade" id="codigo" tabindex="-1" role="dialog" aria-labelledby="aplcodigo" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="aplcodigo"><b>DESPACHAR</b></h4>
                </div>
                <div class="modal-body">
                  <center>
<form method="post" action="/secure/confirmar.php" class="form-horizontal">

<div class="input-group input-group-lg"> 
<input id="nlk-search-str" name="id" type="text" maxlength="200" class="form-control" placeholder="Código Reclamação" data-def="Zadejte dotaz" required>
    
<span class="input-group-btn">

<button class="btn btn-success" type="Submit" name="Submit" id="nlk-search-submit">
    <i class="glyphicon glyphicon-search"></i>
</button> 
</span>    
</div>

</form>
				
                  </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Voltar</button>
                </div>
              </div>
            </div>
          </div>
        </div>


<!-- Apagar por numero de reclamação!-->
	
        <div class="container">
          <div class="modal fade" id="apagar" tabindex="-1" role="dialog" aria-labelledby="aplapagar" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="aplapagar"><b>APAGAR</b></h4>
                </div>
                <div class="modal-body">
                  <center>
<form method="post" action="/secure/apagar.php" class="form-horizontal">

<div class="input-group input-group-lg"> 
<input id="nlk-search-str" name="apagar" type="text" maxlength="200" class="form-control" placeholder="Código Reclamação" data-def="Zadejte dotaz" required>
    
<span class="input-group-btn">

<button class="btn btn-success" type="Submit" name="Submit" id="nlk-search-submit">
    <i class="glyphicon glyphicon-search"></i>
</button> 
</span>    
</div>

</form>
				
                  </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Voltar</button>
                </div>
              </div>
            </div>
          </div>
        </div>

<footer style="background-color: #383838; width:100%; padding-top:0px">
<div class="col-md-12" style=" background-color: #383838; margin-top:0px; padding:40px 0">
                            
							
							<div class="container" style=" margin-top:40px 0 30px 0;">
                                    <div class="col-sm-4">
                                        <h6 class="heading7">Sobre</h6>
                                        <ul class="footer-ul">
									
<div style="text-align: justify; color: #ababab;"><p><img src="../images/uorlogo.png" alt="teste" border="0" style="height:70px; width:auto; float: left; margin: 0px 10px 0px 0px;"/></p> O tratamento de reclamações merece nossa atenção especial. Portanto, colocamos um sistema para facilitar o envio de eventuais reclamações para que possamos respondê-las o mais rapidamente possível. Uma vez que nós colocamos como valor a satisfação do cliente e a resolução imediata das reclamações que os mesmos possam ter, também somos capazes de usar este processo como uma excelente ferramenta para melhorar os nossos serviços.</div>
										</ul>
                                    </div>

                                    <div class="col-sm-4">
                                        <h6 class="heading7">Contactos</h6>
                                        <ul class="footer-ul">
                                            <li><a style="text-decoration: none; color: #ababab;"><i class="glyphicon glyphicon-earphone"></i> (+244) 924 618 089</a></li>
                                            <li><a style="text-decoration: none; color: #ababab;"><i class="glyphicon glyphicon-earphone"></i> (+244) 923 471 720</a></li>
											<li><a style="text-decoration: none; color: #ababab;"><i class="glyphicon glyphicon-earphone"></i> (+244) 926 137 575</a></li>

                                            <li><a style="text-decoration: none; color: #ababab;"><i class="glyphicon glyphicon-map-marker"></i> Avenida Samora Machel S/N, Município de Belas</a></li>
                                            <li><a style="text-decoration: none; color: #ababab;">Luanda - Angola</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="heading7" style="margin-bottom:32px">Siga-nos</h6>
										<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-page" data-href="https://www.facebook.com/www.uor.ed.ao/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/www.uor.ed.ao/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/www.uor.ed.ao/">Universidade Óscar Ribas</a></blockquote>
</div>
                                    </div>	
                                </div>
                                </div>
                        
                        <!--footer start from here-->

                        <div class="copyright" style="background-color: rgba(0,0,0,0.3); color: #ababab; width:100%; margin-bottom:0px;">
                            <div class="container" style=" ">
                                <div class="col-sm-8">
                                    <p style="color: #ababab;"><i class="glyphicon glyphicon-copyright-mark"></i> 2007-
                                        2019 | Sistema Gestão de Reclamações da Universidade Oscar Ribas.</p>
                                </div>
                                <div class="col-sm-4">
                                    <p style="color: #ababab; float:right;" >
                                        <br>									</p>
                                </div>
                            </div>
  </div>
        </footer>

<style>		
	.form-control, .input-daterange, .btn{
		border-radius: 2px; 
	}
	
	.btn-danger{
		margin-right: 7px; 
	}
	
	tbody>tr>td:hover
	{
		background-color:#E8E8E8;
	}
	
	
.modal {
  text-align: center;
  padding: 0!important;
}

.modal:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -4px;
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}

.modal-content{
border-radius: 0px;
}

.input-group-lg>.form-control, .input-group-lg>.input-group-addon, .input-group-lg>.input-group-btn>.btn{
    border-radius: 0; 
}

	a, h1, h2, h3, h4, h5, h6, small, p, li{
	    font-family: Roboto,sans-serif !important;
		font-size: px
</style>

<script type="text/javascript">
$('.input-daterange').datepicker({
    format: "dd/mm/yyyy",
    todayBtn: "linked",
    language: "pt-BR",
    keyboardNavigation: false,
    forceParse: false
});
</script>

</html>
