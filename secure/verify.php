<?php
 session_start();
 require 'liga2.php'; 
 $usuario=$_POST['nome'];
 $_SESSION['usuario1']=$usuario;
 $contrasena = $_POST['senha'];

if ($conexion->connect_error) {  die("La conexion falló: " . $conexion->connect_error); }

#$usuario = $_POST['nome'];
#$contrasena = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE usuario = '$usuario'";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);


 if (password_verify($contrasena, $row['contrasena'])) {
 
 # $_SESSION['usuario1']=$usuario1;

 header('refresh:0; url=/secure/gestao.php');

} else {
# echo "<center>";
# echo "<br />";
# echo $usuario. " -> Volte a Tentar!"; 
# echo "</center>"; 
 # header('refresh:3; url=/secure/');
  header('refresh:0; url=/secure/error.php');
   }
 mysqli_close($conexion); 
?>
