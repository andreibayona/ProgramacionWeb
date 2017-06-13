<?php
session_start();


if (!isset($_SESSION['id_tipo']) || $_SESSION['id_tipo'] != 2) {
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
        <link href="css/modificaciones.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/freelancer.min.css" rel="stylesheet">

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
        <?php ?>
        <div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">Infojuegos</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="TdNoticias.php">Noticias</a>
                        </li>
                        <li class="page-scroll">
                            <a href="Tdjuegos.php">Juegos</a>
                        </li>

                        <li id="mod" class="page">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul id="mod1" class="dropdown-menu  dropdown-user">
                                <li id="mod"><a href="registro.php"><i class="fa fa-user fa-fw"></i> iniciar sección</a>
                                </li>
                                <li id="mod" class="divider"></li>
                                <li><a href="controller/cerrarSesion.php"><i class="fa fa-sign-out fa-fw"></i> cerrar seccion</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <li>                      
                            <form class="navbar-form navbar-left " role="search">
                                <div class="page-scroll">
                                    <div class="input-group custom-search-form ">
                                        <input type="text" class="form-control" placeholder="Buscar">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </li>


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>




        <section>   
            <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                                <form name="registro" id="registro" method="post" action="Control.php" enctype="multipart/form-data" >
                                    <?php
                $id_Juego = $_GET['id_juego'];
                 require_once './model/conexion.php';
                $db = new Conexion();
                $db->conectar();
                $rec = $db->consultar("juegos", "id_juego", $id_Juego);
                while ($row = mysqli_fetch_array($rec)) {
                    $ac = $row[0];
                    $ac1 = $row[1];
                    $ac9 = $row[9];
                
                    ?>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-5 ">
                                            <label hidden=""for="Id_juego">Id_juego</label>
                                            <input type="hidden" class="form-control" placeholder="Id_juego" value="<?php echo $ac; ?>" name="id_juego" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-5 ">
                                            <label for="Nombre">Nombre juego</label>
                                            <input type="text" class="form-control" placeholder="Nombre" value="<?php echo $ac1; ?>"  name="nom_juego" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-5 ">
                                            <label for="precio">precio</label>
                                            <input type="text" class="form-control" placeholder="precio" value="<?php echo $ac9; ?>"  name="precio" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                <?php }?>
                              
                                    <div class="row control-group">
                                        <div class="form-group col-xs-5 ">
                                            <label for="nombre">nombre usuario</label>
                                            <input type="text" class="form-control" value="<?php echo ucfirst($_SESSION['nombre']); ?>" placeholder="nombre_usuario"  name="nombre" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-5 ">
                                            <label for="contraseña">nombre usuario</label>
                                            <input type="text" class="form-control" value="<?php echo ucfirst($_SESSION['nombre']); ?>" placeholder="nombre_usuario"  name="ccontra" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-5 ">
                                            <label for="correo">Correo</label>
                                            <input type="email" class="form-control" value=""  placeholder="correo"  name="correo" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    
                                          <div class="row control-group">
                                        <div class="form-group col-xs-5">
                                            <label hidden  for="idusuario">Nombre usuario</label>
                                            <input type="hidden" class="form-control" value="<?php echo ucfirst($_SESSION['id_usuario']); ?>" placeholder="nombre_usuario"  name="idusuario" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                              
                                    <p class="text-primary" id="alerta"></p>

                                    <div id="enviar"></div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <button type="submit"  class="btn btn-success btn-lg"    name="enviarUsuario" id="enviarUsusrio">Enviar</button>
                                        </div>
                                    </div>
                                </form>
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

    </body>

</html>