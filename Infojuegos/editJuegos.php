<?php
session_start();

// Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
if (!isset($_SESSION['id_tipo']) || $_SESSION['id_tipo'] != 1) {
    /*
      Para redireccionar en php se utiliza header,
      pero al ser datos enviados por cabereza debe ejecutarse
      antes de mostrar cualquier informacion en el DOM es por eso que inserto este
      codigo antes de la estructura del html, espero haber sido claro
     */
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Infojuegos</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/freelancer.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="css/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" class="index">
        <div id="skipnav"><a href="">Skip to main content</a></div>

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#maincontent">Infojuegos</a>
                    <a class="navbar"> <?php echo ucfirst($_SESSION['nombre']); ?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>

                    
                        <li class="page-scroll">
                            <a href="registrarDatos.php">Inicio</a>
                        </li>
                        
                        <li class="page-scroll">
                            <a href="Tablas.php">Tablas</a>
                        </li>
                        <li class="page-scroll">
                            <a href="TablaCompras.php">Compras</a>
                        </li>


                        <li class="page-scroll">
                            <a href="controller/cerrarSesion.php">cerrar session</a>
                        </li>


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


        <section id="Injuegos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>ingreso de juegos</h2>
                        <hr class="star-primary">
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="container">
                                            <form role="form" method="post" action="Control.php" enctype="multipart/form-data" >
                                                <div class="col-md-6">
                                                    <?php
                                                    $id_Juego = $_GET['id_juego'];
                                                    require_once './model/conexion.php';
                                                    $db = new Conexion();
                                                    $db->conectar();
                                                    $rec = $db->consultar("juegos", "id_juego", $id_Juego);
                                                    while ($row = mysqli_fetch_array($rec)) {
                                                        $ac = $row[0];
                                                        $ac1 = $row[1];
                                                        $ac2 = $row[2];
                                                        $ac3 = $row[3];
                                                        $ac4 = $row[4];
                                                        $ac5 = $row[5];
                                                        $ac6 = $row[6];
                                                        $ac7 = $row[7];
                                                        $ac8 = $row[8];
                                                        $ac9 = $row[9];
                                                        ?>

                                                        <div class="form-group">
                                                            <label for="nomjuego">Nombre del juego</label>
                                                            <input class="form-control" placeholder="juego" value="<?php echo $ac1; ?>" id="nomjuego" name="juego">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="portada">Portada</label><br>
                                                            <img src="<?php echo $ac2; ?>" width="100px" height="100px">
                                                            <input type="file" class="form-control" value="<?php echo $ac2; ?>" id="Portada" name="portada" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contenido" >Contenido</label>
                                                            <textarea class="form-control"  rows="5" id="Contenido" name="contenido" required=""><?php echo $ac3; ?></textarea>
                                                        </div>
                                                        <div class="input-group">

                                                            <span class="input-group-addon">$</span>
                                                            <input type="number" class="form-control" name="precio" value="<?php echo $ac9; ?>" aria-label="ingrese el precio">

                                                        </div>



                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="idjuego">ID Juego</label>
                                                            <input class="form-control" value="<?php echo $ac; ?>" placeholder="idjuego" id="idjuego" name="idjuego" readonly   >
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="video">Video</label>
                                                            <input type="text" class="form-control" value="<?php echo $ac6; ?>" placeholder="video de youtube" name="video" id="video">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="imagen">Imagen</label><br>
                                                            <img src="<?php echo $ac5; ?>" width="100px" height="100px">
                                                            <input type="file" class="form-control"  value="<?php echo $ac5; ?>" name="imagen" id="imagen" >
                                                        </div>                                     

                                                        <div class="form-group">
                                                            <label for="fecha">fecha</label>
                                                            <input type="date" class="form-control" value="<?php echo $ac4; ?>" id="fecha" name="fecha" >
                                                        </div>                                      

                                                        <div class="form-group">
                                                            <label for="calificacion">Calificacion</label>
                                                            <select  class="form-control" onchange="<?php echo $ac7; ?>" name="calificacion" >
                                                                <option> <?php echo $ac7; ?></option>
                                                                <option> Excelente</option>
                                                                <option> Bueno</option>
                                                                <option> Regular</option>
                                                                <option> Malo</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Categoria</label>
                                                            <select class="form-control" onchange="<?php echo $ac8; ?>" name="categoria" id="categoria">
                                                                <option> <?php echo $ac8; ?></option>                                                               
                                                                <?php
                                                                require_once './model/conexion.php';
                                                                $db = new Conexion();
                                                                $db->conectar();
                                                                $res = $db->consultar("categoria", "id_categoria");
                                                                while ($row = mysqli_fetch_array($res)) {

                                                                    echo '<option>';
                                                                    echo $row['id_categoria'];
                                                                    echo '</option>';
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>

                                                    <?php } ?>
                                                </div>
                                                <br><br>

                                                <button type="submit" class="btn btn-default info" name="actualizarJuego"  id="enviar">Actualizar</button>
                                                <button type="submit" class="btn btn-default danger" name="eliminarJuego"  id="enviar">Eliminar</button>

                                            </form>
                                        </div>

                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->

                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </section>










        <!-- Footer -->
        <footer class="text-center">
            <div class="footer-above">
                <div class="container">
                    <div class="row">

                        <div class="footer-col col-md-6 col-md-offset-3">
                            <h3>Nuestras redes sociales</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                                </li>

                                <li>
                                    <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><span class="sr-only">Youtube</span><i class="fa fa-fw fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-social btn-outline"><span class="sr-only">Instagram</span><i class="fa fa-fw fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; info juegos 2017
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
            <a class="btn btn-primary" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>




        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Theme JavaScript -->
        <script src="js/freelancer.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/dataTables.responsive.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

    </body>

</html>
