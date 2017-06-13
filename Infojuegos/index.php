
<?php
//  session_start();
//
//   
//  if(!isset($_SESSION['id_tipo']) || $_SESSION['id_tipo'] != 2){
//    header('location: index.php');
//  }
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
        <link href="css/cards.css" rel="stylesheet">

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
        <div id="skipnav"><a href="#maincontent">Skip to main contecho ucfirst($_SESSION['nombre']);ent</a></div>

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>   
                    <a class="navbar-brand" href="#page-top">Infojuegos</a>
                    <a class="navbar"> <?php // echo ucfirst($_SESSION['nombre']);   ?></a>
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
                            <a href="Tdjuegos.php">juegos</a>
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
                            <form class="navbar-form navbar-left " action="busqueda.php" method="POST" role="search">
                                <div class="page-scroll">
                                    <div class="input-group custom-search-form">
                                        <input type="text" class="form-control" placeholder="Buscar"  name="buscar">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit" name="enviarBusqueda" value="buscar">
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
        <header style="background-image: url('img/portfolio/resident.jpg')">
            <div class="container" id="maincontent" tabindex="-1">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-responsive" src="img/portfolio/Mario2.png" alt="">
                        <div class="intro-text">
                            <h1 class="name">Info juegos</h1><br>

                            <span class="skills">Encuentra noticias y la información de  los juegos</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <!-- Juegos -->
        <section class="bg-info" id="recienteJ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2> Juegos Reciente</h2><br>

                </div>
            </div>
            <div class="container" >

                <?php
                require_once './model/conexion.php';
                $db = new Conexion();
                $db->conectar();
                $rec = $db->consultar("juegos");
                while ($row = mysqli_fetch_array($rec)) {
                    $b = $row[0];
                    $b1 = $row[1];
                    $b2 = $row[2];
                    $b3 = $row[3];
                    $b4 = $row[4];
                    $b5 = $row[5];
                    $b6 = $row[6];
                    $b7 = $row[7];
                    $b8 = $row[8];
                    ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                        <div class="thumbnail">
                            <img src="<?php echo $b2; ?>" class="card-img-top">
                            <div class="caption">
                                <h4><?php echo "<a class='text-capitalize' href=Pjuego.php?id_juegos=$row[0]>"; ?><?php echo $b1; ?></a>
                                </h4>

                            </div>

                        </div>
                    </div>

                    <?php
                }
                ?>




            </div>
            <a href="#recienteN" class="btn btn-primary btn-xl page-scroll col-md-2 col-md-offset-5">Noticias</a>
        </section>


        <section class="bg-info" id="recienteN">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2> Noticias Reciente</h2><br>

                </div>
            </div>
            <div class="container">

                <?php
                require_once './model/conexion.php';
                $db = new Conexion();
                $db->conectar();
                $rec = $db->consultar("noticias");
                while ($row = mysqli_fetch_array($rec)) {
                    $b = $row[0];
                    $b1 = $row[1];
                    $b2 = $row[2];
                    $b3 = $row[3];
                    $b4 = $row[4];
                    $b5 = $row[5];
                    $b6 = $row[6];
                    ?>
              
                    <div class="col-sm-6 col-md-4 col-lg-4 mt-4 ">
                        <div class="thumbnail ">
                            <img src="<?php echo $b2 ?>" class="card-img-top" >
                            <div class="card-block">
                                <h4><?php echo "<a class='text-capitalize' href='Pnoticias.php?id_noticia=$row[0]'>" ?> <?php echo $b1 ?></a>
                                </h4>

                            </div>

                        </div>
                    </div>

                    <?php
                }
                ?>




            </div>
            <a href="#pregunta" class="btn btn-primary btn-xl page-scroll col-md-2 col-md-offset-5">Preguntas</a>
        </section>
        

        <!-- Contact Section -->
        <section id="pregunta">
            <div class="pregunta">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Preguntas</h2><br>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">

                        <form  id="pregunta" method="post" action="Control.php" enctype="multipart/form-data" >
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="name">nombre</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="nombre" id="nombre">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="asunto">Asunto</label>
                                    <input type="text" class="form-control" placeholder="ingrese el asunto" id="asunto" name="asunto">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="correo">Correo</label>
                                    <input type="email" name="correo" class="form-control" placeholder="ingrese el correo" id="correo" name="correo">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="message">mensaje</label>
                                    <textarea rows="5" class="form-control" placeholder="ingrese el Mensaje" id="mesesaje" name="mensaje"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="enviar"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg"    name="enviarPregunta" id="enviarPregunta" class="btn btn-success btn-lg">Enviar</button>

                                </div>
                            </div>
                        </form>
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
                                </li><br>

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
