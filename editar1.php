<?php
include "conexion.php";//llamada  la conexion de BD
$idproducto = $_GET['idproducto'];//campo distintivo

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

                $query = "SELECT * FROM tproductos WHERE idproducto='".$idproducto."'";
                $sql = mysqli_query($connect, $query); 
                $data = mysqli_fetch_array($sql);         
                $query = "UPDATE tproductos SET nombre='".$nombre."', descripcion='".$descripcion."', cantidad='".$cantidad."', precio='".$precio."' WHERE idproducto='".$idproducto."'";
                $sql = mysqli_query($connect, $query);

                if($sql){ 
                
                        header("location: index1.php"); 
                }else{
                        
                        echo "Lo sentimos, se produjo un error al intentar guardar datos en la base de datos.";
                        echo "<br><a href='formeditar.php'>Volver al formulario</a>";
                }
?>
