<?php

$servidor = "bestrongv2.cpt45yoogtqj.us-west-1.rds.amazonaws.com";
$baseDatos = "bd_bestrongv1";
$usuarioBd = "admin";
$passwordBd = "bestrong123";

$connLocalhost = mysqli_connect($servidor, $usuarioBd, $passwordBd) or die('Error al intentar conectar');

mysqli_query($connLocalhost, "SET NAMES 'utf8'");

mysqli_select_db($connLocalhost, $baseDatos);

?>
