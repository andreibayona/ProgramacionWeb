<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <section class="bg-info" id="recienteJ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Resultados de busqueda</h2><br>

                </div>
            </div>
            <div class="container">

                     <?php
              

               require_once './model/conexion.php';
                $db = new Conexion();
                $db->conectar();
                $nombre=$_POST["buscar"];
                $db->juegos($nombre);
                while ($row = mysqli_fetch_array($rec)) {
                    $b = $row['id_juego'];
                    $b1 = $row['nombre'];
                    $b2 = $row['portada'];
                    $b3 = $row['contenido'];
                    $b4 = $row['fecha'];
                    $b5 = $row['imagen'];
                    $b6 = $row['video'];
                    $b7 = $row['calificacion'];
                    $b8 = $row['categoria'];
           
                   
                    ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo $b2; ?>" alt="">
                            <div class="caption">
                                <h4><?php echo "<a href=Pjuego.php?id_juegos=$row[0]>"; ?><?php echo $b1; ?></a>
                                </h4>
                                <p> <?php echo $b3; ?></p>
                            </div>

                        </div>
                    </div>

                    <?php
                }
                ?>




            </div>

        </section>

    </body>
</html>
