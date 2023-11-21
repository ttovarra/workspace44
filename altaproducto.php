<?php

include "conexion.php";//llamada a la conexion de BD Mysql  bdtovarc

$idproducto = $_POST['idproducto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];


$query = "INSERT INTO tproductos VALUES('".$idproducto."','".$nombre."','".$descripcion."','".$cantidad."','".$precio."')";

$sql= mysqli_query($connect, $query);//se realiza la conexion y se ejecuta intruccion SQL o query

      //redirigir a pagina index de consulta
      header("location:index1.php");
?>