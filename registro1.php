<?php
require 'Conexion.php';

$id_usuario1 = utf8_decode($_POST['id_usuario']);
$nombre1 = utf8_decode($_POST['nombre']);
$ape_pat = utf8_decode($_POST['apellido_paterno']);
$ape_mat = utf8_decode($_POST['apellido_materno']);
$correo1 = utf8_decode($_POST['correo']);
$password1 = utf8_decode($_POST['password']);
$c_password1 = utf8_decode($_POST['c_password']);
$direccion1 = utf8_decode($_POST['direccion']);

$errores='';
if (empty($password1) or empty($c_password1)) {
  $errores = '<li>POR FAVOR LLENE LOS CAMPOS DE CONTRASEÑA</li>';
}
if (!$mysqli) {
  die('NO SE HA PODIDO CONECTAR A LA BASE DE DATOS');
}
else{
  $sql = "INSERT INTO usuario VALUES ('$id_usuario1','$nombre1','$ape_pat','$ape_mat','$correo1','$password1','$c_password1','$direccion1')";
  $query = $mysqli->query($sql);
}      
    
	
	
?>
