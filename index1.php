<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conexion a BD mysql Prueba DW TOVAR</title>
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
    <body style="background-color: #9ACFEA">
        <div class="container">
            <div class="jumbotron">
              
                <hr>
                <div class="thumbnail">
                    <center>  <h3>Manteniminento de Datos Productos</h3></center>
                    <hr>
 <center><img src="imagenes/logo.png" class="img img-responsive"/></center>
 <hr>
 <center>
                   <div class="alert alert-info" role="alert">
                       <a href="alta.php"><h4>Agregar Nuevos Productos</h4></a>
                   </div>
                   <br>
                   <div class="alert alert-info" role="alert">
                      <h4>Consulta Productos</h4>
                      <table border="1" width="100%"><!--Inicia tabla-->
                          <tr>
                              <th>Id producto</th>
                              <th>Producto</th>
                              <th>Descripcion producto</th>
                              <th>Cantidad producto</th>
                              <th>Pecio producto</th>
                              <th colspan="2">Acciones</th>
                          </tr>
                          <?PHP
                          include "./conexion.php";//conexion a BD
                          
                          //consulta a todos los campos y registros de la tabla tproductos
                          $query="SELECT * FROM tproductos";
                          
                          $sql = mysqli_query($connect, $query);
                          
                          while ($data = mysqli_fetch_array($sql)) {//inicia while
                              echo "<tr>";
                                echo "<td>".$data['idproducto']."</td>";  
                                echo "<td>".$data['nombre']."</td>";
                                echo "<td>".$data['descripcion']."</td>"; 
                                echo "<td>".$data['cantidad']."</td>"; 
                                echo "<td>".$data['precio']."</td>"; 
                                echo "<td><a href='baja.php?idproducto=".$data['idproducto']."'>Baja</a></td>";
                                echo "<td><a href='formeditar.php?idproducto=".$data['idproducto']."'>Editar</a></td>";
                              echo "</tr>";
                          }//termina while
                          
                          ?>
                          
                          
                          
                          
                      </table><!--/Termina tabla-->              
                       
                    
                   </div>
 </center>                   
                </div>
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
