<?php
/*
  En ocasiones el usuario puede volver al login
  aun si ya existe una sesion iniciada, lo correcto
  es no mostrar otra ves el login sino redireccionarlo
  a su pagina principal mientras exista una sesion entonces
  creamos un archivo que controle el redireccionamiento

 */

session_start();

// isset verifica si existe una variable o eso creo xd
if (isset($_SESSION['id'])) {
    header('location: controller/redirec.php');
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
        <link href="css/modificaciones.css" rel="stylesheet">
        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/freelancer.min.css" rel="stylesheet">


        <!-- Importamos los estilos de Bootstrap -->

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
        <link rel="stylesheet" href="css/sweetalert.css">
        <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
        <link rel="stylesheet" href="css/style.css">



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
                            <a href="index.php"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="TdNoticias.php">Noticias</a>
                        </li>
                        <li class="page-scroll">
                            <a href="Tdjuegos.php">juegos</a>
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


        <!-- Header -->


        <!-- ingreso -->
        <section id="ingreso">
            <div class="ingreso">
                <div class="row">
                    <div class="col-lg-12 col-md-offset-5">
                        <img class="img-responsive" src="img/portfolio/Usuario.png" alt="">

                    </div>
                    <div class="col-lg-12 text-center">
                        <h2>ingreso</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <form name="ingreso" id="ingreso" method="POST" >
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="name">Correo</label>
                                    <input type="text" class="form-control" placeholder="Correo" autocomplete="off" id="user" required>
                                    <p class="help-block text-center"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="asunto">Contraseña</label>
                                    <input type="password" class="form-control" placeholder="Contraseña" autocomplete="off" id="clave" required>
                                    <p class="help-block text-center"></p>
                                </div>
                            </div>



                            <br>
                            <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
                            <div class="row" id="load" hidden="hidden">
                                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                                    <img src="img/load.gif" width="100%" alt="">
                                </div>
                                <div class="col-xs-12 center text-accent">
                                    <span>Validando información...</span>
                                </div>
                            </div>
                            <!-- Fin load -->
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="button" class="btn btn-success btn-lg" name="button" id="login">Ingresar</button>
                                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#mi-modal" >Registrarse </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <hr class="container"> 
        <div class="modal fade" id="mi-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2>Registro</h2>
                                <hr class="star-primary">
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">


                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                                <form name="registro" id="registro" method="post" action="Control.php" enctype="multipart/form-data" >
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label for="usuario">Usuario</label>
                                            <input type="text" class="form-control" placeholder="usuario"  name="usuario" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label for="contraseña">Contraseña</label>
                                            <input type="password" class="form-control" placeholder="contraseña"  name="contra" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label for="ccontraseña">Comfirmar Contraseña</label>
                                            <input type="password" class="form-control" placeholder="confirmar contraseña"  name="ccontra" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label for="correo">Correo</label>
                                            <input type="email" class="form-control" placeholder="ingrese el correo"  name="correo" required="">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">

                                            <select name="pais"  class="form-control" required >
                                                <?php
                                                require_once './model/conexion.php';
                                                $db = new Conexion();
                                                $db->conectar();
                                                $res = $db->consultar("pais", "nombre");
                                                while ($row = mysqli_fetch_array($res)) {
                                                    echo '<option>';
                                                    echo $row['nombre'];
                                                    echo '</option>';
                                                }
                                                ?>
                                            </select>
                                            <p class="help-block select-danger"></p>
                                        </div>
                                    </div>
                                    <br>


                                    <script src='https://www.google.com/recaptcha/api.js'></script>
                                    <br><div class="g-recaptcha"  data-sitekey="6Le3xBsUAAAAAEJKVIfB_CqpgRgXbVv43jFTnSUT" ></div>

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

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->

        <!-- Fin load -->




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

        <script src="js/operaciones.js"></script>


        <script src="js/jquery.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- SweetAlert js -->
        <script src="js/sweetalert.min.js"></script>
        <!-- Js personalizado -->
        <script src="js/operaciones.js"></script>

    </body>

</html>
<!--https://webdesign.tutsplus.com/es/tutorials/how-to-integrate-no-captcha-recaptcha-in-your-website--cms-23024-->