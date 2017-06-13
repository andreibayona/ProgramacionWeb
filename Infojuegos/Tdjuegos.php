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



    </head>

    <body id="page-top" class="index">
        <?php
        ?>
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
                            <a href="Tdjuegos.php">juegos</a>
                        </li>



                        <li id="mod" class="page">
                            <a class="dropdown-toggle" data-toggle="dropdown" >
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
        <header style="background-image: url('img/gta.jpg')">
            <div class="container" id="maincontent" tabindex="-1">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="intro-text">
                            <h1 class="name">Juegos</h1><br>

                        </div>
                    </div>
                </div>

            </div>
        </header>
        <section id="categoria">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Categoria</h2>
                        <hr class="star-primary">
                    </div>

                    <select class="form-control" name="categoria" id="categoria" onchange="location = this.value;">
                        <option></option>
                        <option value="#accion">Accion</option>
                        <option value="#aventura">Aventuras</option>
                        <option value="#carreras">Carreras</option>
                        <option value="#deportes">Deportes</option>
                        <option value="#estrategia">Estrategia</option>
                        <option value="#simulacion">simulación</option>
                        <option value="#terror">Terror</option>
                        <option value="#clasicos">Clasicos</option>
                    </select>
                </div>
            </div>    
        </section>


        <!-- Accion -->
        <section id="accion">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Accion</h2>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <?php
                    require_once './model/conexion.php';
                    $db = new Conexion();
                    $db->conectar();

                    $rec = $db->consultar("juegos", "id_categoria", "1");
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
                        <div class="col-sm-6 col-md-4 col-lg-3 mt-4 success">
                            <div class="thumbnail">
                                <img src="<?php echo $b2; ?>"class="card-img-top">
                                <div class="caption">
                                    <h3><?php echo $b1; ?></h3>

                                    <p> <?php echo " <a href='Pjuego.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?>mas info</a> </p>
                                    <p> <?php echo " <a href='Carrito.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a> </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>     
                    <!--                    <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li>
                                                    <a href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li>
                                                    <a href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>-->

                </div>
            </div>
        </section>

        <!-- Aventura -->
        <section id="aventura">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center ">
                        <h2>Aventura</h2>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <?php
                    require_once './model/conexion.php';
                    $db = new Conexion();
                    $db->conectar();
                    $rec = $db->consultar("juegos", "id_categoria", "2");
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
                                    <h3><?php echo $b1; ?></h3>
                                    <p><?php echo $b3; ?></p>
                                    <?php echo " <p><a href='Pjuego.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?>mas info</a> </p>
                                    <p> <?php echo " <a href='Carrito.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a> </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>     
                    <!--                    <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li>
                                                    <a href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li>
                                                    <a href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>-->

                </div>
            </div>
        </section>

        <!-- Carreras -->
        <section id="carreras">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Carreras</h2>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <?php
                    require_once './model/conexion.php';
                    $db = new Conexion();
                    $db->conectar();
                    $rec = $db->consultar("juegos", "id_categoria", "3");
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
                                    <h3><?php echo $b1; ?></h3>
                                    <p><?php echo $b3; ?></p>
                                    <?php echo " <p><a href='Pjuego.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?>mas info</a> </p>
                                    <p> <?php echo " <a href='Carrito.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a> </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>     
                    <!--                    <nav aria-label="Page snavigation">
                                            <ul class="pagination">
                                                <li>
                                                    <a href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li>
                                                    <a href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>-->

                </div>
            </div>
        </section>

        <!-- Deportes -->
        <section id="deportes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Deportes</h2>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <?php
                    require_once './model/conexion.php';
                    $db = new Conexion();
                    $db->conectar();
                    $rec = $db->consultar("juegos", "id_categoria", "4");
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
                                    <h3><?php echo $b1; ?></h3>
                                    <p><?php echo $b3; ?></p>
                                    <?php echo " <p><a href='Pjuego.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?>mas info</a> </p>
                                    <p> <?php echo " <a href='Carrito.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a> </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>     
                    <!--                    <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li>
                                                    <a href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li>
                                                    <a href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>-->

                </div>
            </div>
        </section>


        <!-- Estrategia -->
        <section id="estrategia">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Estrategia</h2>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <?php
                    require_once './model/conexion.php';
                    $db = new Conexion();
                    $db->conectar();
                    $rec = $db->consultar("juegos", "id_categoria", "5");
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
                                    <h3><?php echo $b1; ?></h3>
                                    <p><?php echo $b3; ?></p>
                                    <?php echo " <p><a href='Pjuego.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?>mas info</a> </p>
                                    <p> <?php echo " <a href='Carrito.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a> </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>     

                    <!--                    <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li>
                                                    <a href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li>
                                                    <a href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>-->

                </div>
            </div>
        </section>

        <!-- Simulacion -->
        <section id="simulacion">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Simulacion</h2>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <?php
                    require_once './model/conexion.php';
                    $db = new Conexion();
                    $db->conectar();
                    $rec = $db->consultar("juegos", "id_categoria", "6");
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
                                <img src="<?php echo $b2; ?>"  class="card-img-top">
                                <div class="caption">
                                    <h3><?php echo $b1; ?></h3>
                                    <p><?php echo $b3; ?></p>
                                    <?php echo " <p><a href='Pjuego.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?>mas info</a> </p>
                                    <p> <?php echo " <a href='Carrito.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a> </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>     

                    <!--                    <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li>
                                                    <a href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li>
                                                    <a href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>-->
                </div>
            </div>
        </section>

        <!-- Terror -->
        <section id="terror">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Terror</h2>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <?php
                    require_once './model/conexion.php';
                    $db = new Conexion();
                    $db->conectar();
                    $rec = $db->consultar("juegos", "id_categoria", "7");
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
                                    <h3><?php echo $b1; ?></h3>
                                    <p><?php echo $b3; ?></p>
                                    <?php echo " <p><a href='Pjuego.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?>mas info</a> </p>
                                    <p> <?php echo " <a href='Carrito.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a> </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>     
                    <!--                    <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li>
                                                    <a href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li>
                                                    <a href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>-->
                </div>
            </div>
        </section>

        <!-- Clasicos -->
        <section id="clasicos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Clasicos</h2>
                        <hr class="star-primary">
                    </div>
                </div>

                <div class="row">
                    <?php
                    require_once './model/conexion.php';
                    $db = new Conexion();
                    $db->conectar();
                    $rec = $db->consultar("juegos", "id_categoria", "8");
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
                                    <h3><?php echo $b1; ?></h3>
                                    <p><?php echo $b3; ?></p>
                                    <?php echo " <p><a href='Pjuego.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?>mas info</a> </p>
                                    <p> <?php echo " <a href='Carrito.php?id_juegos=$row[0]' class='btn btn-primary' role='button'>" ?> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a> </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>     

                    <!--                    <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li>
                                                    <a href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li>
                                                    <a href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>-->
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
