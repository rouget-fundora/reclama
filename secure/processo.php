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
            <style type="text/css">
<!--
.Estilo2 {font-family: "Times New Roman", Times, serif}
-->
            </style>
            <head>
<link rel='stylesheet' href="calendar.css" type='text/css'/>
<link rel="stylesheet" type="text/css" href="view.cs" media="all">
<script type='text/javascript' src='calendar.js'></script>
<script type="text/javascript" src="view.js"></script>
<script>

function imprimir()
{
imp.style.visibility='hidden';
vol.style.visibility='hidden';

window.print();
window.location ="/secure/gestao.php";
}

function voltar()
{
window.location ="/secure/gestao.php";
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
				<!--	<a href="?p=inicio"> -->
								<img class="imgmain pull-left img-responsive" src="../images/unioscar23.png" style="width: auto; height: 90px;" alt="" /></a>	  </div>

					<div class="col-md-6 text-right" style="margin:40px 0 20px 0">
					<ul id ="textotop" class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0 0 5px 0; padding:0"> 
        <li><a>Contactos</a></li>
    </ul>
					<ul id ="textotop" class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0 0 5px 0; padding:0"> 
        <li><a style="text-decoration:none; text-transform:lowercase; font-size:12px"><i class="glyphicon glyphicon-envelope"></i> secretariacademica@uor.ed.ao | <i class="glyphicon glyphicon-earphone"></i> (+244) 924 618 089 </a></li>
		</ul>
		<ul class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0; padding:0"> 
		<b class="icon-circle">		</b>
		</li>
    </ul>
                    </div>
                </div>
                </div>
        <div class="col-xs-12 mod" style="margin-bottom:-20px; padding:0">
			<div class="container" style="padding:0; width:100%; ">            </div>
            </div>
            </div>

<body>
<p>&nbsp;</p>
<h4>
  <p align="center" class="Estilo2"></p>
  <p align="center" class="Estilo2">RECLAMAÇÕES POR ESTUDANTE !</p>
</h4>
<p>&nbsp;</p>
 
<?php

 require ('liga2.php');

 $processo=$_POST['processo'];

 $sql = mysqli_query($conexion, "SELECT * FROM reclamaciones t1 INNER JOIN estudantes t2 ON t1.processo=t2.processo WHERE t2.processo='$processo'"); 
 
  if ($row = mysqli_fetch_array($sql)){

   echo "<center><table border = '0' style=text-align:center cellspacing=1 scrolling=auto> \n";

     mysqli_field_seek($sql,1);
	 
	  $arreglo = array("Código", "Curso", "Processo", "E-mail", "Telemóvel", "Reclamação", "Data Envío", "Data Despacho", "Despacho", "Despachada Por:"); 
  for ($roda=0; $roda<10; $roda++)
	{
    echo "<th style=text-align:center bgcolor=dddddd><font color=black face=arial><H5><b>&nbsp;" .$arreglo[$roda]. "&nbsp;</b></font></H5></th> \n";
    }
    echo "</tr> \n";

 do {
     
     if ($row["curso"]=="1") {$curso1="Direito";}
     if ($row["curso"]=="2") {$curso1="Gestão";}
     if ($row["curso"]=="3") {$curso1="Psicologia";}
     if ($row["curso"]=="4") {$curso1="Relações Internacionais";}
     if ($row["curso"]=="5") {$curso1="Civil";}
     if ($row["curso"]=="6") {$curso1="Informática";}
     if ($row["curso"]=="7") {$curso1="Electromecânica";}
	 if ($row["curso"]=="9") {$curso1="Contabilidade";}
	 if ($row["curso"]=="7") {$curso1="Arquitetura";}
	 if ($row["curso"]=="7") {$curso1="Industrial";}

     $textoLargo = $row["reclama"];
     $largoMax = 50; 
     $rompeLineas = '</br>n';
     $romper_palabras_largas = true; 
	 $textoLargo01 = $row["despacho"];
     $user = $row["usuario"];
 
    echo "<tr> \n";
    echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$row["id"]."&nbsp;</font></H6></th> \n";
    echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$curso1."&nbsp;</font></H6></th> \n";
    echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$row["processo"]."&nbsp;</font></H6></th> \n";
   # echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$row["nome"]."&nbsp;</font></H6></th> \n";
    echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$row["email"]."&nbsp;</font></H6></th> \n";
    echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$row["tel"]."&nbsp;</font></H6></th> \n";
   # echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".ereg_replace (chr(13), "<br>", $row["reclama"])."&nbsp;</font></H6></th> \n";
    echo "<th style=text-align:center ><H6><pre><font face=arial>&nbsp;".wordwrap($textoLargo,$largoMax,$rompeLineas,$romper_palabras_largas)."&nbsp;</font></pre></H6></th> \n";
    echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$row["data"]."&nbsp;</font></H6></th> \n";
    echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$row["data2"]."&nbsp;</font></H6></th> \n";
//    echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".ereg_replace (chr(13), "<br>", $row["despacho"]."&nbsp;</font></H6></th> \n";
    echo "<th style=text-align:center ><H6><pre><font face=arial>&nbsp;".wordwrap($textoLargo01,$largoMax,$rompeLineas,$romper_palabras_largas)."&nbsp;</font></pre></H6></th> \n";
    echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$user."&nbsp;</font></H6></th> \n";
    echo "</tr> \n";

    }

 while ($row = mysqli_fetch_array($sql));

    echo "</table></center> \n";

 }
   else 
   {
    echo "<div align=center>";
    echo "Processo não existe";
    echo "</div>";
   }

mysqli_close($conexion);

?>

<p>&nbsp;</p>

  <div align="center">
   <label>
   	<button type="button" name="imprimir" id="imp" class="btn btn-success btn-sm col-md-1" style="display:; margin-top: 11px; width:70px; height:30px" onClick="imprimir()";>Imprimir</button>
    </label>
	<label>	  
	<button name="vol" type="button" class="btn btn-danger btn-sm col-md-1" id="vol" style="display:; margin-right: 10px; margin-top: 11px; width:70px; height:30px" onClick="voltar();">Voltar</button>  
    </label>			  
  </div>
 
<p>&nbsp;</p>
</p>
<h2 align="center">
</body>

</html>