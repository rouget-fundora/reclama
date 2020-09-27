<?php

 require 'liga.php';

  $curso = $_POST['curso'];
  $processo = $_POST['processo'];
  $bi = $_POST['bi'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $reclama = $_POST['message'];
  $gabinete = $_POST['gabinetes'];
  $data = date("Y-m-d G:i:s");
  $confirma=0;
  
  $result = mysqli_query($conexion,"SELECT * FROM estudantes WHERE (processo='$processo' && bi='$bi' && curso='$curso')");

 if (mysqli_num_rows($result)!=0) 
      {
 while ($row = mysqli_fetch_array($result))
          {
        $processo1 = $row['processo'];
	      }
  $SQL = "UPDATE estudantes SET email = '$email', tel = '$tel' WHERE processo=$processo1;"; mysqli_query ($conexion, $SQL) or die (mysqli_error());
         
 $SQL1 = mysqli_query($conexion,"INSERT INTO reclamaciones (processo,reclama,data,confirma,gabinetes) VALUES ('$processo','$reclama','$data','$confirma','$gabinete')");

 if ( !$SQL1 )
    {
	echo "<div align=center>";
	echo "<br><H3>Error al guardar registro em RECLAMACIONES!</H3></br>"; 
	echo  "<meta http-equiv=Refresh content=\"5 ; url=/\">"; 
	echo "</div>"; 
    }
   else
	{
	mysqli_close($conexion);
    echo "<div align=center>";
	echo "<br><H3>Dados Inseridos Correctamente!</H3></br>"; 
	echo  "<meta http-equiv=Refresh content=\"5 ; url=/\">"; 
	echo "</div>"; 
     }
	}
	 
    else
	{
	mysqli_close($conexion);
    echo "<div align=center>";
    echo "<br><H3>Registro Errado, Coloque O Curso, # Processo e BI Correctamente !</H3></br>";
    echo  "<meta http-equiv=Refresh content=\"5 ; url=/\">";
    echo "</div>";
	}
	 
?>