<?php   
    include("modelo/mseguridad.php"); 
    include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo.ico">

    <title>SITESIGO</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/buttons.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script  type="text/javascript" src="js/jquery-1.11.2.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SITESIGO WEB</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <div class="fecha">
                        <script>
                            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                            var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                            var f=new Date();
                            document.write('<div class="fecha">');
                            document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            document.write('</div>');
                        </script>  
                    </div>
                </li>
                <li class="active"><a href="home.php?var=600">Mi perfil</a></li>
                <li><a href="vista/salir.php">Salir</a></li>
            </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
        <?php
            $usuario = $_SESSION['usuario'];
        ?> 
      <div class="row">
        <?php include("menu.php");?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php
            $var =  isset($_GET["var"]) ? $_GET["var"]:NULL;
            controller($var, compact('usuario'));
            /*
                if (is_null($var)) {
                    include("vista/vpresentacion.php");
                }
            */
            if ($var==1) {
                include("vista/vmetasprod.php");   
            }
            if ($var==2) {
                include("vista/vmetasal1.php");   
            }
            if ($var==3) {
                include("vista/vmetasal2.php");   
            }
            if ($var==4) {
                include("vista/vmetasal3.php");   
            }
            if ($var==5) {
                include("vista/vmetasal4.php");   
            }
            if ($var==6) {
                include("vista/vmetasal5.php");   
            }
            if ($var==7) {
                include("vista/vmetasal6.php");   
            }
            if ($var==8) {
                include("vista/vmetasal7.php");   
            }
            if ($var==9) {
                include("vista/vmetasal8.php");   
            }
            if ($var==10) {
                include("vista/vmetasal9.php");   
            }
            if ($var==25) {
                include("vista/vcambiopass.php");   
            }
            if ($var==255) {
                include("vista/vdeseco.php");   
            }
            if ($var==260) {
                include("vista/vseguconv.php");   
            }
            if ($var==265) {
                include("vista/vgobern.php");   
            }
            if ($var==270) {
                include("vista/vambiente.php");   
            }
            if ($var==271) {
                include("vista/vvigencia2012.php");   
            }
            if ($var==350) {
                include("vista/vrepseg.php");   
            }
            if ($var==550) {
                include("vista/vtabcont.php");   
            }
            if ($var==555) {
                include("vista/vressec.php");   
            }
            if ($var==560) {
                include("vista/vinf12.php");   
            }
            if ($var==565) {
                include("vista/vinf13.php");   
            }
            if ($var==570) {
                include("vista/vinf14.php");   
            }
            if ($var==575) {
                include("vista/vinf15.php");   
            }
            if ($var==600) {
                include("vista/miperfil.php");   
            }
          ?>
        </div>
      </div>
    </div>
    <footer>
        Pie de pagina
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
