<?php

include "conexion.php";//llamada a la conexion de BD 

$idproducto = $_GET['idproducto'];//seleccion de campo  distintivo

$query = "SELECT * FROM tproductos WHERE idproducto='".$idproducto."'";//busqueda de campo distintivo
$sql = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql); 

$query2 = "DELETE FROM tproductos WHERE idproducto='".$idproducto."'";//se identifica campo distintivo  se da baja
$sql2 = mysqli_query($connect, $query2); //siguardo el valor de 1

if($sql2){

	header("location: index1.php"); 
}else{
	echo "Datos. <a href='index.php'>Error al generar la baja</a>";
}
?>
