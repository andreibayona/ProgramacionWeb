<!-- @autor Jorge Andrei Bayona leal 
     @licence https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
     Pagina de noticias -->
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

        <!-- Header -->



        <section>   
            <div class="container">
                <?php
                $id_Noticia = $_GET['id_noticia'];
                require_once './model/conexion.php';
                $db = new Conexion();
                $db->conectar();
                $rec = $db->consultar("noticias", "id_noticia", $id_Noticia);
                while ($row = mysqli_fetch_array($rec)) {
                    $ac = $row[0];
                    $ac1 = $row[1];
                    $ac2 = $row[2];
                    $ac3 = $row[3];
                    $ac4 = $row[4];
                    $ac5 = $row[5];
                    $ac6 = $row[6];
          
                    ?>
                    <div class="col-lg-12 text-center">
                        <h2><?php echo $ac1; ?></h2><br>        
                    </div><br>
                    <div class="col-lg-12 col-lg-offset-2" >
                        <img src="<?php echo $ac2; ?>" width="780px" height="400px">
                    </div><br>


                    <br><div class="col-lg-12">
                        <p><?php echo $ac3; ?></p><br>      
                    </div>
                    <div class="col-lg-12 col-lg-offset-2">
                        <br>  <iframe width="780px" height="400px" src="<?php echo $ac6; ?>"  frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div>
                        <p><?php echo $ac4; ?></p>
                        <p><?php echo $ac5; ?></p>
                    </div>
                    <hr class="container"><br>
                   

                    <?php
                }
                ?>
            </div>
                     
                         <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1" id="logout">
                            <div class="page-header">
                                <h3 class="reviews">Comentarios</h3>

                            </div>
                            <div class="comment-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comentarios</h4></a></li>
                                    <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Añadir Comentario</h4></a></li>

                                </ul>            
                                <div class="tab-content">
                                    <div class="tab-pane active" id="comments-logout">                
                                        <ul class="media-list">
                                            <?php
                                            $id_Noticia = $_GET['id_noticia'];
                                            require_once './model/conexion.php';
                                            $db = new Conexion();
                                            $db->conectar();
                                            $rec = $db->consultar("comentarios","id_juego",$id_Noticia);
                                            while ($row = mysqli_fetch_array($rec)) {
                                                $ac = $row[0];
                                                $ac1 = $row[1];
                                                $ac2 = $row[2];
                                                $ac3 = $row[3];
                                                $ac4 = $row[4];
                                                ?>
                                                <li class="media">

                                                    <div class="media-body">
                                                        <div class="well well-lg">
                                                            <h4 class="media-heading text-uppercase reviews">  <?php echo $ac2; ?> </h4>
                                                            <ul class="media-date text-uppercase reviews list-inline">
                                                                <li class="dd">   <?php echo $ac3; ?></li>

                                                            </ul>
                                                            <p class="media-comment">
                                                                <?php echo $ac1; ?> 
                                                            </p>

                                                        </div>              
                                                    </div>

                                                </li>
                                            <?php } ?>


                                        </ul> 
                                    </div>
                                    <div class="tab-pane" id="add-comment">
                                        <form action="Control.php" method="post" class="form-horizontal" id="commentForm" role="form"> 
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">Comentario</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" name="texto" id="addComment" rows="5"></textarea>
                                                </div>
                                                <div class="col-sm-1">
                                                    <?php
                                                     $id_Noticia = $_GET['id_noticia'];
                                                    require_once './model/conexion.php';
                                                    $db = new Conexion();
                                                    $db->conectar();
                                                    $rec = $db->consultar("juegos", "id_juego", $id_Noticia);
                                                    while ($row = mysqli_fetch_array($rec)) {
                                                        $acm = $row[0];
                                                        ?>
                                                    
                                                    <input type="text" class="form-control" name="idjuego" value="<?php echo $acm; ?>" readonly="">
                                                    <?php } ?>
                                                    
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">                    
                                                    <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment" name="enviarComentarioJ"><span class="glyphicon glyphicon-send"></span> Enviar</button>
                                                </div>
                                            </div>            
                                        </form>
                                    </div>

                                </div>
                            </div>
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

    </body>

</html>
