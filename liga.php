<?php

$user = "cadu";
$pass = "0.namaliji";
$dbname = "reclama";
$dbhost = "localhost";

$conexion = mysqli_connect($dbhost, $user, $pass, $dbname);

if (!$conexion) {
die ('Error de conexion (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}

?>