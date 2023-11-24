<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario editar productos TOVAR</title>
            <!-----------------------------BOOTSTRAP----------------------------->
<!--Icono-->
<link rel="Icon" type="img/png" href="img/logoicono.png">
<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<!-- Slick -->
<link type="text/css" rel="stylesheet" href="css/slick.css"/>
<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<!--Ventanas emergentes-->
<link rel="stylesheet" type="text/css" href="css/ventanas.css">
<link rel="stylesheet" href="style.css">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<link ref="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="css/navbar.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/geolocation.css">
<link type="text/css" rel="stylesheet" href="demobar_files/bootstrap.css">
<script type="text/javascript" src="demobar_files/jquery-latest.min.js"></script>
<script type="text/javascript" src="demobar_files/jquery.min.js"></script>
<script type="text/javascript" src="demobar_files/bootstrap.js"></script>
<script src="js/ie-emulation-modes-warning.js"> </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-----------------------------/BOOTSTRAP----------------------------->
    </head>
    <body>
          <div class="container">
                <div class="jumbotron">
       <h3>Cambiar los datos de productos TOVAR</h3>
                </div>
          </div>     
	<?php

	include "conexion.php";//Llamada a la conexion de BD
	

	$idproducto = $_GET['idproducto'];//busqueda de campo distintivo
	
	
	$query = "SELECT * FROM tproductos WHERE idproducto='".$idproducto."'";//query de busqueda SQL
	$sql = mysqli_query($connect, $query);
	$data = mysqli_fetch_array($sql);//Obtiene los valores de la busqueda en un arreglo y los gurda en la variable $data
	?>
	 <div class="container">
                <div class="jumbotron">
                   
	<form method="post" action="editar1.php?idproducto=<?php echo $idproducto; ?>" enctype="multipart/form-data">
            <div class="form-group">
	<!--<table cellpadding="200">-->
        <table align="center">
	<tr>
		<td>Nombre</td>
                <td><input type="text" name="nombre" class="form-control" value="<?php echo $data['nombre']; ?>"></td>
	</tr>
	<tr>
		<td>Descripcion</td>
		
		<td><textarea name="descripcion" class="form-control"><?php echo $data['descripcion']; ?></textarea></td>
		
	</tr>
	<tr>
		<td>Cantidad</td>
		<td><input type="text" name="cantidad" class="form-control" value="<?php echo $data['cantidad']; ?>"></td>
	</tr>
	<tr>
		<td>Precio</td>
                <td><input name="precio" class="form-control" value="<?php echo $data['precio']; ?>"></td>
	</tr>
	
	</table>
	
	<hr>
        <center>
	<input type="submit" class="btn btn-info" value="Editar">
	<a href="index.php"><input type="button"  class="btn btn-danger" value="Cancelar"></a>
        </center>
               </div>
	</form>
                        
                </div> 
         </div>
       
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>
<script type="js/jquery-1.8.0.min"></script>        
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
    </body>
</html>
