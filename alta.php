<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario alta Productos TOVAR</title>
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
<body style="background-color: aqua;">
<div class="container"><!--Inicia container 1-->
    <div class="jumbotron">
        <center>
            <h2>Formulario Alta productos Tovar</h2>
            <img src="imagenes/logo.png" class="img img-responsive" alt="Logo"/>
            <h4><i>Captura los datos que se solicitan</i></h4>
            <div class="alert alert-info">
                <form method="post" action="altaproducto.php"><!--Inicia formulario-->
                <div class="form-group">
                    <h4>Id Producto</h4>
                    <input type="text" name="idproducto" class="form-control" placeholder="Captura Id producto" required/> 
                    <h4>Nombre Producto</h4>
                    <input type="text" name="nombre" class="form-control" placeholder="Captura nombre producto" required/> 
                    <h4>Descripción Producto</h4>
                    <input type="text" name="descripcion" class="form-control" placeholder="Captura descripción producto" required/> 
                    <h4>cantidad Producto</h4>
                    <input type="number" name="cantidad" class="form-control" placeholder="Captura cantidad producto" required/> 
                    <h4>Precio Producto</h4>
                    <input type="number" name="precio" class="form-control" placeholder="Captura precio producto" required/> 
                    <br>
                    <input type="submit"  class="btn btn-info" value="Registrar nuevo producto"/>
                    <input type="reset"  class="btn btn-danger" value="Limpiar Campos"/>
                </div>
                </form><!--/termina formulario-->
            </div>
        </center>
    </div>
</div><!--/termina container 1-->


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