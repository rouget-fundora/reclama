<?php
 session_start();
 require 'liga2.php';
 $cod2=$_SESSION['code'];
 $usuario2=$_SESSION['usuario1'];
 $from = "secretariacademica@uor.ed.ao";
 $subject = "Reclamação UOR";
 $message = $_POST['despacho'];
 $confirma = "1";
 $data2 = date('Y-m-d G:i:s');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
			<link rel="shortcut icon" href="../images/unioscar2.jpg">

            <title>Sistema de Gestão de Reclamações</title>
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

<style type="text/css">
<!--
.Estilo1 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>

<div style="background: url(../images/3289999.png); -webkit-box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);
box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);">

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
        <li><a style="text-decoration:none; text-transform:lowercase; font-size:12px"><i class="glyphicon glyphicon-envelope"></i> rouget.fundora@uor.ed.ao | <i class="glyphicon glyphicon-earphone"></i> (+244) 932 711 251</a></li>
		</ul>
		<ul class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0; padding:0"> 
		<b class="icon-circle">		  </b>
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
  <div id="form_container" align="center">
     <h2 align="center"><a></a></h2>
	 <h2 align="center" class="Estilo1">&nbsp;</h2>
	 <h2 align="center" class="Estilo1">SMS!</h2>
	 <p align="center">&nbsp; </p>

<?php
  
 $result = mysqli_query($conexion,"SELECT id, email, tel from reclamaciones t1 INNER JOIN estudantes t2 ON t1.processo=t2.processo WHERE id=$cod2;");

     
 if (mysqli_num_rows($result)!=0) 
      {
#  while ($row = mysqli_fetch_array($result))
#          {
  $row = mysqli_fetch_array($result);
        $cod = $row['id'];
        $to = $row['email'];
        $te = $row['tel'];
	$tel = "00244".$te;
       $messg = substr($message, 0, 160);
       $messg1 = str_replace("\r\n"," ",$messg);
       $Message = "\"$messg1\"";
       	  $cmd = "sudo gammu sendsms TEXT $tel -text $Message";
	  # echo $cmd."<br>";
          $output = shell_exec($cmd);
	  echo "<div align=center>";
        echo "Código -> ".$cod2." Telemóvel -> ",$te;
		echo "<br></br>";
        echo "</div>";
	 
	 $arreglo = array("Despacho","Código de Envío");
	
 echo "<div align=center>";
	
 echo "<table border = '0' style=text-align:center cellpadding=2 cellspacing=1 overflow-auto> \n";

     echo "<th style=text-align:center cellpadding=2 bgcolor=dddddd><font color=black face=arial><H5><b>&nbsp;" .$arreglo[0]. "&nbsp;</b></font></H5></th> \n";
	echo "<tr> \n";
	echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$messg1."&nbsp;</font></H6></th> \n\n\n";
	echo "</tr> \n";
		
	echo "<th style=text-align:center cellpadding=2 bgcolor=dddddd><font color=black face=arial><H5><b>&nbsp;" .$arreglo[1]. "&nbsp;</b></font></H5></th> \n";
	echo "<tr> \n";
	echo "<th style=text-align:center ><H6><font face=arial>&nbsp;".$output."&nbsp;</font></H6></th> \n\n\n";
	echo "</tr> \n";
	
   echo "</table>\n";
   echo "<br></br>";
   echo "</div>"; 
   
 # }
       
	   
 $SQL = "UPDATE reclamaciones SET  data2 = '$data2', confirma = '$confirma', despacho= '$messg1', usuario='$usuario2' WHERE id=$cod2;";

 $query = mysqli_query ($conexion, $SQL) or die (mysqli_error());

 mysqli_close($conexion);

      }
   else
      {
	  echo "<div align=center>";
        echo "O Código da Reclamação -> ".$cod2.", Não Exite";
	  echo "</div>";
      }

?>

<h3 align="center" class="Estilo5">&nbsp;</h3>

  <div align="center">
   <label>
   	<button type="button" name="imprimir" id="imp" class="btn btn-success btn-sm col-md-1" style="display:; margin-top: 11px; width:70px; height:30px" onClick="imprimir()";>Imprimir</button>
    </label>
	<label>	  
	<button type="button" id="vol" class="btn btn-danger btn-sm col-md-1" style="display:; margin-right: 10px; margin-top: 11px; width:70px; height:30px" onClick="voltar();">Voltar</button>  
    </label>			  
  </div>
  
  </div>

<p>&nbsp;</p>
</p>
<h2 align="center">
</div>

</body>
</html>